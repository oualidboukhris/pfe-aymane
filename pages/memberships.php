<?php
session_start();
?>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Fitness - Dashboard</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../vendors/feather/feather.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="../js/select.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/logo-black2.png" />
  <style>
    :root {
      --primary-color: #2c3e50;
      --secondary-color: #34495e;
      --accent-color: #3498db;
      --success-color: #2ecc71;
      --warning-color: #f1c40f;
      --danger-color: #e74c3c;
      --info-color: #3498db;
    }

    .header {
      color: #1F1F1F;
      margin-bottom: 2rem;
    }

    .header-title {
      font-size: 2rem;
      font-weight: 600;
      margin-bottom: 0.5rem;
    }

    .dashboard-subtitle {
      font-size: 1.1rem;
      opacity: 0.8;
    }

    .stats-card {
      background: white;
      border-radius: 15px;
      padding: 1.5rem;
      margin-bottom: 1.5rem;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .pagination .page-item.active .page-link,
    .jsgrid .jsgrid-pager .page-item.active .page-link,
    .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button .page-link,
    .jsgrid .jsgrid-pager .active.jsgrid-pager-page .page-link,
    .pagination .page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a,
    .jsgrid .jsgrid-pager .page-item.active .jsgrid-pager-nav-button a,
    .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-item.active a,
    .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button a,
    .pagination .page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-page a,
    .jsgrid .jsgrid-pager .page-item.active .jsgrid-pager-page a,
    .jsgrid .jsgrid-pager .jsgrid-pager-page .page-item.active a,
    .jsgrid .jsgrid-pager .active.jsgrid-pager-page a,
    .pagination .page-item:hover .page-link,
    .jsgrid .jsgrid-pager .page-item:hover .page-link,
    .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:hover .page-link,
    .jsgrid .jsgrid-pager .jsgrid-pager-page:hover .page-link,
    .pagination .page-item:hover .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a,
    .jsgrid .jsgrid-pager .page-item:hover .jsgrid-pager-nav-button a,
    .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-item:hover a,
    .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:hover a,
    .pagination .page-item:hover .jsgrid .jsgrid-pager .jsgrid-pager-page a,
    .jsgrid .jsgrid-pager .page-item:hover .jsgrid-pager-page a,
    .jsgrid .jsgrid-pager .jsgrid-pager-page .page-item:hover a,
    .jsgrid .jsgrid-pager .jsgrid-pager-page:hover a,
    .pagination .page-item:focus .page-link,
    .jsgrid .jsgrid-pager .page-item:focus .page-link,
    .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:focus .page-link,
    .jsgrid .jsgrid-pager .jsgrid-pager-page:focus .page-link,
    .pagination .page-item:focus .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a,
    .jsgrid .jsgrid-pager .page-item:focus .jsgrid-pager-nav-button a,
    .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-item:focus a,
    .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:focus a,
    .pagination .page-item:focus .jsgrid .jsgrid-pager .jsgrid-pager-page a,
    .jsgrid .jsgrid-pager .page-item:focus .jsgrid-pager-page a,
    .jsgrid .jsgrid-pager .jsgrid-pager-page .page-item:focus a,
    .jsgrid .jsgrid-pager .jsgrid-pager-page:focus a,
    .pagination .page-item:active .page-link,
    .jsgrid .jsgrid-pager .page-item:active .page-link,
    .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:active .page-link,
    .jsgrid .jsgrid-pager .jsgrid-pager-page:active .page-link,
    .pagination .page-item:active .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a,
    .jsgrid .jsgrid-pager .page-item:active .jsgrid-pager-nav-button a,
    .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-item:active a,
    .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:active a,
    .pagination .page-item:active .jsgrid .jsgrid-pager .jsgrid-pager-page a,
    .jsgrid .jsgrid-pager .page-item:active .jsgrid-pager-page a,
    .jsgrid .jsgrid-pager .jsgrid-pager-page .page-item:active a,
    .jsgrid .jsgrid-pager .jsgrid-pager-page:active a {
      background: #3C424D;
      border-color: #3C424D;
      color: #ffffff;
    }


    .stats-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    }

    .stats-icon {
      font-size: 2rem;
      margin-bottom: 1rem;
      color: var(--accent-color);
    }

    .stats-title {
      font-size: 1.1rem;
      color: var(--secondary-color);
      margin-bottom: 0.5rem;
    }

    .stats-value {
      font-size: 2rem;
      font-weight: 600;
      color: var(--primary-color);
      margin-bottom: 0.5rem;
    }

    .stats-change {
      font-size: 0.9rem;
      color: var(--success-color);
    }

    .stats-change.negative {
      color: var(--danger-color);
    }

    .featured-image {
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      height: 100%;
    }

    .featured-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.3s ease;
    }

    .featured-image:hover img {
      transform: scale(1.05);
    }

    .card-light {
      background: #d5d7dedb;
    }

    .card {
      border: none;
      border-radius: 15px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
      transition: transform 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card-body {
      padding: 1.5rem;
    }

    .fs-30 {
      font-size: 2rem;
      font-weight: 600;
    }

    .mb-4 {
      margin-bottom: 1rem;
      font-size: 1.1rem;
      opacity: 0.9;
    }

    /* #order-chart {
      background-color:red;
    } */

    @media (max-width: 768px) {
      .dashboard-header {
        padding: 1.5rem;
      }

      .dashboard-title {
        font-size: 1.5rem;
      }

      .stats-card {
        margin-bottom: 1rem;
      }

      .stats-value {
        font-size: 1.5rem;
      }
    }

    .fade-in {
      animation: fadeIn 0.5s ease-in;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>
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

<body>
  <div class="container-scroller">

    <?php include '../container/navbar.html'; ?>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">

      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <?php include '../container/sidebar.html'; ?>
      <?php require '../database/db.php'; ?>
      <!--  -->
      <div class="main-panel">
        <div class="content-wrapper fade-in">
        <?php if (!empty($message)) { ?>
            <div
              class="alert <?= strpos($message, '✅') !== false ? 'alert-success' : 'alert-danger' ?> alert-dismissible fade show"
              style="position:absolute; right:25px;" role="alert">
              <?= htmlspecialchars($message) ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <?php } ?>
          <div class="header">
            <h1 class="header-title">Adhésion</h1>
          </div>
          <div class="row d-flex justify-content-between align-items-center mx-1">
            <input type="text" id="searchInput" class="form-control w-50 form-control-sm" placeholder="Rechercher...">
            <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addMembershipModal">
              <i class="bi bi-plus fs-3"></i> Nouvelle adhésion
            </button>
          </div>

          <?php
          $addModals = '';
          $addModals .= '
                        <div class="modal fade" id="addMembershipModal" tabindex="-1" aria-labelledby="addMembershipModalLabel" aria-hidden="true">
                          <div class="modal-dialog ">
                            <div class="modal-content">
                              <form method="post">
                                <input type="hidden" name="action" value="ajouter_membership">
                                <div class="modal-header">
                                 <h5 class="modal-title" id="addMembershipModalLabel">Ajouter une adhésion</h5>
                                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                                </div>

                            <div class="modal-body">
                                <div class="row">
                                      <div class="col-md-6">
                                        <div class="form-group">
                                          <label>Client</label>
                                          <select class="custom-select form-control form-control-sm" name="customer_id" required>
                                            <option value=\"\">-- Sélectionner un client --</option>';
          $clients = $conn->query("SELECT customer_id, first_name, last_name FROM customers");
          while ($c = $clients->fetch_assoc()) {
            $addModals .= '<option value=\"' . $c['customer_id'] . '\">' . htmlspecialchars($c['first_name'] . ' ' . $c['last_name']) . '</option>';
          }
          $addModals .= '
                                          </select>
                                        </div>
                                      </div>

                                      <div class="col-md-6">
                                        <div class="form-group">
                                          <label>Abonnement</label>
                                          <select class="form-control form-control-sm"" name="subscription_id" required>
                                            <option value=\"\">-- Sélectionner un abonnement --</option>';
          $subscriptions = $conn->query("SELECT subscription_id, name FROM subscriptions");
          while ($s = $subscriptions->fetch_assoc()) {
            $addModals .= '<option value=\"' . $s['subscription_id'] . '\">' . htmlspecialchars($s['name']) . '</option>';
          }
          $addModals .= '
                                          </select>
                                        </div>
                                      </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label>Date de début</label>
                                        <input type="date" class="form-control form-control-sm"" name="start_date" required>
                                      </div>
                                    </div>

                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label>Date de fin</label>
                                        <input type="date" class="form-control form-control-sm"" name="end_date" required>
                                      </div>
                                    </div>
                                </div>
                                
                                      <div class="form-group">
                                        <label>Statut</label>
                                        <select class="form-control form-control-sm"" name="status" required>
                                          <option value=\"actif\">Actif</option>
                                          <option value=\"expiré\">Expiré</option>
                                          <option value=\"suspendu\">Suspendu</option>
                                        </select>
                                      </div>
                                    

                              </div>

                              <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                                    <button type="submit" class="btn btn-dark">
                                      <i class=\"fas fa-save\"></i> Ajouter l\'Adhésion
                                    </button>
                                  </div>      
                              </div>
                              
                                
                             </form>
                              
                            </div>
                          </div>
                        </div>';

          ?>

          <!-- card add membership -->

          <!-- <div class="card mt-4">
                <div class="card-body">
                    <form method="post" class="row g-3">
                       <input type="hidden" name="action" value="ajouter_membership">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Client</label>
                                <select class="form-control form-control-sm" name="customer_id" required>
                                    <option value="">-- Sélectionner un client --</option>
                                    <?php
                                    $clients = $conn->query("SELECT customer_id, first_name, last_name FROM customers");
                                    while ($c = $clients->fetch_assoc()):
                                      ?>
                                        <option value="<?= $c['customer_id'] ?>">
                                            <?= htmlspecialchars($c['first_name'] . ' ' . $c['last_name']) ?>
                                        </option>
                                    <?php endwhile; ?>'
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                              <div class="form-group">
                                  <label>Abonnement</label>
                                  <select class="form-control" name="subscription_id" required>
                                      <option value="">-- Sélectionner un abonnement --</option>
                                      <?php
                                      $subscriptions = $conn->query("SELECT subscription_id, name FROM subscriptions");
                                      while ($s = $subscriptions->fetch_assoc()): ?>
                                          <option value="<?= $s['subscription_id'] ?>">
                                              <?= htmlspecialchars($s['name']) ?>
                                          </option>
                                      <?php endwhile; ?>
                                  </select>
                              </div>
                          </div>

                          <div class="col-md-6">
                              <div class="form-group">
                                  <label>Date de début</label>
                                  <input type="date" class="form-control" name="start_date" required>
                              </div>
                          </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Date de fin</label>
                                    <input type="date" class="form-control" name="end_date" required>
                                </div>
                            </div>

                              <div class="col-md-12">
                                  <div class="form-group">
                                      <label>Statut</label>
                                      <select class="form-control" name="status" required>
                                          <option value="actif">Actif</option>
                                          <option value="expiré">Expiré</option>
                                          <option value="suspendu">Suspendu</option>
                                      </select>
                                  </div>
                              </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-save"></i> Ajouter l'Adhésion
                                    </button>
                                </div>
                    </form>
                  </div>
              </div> -->

          <!-- table memberships -->
          
              <div class="table-responsive rounded mt-3">
                <table class="table bg-white" id="membershipsTable">
                  <thead class="thead-dark">
                    <tr>
                      <th>id</th>
                      <th>Client</th>
                      <th>Abonnement</th>
                      <th>Date de début</th>
                      <th>Date de fin</th>
                      <th>Status</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody id="membershipsTableBody">
                    <?php
                    $modals = '';
                    if ($adhesions->num_rows > 0):
                      // Pour les listes déroulantes dans les modales, on récupère tous les clients et abonnements une fois
                      $all_clients = $conn->query("SELECT customer_id, first_name, last_name FROM customers");
                      $all_subs = $conn->query("SELECT subscription_id, name FROM subscriptions");
                      while ($row = $adhesions->fetch_assoc()): ?>
                        <tr>
                          <td><?= $row['membership_id'] ?></td>
                          <td><?= htmlspecialchars($row['first_name'] . ' ' . $row['last_name']) ?></td>
                          <td><?= htmlspecialchars($row['subscription_name']) ?></td>
                          <td><?= date('d/m/Y', strtotime($row['start_date'])) ?></td>
                          <td><?= date('d/m/Y', strtotime($row['end_date'])) ?></td>
                          <td>
                            <?php
                            $status = $row['status'];
                            $badgeClass = match ($status) {
                              'actif' => 'bg-success',
                              'suspendu' => 'bg-warning',
                              'expiré' => 'bg-danger',
                              default => 'bg-secondary'
                            };
                            ?>
                            <span class="badge <?= $badgeClass ?>">
                              <?= ucfirst($row['status']) ?>
                            </span>
                          </td>
                          <td>
                            <div class="actions-buttons">
                              <button type="button" class="btn btn-dark btn-sm" data-bs-toggle="modal"
                                data-bs-target="#editModal<?= $row['membership_id'] ?>">
                                <i class="bi bi-pencil-square"></i>
                              </button>
                              <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                data-bs-target="#deleteModal<?= $row['membership_id'] ?>">
                                <i class="bi bi-trash"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <?php
                        //dalete modas memeberships
                        $modals .= '
                                        <div class="modal fade" id="deleteModal' . $row['membership_id'] . '" tabindex="-1" aria-labelledby="deleteModalLabel' . $row['membership_id'] . '" aria-hidden="true">
                                          <div class="modal-dialog">
                                            <form method="POST" class="modal-content">
                                              <input type="hidden" name="action" value="supprimer_membership">
                                              <input type="hidden" name="membership_id" value="' . htmlspecialchars($row['membership_id']) . '">

                                              <div class="modal-header">
                                                <h5 class="modal-title" id="deleteModalLabel' . $row['membership_id'] . '">Supprimer l\'Adhésion</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                                              </div>

                                              <div class="modal-body">
                                                Êtes-vous sûr de vouloir <strong>supprimer</strong> cette adhésion de 
                                                <strong>' . htmlspecialchars($row['first_name'] . ' ' . $row['last_name']) . '</strong> ?
                                              </div>

                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                                <button type="submit" class="btn btn-danger">Supprimer</button>
                                              </div>
                                            </form>
                                          </div>
                                        </div>';


                        // Update modals memberships
                        $modals .= '
                                    <div class="modal fade" id="editModal' . $row['membership_id'] . '" tabindex="-1" aria-labelledby="editModalLabel' . $row['membership_id'] . '" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <form method="POST">
                                            <input type="hidden" name="action" value="modifier_membership">
                                            <input type="hidden" name="membership_id" value="' . htmlspecialchars($row['membership_id']) . '">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="editModalLabel' . $row['membership_id'] . '">Modifier l\'Adhésion</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                            <div class="mb-3">
                                                <label class="form-label">Client</label>
                                                <select class="form-control" name="customer_id" required>';
                        $all_clients->data_seek(0);
                        while ($c = $all_clients->fetch_assoc()) {
                          $selected = ($c['customer_id'] == $row['customer_id']) ? 'selected' : '';
                          $modals .= '<option value="' . $c['customer_id'] . '" ' . $selected . '>' . htmlspecialchars($c['first_name'] . ' ' . $c['last_name']) . '</option>';
                        }
                        $modals .= '</select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Abonnement</label>
                                                <select class="form-control" name="subscription_id" required>';
                        $all_subs->data_seek(0);
                        while ($s = $all_subs->fetch_assoc()) {
                          $selected = ($s['subscription_id'] == $row['subscription_id']) ? 'selected' : '';
                          $modals .= '<option value="' . $s['subscription_id'] . '" ' . $selected . '>' . htmlspecialchars($s['name']) . '</option>';
                        }
                        $modals .= '</select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Date de début</label>
                                                <input type="date" name="start_date" class="form-control" value="' . htmlspecialchars($row['start_date']) . '" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Date de fin</label>
                                                <input type="date" name="end_date" class="form-control" value="' . htmlspecialchars($row['end_date']) . '" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Statut</label>
                                                <select class="form-control" name="status" required>
                                                <option value="actif" ' . ($row['status'] == 'actif' ? 'selected' : '') . '>Actif</option>
                                                <option value="expiré" ' . ($row['status'] == 'expiré' ? 'selected' : '') . '>Expiré</option>
                                                <option value="suspendu" ' . ($row['status'] == 'suspendu' ? 'selected' : '') . '>Suspendu</option>
                                                </select>
                                            </div>
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                                            <button type="submit" class="btn btn-dark">Enregistrer</button>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                    </div>';
                      endwhile;


                      $all_clients->close();
                      $all_subs->close();
                    else: ?>
                      <tr>
                        <td colspan="7" class="text-center">Aucune adhésion trouvée.</td>
                      </tr>
                    <?php endif; ?>
                  </tbody>
                </table>
              </div>
              <nav class="d-flex justify-content-center mt-3" aria-label="Page navigation">
                <ul class="pagination" id="pagination"></ul>
              </nav>
           


        </div>
      </div>
    </div>
  </div>
  <!-- show all modals -->
  <?= $modals ?>
  <?= $addModals ?>

  <script>
    const rowsPerPage = 4;
    const tableBody = document.getElementById("membershipsTableBody");
    const allRows = Array.from(tableBody.querySelectorAll("tr"));
    const pagination = document.getElementById("pagination");
    const searchInput = document.getElementById("searchInput");



    let currentPage = 1;
    let filteredRows = [...allRows];



    function displayPage(page) {
      const start = (page - 1) * rowsPerPage;
      const end = start + rowsPerPage;

      // Hide all rows first
      allRows.forEach(row => {
        row.style.display = "none";
      });

      // Show only filtered rows on current page
      filteredRows.slice(start, end).forEach(row => {
        row.style.display = "";
      });


      renderPagination(filteredRows.length, page);
    }

    function renderPagination(total, page) {
      const totalPages = Math.ceil(total / rowsPerPage);
      pagination.innerHTML = "";

      const createItem = (label, isActive, isDisabled, onClick) => {
        const li = document.createElement("li");
        li.className = `page-item ${isActive ? "active" : ""} ${isDisabled ? "disabled" : ""}`;
        const a = document.createElement("a");
        a.className = "page-link";
        a.href = "#";
        a.innerText = label;
        a.onclick = (e) => {
          e.preventDefault();
          onClick();
        };
        li.appendChild(a);
        pagination.appendChild(li);
      };

      // Previous
      createItem("Previous", false, page === 1, () => {
        if (currentPage > 1) {
          currentPage--;
          displayPage(currentPage);
        }
      });

      // Pages
      for (let i = 1; i <= totalPages; i++) {
        createItem(i, i === page, false, () => {
          currentPage = i;
          displayPage(currentPage);
        });
      }

      // Next
      createItem("Next", false, page === totalPages, () => {
        if (currentPage < totalPages) {
          currentPage++;
          displayPage(currentPage);
        }
      });
    }


    function filterTable() {
      const query = searchInput.value.toLowerCase();

      filteredRows = allRows.filter(row =>
        row.textContent.toLowerCase().includes(query)
      );
      currentPage = 1;
      displayPage(currentPage);

    }

    if (searchInput) {
      searchInput.addEventListener("input", filterTable);
    }

    // Init
    displayPage(currentPage);

  </script>
  
  <script src="../vendors/js/vendor.bundle.base.js"></script>
  <script src="../vendors/chart.js/chart.umd.js"></script>
  <script src="../vendors/chart.js/Chart.min.js"></script>
  <script src="../vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="../vendors/datatables.net-bs5/dataTables.bootstrap5.js"></script>
  <script src="../js/dataTables.select.min.js"></script>
  <script src="../js/off-canvas.js"></script>
  <script src="../js/hoverable-collapse.js"></script>
  <script src="../js/template.js"></script>
  <script src="../js/settings.js"></script>
  <script src="../js/todolist.js"></script>
  <script src="../js/dashboard.js"></script>
  <script src="../js/jquery.cookie.js" type="text/javascript"></script>
</body>

</html>