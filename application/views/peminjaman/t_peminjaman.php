<?php 
    $tgl_pinjam = date('Y-m-d');

    $tujuh_hari = mktime(0,0,0,date("n"),date("j") + 7, date("Y"));
    $tgl_kembali = date('Y-m-d', $tujuh_hari);
?>

<form method="post" action="<?= base_url() ?>peminjaman/simpan">

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">ID Peminjaman</label>
    <input type="text" name="id_pm" value="<?= $id_peminjaman; ?>"  class="form-control" readonly>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Peminjam</label>
    <select name="id_anggota" class="form-control ">
        <option value=""> - Pilih Peminjam - </option>
        <?php 
        foreach ($peminjam as $row) {?>
            <option value="<?= $row->id_anggota; ?>"><?= $row->nama_anggota; ?></option>
        <?php }
        ?>
    </select>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Buku</label>
    <select name="id_buku" id="id_buku" class="form-control ">
        <option value=""> - Pilih Buku - </option>
        <?php 
        foreach ($buku as $row) {?>
            <option value="<?= $row->id_buku; ?>"><?= $row->judul_buku; ?></option>
        <?php }
        ?>
    </select>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Tanggal Pinjam</label>
            <input type="date" name="tgl_pinjam" value="<?= $tgl_pinjam; ?>" class="form-control" readonly>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Tanggal Pengembalian</label>
    <input type="date" name="tgl_kembali" value="<?= $tgl_kembali; ?>" class="form-control" readonly>
  </div>

  <a href="<?= base_url() ?>buku" class="btn btn-warning">Batal</a>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>

<script>

    $('#id_buku').change(function(){
        var id = $(this).val();
        $.ajax({
            url : '<?= base_url() ?>peminjaman/jumlah_buku',
            data : {id:id},
            method : 'post',
            dataType : 'json',
            success:function(hasil){
                var jumlah = JSON.stringify(hasil.jumlah);
                var jumlah1 = jumlah.split('"').join('');
                if (jumlah1 <= 0) {
                    alert('Buku Yang Anda Cari Kosong');
                    location.reload();
                }
            }
        });
    });

</script>