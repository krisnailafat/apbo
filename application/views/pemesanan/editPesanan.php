<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <div class="col-lg-8">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>

    <form action="" method="post">
            <input type="hidden" name="id_pesanan" value="<?= $pesananById['id_pesanan']; ?>">
            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama Pelanggan</label>
                <div class="col-sm-10 ">
                    <select name="nama" id="nama" class="js-example-basic-single js-state form-control">
                        <?php foreach ($nama_pelanggan as $m) : ?>
                            <option value="<?= $m['id']; ?>" <?php if($pesananById['nama'] == $m['id']) {echo "selected"; } ?>>
                                <?= $m['name']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nomor_hp" class="col-sm-2 col-form-label">Nomor HP</label>
                <div class="col-sm-10">
                    <input type="text" name="nomor_hp" class="form-control" id="nomor_hp" value="<?= $pesananById['nomor_hp'] ?>">

                </div>
            </div>
            <div class="form-group row">
                <label for="berat" class="col-sm-2 col-form-label">Berat Cucian</label>
                <div class="col-sm-4 input-group">
                    <div class="input-group-append input-group">
                        <input type="number" step="any" max="10" name="berat" class="form-control quantity" id="berat" value="<?= $pesananById['berat'] ?>">
                        <span class="input-group-text">Kg @5.000</span>
                    </div>
                </div>
                <label for="sprei" class="col-sm-2 col-form-label">Sprei</label>
                <div class="col-sm-4 input-group">
                    <div class="input-group-append input-group">
                        <input type="number" step="any" max="10" name="sprei" class="form-control quantity-sprei" id="sprei" value="<?= $pesananById['sprei'] ?>">
                        <span class="input-group-text">Kg @10.000</span>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label  class="col-sm-2 col-form-label"></label>
                <div class="col-sm-4 input-group">
                    <div class="input-group-append input-group">
            
                    </div>
                </div>
                <label for="selimut" class="col-sm-2 col-form-label">Selimut</label>
                <div class="col-sm-4 input-group">
                    <div class="input-group-append input-group">
                        <input type="number" step="any" max="10" name="selimut" class="form-control quantity-selimut" id="selimut" value="<?= $pesananById['selimut'] ?>">
                        <span class="input-group-text">Kg @15.000</span>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="harga" class="col-sm-2 col-form-label">Harga Cucian</label>
                <div class="col-sm-4 input-group">
                    <div class="input-group-prepend input-group">
                        <span class="input-group-text">Rp.</span>
                        <input type="number" name="harga" class="form-control" id="harga" value="<?= $pesananById['harga'] ?>" readonly>
                    </div>
                </div>
            </div>
            <div class="form-group  justify-content-end">
                <div class="modal-footer ">
                    <a href="<?= base_url('pemesanan/pesanan'); ?>" class="btn btn-secondary float-left">back</a>
                    <button type="submit" class="btn btn-primary" onclick="return confirm('Data sudah sesuai?');" >Edit</button>
                </div>
            </div>
        </div>
    </div>

    </form>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->