<?php
  require '../database/db.php';

// Traitement du formulaire
$message = "";
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['action'])) {
    switch ($_POST['action']) {
        case "ajouter":
            if (!empty($_POST['name']) && !empty($_POST['price']) && !empty($_POST['duration_months'])) {
                $name = $_POST['name'];
                $price = floatval($_POST['price']);
                $duration = intval($_POST['duration_months']);
                $description = $_POST['description'] ?? "";

                $stmt = $conn->prepare("INSERT INTO subscriptions (name, price, duration_months, description) VALUES (?, ?, ?, ?)");
                $stmt->bind_param("sdis", $name, $price, $duration, $description);
                $stmt->execute();
                $stmt->close();

                $message = "✅ Abonnement ajouté avec succès.";
            } else {
                $message = "❌ Veuillez remplir les champs obligatoires.";
            }
            break;

       case "supprimer":
    if (!empty($_POST['subscription_id'])) {
        $id = intval($_POST['subscription_id']);

        // Vérifie s'il y a des adhésions liées à cet abonnement
        $stmt = $conn->prepare("SELECT COUNT(*) FROM memberships WHERE subscription_id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->bind_result($count);
        $stmt->fetch();
        $stmt->close();

        if ($count > 0) {
            $message = "❌ Impossible de supprimer cet abonnement : il est lié à des adhésions.";
        } else {
            $stmt = $conn->prepare("DELETE FROM subscriptions WHERE subscription_id = ?");
            $stmt->bind_param("i", $id);
            if ($stmt->execute()) {
                $message = "✅ Abonnement supprimé.";
            } else {
                $message = "❌ Erreur lors de la suppression : " . $stmt->error;
            }
            $stmt->close();
        }
    } else {
        $message = "❌ ID de l'abonnement manquant.";
    }
    break;


        case "modifier":
            if (!empty($_POST['subscription_id']) && !empty($_POST['name']) && !empty($_POST['price']) && !empty($_POST['duration_months'])) {
                $id = intval($_POST['subscription_id']);
                $name = $_POST['name'];
                $price = floatval($_POST['price']);
                $duration = intval($_POST['duration_months']);
                $description = $_POST['description'] ?? "";

                $stmt = $conn->prepare("UPDATE subscriptions SET name = ?, price = ?, duration_months = ?, description = ? WHERE subscription_id = ?");
                $stmt->bind_param("sdisi", $name, $price, $duration, $description, $id);
                $stmt->execute();
                $stmt->close();

                $message = "✅ Abonnement modifié.";
            } else {
                $message = "❌ Tous les champs sont obligatoires.";
            }
            break;
    }
}

// Récupération des données
$result = $conn->query("SELECT * FROM subscriptions");
?>