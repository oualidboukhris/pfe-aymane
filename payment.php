<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Fitnesse</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/bodybuilder-holding-dumbbell-gym-vector-silhouette-black-color-illustration-18_666870-10102.avif" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
          <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> User </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Admin </a></li>
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
                  <h3 class="font-weight-bold">💵Ajout d'un Paiement</h3>
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

// Connexion DB
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

$message = "";

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
<style>
/* Variables CSS */
:root {
    --primary-color: #2f3e94;
    --secondary-color: #1e824c;
    --danger-color: #e74c3c;
    --text-color: #2c3e50;
    --light-bg: #f8f9fa;
    --border-radius: 8px;
    --box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
    --transition: all 0.3s ease;
}

/* Reset et styles de base */
body {
    font-family: 'Segoe UI', sans-serif;
    background: linear-gradient(135deg, #f5f7fa 0%, #e4e8f0 100%);
    margin: 0;
    padding: 15px;
    color: var(--text-color);
    line-height: 1.6;
}

/* En-tête de la page */
.page-header {
    background: white;
    padding: 20px;
    border-radius: var(--border-radius);
    box-shadow: var(--box-shadow);
    margin-bottom: 25px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.page-title {
    font-size: 24px;
    color: var(--primary-color);
    margin: 0;
    display: flex;
    align-items: center;
    gap: 10px;
}

.page-title i {
    font-size: 28px;
}

/* Conteneur principal */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
}

/* Carte de formulaire */
.card {
    background: white;
    border-radius: var(--border-radius);
    box-shadow: var(--box-shadow);
    transition: var(--transition);
    margin-bottom: 25px;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
}

.card-header {
    background: var(--primary-color);
    color: white;
    padding: 15px 20px;
    border-radius: var(--border-radius) var(--border-radius) 0 0;
    font-weight: 600;
}

.card-body {
    padding: 20px;
}

/* Formulaires */
.form-group {
    margin-bottom: 20px;
}

.form-label {
    display: block;
    margin-bottom: 8px;
    font-weight: 600;
    color: var(--text-color);
}

.form-control {
    width: 100%;
    padding: 10px 15px;
    border: 2px solid #e1e1e1;
    border-radius: var(--border-radius);
    transition: var(--transition);
    font-size: 14px;
}

.form-control:focus {
    border-color: var(--primary-color);
    box-shadow: 0 0 0 3px rgba(47, 62, 148, 0.1);
    outline: none;
}

/* Boutons */
.btn {
    padding: 10px 20px;
    border: none;
    border-radius: var(--border-radius);
    font-weight: 600;
    cursor: pointer;
    transition: var(--transition);
    text-transform: uppercase;
    font-size: 14px;
    letter-spacing: 0.5px;
}

.btn-primary {
    background: var(--primary-color);
    color: white;
}

.btn-success {
    background: var(--secondary-color);
    color: white;
}

.btn-danger {
    background: var(--danger-color);
    color: white;
}

.btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

/* Tableau */
.table-container {
    background: white;
    border-radius: var(--border-radius);
    box-shadow: var(--box-shadow);
    overflow: hidden;
    margin-top: 25px;
}

.table {
    width: 100%;
    border-collapse: collapse;
}

.table th {
    background: var(--primary-color);
    color: white;
    padding: 15px;
    text-align: left;
    font-weight: 600;
    text-transform: uppercase;
    font-size: 13px;
    letter-spacing: 0.5px;
}

.table td {
    padding: 12px 15px;
    border-bottom: 1px solid #eee;
    font-size: 14px;
}

.table tr:hover {
    background-color: #f8f9fa;
}

/* Badges et statuts */
.badge {
    padding: 5px 10px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
}

.badge-success {
    background: #2ecc71;
    color: white;
}

.badge-warning {
    background: #f1c40f;
    color: white;
}

.badge-danger {
    background: #e74c3c;
    color: white;
}

/* Animations */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

.animate-fade-in {
    animation: fadeIn 0.5s ease-out;
}

/* Responsive */
@media (max-width: 768px) {
    .container {
        padding: 0 10px;
    }
    
    .table {
        display: block;
        overflow-x: auto;
    }
    
    .btn {
        padding: 8px 15px;
        font-size: 13px;
    }
}

/* Modales */
.modal-content {
    border-radius: var(--border-radius);
    border: none;
    box-shadow: var(--box-shadow);
}

.modal-header {
    background: var(--primary-color);
    color: white;
    border-radius: var(--border-radius) var(--border-radius) 0 0;
    padding: 15px 20px;
}

.modal-body {
    padding: 20px;
}

.modal-footer {
    padding: 15px 20px;
    border-top: 1px solid #eee;
}

/* Alertes */
.alert {
    padding: 15px 20px;
    border-radius: var(--border-radius);
    margin-bottom: 20px;
    border: none;
    font-weight: 500;
}

.alert-success {
    background: #d4edda;
    color: #155724;
}

.alert-danger {
    background: #f8d7da;
    color: #721c24;
}

/* Effets de survol pour les actions */
.action-buttons {
    display: flex;
    gap: 8px;
}

.action-buttons .btn {
    padding: 6px 12px;
    font-size: 13px;
}

/* Montant formaté */
.amount {
    font-family: 'Courier New', monospace;
    font-weight: 600;
    color: var(--primary-color);
}

/* Icônes */
.icon {
    margin-right: 5px;
    font-size: 16px;
}

/* Filtres et recherche */
.filters {
    display: flex;
    gap: 15px;
    margin-bottom: 20px;
    flex-wrap: wrap;
}

.filter-group {
    flex: 1;
    min-width: 200px;
}

/* Pagination */
.pagination {
    display: flex;
    justify-content: center;
    gap: 5px;
    margin-top: 20px;
}

.page-item {
    list-style: none;
}

.page-link {
    padding: 8px 12px;
    border: 1px solid #dee2e6;
    border-radius: var(--border-radius);
    color: var(--primary-color);
    text-decoration: none;
    transition: var(--transition);
}

.page-link:hover {
    background: var(--primary-color);
    color: white;
    border-color: var(--primary-color);
}

.page-item.active .page-link {
    background: var(--primary-color);
    color: white;
    border-color: var(--primary-color);
}

.modal-footer .btn {
    min-width: 120px;
    font-weight: 500;
}

.badge-primary { background: #007bff; color: #fff; }
.badge-info { background: #17a2b8; color: #fff; }
.badge-warning { background: #ffc107; color: #212529; }
</style>

<!-- Structure HTML mise à jour -->
<div class="container animate-fade-in">
    <div class="page-header">
        <h1 class="page-title">
            <i class="ti-money"></i>
            Gestion des Paiements
        </h1>
        <div class="filters">
            <div class="filter-group">
                <input type="text" class="form-control" placeholder="Rechercher un paiement...">
            </div>
            <div class="filter-group">
                <select class="form-control">
                    <option value="">Tous les statuts</option>
                    <option value="completed">Complété</option>
                    <option value="pending">En attente</option>
                    <option value="failed">Échoué</option>
                </select>
            </div>
        </div>
    </div>

    <?php if (!empty($message)): ?>
        <div class="alert <?= strpos($message, '✅') !== false ? 'alert-success' : 'alert-danger' ?>">
            <?= htmlspecialchars($message) ?>
        </div>
    <?php endif; ?>

    <!-- Formulaire d'ajout -->
    <div class="card">
        <div class="card-header">
            <i class="ti-plus"></i> Nouveau Paiement
        </div>
        <div class="card-body">
            <form method="POST" class="payment-form">
                <input type="hidden" name="action" value="add_payment">
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Adhésion</label>
                            <select name="membership_id" class="form-control" required>
                                <option value="">-- Sélectionner une adhésion --</option>
                                <?php while ($m = $memberships->fetch_assoc()): ?>
                                    <option value="<?= $m['membership_id'] ?>">
                                        <?= htmlspecialchars($m['first_name'] . " " . $m['last_name'] . " - " . $m['subscription_name']) ?>
                                    </option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Date de Paiement</label>
                            <input type="date" name="payment_date" class="form-control" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Montant</label>
                            <div class="input-group">
                                <input type="number" step="0.01" name="amount" class="form-control" required>
                                <span class="input-group-text">DH</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Méthode de Paiement</label>
                            <select name="payment_method" class="form-control" required>
                                <option value="">-- Sélectionner une méthode --</option>
                                <option value="Espèces">Espèces</option>
                                <option value="Carte bancaire">Carte bancaire</option>
                                <option value="Virement">Virement</option>
                                <option value="Chèque">Chèque</option>
                            </select>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-success">
                    <i class="ti-save"></i> Enregistrer le Paiement
                </button>
            </form>
        </div>
    </div>

    <!-- Liste des paiements -->
    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th>ID Paiement</th>
                    <th>Client</th>
                    <th>Abonnement</th>
                    <th>Date de Paiement</th>
                    <th>Montant</th>
                    <th>Méthode de Paiement</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $modals = '';
                if ($payments->num_rows > 0): ?>
                    <?php while ($row = $payments->fetch_assoc()): ?>
                        <tr>
                            <td>#<?= $row['payment_id'] ?></td>
                            <td><?= htmlspecialchars($row['first_name'] . ' ' . $row['last_name']) ?></td>
                            <td><?= htmlspecialchars($row['subscription_name']) ?></td>
                            <td><?= date('d/m/Y', strtotime($row['payment_date'])) ?></td>
                            <td class="amount"><?= number_format($row['amount'], 2) ?> DH</td>
                            <td>
                            <?= htmlspecialchars($row['payment_method']) ?>
                            </td>
                            <td>
                                <div class="action-buttons">
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editModal<?= $row['payment_id'] ?>">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <a href="?delete=<?= $row['payment_id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce paiement ?')">
                                        <i class="ti-trash"></i> Supprimer
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <?php
                        // Génération de la modale pour ce paiement
                        $modals .= '
<div class="modal fade" id="editModal'.$row['payment_id'].'" tabindex="-1" aria-labelledby="editModalLabel'.$row['payment_id'].'" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="POST">
        <input type="hidden" name="action" value="edit_payment">
        <input type="hidden" name="payment_id" value="'.htmlspecialchars($row['payment_id']).'">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel'.$row['payment_id'].'">Modifier le Paiement</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Adhésion</label>
            <select name="membership_id" class="form-control" required>';
                        foreach ($memberships_for_edit as $m): 
                            $selected = ($m['membership_id'] == $row['membership_id']) ? 'selected' : '';
                            $modals .= '<option value="'.$m['membership_id'].'" '.$selected.'>'.htmlspecialchars($m['first_name'].' '.$m['last_name'].' - '.$m['subscription_name']).'</option>';
                        endforeach;
                        $modals .= '</select>
          </div>
          <div class="mb-3">
            <label class="form-label">Date de Paiement</label>
            <input type="date" name="payment_date" class="form-control" value="'.htmlspecialchars($row['payment_date']).'" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Montant</label>
            <div class="input-group">
              <input type="number" step="0.01" name="amount" class="form-control" value="'.htmlspecialchars($row['amount']).'" required>
              <span class="input-group-text">DH</span>
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label">Méthode de Paiement</label>
            <select name="payment_method" class="form-control" required>
              <option value="Espèces" '.($row['payment_method']=='Espèces'?'selected':'').'>Espèces</option>
              <option value="Carte bancaire" '.($row['payment_method']=='Carte bancaire'?'selected':'').'>Carte bancaire</option>
              <option value="Virement" '.($row['payment_method']=='Virement'?'selected':'').'>Virement</option>
              <option value="Chèque" '.($row['payment_method']=='Chèque'?'selected':'').'>Chèque</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
          <button type="submit" class="btn btn-success">Enregistrer</button>
        </div>
      </form>
    </div>
  </div>
</div>';
                        ?>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="7" class="text-center">Aucun paiement enregistré.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <!-- Affichage des modales en dehors du tableau -->
    <?= $modals ?>

    <!-- Pagination -->
    <nav aria-label="Page navigation">
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</div>

<!-- Bootstrap 5 JS pour les modales -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<?php $conn->close(); ?>

        