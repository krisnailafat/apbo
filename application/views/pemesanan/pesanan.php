    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

        <div class="row">
            <div class="col-lg">

                <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

                <?= $this->session->flashdata('message'); ?>

                <div class="row justify-content-between align-items-end mb-2">
                    <div class="col-auto">
                        <a href="<?= base_url('pemesanan/buatpesanan')  ?>" class="btn btn-primary btn-lg ">Buat Pesanan + </a>
                    </div>
                    <div class="col-auto">
                        <button href="" class="btn btn-secondary btn-lg" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-print"></i> Cetak PDF</button>
                    </div>
                </div>

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
                                        <th scope="col">Sprei</th>
                                        <th scope="col">Selimut</th>
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
                                        <th scope="col">Sprei</th>
                                        <th scope="col">Selimut</th>
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
                                            <td><?= $dp['sprei']; ?></td>
                                            <td><?= $dp['selimut']; ?></td>
                                            <td>Rp. <?php echo number_format($dp['harga'], 2, ',', '.')  ?></td>
                                            <td><?= $dp['status']; ?></td>
                                            <td><?= $dp['admin']; ?></td>
                                            <td><?= date('d F Y', $dp['date_created']); ?></td>
                                            <td>
                                                <a class="badge badge-warning" href="<?= base_url('pemesanan/editPesanan/') . $dp['id_pesanan']; ?>">Edit</a>
                                                <a class="badge badge-danger" href="<?= base_url('pemesanan/deletePesanan/') . $dp['id_pesanan']; ?>" onclick="return confirm('Are you sure delete this data?');">Delete</a>
                                                <!-- <a class="badge badge-success" href="" >Ganti Status</a> -->
                                                <div class="dropdown">
                                                    <a class="badge badge-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#fff;">Ganti Status</a>
                                                    <div class="dropdown-menu p-3" aria-labelledby="dropdownMenuButton">
                                                        <a href="<?= base_url('pemesanan/editBelumSelesaiPesanan/') . $dp['id_pesanan']; ?>" class="btn btn-outline-primary btn-sm cm btn-block" onclick="return confirm('Ganti status?');">Belum selesai</a>
                                                        <a href="<?= base_url('pemesanan/editDiProsesPesanan/') . $dp['id_pesanan']; ?>" class="btn btn-outline-primary btn-sm cm btn-block" onclick="return confirm('Ganti status?');">Di Proses</a>
                                                        <a href="<?= base_url('pemesanan/editSudahSelesaiPesanan/') . $dp['id_pesanan']; ?>" class="btn btn-outline-primary btn-sm cm btn-block" onclick="return confirm('Ganti status?');">Sudah selesai</a>
                                                    </div>
                                                </div>
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= site_url('pemesanan/cetak_periode')  ?>" method="post">
                        <div class="form-group row d-flex ">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Dari</label>
                            <div class="col-sm-5">
                                <input type="date" class="form-control" name="tgl_a" id="tgl_a" required>
                            </div>
                        </div>
                        <div class="form-group row d-flex ">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Sampai</label>
                            <div class="col-sm-5">
                                <input type="date" class="form-control" name="tgl_b" required>
                            </div>
                        </div>
                        <button type="submit" name="cetak_periode" value="cetak" class="btn btn-primary" target="_blank">Cetak Periode</a>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="<?= site_url('pemesanan/cetak')  ?>" type="button" class="btn btn-primary" target="_blank">Cetak Semua</a>
                </div>
            </div>
        </div>
    </div>

    </div>
    <!-- End of Main Content -->