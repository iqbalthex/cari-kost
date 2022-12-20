<div class="modal fade" id="kostModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalLabel">Tambah data kost</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="edit_kost.php" method="post">
        <input type="hidden" name="id" />
        <div class="modal-body">
          <div class="input-group mb-2">
            <label class="input-group-text" for="kost-nama">Nama kost</label>
            <input type="text" class="form-control" id="kost-nama" name="nama" required />
          </div>
          <div class="input-group mb-2">
            <label class="input-group-text" for="harga">Harga per bulan</label>
            <input type="number" class="form-control" id="harga" name="harga" min="0" step="1000" required />
          </div>
          <div class="input-group mb-2">
            <label class="input-group-text" for="kost-status">Status</label>
            <select class="form-select" id="kost-status" name="status">
              <option value="laki-laki">Laki-laki</option>
              <option value="perempuan">Perempuan</option>
            </select>
          </div>
          <div class="input-group mb-2">
            <label class="input-group-text" for="tersedia">Kamar tersedia</label>
            <input type="number" class="form-control" id="tersedia" name="tersedia" required />
          </div>
          <div class="input-group">
            <label class="input-group-text" for="lat">Latitude</label>
            <input type="text" class="form-control" id="lat" name="lat" required />
            <label class="input-group-text" for="lng">Longitude</label>
            <input type="text" class="form-control" id="lng" name="lng" required />
            <button id="set-dest" class="btn btn-outline-secondary">Ubah</button>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
          <input type="hidden" name="mode" />
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>