	<div class="row justify-content-center">
			<div class="footer">	
				&copy; Refo Junior & Naufal Rivaldi - 2018
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
</body>
</html>