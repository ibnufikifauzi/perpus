<form method="post" action="<?= base_url() ?>penerbit/update">

<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">ID Penerbit</label>
    <input type="text" name="id_penerbit" value="<?= $data['id_penerbit']; ?>"  class="form-control" readonly>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nama Penerbit</label>
    <input type="text" name="nama_penerbit" value="<?= $data['nama_penerbit']; ?>"  class="form-control" placeholder="Nama Penerbit" required>
  </div>

  <a href="<?= base_url() ?>penerbit" class="btn btn-warning">Batal</a>
  <button type="submit" class="btn btn-primary">Update</button>
</form>