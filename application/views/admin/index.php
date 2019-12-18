    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-3 text-gray-800"><?= $title; ?></h1>
        <div class="row mb-5">
            <div class="col-sm-6 mb-3">
                <div class="card">
                    <div class="row no-gutters align-items-center">
                        <div class="card-body ">
                            <h5 class="card-title"><?= $judulBuatPesanan ?></h5>
                            <a href="<?= base_url('pemesanan/buatpesanan/'); ?>" class="btn btn-primary">Buat Pesanan +</a>
                        </div>
                        <div class="col-auto mr-5">
                            <i class="fas fa-cart-plus fa-5x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mb-3">
                <div class="card">
                    <div class="row no-gutters align-items-center">
                        <div class="card-body">
                            <h5 class="card-title"><?= $judulDaftarUser ?></h5>
                            <a href="<?= base_url('admin/tambahuser/'); ?>" data-target="#newTambahUserModal" data-target="newTambahUserModal" class="btn btn-primary">Daftar User Baru +</a>
                        </div>
                        <div class="col-auto mr-5">
                            <i class="fas fa-user-plus fa-5x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Role -->
            <div class="col-xl-3 col-md-6 mb-4">
                <a href="<?= base_url('pemesanan/pesanan/'); ?>">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Daftar Pesanan</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlahPesanan; ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-tshirt fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <a href="<?= base_url('admin/datauser/'); ?>">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">User</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlahUser; ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-user fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="row">
            <!-- Role -->
            <div class="col-xl-3 col-md-6 mb-4">
                <a href="<?= base_url('admin/role/'); ?>">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Role</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $role; ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-user-friends fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Kategori Post -->
            <div class="col-xl-3 col-md-6 mb-4">
                <a href="<?= base_url('article/kategori/'); ?>">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Kategori Post</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $kategori_post; ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-fw fa-thumbtack fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Post -->
            <div class="col-xl-3 col-md-6 mb-4">
                <a href="<?= base_url('article/post/'); ?>">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Post</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $post ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-fw fa-paper-plane fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Menu management -->
            <div class="col-xl-3 col-md-6 mb-4">
                <a href="<?= base_url('menu'); ?>">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Menu Management</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $user_menu ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-folder-open fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- MY Configuration -->
        <!-- <div class="card mb-3 col-lg pl-5">
            <div class="row no-gutters">
                <div class="col-md-3 mt-3">
                    <h5>Logo :</h5>
                    <img src="<?= base_url('assets/article/img/logo/') . $configuration['logo']; ?>" class="card-img">
                </div>
                <div class="col-md-8 pl-3">
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item active">Configuration</li>
                            <li class="list-group-item"><b>Name Company : </b><?= $configuration['name_company']; ?></li>
                            <li class="list-group-item"><b>Email :</b> <?= $configuration['email']; ?></li>
                            <li class="list-group-item"><b>Phone : </b><?= $configuration['phone']; ?></li>
                            <li class="list-group-item"><b>Address : </b><?= $configuration['address']; ?></li>
                            <li class="list-group-item"><b>Website : </b><?= $configuration['website']; ?></li>
                            <li class="list-group-item"><b>Deskription : </b><?= $configuration['deskription']; ?></li>
                            <li class="list-group-item"><b>Facebook : </b><?= $configuration['facebook']; ?></li>
                            <li class="list-group-item"><b>Instagram : </b><?= $configuration['instagram']; ?></li>
                            <li class="list-group-item"><b>Twitter : </b><?= $configuration['twitter']; ?></li>
                            <li class="list-group-item"><b>Update since : </b><small class="text-muted">Update since <?= date('d F Y', $configuration['time']); ?></small></li>
                            <li class="list-group-item"><a href="<?= base_url('admin/editConfiguration/') . $configuration['id_configuration']; ?>" class="btn btn-primary col-md-2 float-right">Edit</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> -->

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->