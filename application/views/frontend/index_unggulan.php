	<div class="container-fluid">
		<br>
		<div class="container body-artikel">	
		<h1>PRODUK UNGGULAN KAMI</h1>
		<br>	
			<div class="row justify-content-center">
				<?php foreach($barangs as $barang) { ?>
				<div class="col-md-3 centered">
					<a href="<?= base_url('product/view/').$barang['kd_merk'] ?>">
						<div class="text-product">See Details &nbsp; <i class="fa fa-eye"></i>
							<div class="img-product" style="background: url('<?= base_url() ?>upload/produk/thumbs/<?= $barang['foto']?>') no-repeat; background-position: center; background-size: cover; ">
							</div>
						</div>
						<p class="product-name"><?= $barang['nm_barang'] ?> </p>	
						<p class="kat-name">Cat Tembok</p>
					</a>
				</div>
				<?php } ?>
				
			</div>
		</div>
	</div>