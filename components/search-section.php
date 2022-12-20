<section class="container">
  <h3 class="pt-2">Cari kost</h3>
  <div class="d-flex row justify-content-between bg-info py-2">
    <div class="text-start col">
      <label class="form-label" for="nama"><b>Nama</b></label>
      <input class="form-control" type="text" id="nama" name="nama" />
    </div>
    <div class="text-start col">
      <label class="form-label" for="status"><b>Status</b></label>
      <select class="form-select" id="status" name="status">
        <option value="laki-laki">Laki-laki</option>
        <option value="perempuan">Perempuan</option>
      </select>
    </div>
    <div class="text-start col">
      <label class="form-label" for="min-price"><b>Harga</b></label>
      <div class="input-group">
        <span class="input-group-text">Min</span>
        <input type="number" class="form-control" name="min-price" min="0" step="1000" />
        <span class="input-group-text">Max</span>
        <input type="number" class="form-control" name="max-price" min="0" step="1000" />
      </div>
    </div>
  </div>
</section>
