<?php 
    if(!empty($this->session->flashdata('info'))) {?>
  <div class="alert alert-success" role="alert">
  <?= $this->session->flashdata('info'); ?>
</div>
    <?php }
?>

<div class="row">
    <div class="col-md-12">
        <a href="<?= base_url() ?>peminjaman/tambah_peminjaman" class="btn btn-success"><i class="fa fa-plus"></i>   Tambah Data Peminjaman</a>
    </div>
</div>

<br>

<div class="card shadow mb-4" >
        <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
        <div class="card-body">
        <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID Peminjaman</th>
                                <th>Peminjaman</th>
                                <th>Buku</th>
                                <th>Tanggal Pinjam</th>
                                <th>Tanggal Kembali</th>
                                <th>Status</th>
                                <th>Aksi</th >
                            </tr>
                        </thead>
                    <tbody>
                       <?php 
                       foreach ($data as $row) {
                           $tgl_kembali = new DateTime($row->tgl_kembali);
                           $tgl_sekarang = new DateTime();
                           $selisih = $tgl_sekarang->diff($tgl_kembali)->format("%a");
                           ?>
                            <tr>
                                <td><?= $row->id_pm; ?></td>
                                <td><?= $row->nama_anggota; ?></td>
                                <td><?= $row->judul_buku; ?></td>
                                <td><?= shortdate_indo($row->tgl_pinjam); ?></td>
                                <td><?= shortdate_indo($row->tgl_kembali); ?></td>
                                <td>
                                    <?php 
                                        if ($tgl_kembali >= $tgl_sekarang OR $selisih == 0){
                                            echo "<span class='label label-warning'>Belum Di Kembalikan</span>";
                                        }else{
                                            echo "Telat <b style = 'color:red;'>".$selisih."</b> Hari <br> <span class='label-danger'> Denda Perhari = 1000 </span>";
                                        }
                                    ?>
                                </td>
                                <td>
                                    <a href="<?= base_url() ?>peminjaman/kembalikan/<?= $row->id_pm; ?>" class="btn btn-primary btn-xs" onclick="return confirm('Yakin Ingin Melakukan Pengembalian ?');"> Pengembalian</a>
                                </td>
                            </tr>
                       <?php }
                       ?>
                </tbody>
            </table>
        </div>
</div>