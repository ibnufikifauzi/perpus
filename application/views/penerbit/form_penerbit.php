<form method="post" action="<?= base_url() ?>penerbit/simpan">

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nama Penerbit</label>
    <input type="text" name="nama_penerbit"  class="form-control" placeholder="Nama Penerbit" required>
  </div>

  <a href="<?= base_url() ?>penerbit" class="btn btn-warning">Batal</a>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>