<div class="row">                       
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Anggota</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $anggota; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-3x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Banyak Jenis Buku</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $buku; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-swatchbook fa-3x text-blue-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Buku Di Pinjam
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $peminjaman; ?></div>
                                                </div>
                                                <div class="col">
                                                    <div class="">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                                <i class="fas fa-list fa-3x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pengembalian Buku</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $pengembalian; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-book-open fa-3x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="jumbotron jumbotron-fluid">
                        <div class="container">
                            <h1 class="display-4">Perpustakan Rakyat</h1>
                            <p class="lead">Aplikasi WEB sederhana pengelola data perpustakaan.</p>
                        </div>
                        </div>
                        <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                                    role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                    <h6 class="m-0 font-weight-bold text-primary">Deskripsi</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse show" id="collapseCardExample">
                                    <div class="card-body">
                                       Aplikasi Web Pengelola data perpustakaan sederhana yang mempunyai sitem pengelolaan Data Anggota,
                                       pengelolaan data peminjaman, data pengembalian ,selisih telat pengembalian buku, dan report peminjaman buku.
                                    </div>
                                </div>
                            </div>