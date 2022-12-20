<?php
require_once '../config.php';

if(isset($_SESSION['user_id'])){
  header('Location: ../index.php');
}

if(isset($_POST['login'])){
  $username = htmlentities($_POST['username']);
  $password = htmlentities($_POST['password']);
  $username = mysqli_real_escape_string($conn, $username);
  $password = mysqli_real_escape_string($conn, $password);

  $result = $conn->query("SELECT * FROM users WHERE username = '$username'");
  if($result->num_rows === 0):
    alert('Username tidak ditemukan!');

  else:
    $user = $result->fetch_assoc();
    if($user['password'] !== $password){
      alert('Password salah!');
    } else {
      $_SESSION['user_id'] = $user['id'];
      $_SESSION['user_name'] = $user['username'];
      $_SESSION['user_status'] = $user['status'];
      header('Location: ../index.php');
      exit;
    }
  endif;
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
      <div class="form-floating">
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required />
        <label for="password">Password</label>
      </div>
      <button type="submit" name="login" class="btn btn-primary my-2">Masuk</button>
      <p>Belum memiliki akun? <a href="register_page.php"><b>Daftar</b></a></p>
    </form>
  </div>
</main>

<footer>
  <p>&copy; 2022 Pencarian kost</p>
</footer>

</body>
</html>