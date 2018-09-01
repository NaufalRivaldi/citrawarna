	<div class="row justify-content-center">
			<div class="footer">	
				&copy; Refo Junior - 2018
			</div>	
		</div>	
	</div>	
	
	<script src="<?= base_url('assets/js/jquery-3.2.1.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/jquery-ui.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/custom.js') ?>"></script>
	<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<!-- plugin slide di inspirasi -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.0/modernizr.js"></script>
	<script src="<?= base_url('assets/carousel-3d/dist/jquery.carousel-3d.js') ?>" ></script>
	<script src="<?= base_url('assets/javascript-detect-element-resize/jquery.resize.js') ?>" ></script>
	<script src="<?= base_url('assets/node_modules/jquery.waitforimages/dist/jquery.waitforimages.js') ?>"></script>
	
	<script>

	$.extend( true, $.fn.dataTable.defaults, {
		"pageLength": 25
	} );
		$(document).ready( function () {
			$('#myTable').DataTable();
		} );

		
	</script>
</body>
</html>