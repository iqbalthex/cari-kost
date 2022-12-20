<!DOCTYPE html>
<html>
<head>
	<title>Simple Map</title>
	<meta name="viewport" content="initial-scale=1.0">
	<meta charset="utf-8">

	<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" /> -->

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

	<link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>
<body class="d-grid text-center bg-info">

<header class="d-flex justify-content-between align-items-center px-3">
  <h1><a class="navbar-brand" href="index.php">Panam Kost ID</a></h1>
  <div class="d-flex">
    <?php if ($_SESSION['user_status'] === 'admin'): ?>
      <button class="btn" data-bs-toggle="modal" data-bs-target="#kostModal" onclick="setModal('Tambah')"><i class="bi bi-plus-circle-fill"></i> Tambah data kost</button>
    <?php endif ?>
    <div class="dropdown">
      <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown">
        <i class="bi bi-person-fill"></i>
        <?= $_SESSION['user_name'] ?>
      </button>
      <ul class="dropdown-menu p-0">
        <li>
          <a class="dropdown-item py-2" href="logout.php">
            Profil <i class="bi bi-person-fill"></i>
          </a>
        </li>
        <li>
          <a class="dropdown-item py-2" href="logout.php">
            Keluar <i class="bi bi-box-arrow-right"></i>
          </a>
        </li>
      </ul>
    </div>
  </div>
</header>