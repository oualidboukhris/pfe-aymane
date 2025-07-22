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

    if (empty($errors)) {
      // Proceed with DB insert
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
    if ($stmt->execute()) {
      $message = "✅ Client mis à jour avec succès.";
    }
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

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php include '../container/navbar.html'; ?>

    <div class="container-fluid page-body-wrapper">

      <!-- partial:partials/_sidebar.html -->
      <?php include '../container/sidebar.html'; ?>

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
            <h1 class="header-title">Clients</h1>
          </div>
          <div class="row d-flex justify-content-between align-items-center mx-1">
            <input type="text" id="searchInput" class="form-control w-50 form-control-sm" placeholder="Rechercher...">
            <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addCustomerModal">
              <i class="bi bi-plus fs-3"></i> Nouveau Client
            </button>
          </div>

          <?php
          $addModals = '';
          $addModals .= '
                  <div class="modal fade" id="addCustomerModal" tabindex="-1" aria-labelledby="addCustomerModalLabel" aria-hidden="true" ' . (!empty($errors) ? 'style="display:block;"' : '') . '>
                    <div class="modal-dialog">
                      <form method="POST" class="modal-content">
                        <input type="hidden" name="action" value="ajouter_client">
                        <div class="modal-header">
                          <h5 class="modal-title" id="addCustomerModalLabel">Ajouter un client</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                  
                          <div class="mb-3">
                            <label class="form-label">Prénom</label>
                            <input type="text" name="first_name" class="form-control ' . (!empty($errors["first_name"]) ? 'is-invalid' : '') . '" value="' . ($oldValues['first_name'] ?? '') . '">
                            ' . (!empty($errors["first_name"]) ? '<div class="invalid-feedback">' . $errors["first_name"] . '</div>' : '') . '
                          </div>
                  
                          <div class="mb-3">
                            <label class="form-label">Nom</label>
                            <input type="text" name="last_name" class="form-control ' . (!empty($errors["last_name"]) ? 'is-invalid' : '') . '" value="' . ($oldValues['last_name'] ?? '') . '">
                            ' . (!empty($errors["last_name"]) ? '<div class="invalid-feedback">' . $errors["last_name"] . '</div>' : '') . '
                          </div>
                  
                          <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control ' . (!empty($errors["email"]) ? 'is-invalid' : '') . '" value="' . ($oldValues['email'] ?? '') . '">
                            ' . (!empty($errors["email"]) ? '<div class="invalid-feedback">' . $errors["email"] . '</div>' : '') . '
                          </div>
                  
                          <div class="mb-3">
                            <label class="form-label">Téléphone</label>
                            <input type="tel" name="phone_number" class="form-control ' . (!empty($errors["phone_number"]) ? 'is-invalid' : '') . '" value="' . ($oldValues['phone_number'] ?? '') . '">
                            ' . (!empty($errors["phone_number"]) ? '<div class="invalid-feedback">' . $errors["phone_number"] . '</div>' : '') . '
                          </div>
                  
                          <div class="mb-3">
                            <label class="form-label">Adresse</label>
                            <input type="text" name="address" class="form-control" value="' . ($oldValues['address'] ?? '') . '">
                          </div>
                  
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                          <button type="submit" class="btn btn-dark">Ajouter</button>
                        </div>
                      </form>
                    </div>
                  </div>';
          ?>

         
              <div class="table-responsive rounded mt-3 ">
                <table class="table bg-white" id="customerTable">
                  <thead class="thead-dark">
                    <tr>
                      <th>Prénom</th>
                      <th>Nom</th>
                      <th>Email</th>
                      <th>Téléphone</th>
                      <th>Adresse</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody id="customerTableBody">
                    <?php
                    $result = $conn->query("SELECT * FROM customers");
                    $modals = '';
                    while ($row = $result->fetch_assoc()): ?>
                      <tr>
                        <td>
                          <?= htmlspecialchars($row['first_name']) ?>
                        </td>
                        <td>
                          <?= htmlspecialchars($row['last_name']) ?>
                        </td>
                        <td>
                          <?= htmlspecialchars($row['email']) ?>
                        </td>
                        <td>
                          <?= htmlspecialchars($row['phone_number']) ?>
                        </td>
                        <td>
                          <?= htmlspecialchars($row['address']) ?>
                        </td>
                        <td>
                          <div class="action-buttons">
                            <button type="button" class="btn btn-dark btn-sm" data-bs-toggle="modal"
                              data-bs-target="#editModal<?= $row['customer_id'] ?>">
                              <i class="bi bi-pencil-square"></i>
                            </button>
                            <form method="POST" style="display: inline;">
                              <input type="hidden" name="action" value="supprimer_client">
                              <input type="hidden" name="id" value="<?= $row['customer_id'] ?>">
                              <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                data-bs-target="#deleteModal<?= $row['customer_id'] ?>">
                                <i class="bi bi-trash"></i>
                              </button>
                            </form>
                          </div>
                        </td>
                      </tr>

                      <?php
                      //deleted modal
                      $modals .= '
                                    <div class="modal fade" id="deleteModal' . $row['customer_id'] . '" tabindex="-1" aria-labelledby="deleteModalLabel' . $row['customer_id'] . '" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <form method="POST" class="modal-content">
                                          <input type="hidden" name="action" value="supprimer_client">
                                          <input type="hidden" name="id" value="' . $row['customer_id'] . '">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel' . $row['customer_id'] . '">Supprimer le client</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                          </div>
                                          <div class="modal-body">
                                            Voulez-vous vraiment supprimer ce client : <strong>' . htmlspecialchars($row['first_name'] . ' ' . $row['last_name']) . '</strong> ?
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                            <button type="submit" class="btn btn-danger">Supprimer</button>
                                          </div>
                                        </form>
                                      </div>
                                    </div>';
                      // update modal
                      $modals .= '
                                      <div class="modal fade" id="editModal' . $row['customer_id'] . '" tabindex="-1" aria-labelledby="editModalLabel' . $row['customer_id'] . '" aria-hidden="true">
                                      <div class="modal-dialog">
                                          <div class="modal-content">
                                          <form method="POST">
                                              <input type="hidden" name="action" value="modifier_client">
                                              <input type="hidden" name="id" value="' . htmlspecialchars($row['customer_id']) . '">
                                              <div class="modal-header">
                                              <h5 class="modal-title" id="editModalLabel' . $row['customer_id'] . '">Modifier le Client</h5>
                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                              </div>
                                              <div class="modal-body">
                                              <div class="mb-3">
                                                  <label class="form-label">Prénom</label>
                                                  <input type="text" name="first_name" class="form-control" value="' . htmlspecialchars($row['first_name']) . '" required>
                                              </div>
                                              <div class="mb-3">
                                                  <label class="form-label">Nom</label>
                                                  <input type="text" name="last_name" class="form-control" value="' . htmlspecialchars($row['last_name']) . '" required>
                                              </div>
                                              <div class="mb-3">
                                                  <label class="form-label">Email</label>
                                                  <input type="email" name="email" class="form-control" value="' . htmlspecialchars($row['email']) . '" required>
                                              </div>
                                              <div class="mb-3">
                                                  <label class="form-label">Téléphone</label>
                                                  <input type="tel" name="phone_number" class="form-control" value="' . htmlspecialchars($row['phone_number']) . '">
                                              </div>
                                              <div class="mb-3">
                                                  <label class="form-label">Adresse</label>
                                                  <input type="text" name="address" class="form-control" value="' . htmlspecialchars($row['address']) . '">
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
                    endwhile; ?>
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
    const tableBody = document.getElementById("customerTableBody");
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
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