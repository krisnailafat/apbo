<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Laundrya <?= date('Y'); ?></span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery3.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url('assets/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('assets/'); ?>js/demo/datatables-demo.js"></script>


<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });


    $('.form-check-input').on('click', function() {
        const menuId = $(this).data('menu');
        const roleId = $(this).data('role');

        $.ajax({
            url: "<?= base_url('admin/changeaccess'); ?>",
            type: 'post',
            data: {
                menuId: menuId,
                roleId: roleId
            },
            success: function() {
                document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
            }
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        console.log('ready')
        $('.js-example-basic-single').select2({
            theme: "bootstrap"
        });
    });
</script>



<script type="text/javascript">
    $(document).ready(function() {
        let berat = 0;
        let sprei = 0;
        let selimut = 0;
        let harga = 0;
        $('.quantity').on('input', function() {
            // console.log('ready2')
            var form = $(this).closest('form');
            var totalAmt = 5000
            var quantity = parseFloat($(this).val());
            // result = totalAmt * quantity || 0
            berat = totalAmt * quantity || 0
            // $("#harga").val(result)
            if ($.isNumeric($(this).val())) {
                total_amount();
            } else {
                berat = 0
                total_amount();
            }
        })

        $('.quantity-sprei').on('input', function() {
            var form = $(this).closest('form');
            var quantity = parseFloat($(this).val());
            var totalAmt = 10000
            // var quantity = parseFloat($(this).val());
            sprei = totalAmt * quantity || 0
            // console.log('result', sprei)
            if ($.isNumeric($(this).val())) {
                total_amount();
            } else {
                sprei = 0
                total_amount();
            }
        })

        $('.quantity-selimut').on('input', function() {
            var form = $(this).closest('form');
            var quantity = parseFloat($(this).val());
            var totalAmt = 15000
            // var quantity = parseFloat($(this).val());
            selimut = totalAmt * quantity || 0
            // console.log('result', sprei)
            if ($.isNumeric($(this).val())) {
                total_amount();
            } else {
                selimut = 0
                total_amount();
            }
        })

        var total_amount = function() {
            harga = berat + sprei + selimut || 0
            // idr
            $("#harga").val(harga)
            console.log('result', parseFloat(harga))
        }
    });
</script>

<script type="text/javascript">
    $(window).on('load', function() {
        $('#newTambahUserModal').modal('show');
    });
</script>

<script type="text/javascript">
    // $(document).ready(function() {
    //     var passo = "<";
    //     console.log(passo)

    // })

    function nomorhp() {
        var x = document.getElementById("nama").value;
        console.log(x);
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>/pemesanan/userall",
            // data: JSON.stringify({
            //     id: x
            // }),
            success: function(result) {
                // console.log('result', result.data.nama)
                var arr = result.data.nama;
                let hasil = arr.filter(o => o.id === x);
                let nomor_hp = hasil[0].nomor_hp;
                // console.log('result', hasil[0].name)
                $("#nomor_hp").val(nomor_hp);
                // $("#div1").html(result);
            }
        });
    }
</script>

</body>

</html>