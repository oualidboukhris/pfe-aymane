<?php

require '../database/db.php';

$errors = [];
$oldValues = [];


if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['action'])) {

    $action = $_POST['action'];
    //Ajouter un client
    if ($action === "ajouter_client") {

        // Trim all input
        foreach ($_POST as $key => $value) {
            $oldValues[$key] = htmlspecialchars(trim($value));
        }
        // Validation
        if (empty($_POST['first_name']))
            $errors['first_name'] = 'Le prénom est requis.';
        if (empty($_POST['last_name']))
            $errors['last_name'] = 'Le nom est requis.';
        if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Email invalide.';
        }
        if (!empty($_POST['phone_number']) && !preg_match('/^\d{6,15}$/', $_POST['phone_number'])) {
            $errors['phone_number'] = 'Téléphone invalide.';
        }

        if (!array_filter($errors)) {
            $stmt = $conn->prepare("INSERT INTO customers (first_name, last_name, email, phone_number, address) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['phone_number'], $_POST['address']);
            if ($stmt->execute()) {
                $message = "✅ Client ajouté avec succès.";
            } else {
                $message = "❌ Erreur lors de l'ajout : " . $stmt->error;
            }
            $stmt->close();
        }

    }

    // Modifier un client
    if ($action === "modifier_client") {
        $stmt = $conn->prepare("UPDATE customers SET first_name=?, last_name=?, email=?, phone_number=?, address=? WHERE customer_id=?");
        $stmt->bind_param("sssssi", $_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['phone_number'], $_POST['address'], $_POST['id']);
        $stmt->execute();
        $stmt->close();
    }

    //Supprimer un client
    if ($action === "supprimer_client") {
        $stmt = $conn->prepare("SELECT COUNT(*) FROM memberships WHERE customer_id = ?");
        $stmt->bind_param("i", $_POST['id']);
        $stmt->execute();
        $stmt->bind_result($count);
        $stmt->fetch();
        $stmt->close();

        if ($count > 0) {
            $message = "❌ Impossible de supprimer ce client : il a encore des abonnements.";
        } else {
            $stmt = $conn->prepare("DELETE FROM customers WHERE customer_id = ?");
            $stmt->bind_param("i", $_POST['id']);
            if ($stmt->execute()) {
                $message = "✅ Client supprimé avec succès.";
            } else {
                $message = "❌ Erreur lors de la suppression : " . $stmt->error;
            }
            $stmt->close();
        }
    }


}

?>