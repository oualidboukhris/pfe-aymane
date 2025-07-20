<?php
$message = "";
require '../database/db.php';


// Traitement ajout de paiement
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['action'])) {
        if ($_POST['action'] === "add_payment") {
            $membership_id = $_POST['membership_id'];
            $payment_date = $_POST['payment_date'];
            $amount = $_POST['amount'];
            $payment_method = $_POST['payment_method'];

            // Vérifier si l'adhésion existe
            $check = $conn->prepare("SELECT membership_id FROM memberships WHERE membership_id = ?");
            $check->bind_param("i", $membership_id);
            $check->execute();
            $check_result = $check->get_result();

            if ($check_result->num_rows === 0) {
                $message = "❌ Erreur : cette adhésion n'existe pas.";
            } else {
                $stmt = $conn->prepare("INSERT INTO payments (membership_id, payment_date, amount, payment_method) VALUES (?, ?, ?, ?)");
                $stmt->bind_param("isds", $membership_id, $payment_date, $amount, $payment_method);

                if ($stmt->execute()) {
                    $message = "✅ Paiement ajouté avec succès.";
                } else {
                    $message = "❌ Erreur : " . $stmt->error;
                }
                $stmt->close();
            }
            $check->close();
        } elseif ($_POST['action'] === "edit_payment") {
            $payment_id = $_POST['payment_id'];
            $membership_id = $_POST['membership_id'];
            $payment_date = $_POST['payment_date'];
            $amount = $_POST['amount'];
            $payment_method = $_POST['payment_method'];

            $stmt = $conn->prepare("UPDATE payments SET membership_id=?, payment_date=?, amount=?, payment_method=? WHERE payment_id=?");
            $stmt->bind_param("isdsi", $membership_id, $payment_date, $amount, $payment_method, $payment_id);
            
            if ($stmt->execute()) {
                $message = "✅ Paiement modifié avec succès.";
            } else {
                $message = "❌ Erreur : " . $stmt->error;
            }
            $stmt->close();
        }
    }
}

// Traitement de la suppression
if (isset($_GET['delete'])) {
    $payment_id = $_GET['delete'];
    $stmt = $conn->prepare("DELETE FROM payments WHERE payment_id = ?");
    $stmt->bind_param("i", $payment_id);
    if ($stmt->execute()) {
        $message = "✅ Paiement supprimé avec succès.";
    } else {
        $message = "❌ Erreur : " . $stmt->error;
    }
    $stmt->close();
}

// Récupération des paiements existants
$payments = $conn->query("
    SELECT p.*, c.first_name, c.last_name, s.name AS subscription_name
    FROM payments p
    JOIN memberships m ON p.membership_id = m.membership_id
    JOIN customers c ON m.customer_id = c.customer_id
    JOIN subscriptions s ON m.subscription_id = s.subscription_id
");

// Récupération des adhésions disponibles
$memberships = $conn->query("
    SELECT m.membership_id, c.first_name, c.last_name, s.name AS subscription_name
    FROM memberships m
    JOIN customers c ON m.customer_id = c.customer_id
    JOIN subscriptions s ON m.subscription_id = s.subscription_id
");

// Après avoir utilisé $memberships dans le formulaire d'ajout
$memberships_for_edit = $conn->query("
    SELECT m.membership_id, c.first_name, c.last_name, s.name AS subscription_name
    FROM memberships m
    JOIN customers c ON m.customer_id = c.customer_id
    JOIN subscriptions s ON m.subscription_id = s.subscription_id
");
?>