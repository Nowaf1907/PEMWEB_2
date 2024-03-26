<?php
 include_once 'header.php';
 include_once 'sidebar.php';
?>

<!-- main.php -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1></h1>
          </div>
         
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"></h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
              <!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
</head>
<body>

<h2>Form Login</h2>
<form action="process_login.php" method="POST">
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username"><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password"><br><br>
    <input type="submit" value="Login">
</form>

</body>
</html>

<?php
// Hubungkan ke database
$host = 'localhost';
$dbname = 'nama_database';
$username = 'username_database';
$password = 'password_database';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}

// Ambil data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Query untuk mencari user berdasarkan username dan password
$query = "SELECT * FROM users WHERE username = :username AND password = :password";
$stmt = $conn->prepare($query);
$stmt->bindParam(':username', $username);
$stmt->bindParam(':password', $password);
$stmt->execute();

// Periksa apakah user ditemukan
if($stmt->rowCount() > 0) {
    // User ditemukan, redirect ke halaman utama
    session_start();
    $_SESSION['username'] = $username;
    header("Location: home.php");
} else {
    // User tidak ditemukan, kembalikan ke halaman login
    header("Location: login.php");
}
?>


<?php
   include_once 'footer.php';
  ?>