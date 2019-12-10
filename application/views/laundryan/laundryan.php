    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3  text-gray-800"><?= $title; ?></h1>
        <h3 class="mb-4">
            <small class="text-muted"><?= $subTitle; ?></small>
        </h3>


        <!-- Role -->
        <div class="row">
            <!-- Role -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah pesanan</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $pesanan; ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-tshirt fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg">

                <!-- DataTales -->
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <!-- <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> -->
                            <table class="table table-hover" id="dataTable" width="100%">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">ID Pesanan</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Nomor Hp</th>
                                        <th scope="col">Berat</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Dibuat</th>
                                        <th scope="col">Tanggal</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">ID Pesanan</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Nomor Hp</th>
                                        <th scope="col">Berat</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Dibuat</th>
                                        <th scope="col">Tanggal</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($laundryan as $dp) : ?>
                                        <tr>
                                            <th scope="row"><?= $i++; ?></th>
                                            <td><?= $dp['id_pesanan']; ?></td>
                                            <td><?= $nama; ?></td>
                                            <td><?= $dp['nomor_hp']; ?></td>
                                            <td><?= $dp['berat']; ?></td>
                                            <td><?= $dp['harga']; ?></td>
                                            <td><?= $dp['status']; ?></td>
                                            <td><?= $dp['admin']; ?></td>
                                            <td><?= date('d F Y', $dp['date_created']); ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->