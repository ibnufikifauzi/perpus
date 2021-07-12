<form method="post" action="<?= base_url() ?>buku/update">

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">ID Buku</label>
    <input type="text" name="id_buku" value="<?= $data['id_buku']; ?>"  class="form-control" readonly>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Judul Buku</label>
    <input type="text" name="judul_buku" value="<?= $data['judul_buku']; ?>"  class="form-control" required>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Pengarang</label>
    <select name="id_pengarang" class="form-control ">
    <?php
        foreach ($pengarang as $row) {
            if ($data['id_pengarang'] == $row->id_pengarang) {?>
                <option value="<?= $row->id_pengarang ?>" selected><?= $row->nama_pengarang; ?></option>
        <?php }else{?>
            <option value="<?= $row->id_pengarang ?>"><?= $row->nama_pengarang; ?></option>
       <?php }
    }
?>
    </select>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Penerbit</label>
    <select name="id_penerbit" class="form-control ">
        <?php
        foreach ($penerbit as $row) {
            if ($data['id_penerbit'] == $row->id_penerbit) {?>
                <option value="<?= $row->id_penerbit ?>" selected><?= $row->nama_penerbit; ?></option>
        <?php }else{?>
            <option value="<?= $row->id_penerbit ?>"><?= $row->nama_penerbit; ?></option>
       <?php }
    }
?>
    </select>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Tahun Terbit</label>
    <select name="tahun_terbit" class="form-control ">
        <option value=""> - Pilih Tahun - </option>
        <?php 
            for($tahun= 2000; $tahun<=2021; $tahun++){
                if ($data['tahun_terbit'] == $tahun) {?>
                    <option value="<?= $tahun; ?>"selected><?= $tahun; ?></option>
            <?php }else{?>
                <option value="<?= $tahun; ?>"><?= $tahun; ?></option>
           <?php }
            }
        ?>
    </select>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Jumlah</label>
    <input type="number" name="jumlah" value="<?= $data['jumlah']; ?>" class="form-control">
  </div>

  <a href="<?= base_url() ?>buku" class="btn btn-warning">Batal</a>
  <button type="submit" class="btn btn-primary">Update</button>
</form>