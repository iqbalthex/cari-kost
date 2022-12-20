<?php
require_once '../config.php';

if(isset($_SESSION['user_id'])){
  header('Location: ../index.php');
}

if(isset($_POST['register'])){
  $username = htmlentities($_POST['username']);
  $password = htmlentities($_POST['password']);
  $status = htmlentities($_POST['status']);
  $username = mysqli_real_escape_string($conn, $username);
  $password = mysqli_real_escape_string($conn, $password);
  $status = mysqli_real_escape_string($conn, $status);

  $conn->query("INSERT INTO users VALUES(
    '',
    '$username',
    '$password',
    '$status'
  )");
  if($conn->affected_rows > 0){
    alert('Data berhasil ditambahkan!');
  }
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Simple Map</title>
	<meta name="viewport" content="initial-scale=1.0">
	<meta charset="utf-8">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<!--link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css" /-->

	<link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
</head>
<body class="d-grid text-center" style="height: 100vh">

<header>
  <h2 class="text-center mt-2">Panam Kost ID</h2>
</header>

<main class="d-flex justify-content-center h-100 bg-info" style="grid-area: 2/1/5">
  <div class="d-flex justify-content-center align-items-center align-self-center w-25 p-5 shadow rounded" style="background: lightblue">
    <form class="w-100 my-3" action="" method="post">
      <div class="form-floating mb-2">
        <input type="text" class="form-control" id="username" name="username" placeholder="Nama" required />
        <label for="username">Nama</label>
      </div>
      <div class="form-floating mb-2">
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required />
        <label for="password">Password</label>
      </div>
      <label class="form-label mt-2">Daftar sebagai</label>
      <div class="justify-content-center my-1">
        <input type="radio" class="btn-check" name="status" value="admin" id="admin" />
        <label class="btn btn-outline-secondary" for="admin">Admin</label>
        <input type="radio" class="btn-check" name="status" value="guest" id="guest" checked />
        <label class="btn btn-outline-secondary" for="guest">Guest</label>
      </div>
      <button type="submit" name="register" class="btn btn-primary my-2">Daftar</button>
      <p>Sudah memiliki akun? <a href="login_page.php"><b>Login</i></b></a></p>
    </form>
  </div>
</main>

<footer>
  <p>&copy; 2022 Pencarian kost</p>
</footer>

</body>
</html>