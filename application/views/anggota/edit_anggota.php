<form method="post" action="<?= base_url() ?>anggota/update">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Id Anggota</label>
    <input type="text" name="id_anggota" value="<?= $data['id_anggota']; ?>" class="form-control" readonly>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nama Anggota</label>
    <input type="text" name="nama_anggota" value="<?= $data['nama_anggota'] ?>"  class="form-control" placeholder="Nama Anggota" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
    <select name="jenkel" class="form-control" required>
    <?php
        if ($data['jenkel'] == "laki-laki") {?>
                <option value="laki-laki" selected>Laki-laki</option>
                <option value="perempuan">Perempuan</option>
        <?php }else{?>
                <option value="laki-laki">Laki-laki</option>
                <option value="perempuan" selected>Perempuan</option>  
        <?php }
    ?>
    </select>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Alamat</label>
    <textarea name="alamat" class="form-control" cols="30" rows="5" required><?= $data['alamat'] ?></textarea>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">No Handpone</label>
    <input type="text" name="no_hp" value="<?= $data['no_hp']; ?>" class="form-control" placeholder="No Handpone" required>
  </div>
  <a href="<?= base_url() ?>anggota" class="btn btn-warning">Batal</a>
  <button type="submit" class="btn btn-primary">Update</button>
</form>