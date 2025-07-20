<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>fitnesse</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/bodybuilder-holding-dumbbell-gym-vector-silhouette-black-color-illustration-18_666870-10102.avif" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="images/bodybuilder-holding-dumbbell-gym-vector-silhouette-black-color-illustration-18_666870-10102.avif" class="mr-2" alt="logo"/><H4>Fitnesse</H1></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/bodybuilder-holding-dumbbell-gym-vector-silhouette-black-color-illustration-18_666870-10102.avif" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="ti-info-alt mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="ti-settings mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="ti-user mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
            
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
          <li class="nav-item nav-settings d-none d-lg-flex">
            <a class="nav-link" href="#">
              <i class="icon-ellipsis"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
              </ul>
            </div>
            <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
              <p class="text-gray mb-0">The total number of sessions</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="customers.php">
        <i class="icon-layout menu-icon"></i>
        <span class="menu-title">customers</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="memberships.php">
        <i class="icon-columns menu-icon"></i>
        <span class="menu-title">memberships</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="payment.php">
         <i class="icon-grid-2 menu-icon"></i>
        <span class="menu-title">payment</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="subscription.php">
        <i class="icon-contract menu-icon"></i>
        <span class="menu-title">Subscription</span>
      </a>
    </li>
      <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html">Admin</a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html">Admin</a></li>
        </ul>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="pages/documentation/documentation.html">
        <i class="icon-paper menu-icon"></i>
        <span class="menu-title">Documentation</span>
      </a>
    </li>
  </ul>
</nav>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <br>
                  <h3 class="font-weight-bold">📝 Gestion des Adhésions</h3>
                </div>
                <div class="col-12 col-xl-4">
                 <div class="justify-content-end d-flex">
                  <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                    
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                      <a class="dropdown-item" href="#">January - March</a>
                      <a class="dropdown-item" href="#">March - June</a>
                      <a class="dropdown-item" href="#">June - August</a>
                      <a class="dropdown-item" href="#">August - November</a>
                    </div>
                  </div>
                 </div>
                </div>
              </div>
            </div>

 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gym_subscription";

// Connexion
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("❌ Connexion échouée : " . $conn->connect_error);
}

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
<style>
:root {
    --primary-color: #4a90e2;
    --secondary-color: #2c3e50;
    --success-color: #2ecc71;
    --danger-color: #e74c3c;
    --warning-color: #f1c40f;
    --light-color: #ecf0f1;
    --dark-color: #2c3e50;
    --border-radius: 8px;
    --box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    --transition: all 0.3s ease;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
    margin: 0;
    padding: 20px;
    min-height: 100vh;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

.page-header {
    background: white;
    padding: 20px;
    border-radius: var(--border-radius);
    box-shadow: var(--box-shadow);
    margin-bottom: 30px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.page-title {
    color: var(--dark-color);
    font-size: 24px;
    margin: 0;
    display: flex;
    align-items: center;
    gap: 10px;
}

.card {
    background: white;
    border-radius: var(--border-radius);
    box-shadow: var(--box-shadow);
    padding: 20px;
    margin-bottom: 20px;
    transition: var(--transition);
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

.card-header {
    background: var(--primary-color);
    color: white;
    padding: 15px 20px;
    border-radius: var(--border-radius) var(--border-radius) 0 0;
    font-weight: 600;
}

.form-group {
    margin-bottom: 15px;
}

.form-control {
    width: 100%;
    padding: 10px 15px;
    border: 1px solid #ddd;
    border-radius: var(--border-radius);
    transition: var(--transition);
}

.form-control:focus {
    border-color: var(--primary-color);
    box-shadow: 0 0 0 2px rgba(74, 144, 226, 0.2);
    outline: none;
}

.btn {
    padding: 10px 20px;
    border: none;
    border-radius: var(--border-radius);
    cursor: pointer;
    transition: var(--transition);
    font-weight: 500;
}

.btn-primary {
    background: var(--primary-color);
    color: white;
}

.btn-danger {
    background: var(--danger-color);
    color: white;
}

.btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 2px 5px rgba(0,0,0,0.2);
}

.table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0;
    margin-top: 20px;
}

.table th {
    background: var(--dark-color);
    color: white;
    padding: 15px;
    text-align: left;
}

.table td {
    padding: 12px 15px;
    border-bottom: 1px solid #eee;
}

.table tr:hover {
    background: #f8f9fa;
}

.badge {
    padding: 5px 10px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 500;
}

.badge-success {
    background: var(--success-color);
    color: white;
}

.badge-warning {
    background: var(--warning-color);
    color: var(--dark-color);
}

.alert {
    padding: 15px;
    border-radius: var(--border-radius);
    margin-bottom: 20px;
    animation: fadeIn 0.5s ease;
}

.alert-success {
    background: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
}

.alert-danger {
    background: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
}

.modal-content {
    border-radius: var(--border-radius);
    box-shadow: var(--box-shadow);
}

.modal-header {
    background: var(--primary-color);
    color: white;
    border-radius: var(--border-radius) var(--border-radius) 0 0;
}

.modal-body {
    padding: 20px;
}

.modal-footer {
    border-top: 1px solid #eee;
    padding: 15px 20px;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(-10px); }
    to { opacity: 1; transform: translateY(0); }
}

/* Responsive Design */
@media (max-width: 768px) {
    .container {
        padding: 10px;
    }
    
    .table {
        display: block;
        overflow-x: auto;
    }
    
    .btn {
        padding: 8px 15px;
    }
    
    .card {
        padding: 15px;
    }
}
</style>

<div class="container">
    <div class="page-header">
        <h1 class="page-title">
            <i class="fas fa-id-card"></i>
            Gestion des Adhésions
        </h1>
        <div class="header-actions">
            <button class="btn btn-primary" data-toggle="modal" data-target="#addMembershipModal">
                <i class="fas fa-plus"></i> Nouvelle Adhésion
            </button>
        </div>
    </div>

    <?php if (isset($message)): ?>
        <div class="alert <?= strpos($message, '✅') !== false ? 'alert-success' : 'alert-danger' ?>">
            <?= $message ?>
        </div>
    <?php endif; ?>

    <div class="card">
        <div class="card-header">
            <i class="fas fa-plus-circle"></i> Ajouter une Adhésion
        </div>
        <div class="card-body">
            <form method="post" class="row g-3">
                <input type="hidden" name="action" value="ajouter_membership">
                
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Client</label>
                        <select class="form-control" name="customer_id" required>
                            <option value="">-- Sélectionner un client --</option>
                            <?php while ($c = $clients->fetch_assoc()): ?>
                                <option value="<?= $c['customer_id'] ?>">
                                    <?= htmlspecialchars($c['first_name'] . ' ' . $c['last_name']) ?>
                                </option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Abonnement</label>
                        <select class="form-control" name="subscription_id" required>
                            <option value="">-- Sélectionner un abonnement --</option>
                            <?php while ($s = $subscriptions->fetch_assoc()): ?>
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
    </div>

    <div class="card">
        <div class="card-header">
            <i class="fas fa-list"></i> Liste des Adhésions
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>membership_id</th>
                            <th>customer_id</th>
                            <th>subscription_id</th>
                            <th>start_date</th>
                            <th>end_date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($adhesions->num_rows > 0): ?>
                            <?php while ($row = $adhesions->fetch_assoc()): ?>
                                <tr>
                                    <td><?= $row['membership_id'] ?></td>
                                    <td><?= htmlspecialchars($row['first_name'] . ' ' . $row['last_name']) ?></td>
                                    <td><?= htmlspecialchars($row['subscription_name']) ?></td>
                                    <td><?= date('d/m/Y', strtotime($row['start_date'])) ?></td>
                                    <td><?= date('d/m/Y', strtotime($row['end_date'])) ?></td>
                                    <td>
                                        <span class="badge <?= $row['status'] === 'actif' ? 'badge-success' : 'badge-warning' ?>">
                                            <?= ucfirst($row['status']) ?>
                                        </span>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-primary btn-sm" onclick="editMembership(<?= $row['membership_id'] ?>)">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <a href="?delete=<?= $row['membership_id'] ?>" class="btn btn-danger btn-sm" 
                                               onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette adhésion ?')">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="7" class="text-center">Aucune adhésion trouvée.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal pour l'édition -->
<div class="modal fade" id="editMembershipModal" tabindex="-1" role="dialog" aria-labelledby="editMembershipModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editMembershipModalLabel">Modifier l'Adhésion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editMembershipForm" method="POST">
                    <input type="hidden" name="action" value="modifier_membership">
                    <input type="hidden" name="membership_id" id="edit_membership_id">
                    
                    <div class="form-group">
                        <label>Client</label>
                        <select class="form-control" name="customer_id" id="edit_customer_id" required>
                            <?php 
                            $clients->data_seek(0);
                            while ($c = $clients->fetch_assoc()): 
                            ?>
                                <option value="<?= $c['customer_id'] ?>">
                                    <?= htmlspecialchars($c['first_name'] . ' ' . $c['last_name']) ?>
                                </option>
                            <?php endwhile; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Abonnement</label>
                        <select class="form-control" name="subscription_id" id="edit_subscription_id" required>
                            <?php 
                            $subscriptions->data_seek(0);
                            while ($s = $subscriptions->fetch_assoc()): 
                            ?>
                                <option value="<?= $s['subscription_id'] ?>">
                                    <?= htmlspecialchars($s['name']) ?>
                                </option>
                            <?php endwhile; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Date de début</label>
                        <input type="date" class="form-control" name="start_date" id="edit_start_date" required>
                    </div>

                    <div class="form-group">
                        <label>Date de fin</label>
                        <input type="date" class="form-control" name="end_date" id="edit_end_date" required>
                    </div>

                    <div class="form-group">
                        <label>Statut</label>
                        <select class="form-control" name="status" id="edit_status" required>
                            <option value="actif">Actif</option>
                            <option value="expiré">Expiré</option>
                            <option value="suspendu">Suspendu</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <button type="submit" form="editMembershipForm" class="btn btn-primary">Enregistrer</button>
            </div>
        </div>
    </div>
</div>

<script>
function editMembership(id) {
    // Récupérer les données de l'adhésion via AJAX
    fetch(`get_membership.php?id=${id}`)
        .then(response => response.json())
        .then(data => {
            document.getElementById('edit_membership_id').value = data.membership_id;
            document.getElementById('edit_customer_id').value = data.customer_id;
            document.getElementById('edit_subscription_id').value = data.subscription_id;
            document.getElementById('edit_start_date').value = data.start_date;
            document.getElementById('edit_end_date').value = data.end_date;
            document.getElementById('edit_status').value = data.status;
            $('#editMembershipModal').modal('show');
        });
}
</script>

       