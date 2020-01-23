<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view('frontend/page/header') ?>
    </head>
    <body>
        <!-- navbar -->
        <?php $this->load->view('frontend/page/navbar') ?>
        <!-- navbar -->

        <!-- content -->
        <section class="ftco-section konten">
            <div class="container">
                <div class="row no-gutters justify-content-center mb-5">
                    <div class="col-md-7 text-center heading-section ftco-animate">
                        <!-- <span class="subheading">Works</span> -->
                        <h2 class="mb-4"><?= $kategori['nama_kategori'] ?></h2>
                    </div>
                </div>
                <div class="row">
                    <?php 
                    foreach($artikels as $artikel) { ?>
                    <div class="col-md-4 ftco-animate">
                        <div class="blog-entry">
                            <a href="<?= base_url('artikel/read/').$artikel['link'] ?>" class="block-20" style="background: url('<?= base_url('upload/artikel/thumbs/').$artikel['img'] ?>') no-repeat; background-position: center; background-size: cover;"></a>
                            <div class="text p-4 d-block">
                                <div class="meta mb-3">
                                    <div><a href="#"><?= $artikel['tanggal'] ?></a></div>
                                    <div><a href="#"><?= $artikel['nama_kategori'] ?></a></div>
                                </div>
                                <h3 class="heading"><a href="<?= base_url('artikel/read/').$artikel['link'] ?>"><?= $artikel['judul'] ?></a></h3>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <!-- content -->

        <!-- footer -->
        <?php $this->load->view('frontend/page/footer') ?>
        <!-- footer -->

        <!-- script -->
        <?php $this->load->view('frontend/page/javascript') ?>
        <!-- script -->
    </body>
</html>