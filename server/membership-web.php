<?php
require '../database/db.php';

// Récupération des clients et abonnements
$clients = $conn->query("SELECT customer_id, first_name, last_name FROM customers");
$subscriptions = $conn->query("SELECT subscription_id, name FROM subscriptions");

// Traitement formulaire ajout adhésion
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['action'])) {
        if ($_POST['action'] === "ajouter_membership") {
            $customer_id = $_POST['customer_id'];
            $subscription_id = $_POST['subscription_id'];
            $start_date = $_POST['start_date'];
            $end_date = $_POST['end_date'];
            $status = $_POST['status'];

            $stmt = $conn->prepare("INSERT INTO memberships (customer_id, subscription_id, start_date, end_date, status) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("iisss", $customer_id, $subscription_id, $start_date, $end_date, $status);
            if ($stmt->execute()) {
                $message = "✅ Adhésion ajoutée avec succès.";
            } else {
                $message = "❌ Erreur : " . $stmt->error;
            }
            $stmt->close();
        } elseif ($_POST['action'] === "modifier_membership") {
            $membership_id = $_POST['membership_id'];
            $customer_id = $_POST['customer_id'];
            $subscription_id = $_POST['subscription_id'];
            $start_date = $_POST['start_date'];
            $end_date = $_POST['end_date'];
            $status = $_POST['status'];

            $stmt = $conn->prepare("UPDATE memberships SET customer_id=?, subscription_id=?, start_date=?, end_date=?, status=? WHERE membership_id=?");
            $stmt->bind_param("iisssi", $customer_id, $subscription_id, $start_date, $end_date, $status, $membership_id);
            if ($stmt->execute()) {
                $message = "✅ Adhésion modifiée avec succès.";
            } else {
                $message = "❌ Erreur : " . $stmt->error;
            }
            $stmt->close();
        }
    }
}

// Traitement de la suppression
if (isset($_GET['delete'])) {
    $membership_id = $_GET['delete'];
    $stmt = $conn->prepare("DELETE FROM memberships WHERE membership_id = ?");
    $stmt->bind_param("i", $membership_id);
    if ($stmt->execute()) {
        $message = "✅ Adhésion supprimée avec succès.";
    } else {
        $message = "❌ Erreur : " . $stmt->error;
    }
    $stmt->close();
}

// Récupération des adhésions
$adhesions = $conn->query("
    SELECT m.*, c.first_name, c.last_name, s.name AS subscription_name
    FROM memberships m
    JOIN customers c ON m.customer_id = c.customer_id
    JOIN subscriptions s ON m.subscription_id = s.subscription_id
");
?>