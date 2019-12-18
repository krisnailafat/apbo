<!-- Header -->
<div class="container">
    <a href="<?= base_url() ?>">
        <p class="mt-1 text-dark-50">Kembali</p>
    </a>
    <header class="bg-light py-4 mb-4">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-md-8">
                    <h1 class="display-4 text-dark mt-5 mb-2">Landrya</h1>

                    <p class="lead mb-5 text-dark-50">Cari pesanan masukan nomor hp</p>
                    <form action="<?= base_url('home/caripesanan'); ?>" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="keyword" placeholder="Cari pesanan masukan nomor hp" aria-label="Cari pesanan masukan nomor hp" aria-describedy="button" autocomplete="off">
                            <div class="input-group-append">
                                <input style="height: 40px; line-height: 10px;" class="btn btn-primary" type="submit" name="submit">
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">
        <?php if (empty($datapesanan)) : ?>
            <div class="alert alert-danger mb-5 pb-5 mt-5" role="alert">
                data not found!
            </div>
        <?php else : ?>

            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <!-- <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> -->
                        <table class="table table-hover" id="dataTable" width="100%">
                            <thead>
                                <tr>
                                    <th scope="col">Nomor Hp</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                        foreach ($datapesanan as $dp) : ?>
                                    <tr>
                                        <td><?= $dp['nomor_hp']; ?></td>
                                        <td><?= substr($dp['name'], 0, 3); ?>***</td>
                                        <td>Rp. <?php echo number_format($dp['harga'], 2, ',', '.')  ?></td>
                                        <td><?= $dp['status']; ?></td>
                                        <td><?= date('d F Y', $dp['date_created']); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        <?php endif; ?>

    </div>

    <!-- end card -->

</div>
</div>