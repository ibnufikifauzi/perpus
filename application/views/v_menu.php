<?php 
    if ($this->session->userdata('level') == 'Administrator') {?>

<hr class="sidebar-divider my-0">

<li class="nav-item active">
    <a class="nav-link" href="<?= base_url() ?>dashboard">
            <i class="fas fa-home"></i>
        <span>Halaman Utama</span></a>
</li>

<hr class="sidebar-divider">

<li class="nav-item active">
    <a class="nav-link" href="<?= base_url() ?>anggota">
            <i class="fas fa-users"></i>
        <span>Data Anggota</span></a>
</li>


<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-book"></i>
        <span>Master Buku</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Master Buku :</h6>
            <a class="collapse-item" href="<?= base_url() ?>pengarang">Pengarang</a>
            <a class="collapse-item" href="<?= base_url() ?>penerbit">Penerbit</a>
            <a class="collapse-item" href="<?= base_url() ?>buku">Buku</a>
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-file-invoice"></i>
        <span>Transaksi</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Transaksi :</h6>
            <a class="collapse-item" href="<?= base_url() ?>peminjaman">Peminjaman</a>
            <a class="collapse-item" href="<?= base_url() ?>pengembalian">Pengembalian</a>
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-edit"></i>
        <span>Laporan</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Laporan :</h6>
            <a class="collapse-item" href="<?= base_url() ?>laporan/peminjaman">Laporan Peminjaman</a>
        </div>
    </div>
</li>

<hr class="sidebar-divider d-none d-md-block">

<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>
</ul>

    <?php }else{?>
    
        <hr class="sidebar-divider my-0">

<li class="nav-item active">
    <a class="nav-link" href="<?= base_url() ?>dashboard">
        <i class="fas fa-home"></i>
        <span>Halaman Utama</span></a>
</li>

<hr class="sidebar-divider">

<li class="nav-item active">
    <a class="nav-link" href="<?= base_url() ?>anggota">
        <i class="fas fa-users"></i>
        <span>Data Anggota</span></a>
</li>


<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-book"></i>
        <span>Master Buku</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Master Buku :</h6>
            <a class="collapse-item" href="<?= base_url() ?>pengarang">Pengarang</a>
            <a class="collapse-item" href="<?= base_url() ?>penerbit">Penerbit</a>
            <a class="collapse-item" href="<?= base_url() ?>buku">Buku</a>
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-file-invoice"></i>
        <span>Transaksi</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Transaksi :</h6>
            <a class="collapse-item" href="<?= base_url() ?>peminjaman">Peminjaman</a>
            <a class="collapse-item" href="<?= base_url() ?>pengembalian">Pengembalian</a>
        </div>
    </div>
</li>

<!-- <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-edit"></i>
        <span>Laporan</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Laporan :</h6>
            <a class="collapse-item" href="<?= base_url() ?>laporan/peminjaman">Laporan Peminjaman</a>
        </div>
    </div>
</li> -->

<hr class="sidebar-divider d-none d-md-block">

<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>
</ul>
    
    <?php }
?>