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