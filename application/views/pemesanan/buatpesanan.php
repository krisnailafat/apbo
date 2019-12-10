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

            <?php echo form_open_multipart('pemesanan/buatpesanan'); ?>
            <input type="hidden" name="id_user" value="<?= $user['id']; ?>">
            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama Pelanggan</label>
                <div class="col-sm-10 ">
                    <select name="nama" id="nama" class="js-example-basic-single js-state form-control">
                        <option value="">Pilih nama pelanggan</option>
                        <?php foreach ($nama_pelanggan as $m) : ?>
                            <option value="<?= $m['id']; ?>"><?= $m['name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nomor_hp" class="col-sm-2 col-form-label">Nomor HP</label>
                <div class="col-sm-10">
                    <input type="text" name="nomor_hp" class="form-control" id="nomor_hp" value="">

                </div>
            </div>
            <div class="form-group row">
                <label for="berat" class="col-sm-2 col-form-label">Berat Cucian</label>
                <div class="col-sm-4 input-group">
                    <div class="input-group-append input-group">
                        <input type="number" step="any" max="10" name="berat" class="form-control quantity" id="berat" value="">
                        <span class="input-group-text">Kg</span>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="harga" class="col-sm-2 col-form-label">Harga Cucian</label>
                <div class="col-sm-4 input-group">
                    <div class="input-group-prepend input-group">
                        <span class="input-group-text">Rp.</span>
                        <input type="number" name="harga" class="form-control" id="harga" value="" readonly>
                    </div>
                </div>
            </div>
            <div class="form-group justify-content-end">
                <div class="modal-footer ">
                    <button type="submit" class="btn btn-primary" onclick="return confirm('Data sudah sesuai?');" >Buat Pesanan</button>
                </div>
            </div>
        </div>
    </div>

    </form>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->