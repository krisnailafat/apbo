    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

        <div class="row">
            <div class="col-lg">

                <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

                <?= $this->session->flashdata('message'); ?>

                <a href="<?= base_url('pemesanan/buatpesanan')  ?>" class="btn btn-primary btn-lg mb-2">Buat Pesanan + </a>

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
                                        <th scope="col">Action</th>
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
                                        <th scope="col">Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($datapesanan as $dp) : ?>
                                        <tr>
                                            <th scope="row"><?= $i++; ?></th>
                                            <td><?= $dp['id_pesanan']; ?></td>
                                            <td><?= $dp['name']; ?></td>
                                            <td><?= $dp['nomor_hp']; ?></td>
                                            <td><?= $dp['berat']; ?></td>
                                            <td><?= $dp['harga']; ?></td>
                                            <td><?= $dp['status']; ?></td>
                                            <td><?= $dp['admin']; ?></td>
                                            <td><?= date('d F Y', $dp['date_created']); ?></td>
                                            <td>
                                                <a class="badge badge-success" href="<?= base_url('pemesanan/editPesanan/') . $dp['id_pesanan']; ?>">Edit</a>
                                                <a class="badge badge-danger" href="<?= base_url('pemesanan/deletePesanan/') . $dp['id_pesanan']; ?>" onclick="return confirm('Are you sure delete this data?');">Delete</a>
                                            </td>
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