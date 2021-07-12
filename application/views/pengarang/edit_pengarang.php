<form method="post" action="<?= base_url() ?>pengarang/update">

<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Id Pengarang</label>
    <input type="text" name="id_pengarang" value="<?= $data['id_pengarang'] ?>"  class="form-control" readonly >
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nama Pengarang</label>
    <input type="text" name="nama_pengarang" value="<?= $data['nama_pengarang'] ?>" class="form-control" placeholder="Nama Pengarang" required>
  </div>

  <a href="<?= base_url() ?>pengarang" class="btn btn-warning">Batal</a>
  <button type="submit" class="btn btn-primary">Update</button>
</form>