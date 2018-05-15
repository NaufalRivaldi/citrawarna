<!-- LOAD HEADER -->
<?php $this->load->view('frontend/layout/header'); ?>
	<!-- LOAD NAVBAR -->
	<?php $this->load->view('frontend/layout/navbar'); ?>
	
		<?php $this->load->view($content) ?>

		<div class="container">
			<!-- LOKASI SECTION -->
			<?php $this->load->view('frontend/layout/cabang') ?>

			<!-- MAPS SECTION -->
			<?php $this->load->view('frontend/layout/maps') ?>

			<?php $this->load->view('frontend/layout/contact_form') ?>
		</div>



		<?php $this->load->view('frontend/layout/footer') ?>