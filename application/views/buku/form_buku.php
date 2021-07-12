<form method="post" action="<?= base_url() ?>buku/simpan">

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">ID Buku</label>
    <input type="text" name="id_buku" value="<?= $id_buku; ?>"  class="form-control" readonly>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Judul Buku</label>
    <input type="text" name="judul_buku"  class="form-control" required>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Pengarang</label>
    <select name="id_pengarang" class="form-control ">
        <option value=""> - Pilih Pengarang - </option>
        <?php 
        foreach ($pengarang as $row) {?>
            <option value="<?= $row->id_pengarang; ?>"><?= $row->nama_pengarang; ?></option>
        <?php }
        ?>
    </select>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Penerbit</label>
    <select name="id_penerbit" class="form-control ">
        <option value=""> - Pilih Penerbit - </option>
        <?php 
        foreach ($penerbit as $row) {?>
            <option value="<?= $row->id_penerbit; ?>"><?= $row->nama_penerbit; ?></option>
        <?php }
        ?>
    </select>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Tahun Terbit</label>
    <select name="tahun_terbit" class="form-control ">
        <option value=""> - Pilih Tahun - </option>
        <?php 
            for($tahun= 2000; $tahun<=2021; $tahun++){?>
                <option value="<?= $tahun ?>"><?= $tahun; ?></option>
            <?php }
        ?>
    </select>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Jumlah</label>
    <input type="number" name="jumlah" class="form-control">
  </div>

  <a href="<?= base_url() ?>buku" class="btn btn-warning">Batal</a>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>