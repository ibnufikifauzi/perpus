<div class="card shadow mb-4" >
        <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
        <div class="card-body">
        <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nama Peminjam</th>
                                <th>Judul Buku</th>
                                <th>Tanggal Pinjam</th>
                                <th>Tanggal Kembali</th>
                                <th>Tanggal Di Kembalikan</th>
                            </tr>
                        </thead>
                    <tbody>
                      <?php 

                      $no = 1;
                        foreach ($data as $row) {?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $row->nama_anggota; ?></td>
                            <td><?= $row->judul_buku; ?></td>
                            <td><?= shortdate_indo($row->tgl_pinjam); ?></td>
                            <td><?= shortdate_indo($row->tgl_kembali); ?></td>
                            <td><?= shortdate_indo($row->tgl_kembalikan); ?></td>
                        </tr>

                    <?php }
                      ?>
                </tbody>
            </table>
        </div>
</div>