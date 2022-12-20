<?php

require_once 'config.php';

if (isset( $_POST['mode'] )) {
  if ($_POST['mode'] === 'Tambah') {
    $query = "INSERT INTO kosts(
      nama,
      latitude,
      longitude,
      tersedia,
      status,
      harga
    ) VALUES(
      '$_POST[nama]',
      '$_POST[lat]',
      '$_POST[lng]',
      $_POST[tersedia],
      '$_POST[status]',
      $_POST[harga]
    )";
    $result = $conn->query($query);
  } elseif ($_POST['mode'] === 'Edit') {
    $query = "UPDATE kosts SET
      nama = '$_POST[nama]',
      latitude = '$_POST[lat]',
      longitude = '$_POST[lng]',
      tersedia = $_POST[tersedia],
      status = '$_POST[status]',
      harga = $_POST[harga]
    WHERE id = $_POST[id]
    ";
    $result = $conn->query($query);
  }

  if ($conn->connect_errno === 0) {
    alert($_POST['kost'] . ' data berhasil!');
  } else {
    alert($_POST['kost'] . ' data gagal!');
  }
  header('Location: index.php'); 
}
