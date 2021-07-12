<?php 
    if(!empty($this->session->flashdata('info'))) {?>
  <div class="alert alert-success" role="alert">
  <?= $this->session->flashdata('info'); ?>
</div>
    <?php }
?>

<div class="row">
    <div class="col-md-12">
        <a href="<?= base_url() ?>penerbit/tambah_penerbit" class="btn btn-success"><i class="fa fa-plus"></i>   Tambah Penerbit</a>
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
                                <th>ID penerbit</th>
                                <th>Nama Penerbit</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                    <tbody>
                    <?php 
                    foreach ($data as $row) {?>
                    <tr>
                        <td><?= $row->id_penerbit; ?></td>
                        <td><?= $row->nama_penerbit; ?></td>
                        <td>
                            <a href="<?= base_url() ?>penerbit/edit/<?= $row->id_penerbit; ?>" class="btn btn-success btn-sm"><i class="fas fa-edit small"></i></a>
                            <a href="<?= base_url() ?>penerbit/hapus/<?= $row->id_penerbit; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Ingin Menghapus');"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php }
                    ?>
                </tbody>
            </table>
        </div>
</div>