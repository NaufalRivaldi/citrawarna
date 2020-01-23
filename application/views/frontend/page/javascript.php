<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

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
<script src="<?= base_url('assets/newtemplate2020/js/jquery.timepicker.min.js') ?>"></script>
<script src="<?= base_url('assets/newtemplate2020/js/particles.min.js') ?>"></script>
<script src="<?= base_url('assets/newtemplate2020/js/particle.js') ?>"></script>
<script src="<?= base_url('assets/newtemplate2020/js/scrollax.min.js') ?>"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="<?= base_url('assets/newtemplate2020/js/google-map.js') ?>"></script>
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