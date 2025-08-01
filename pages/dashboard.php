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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="../js/select.dataTables.min.css">
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

    .dashboard-header {
      color: #1F1F1F;
      margin-bottom: 2rem;
    }

    .dashboard-title {
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
if (!empty($_SESSION["username"]) && !empty($_SESSION["user_id"])) {

  // Total Customers
  $sqlCustomers = "SELECT COUNT(*) AS total_customers FROM customers";
  $resultCustomers = $conn->query($sqlCustomers);
  $totalCustomers = ($resultCustomers && $row = $resultCustomers->fetch_assoc()) ? $row['total_customers'] : 0;

  // Active Memberships 
  $sqlMemberships = "SELECT COUNT(*) AS active_memberships FROM memberships WHERE status = 'actif'";
  $resultMemberships = $conn->query($sqlMemberships);
  $activeMemberships = ($resultMemberships && $row = $resultMemberships->fetch_assoc()) ? $row['active_memberships'] : 0;

  // Total Revenue This Month
  $sqlRevenue = "SELECT SUM(amount) AS total_revenue FROM payments WHERE MONTH(payment_date) = MONTH(CURRENT_DATE()) AND YEAR(payment_date) = YEAR(CURRENT_DATE())";
  $result = $conn->query($sqlRevenue);
  $totalRevenue = 0;

  if ($result && $row = $result->fetch_assoc()) {
    $totalRevenue = $row['total_revenue'];
  }

  // Most Popular Subscription Plan
  $sqlPopular = "SELECT subscription_id, COUNT(*) AS count FROM memberships GROUP BY subscription_id ORDER BY count DESC LIMIT 1";
  $resultPopular = $conn->query($sqlPopular);
  $popularPlan = "None";

  if ($resultPopular && $row = $resultPopular->fetch_assoc()) {
    $subId = $row['subscription_id'];

    // Get the subscription name
    $subNameResult = $conn->query("SELECT name FROM subscriptions WHERE subscription_id = $subId");
    if ($subNameResult && $subRow = $subNameResult->fetch_assoc()) {
      $popularPlan = $subRow['name'];
    } else {
      $popularPlan = "Subscription ID: $subId";
    }
  }

  //Data shart Monthly Revenue (last 6 months)
  $sql = "
      SELECT DATE_FORMAT(payment_date, '%Y-%m') AS month, SUM(amount) AS total 
      FROM payments
      WHERE payment_date >= DATE_SUB(CURDATE(), INTERVAL 6 MONTH)
      GROUP BY month
      ORDER BY month
    ";

  $result = $conn->query($sql);

  $months = [];
  $revenues = [];

  while ($row = $result->fetch_assoc()) {
    $months[] = $row['month'];
    $revenues[] = (float) $row['total'];
  }

} else {
  header("Location:../index.php");
}


?>

<body>
  <div class="container-scroller">

    <?php include '../container/navbar.html'; ?>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">

      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <?php include '../container/sidebar.html'; ?>


      <!--  -->
      <div class="main-panel">
        <div class="content-wrapper fade-in">
          <div class="dashboard-header">
            <h1 class="dashboard-title">Bienvenue <?php echo $_SESSION["username"] ?> sur Fitness</h1>
            <p class="dashboard-subtitle">Votre tableau de bord de gestion de salle de sport</p>
          </div>

          <div class="row">
            <div class="col-md-3 mb-4 stretch-card transparent">
              <div class="card card-light">
                <div class="card-body">
                  <i class="bi bi-people-fill fs-30"></i>
                  <p class="mb-4 text-dark">Adhésion actives</p>
                  <p class="fs-30 text-dark"><?= $activeMemberships ?></p>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-4 stretch-card transparent">
              <div class="card card-light">
                <div class="card-body">
                  <i class="bi bi-person-fill fs-30"></i>
                  <p class="mb-4 text-dark">Total des clients</p>
                  <p class="fs-30 mb-2 text-dark"><?= $totalCustomers ?></p>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-4 stretch-card transparent">
              <div class="card card-light">
                <div class="card-body">
                  <i class="bi bi-calendar-fill fs-30"></i>
                  <p class="mb-4 text-dark">Plan d'abonnement le plus populaire</p>
                  <p class="fs-30 mb-2 text-dark"><?= $popularPlan ?></p>
                  <!-- <p class="stats-change text-dark">+2.00% (30 jours)</p> -->
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-4 stretch-card transparent">
              <div class="card card-light">
                <div class="card-body">
                  <i class="bi bi-currency-dollar fs-30 "></i>
                  <p class="mb-4 text-dark "> Total des recettes du mois </p>
                  <p class="fs-30 mb-2 text-dark"><?= number_format($totalRevenue, 0) ?> MAD </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin mt-4 justify-content-center stretch-card">
              <div class="card">
                <div class="card-body">
                  <canvas id="monthlyRevenueChart"></canvas>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-4">Adhesions</p>
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
                        </tr>
                      </thead>
                      <tbody id="membershipsTableBody">
                        <?php
                        $adhesions = $conn->query("
                            SELECT m.*, c.first_name, c.last_name, s.name AS subscription_name
                            FROM memberships m
                            JOIN customers c ON m.customer_id = c.customer_id
                            JOIN subscriptions s ON m.subscription_id = s.subscription_id
                            ");

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

                            </tr>
                            <?php

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
        </div>
      </div>
    </div>
  </div>




  <script src="../vendors/js/vendor.bundle.base.js"></script>
  <script src="../vendors/chart.js/chart.umd.js"></script>
  <script src="../vendors/chart.js/Chart.min.js"></script>
  <script src="../vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="../vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="../vendors/datatables.net-bs5/dataTables.bootstrap5.js"></script>
  <script src="../js/dataTables.select.min.js"></script>
  <script src="../js/off-canvas.js"></script>
  <script src="../js/hoverable-collapse.js"></script>
  <script src="../js/template.js"></script>
  <script src="../js/settings.js"></script>
  <script src="../js/todolist.js"></script>
  <!-- <script src="../js/dashboard.js"></script> -->
  <script src="../js/jquery.cookie.js" type="text/javascript"></script>
  <script>
    (function ($) {
      'use strict';
      $(function () {
        if ($("#monthlyRevenueChart").length) {
          const canvas = document.getElementById('monthlyRevenueChart');
          const ctx = canvas.getContext('2d');

          // Create a vertical linear gradient for "Orders" dataset
          const gradient1 = ctx.createLinearGradient(0, 0, 0, 500);
          gradient1.addColorStop(0, 'rgba(0, 0, 0)'); // Top: semi-transparent
          gradient1.addColorStop(1, 'rgba(0, 0, 0,0.1)');

          const gradient2 = ctx.createLinearGradient(0, 0, 0, 500);
          gradient2.addColorStop(0, 'rgba(60, 66,77)'); // Top: semi-transparent
          gradient2.addColorStop(1, 'rgba(60, 66,77,0.1)');

          new Chart(ctx, {
            type: 'line',
            data: {
              labels: <?= json_encode($months) ?>,
              datasets: [
                {
                  data:  <?= json_encode($revenues) ?> ,
                  borderColor: ['black'],
                  borderWidth: 1,
                  fill: true,
                  label: "Revenue (MAD)",
                  pointRadius: 0,
                  backgroundColor: gradient1 // 👈 Gradient applied here
                },
                
              ]
            },
          
            options: {
              responsive: true,
              maintainAspectRatio: true,
              elements: {
                line: {
                  tension: .4
                }
              },
              scales: {
                x: {
                  border: { display: false },
                  grid: {
                    display: false,
                    drawTicks: true,
                    color: "rgba(0, 0, 0, 0)",
                  },
                  ticks: {
                    display: true,
                    color: "#6C7383"
                  }
                },
                y: {
                  border: { display: false },
                  grid: { display: true },
                  ticks: {
                    color: "#6C7383",
                    stepSize: 200
                  }
                }
              },
              plugins: {
                legend: {
                  display: false,
                  labels: {
                    color: 'rgb(255, 99, 132)'
                  }
                }
              }
            }
          });
        }

      
    
      });
    })(jQuery);
  </script>
</body>

</html>