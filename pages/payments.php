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
    } elseif ($_POST['action'] === "supprimer_payment") {

      $payment_id = isset($_POST['payment_id']) ? intval($_POST['payment_id']) : 0;

      if ($payment_id > 0) {
          // Prepare the DELETE query
          $stmt = $conn->prepare("DELETE FROM payments WHERE payment_id = ?");
          $stmt->bind_param("i", $payment_id);
  
          if ($stmt->execute()) {
              // Optionally set a success message
              $message = "Le paiement a été supprimé avec succès.";
          } else {
              // Optionally set an error message
              $message = "Erreur lors de la suppression du paiement.";
          }
  
          $stmt->close();
      } else {
        $message = "ID de paiement invalide.";
      }
    }

  }
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

<body>
  <div class="container-scroller">

    <?php include '../container/navbar.html'; ?>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">

      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <?php include '../container/sidebar.html'; ?>
      <?php require '../server/payments-web.php'; ?>
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
            <h1 class="header-title">Paiement</h1>
          </div>
          <div class="row d-flex justify-content-between align-items-center mx-1">
            <input type="text" id="searchInput" class="form-control w-50 form-control-sm" placeholder="Rechercher...">
            <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addPaymentModal">
              <i class="bi bi-plus fs-3"></i> Ajouter paiement
            </button>
          </div>

          <!-- Modal add payment -->
          <?php
          $addModals = '';
          $addModals .= '
          <div class="modal fade" id="addPaymentModal" tabindex="-1" aria-labelledby="addPaymentModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <form method="POST" class="payment-form">
                  <input type="hidden" name="action" value="add_payment">
          
                  <div class="modal-header">
                    <h5 class="modal-title" id="addPaymentModalLabel">Enregistrer un Paiement</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                  </div>
          
                  <div class="modal-body">
                      
                        <div class="form-group">
                          <label class="form-label">Adhésion</label>
                          <select name="membership_id" id="membership_id" class="form-control form-control-sm" required>
                            <option value="">-- Sélectionner une adhésion --</option>';

          while ($m = $memberships->fetch_assoc()) {
            $addModals .= '<option value="' . $m['membership_id'] . '">'
              . htmlspecialchars($m['first_name'] . " " . $m['last_name'] . " - " . $m['subscription_name']) . '</option>';
          }
          $addModals .= '
                          </select>
                        </div>
                     
                      
                        <div class="form-group">
                          <label class="form-label">Date de Paiement</label>
                          <input type="date" name="payment_date" class="form-control form-control-sm" required>
                        </div>
                    
                   
                     
                        <div class="form-group">
                          <label class="form-label">Montant</label>
                          <div class="input-group">
                            <input type="number" step="0.01" name="amount" class="form-control form-control-sm" required>
                            <span class="input-group-text">DH</span>
                          </div>
                        </div>
                     

                     
                        <div class="form-group">
                          <label class="form-label">Méthode de Paiement</label>
                          <select name="payment_method" class="form-control form-control-sm" required>
                            <option value="">-- Sélectionner une méthode --</option>
                            <option value="Espèces">Espèces</option>
                            <option value="Carte bancaire">Carte bancaire</option>
                            <option value="Virement">Virement</option>
                            <option value="Chèque">Chèque</option>
                          </select>
                        </div>
                     
                   
                  </div>
          
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-dark">
                      <i class="ti-save"></i> Enregistrer le Paiement
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>';
          ?>

          <div class="table-responsive rounded mt-3 ">
            <table class="table bg-white " id="paymentsTable">
              <thead class="thead-dark">
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
              <tbody id="paymentsTableBody">
                <?php
                $modals = '';
                if ($payments->num_rows > 0): ?>
                  <?php while ($row = $payments->fetch_assoc()): ?>
                    <tr>
                      <td>#
                        <?= $row['payment_id'] ?>
                      </td>
                      <td>
                        <?= htmlspecialchars($row['first_name'] . ' ' . $row['last_name']) ?>
                      </td>
                      <td>
                        <?= htmlspecialchars($row['subscription_name']) ?>
                      </td>
                      <td>
                        <?= date('d/m/Y', strtotime($row['payment_date'])) ?>
                      </td>
                      <td class="amount">
                        <?= number_format($row['amount'], 2) ?> DH
                      </td>
                      <td>
                        <?= htmlspecialchars($row['payment_method']) ?>
                      </td>
                      <td>
                        <div class="action-buttons">
                          <button type="button" class="btn btn-dark btn-sm" data-bs-toggle="modal"
                            data-bs-target="#editModal<?= $row['payment_id'] ?>">
                            <i class="bi bi-pencil-square"></i>
                          </button>
                          <form method="POST" style="display: inline;">
                            <input type="hidden" name="action" value="supprimer_client">
                            <input type="hidden" name="id" value="<?= $row['payment_id'] ?>">
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                              data-bs-target="#deleteModal<?= $row['payment_id'] ?>">
                              <i class="bi bi-trash"></i>
                            </button>
                          </form>
                        </div>
                      </td>
                    </tr>
                    <?php
                    //dalete modals memeberships
                    $modals .= '
                     <div class="modal fade" id="deleteModal' . $row['payment_id'] . '" tabindex="-1" aria-labelledby="deleteModalLabel' . $row['payment_id'] . '" aria-hidden="true">
                       <div class="modal-dialog">
                         <form method="POST" class="modal-content">
                           <input type="hidden" name="action" value="supprimer_payment">
                           <input type="hidden" name="payment_id" value="' . htmlspecialchars($row['payment_id']) . '">

                           <div class="modal-header">
                             <h5 class="modal-title" id="deleteModalLabel' . $row['payment_id'] . '">Supprimer le Paiement</h5>
                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                           </div>

                           <div class="modal-body">
                             Êtes-vous sûr de vouloir <strong>supprimer</strong> ce paiement de 
                             <strong>' . htmlspecialchars($row['first_name'] . ' ' . $row['last_name']) . '</strong> ?
                           </div>

                           <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                             <button type="submit" class="btn btn-danger">Supprimer</button>
                           </div>
                         </form>
                       </div>
                     </div>';


                    // edit modal
                    $modals .= '
                                    <div class="modal fade" id="editModal' . $row['payment_id'] . '" tabindex="-1" aria-labelledby="editModalLabel' . $row['payment_id'] . '" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <form method="POST">
                                            <input type="hidden" name="action" value="edit_payment">
                                            <input type="hidden" name="payment_id" value="' . htmlspecialchars($row['payment_id']) . '">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="editModalLabel' . $row['payment_id'] . '">Modifier le Paiement</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                            <div class="mb-3">
                                                <label class="form-label">Adhésion</label>
                                                <select name="membership_id" class="form-control" required>';
                    foreach ($memberships_for_edit as $m):
                      $selected = ($m['membership_id'] == $row['membership_id']) ? 'selected' : '';
                      $modals .= '<option value="' . $m['membership_id'] . '" ' . $selected . '>' . htmlspecialchars($m['first_name'] . ' ' . $m['last_name'] . ' - ' . $m['subscription_name']) . '</option>';
                    endforeach;
                    $modals .= '</select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Date de Paiement</label>
                                                <input type="date" name="payment_date" class="form-control" value="' . htmlspecialchars($row['payment_date']) . '" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Montant</label>
                                                <div class="input-group">
                                                <input type="number" step="0.01" name="amount" class="form-control" value="' . htmlspecialchars($row['amount']) . '" required>
                                                <span class="input-group-text">DH</span>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Méthode de Paiement</label>
                                                <select name="payment_method" class="form-control" required>
                                                <option value="Espèces" ' . ($row['payment_method'] == 'Espèces' ? 'selected' : '') . '>Espèces</option>
                                                <option value="Carte bancaire" ' . ($row['payment_method'] == 'Carte bancaire' ? 'selected' : '') . '>Carte bancaire</option>
                                                <option value="Virement" ' . ($row['payment_method'] == 'Virement' ? 'selected' : '') . '>Virement</option>
                                                <option value="Chèque" ' . ($row['payment_method'] == 'Chèque' ? 'selected' : '') . '>Chèque</option>
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
    const tableBody = document.getElementById("paymentsTableBody");
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