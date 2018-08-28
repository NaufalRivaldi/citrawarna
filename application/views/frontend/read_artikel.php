<!-- LOAD HEADER -->
<?php $this->load->view('frontend/layout/header'); ?>
	<!-- LOAD NAVBAR -->
	<?php $this->load->view('frontend/layout/navbar'); ?>

	<div class="container-fluid">
		<br>
		<div class="container body-artikel">
			<div class="row">
				<div class="col-md-9">
					<div class="row justify-content-center">
						<h1><?= $artikel['judul'] ?></h1>
					</div>
					<div class="row justify-content-center">
						Post : <?= $artikel['tanggal'] ?>. Kategori : <?= $artikel['nama_kategori'] ?>
						<img src="<?= base_url('upload/artikel/').$artikel['img'] ?>" alt="<?= $artikel['img'] ?>" class="img-artikel">
					</div>
					<div class="row">
						<div class="isi-artikel">
							<?= $artikel['isi'] ?>
							<br>
							<?php //share facebook button 
							$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http"). "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>

							<iframe src="https://www.facebook.com/plugins/share_button.php?href=<?= $actual_link ?>&layout=button_count&size=small&mobile_iframe=true&appId=140351823309332&width=81&height=20" width="81" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
						</div>
					</div>
				</div>
				<div class="col-md-3 hidden-phone">
					<h2>Baca Juga</h2>
					<br>
					<?php $articles = $this->home_model->get_random_artikel(3);

					foreach($articles as $artikel) { ?>
						<div class="artikels">
							<a href="<?= base_url('artikel/read/').$artikel['link'] ?>">
								<div class="gmbr-artikels" style="background: url('<?= base_url() ?>/upload/artikel/thumbs/<?= $artikel['img'] ?>') no-repeat; background-position: center; background-size: cover;">
								<div class="text-artikels">
									<b><?= $artikel['judul'] ?></b>
								</div>
								</div>
							</a> 
						</div>
					<?php } ?>
				</div>
			</div>

				<div id="disqus_thread"></div>
					<script>

					/**
					*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
					*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
					/*
					var disqus_config = function () {
					this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
					this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
					};
					*/
					(function() { // DON'T EDIT BELOW THIS LINE
					var d = document, s = d.createElement('script');
					s.src = 'https://cwabali-com.disqus.com/embed.js';
					s.setAttribute('data-timestamp', +new Date());
					(d.head || d.body).appendChild(s);
					})();
					</script>
					<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>          
			
			
			<div class="row">
				<h2 style="margin:8px 0px 18px 18px">Artikel Populer</h2>
			</div>
			
			<div class="row">
				
				<?php $popular = $this->home_model->get_popular_artikel(); 

				foreach($popular as $artikel) { ?>
				<div class="col-md-4">
					<div class="artikels">
						<a href="<?= base_url('artikel/read/').$artikel['link'] ?>">
							<div class="gmbr-artikels" style="background: url('<?= base_url() ?>/upload/artikel/thumbs/<?= $artikel['img'] ?>') no-repeat; background-position: center; background-size: cover;">
							<div class="text-artikels">
								<b><?= $artikel['judul'] ?></b>
							</div>
							</div>
						</a> 
			
					</div>
				</div>
				<?php } ?>
			</div>
			<br>
		</div>
	</div>

	