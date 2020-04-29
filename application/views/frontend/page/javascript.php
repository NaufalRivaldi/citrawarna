<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

<!-- modal -->
<div class="modal fade" id="modalSearch" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cari Produk :</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('product/search') ?>" method="get">
                <div class="form-group">
                    <input type="search" name="search" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-warning"><i class="fa fa-search"></i> Cari</button>
                </form>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>
    
<script src="<?= base_url('assets/newtemplate2020/js/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/newtemplate2020/js/jquery-migrate-3.0.1.min.js') ?>"></script>
<script src="<?= base_url('assets/newtemplate2020/js/popper.min.js') ?>"></script>
<script src="<?= base_url('assets/newtemplate2020/js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('assets/newtemplate2020/js/jquery.easing.1.3.js') ?>"></script>
<script src="<?= base_url('assets/newtemplate2020/js/jquery.waypoints.min.js') ?>"></script>
<script src="<?= base_url('assets/newtemplate2020/js/jquery.stellar.min.js') ?>"></script>
<script src="<?= base_url('assets/newtemplate2020/js/owl.carousel.min.js') ?>"></script>
<script src="<?= base_url('assets/newtemplate2020/js/jquery.magnific-popup.min.js') ?>"></script>
<script src="<?= base_url('assets/newtemplate2020/js/aos.js') ?>"></script>
<script src="<?= base_url('assets/newtemplate2020/js/jquery.animateNumber.min.js') ?>"></script>
<script src="<?= base_url('assets/newtemplate2020/js/bootstrap-datepicker.js') ?>"></script>
<script src="<?= base_url('assets/newtemplate2020/js/scrollax.min.js') ?>"></script>

<script src="<?= base_url('assets/newtemplate2020/js/main.js') ?>"></script>

<!-- font awesome -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.js"></script>

<!-- data table -->
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready( function () {
        $('#myTable').DataTable();

        $('#location').change(function () {
            $('#form-location').submit();
        });
    } );
</script>