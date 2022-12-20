<section class="container mt-3">
  <table class="table table-success table-striped table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th>Nama</th>
        <th>Harga/3bln</th>
        <th>Harga/6bln</th>
        <th>Harga/tahun</th>
        <th>Status</th>
        <th>Kamar tersedia</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    <?php $n = 1 ?>
    <?php
      foreach($kosts as $kost):
        echo "<tr>
          <th>$n</th>
          <td class='text-start'>$kost[nama]</td>
          <td>" . ($kost['harga'] * 3) . "</td>
          <td>" . ($kost['harga'] * 6) . "</td>
          <td>" . ($kost['harga'] * 12) . "</td>
          <td>$kost[status]</td>
          <td>$kost[tersedia]</td>
          <td>";
          if ($_SESSION['user_status'] === 'admin'):
            echo "<a class='btn btn-primary p-1 me-2'
              data-id='$kost[id]'
              data-nama='$kost[nama]'
              data-harga='$kost[harga]'
              data-status='$kost[status]'
              data-tersedia='$kost[tersedia]'
              data-lat='$kost[latitude]'
              data-lng='$kost[longitude]'
              data-bs-toggle='modal'
              data-bs-target='#kostModal'
              onclick='setModal(\"Edit\",this)'>
              Edit
            </a>";
          endif;
        echo "<a class='btn btn-success p-1' href='#top'
              data-lat='$kost[latitude]'
              data-lng='$kost[longitude]'>
              Lihat map
            </a>
          </td>
        </tr>";
        $n++;
      endforeach;
    ?>
    </tbody>
  </table>
</section>