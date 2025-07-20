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

<body>
  <div class="container-scroller">

    <?php include '../container/navbar.html'; ?>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">

      <!-- partial:partials/_sidebar.html -->
      <?php include '../container/sidebar.html'; ?>

      <!--  -->
      <div class="main-panel">
        <div class="content-wrapper fade-in">
          <div class="header">
            <h1 class="header-title">Abonnements</h1>
          </div>
          <div class="row d-flex justify-content-between align-items-center mx-1">
            <input type="text" id="searchInput" class="form-control w-50 form-control-sm" placeholder="Rechercher...">
            <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addSubscriptionModal">
              <i class="bi bi-plus fs-3"></i> Ajouter Abonnement
            </button>
          </div>
        
          <!-- Add modal packs -->
          <?php
          $addModals = "";
          $addModals .= '
            <div class="modal fade" id="addSubscriptionModal" tabindex="-1" aria-labelledby="addSubscriptionModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <form method="POST">
                    <input type="hidden" name="action" value="ajouter">
                    <div class="modal-header">
                      <h5 class="modal-title" id="addSubscriptionModalLabel">Ajouter un Pack</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                    </div>

                    <div class="modal-body">
                        <div class="form-group">
                          <label class="form-label">Nom de l\'abonnement</label>
                          <select name="name" class="form-control form-control-sm" id="subscriptionName" required onchange="setPrixParNom()">
                            <option value="">-- Sélectionner --</option>
                            <option value="Beginner">Beginner</option>
                            <option value="Tourist">Tourist</option>
                            <option value="Power">Power</option>
                            <option value="Full Pack">Full Pack</option>
                          </select>
                        </div>

                        <div class="form-group"">
                          <label class="form-label">Prix</label>
                          <input type="number" step="0.01" name="price" class="form-control form-control-sm" id="subscriptionPrice" required>
                        </div>

                        <div class="form-group">
                          <label class="form-label">Durée (mois)</label>
                          <input type="number" name="duration_months" class="form-control form-control-sm" required>
                        </div>

                        <div class="form-group">
                          <label class="form-label">Description</label>
                          <input type="text" name="description" class="form-control form-control-sm">
                        </div>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                      <button type="submit" class="btn btn-dark">
                          Ajouter
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <script>
            const prixParNom = {
              "Beginner": 799,
              "Tourist": 999,
              "Power": 1699,
              "Full Pack": 2479,
            };

            function setPrixParNom() {
              const nom = document.getElementById("subscriptionName").value;
              const prixInput = document.getElementById("subscriptionPrice");
              if (prixParNom[nom] !== undefined) {
                prixInput.value = prixParNom[nom];
                prixInput.readOnly = true;
              } else {
                prixInput.value = "";
                prixInput.readOnly = false;
              }
            }
            </script>';
          ?>

          <div class="table-responsive rounded mt-3 ">
            <table class="table bg-white  ">
              <thead class="thead-dark">
                <tr>
                  <th>Id</th>
                  <th>name</th>
                  <th>price</th>
                  <th>duration_months</th>
                  <th>description</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody id="packsTableBody">
                <?php
                $modals = ''; // On stock ici le HTML des modales
                while ($row = $result->fetch_assoc()): ?>
                  <tr>
                    <td><?= htmlspecialchars($row['subscription_id']) ?></td>
                    <td><?= htmlspecialchars($row['name']) ?></td>
                    <td><?= htmlspecialchars($row['price']) ?> dh</td>
                    <td><?= htmlspecialchars($row['duration_months']) ?></td>
                    <td><?= htmlspecialchars($row['description']) ?></td>
                    <td>
                      <div class="action-buttons">
                        <button type="button" class="btn btn-dark btn-sm" data-bs-toggle="modal"
                          data-bs-target="#editModal<?= $row['subscription_id'] ?>">
                          <i class="bi bi-pencil-square"></i>
                        </button>
                        <form method="POST" style="display: inline;">
                          <input type="hidden" name="action" value="supprimer_client">
                          <input type="hidden" name="id" value="<?= $row['subscription_id'] ?>">
                          <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                            data-bs-target="#deleteModal<?= $row['subscription_id'] ?>">
                            <i class="bi bi-trash"></i>
                          </button>
                        </form>
                      </div>
                    </td>
                  </tr>
                  <?php
                  // On prépare la modale pour cet abonnement
                  $modals .= '
                        <div class="modal fade" id="editModal' . $row['subscription_id'] . '" tabindex="-1" aria-labelledby="editModalLabel' . $row['subscription_id'] . '" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <form method="POST">
                                <input type="hidden" name="action" value="modifier">
                                <input type="hidden" name="subscription_id" value="' . htmlspecialchars($row['subscription_id']) . '">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="editModalLabel' . $row['subscription_id'] . '">Modifier l\'abonnement</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <div class="mb-3">
                                    <label class="form-label">Nom de l\'abonnement</label>
                                    <input type="text" name="name" class="form-control" value="' . htmlspecialchars($row['name']) . '" required>
                                  </div>
                                  <div class="mb-3">
                                    <label class="form-label">Prix</label>
                                    <input type="number" step="0.01" name="price" class="form-control" value="' . htmlspecialchars($row['price']) . '" required>
                                  </div>
                                  <div class="mb-3">
                                    <label class="form-label">Durée (mois)</label>
                                    <input type="number" name="duration_months" class="form-control" value="' . htmlspecialchars($row['duration_months']) . '" required>
                                  </div>
                                  <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <input type="text" name="description" class="form-control" value="' . htmlspecialchars($row['description']) . '">
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                                  <button type="submit" class="btn btn-dark">Enregistrer</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                        ';
                endwhile;
                ?>
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
    const tableBody = document.getElementById("packsTableBody");
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