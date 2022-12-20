<?php

require_once 'config.php';

if (!isset( $_SESSION['user_id'] )) {
  header('Location: page/login_page.php');
  exit;
}

if (isset( $_SESSION['msg'] )) {
  alert($_SESSION['msg']);
  unset($_SESSION['msg']);
}

$result = $conn->query("SELECT * FROM kosts");
$kosts = [];
while ($kost = $result->fetch_assoc()) {
  $kosts[] = $kost;
}

include_once 'edit_kost.php';
include_once 'components/header.php';

?>
<main id="top">
  <div id="map"></diV>
</main>
<?php

include_once 'components/search-section.php';
include_once 'components/kost-table.php';

if ($_SESSION['user_status'] === 'admin') include_once 'page/admin_page.php';

include_once 'components/footer.php';

?>