<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laporan</title>
    </head>
        <body>
            <div class="card shadow mb-4" >
                    <div class="card-header py-3">
                        <form method="post" action="<?= base_url() ?>laporan/peminjaman">

                            <div class="row">
                                <div class="col-md-2">
                                    <h4><b>Filter Laporan Peminjaman</b></h4>
                                </div>
                                <div class="col-md-2">
                                     <input type="text" name="tgl_awal" class="form-control" placeholder="Tanggal Awal" onfocus="(this.type='date')">
                                </div>
                                <div class="col-md-2">
                                     <input type="text" name="tgl_akhir" class="form-control" placeholder="Tanggal Akhir" onfocus="(this.type='date')">
                                </div>
                                <div class="col-md-2">
                                     <button type="submit" class="btn btn-primary btn-block">Filter</button>
                                </div>
                                <div class="col-md-2">
                                     <a href="<?= base_url() ?>laporan/peminjaman" class="btn btn-warning btn-block">Refresh</a>
                                </div>
                                <div class="col-md-2">
                                     <a href="<?= base_url() ?>laporan/pdf_peminjaman"  class="btn btn-danger btn-block " target="_blank">PDF</a>
                                </div>
                            </div>

                        </form>
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
                                        </tr>
                                    </thead>
                                <tbody>
                                    <?php
                                    foreach ($data as $row) {?>
                                    <tr>
                                        <td><?= $row->id_pm; ?></td>
                                        <td><?= $row->nama_anggota; ?></td>
                                        <td><?= $row->judul_buku; ?></td>
                                        <td><?= mediumdate_indo($row->tgl_pinjam); ?></td>
                                        <td><?= mediumdate_indo($row->tgl_kembali); ?></td>
                                    </tr>
                                    <?php }
                                    ?>
                            </tbody>
                        </table>
                    </div>
                </div>
        </body>
</html>

