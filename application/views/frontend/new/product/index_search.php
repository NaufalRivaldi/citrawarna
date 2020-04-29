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
                        <h2 class="mb-4"><?= $judul_kat ?></h2>
                    </div>
                </div>
                <div class="row">
                    <?php foreach($barangs as $barang): ?>
                        <div class="col-md-3 ftco-animate">
                            <div class="blog-entry img-product">
                                <a href="<?= base_url('product/view/').$barang['kd_merk'] ?>" class="img-block img-product" style="background: url('<?= base_url('upload/produk/thumbs/').$barang['foto']?>') no-repeat; background-position: center; background-size: cover;"></a>
                                <div class="text p-4 d-block">
                                    <div class="meta mb-3"></div>
                                    <h3 class="heading"><a href="<?= base_url('product/view/').$barang['kd_merk'] ?>" style=""><?= $barang['nm_barang'] ?></a></h3>
                                    <p><?= $barang['desk_kategori'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
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