<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Fitness admin</title>
  <link rel="stylesheet" href="./css/vertical-layout-light/style.css">

  <!-- endinject -->
  <link rel="shortcut icon" href="./images/logo-black2.png" />
</head>
<style>
  input[type="email"]:focus,
  input[type="password"]:focus {
    border-color: black;
    outline: none;
  }
</style>



<?php
session_start();
require './database/db.php';

if(!empty($_SESSION["username"]) && !empty($_SESSION["user_id"]) ){
  header("Location: pages/dashboard.php");  
}   



// register user code 
// if (isset($_POST['submit'])) {

//     $username = "ayman ha"; 
//     $password = $_POST['password'];
//     $email = $_POST['email'];

//     // Hash the password
//     $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

//     // Prepare the statement
//     $stmt = $conn->prepare("INSERT INTO user (username, password, email) VALUES (?, ?, ?)");
//     $stmt->bind_param("sss", $username, $hashedPassword, $email); // Corrected here

//     if ($stmt->execute()) {
//         $message = "✅ User ajouté avec succès.";
//     } else {
//         $message = "❌ Erreur lors de l'ajout : " . $stmt->error;
//     }
//     $stmt->close();
// }


//login user code
if (isset($_POST['login'])) {

  $input = $_POST['email']; 
  $password = $_POST['password'];

  // Prepare SQL to check both username or email
  $stmt = $conn->prepare("SELECT id, username, email, password FROM user WHERE username = ? OR email = ?");
  $stmt->bind_param("ss", $input, $input);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();

    // Verify password
    if (password_verify($password, $user['password'])) {
      // Set session and redirect
      $_SESSION['user_id'] = $user['id'];
      $_SESSION['username'] = $user['username'];
      header("Location:pages/dashboard.php");
      exit();
    } else {
      $message = "❌ Incorrect password.";
    }
  } else {
    $message = "❌ User not found.";
  }

  $stmt->close();
}

?>



<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
    <?php if (!empty($message)) { ?>
        <div
          class="alert <?= strpos($message, '✅') !== false ? 'alert-success' : 'alert-danger' ?> alert-dismissible fade show"
          style="position:absolute; right:25px; top:25px" role="alert">
          <?= htmlspecialchars($message) ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
     <?php } ?>
         
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-5 mx-auto">
            <div class="auth-form-light text-left py-4 px-4 px-sm-5 rounded rounded-5 shadow-sm">
              <div class="d-flex flex-row justify-content-center align-items-end">
                <img src="./images/logo-black2.png" alt="logo" style="width: 130px;">
              </div>
              <form method="POST" class="pt-3">
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="InputEmail" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password" id="InputPassword" placeholder="Password">
                </div>
                <div class="mt-3">
                  <button type="submit" name="login" class="btn btn-dark font-weight-medium btn-block">SIGN IN</button>
                </div>
                <div class="my-3 d-flex justify-content-end align-items-center">

                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                <!-- <div class="mb-2">
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="ti-facebook mr-2"></i>Connect using facebook
                  </button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="register.html" class="text-primary">Create</a>
                </div> -->
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>

</body>

</html>