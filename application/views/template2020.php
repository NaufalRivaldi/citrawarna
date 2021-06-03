<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view('frontend/page/header') ?>
    </head>
    <body>
        <!-- navbar -->
        <?php $this->load->view('frontend/page/navbar') ?>
        <!-- navbar -->
        <div class="hero-wrap js-fullheight">
            <div class="overlay"></div>
                <div id=""></div>
                <div class="container">
                    <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                    <div class="col-md-8 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                        <h1 class="" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong>TOKO CAT CITRA WARNA</strong></h1>
                        <h5 class="mb-5" style="color: white;">Kami hadir untuk memenuhi kebutuhan pengecatan anda.</h5>
                        <form action="<?= base_url('product/search') ?>" method="GET">
                            <div class="input-group mb-3">
                                <input type="Search" name="search" class="form-control" placeholder="Cari Produk Kami..." aria-describedby="button-addon1">
                                <div class="input-group-prepend">
                                    <button class="btn btn-warning" type="submit" id="button-addon1"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="starter">
        </div>

        <div class="bg-light">
            <section class="ftco-section-featured ftco-animate">
                <div class="container-fluid" data-scrollax-parent="true">     
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-8 text-justify heading-section ftco-animate">
                            <h4 class="h4"><strong class="ml-5">Toko Cat Citra Warna</strong> merupakan toko cat di Bali yang menyediakan berbagai kebutuhan pengecatan anda, Citra Warna memiliki berbagai macam produk berkualitas dengan harga yang kompetitif. Saat ini Citra Warna memiliki 25 cabang yang terletak di provinsi Bali, Lombok, Sulawesi Selatan, Sumatera Selatan dan akan terus berkembang ke provinsi lainnya. Dengan hadirnya toko cat kami dilingkungan anda, kami berharap dapat menjadi toko cat terdekat anda serta memudahkan dalam memenuhi kebutuhan pengecatan anda.</h4>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        
    
        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center mb-5 pb-5">
                    <div class="col-md-6 text-center heading-section ftco-animate">
                        <!-- <span class="subheading">Our Services</span> -->
                        <!-- <h2 class="mb-4">Web &amp; Mobile app design, bring your ideas to life</h2> -->
                        <h2>Servis Kamii</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services d-block text-center">
                            <div class="d-flex justify-content-center"><div class="icon color-4 d-flex justify-content-center mb-3">
                                <span class="align-self-center font-icon">
                                    <i class="fas fa-money-bill"></i>
                                </span>
                            </div>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Harga Kompetitif</h3>
                            <p>Dengan harga yang kompetitif, kami menyediakan berbagai macam barang yang berkualitas.</p>
                        </div>
                    </div>      
                </div>
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="d-flex justify-content-center">
                            <div class="icon color-1 d-flex justify-content-center mb-3">
                                <span class="align-self-center font-icon">
                                    <i class="fas fa-paint-roller"></i>
                                </span>
                            </div>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Produk Terlengkap</h3>
                            <p>Segala jenis cat dan keperluan pengecatan anda ada disini, mulai dari thinner, kuas, amplas dan sebagainya</p>
                        </div>
                    </div>      
                </div>
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="d-flex justify-content-center">
                            <div class="icon color-2 d-flex justify-content-center mb-3">
                                <span class="align-self-center font-icon">
                                    <i class="fas fa-palette"></i>
                                </span>
                            </div>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Banyak Pilihan Warna</h3>
                            <p>Warna apapun yang anda inginkan ada disini, karena kami juga memiliki mesin tinting untuk membuat cat dengan warna yang anda inginkan</p>
                        </div>
                    </div>    
                </div>
                </div>
                <div class="row">
                    <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services d-block text-center">
                            <div class="d-flex justify-content-center">
                                <div class="icon color-3 d-flex justify-content-center mb-3">
                                    <span class="align-self-center font-icon">
                                        <i class="fas fa-brush"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="media-body p-2 mt-3">
                                <h3 class="heading">Jasa Tes Kesehatan Tembok</h3>
                                <p>Menyediakan layanan jasa pengecekan kesiapan atau kesehatan tembok sebelum melakukan pengecatan, GRATIS tidak dipungut biaya (Khusus area denpasar)</p>
                            </div>
                        </div>      
                    </div>
                    <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services d-block text-center">
                            <div class="d-flex justify-content-center">
                                <div class="icon color-1 d-flex justify-content-center mb-3">
                                    <span class="align-self-center font-icon">
                                        <i class="fas fa-shopping-cart"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="media-body p-2 mt-3">
                                <h3 class="heading">Melayani Segala Partai Pembelian</h3>
                                <p>Pembelian dalam jumlah besar hingga lebih dari 10 pail, atau pembelian hanya 1 kaleng, kami akan tetap melayani anda dengan sebaik-baiknya</p>
                            </div>
                        </div>      
                    </div>
                    <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services d-block text-center">
                            <div class="d-flex justify-content-center">
                                <div class="icon color-2 d-flex justify-content-center mb-3">
                                    <span class="align-self-center font-icon">
                                        <i class="fas fa-truck"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="media-body p-2 mt-3">
                                <h3 class="heading">Delivery Service</h3>
                                <p>Kami juga melayani jasa pengiriman barang ke lokasi anda dengan ketentuan yang berlaku</p>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-section">
            <div class="container">
                <div class="row no-gutters justify-content-center mb-5">
                    <div class="col-md-7 text-center heading-section ftco-animate">
                        <!-- <span class="subheading">Works</span> -->
                        <h2 class="mb-4">Produk Unggulan Kami</h2>
                        <p>"Produk unggulan kami memiliki kualitas yang lebih baik dari produk lain"</p>
                    </div>
                </div>
                <?php $barangs = $this->home_model->get_barang_unggulan(8); ?>
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
                <div class="row">
                    <div class="col-md-12 text-center">
                        <span><a href="<?= base_url('product/kategori/45') ?>" class="btn btn-primary py-3 px-5 mt-3">Lihat Semua Produk</a></span>
                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-section testimony-section bg-light">
            <div class="container">
                <div class="row justify-content-center mb-5 pb-5">
                    <div class="col-md-7 text-center heading-section ftco-animate">
                        <!-- <span class="subheading">Customer Says</span> -->
                        <h2 class="mb-4">Testimonials</h2>
                        <p style="font-size:1em">"Tanggapan pelanggan terhadap kami"</p>
                    </div>
                </div>
                <div class="row ftco-animate">
                    <div class="col-md-12">
                        <div class="carousel-testimony owl-carousel ftco-owl">
                            <?php $testimoni = $this->testimoni_model->getData(); ?>
                            <?php foreach($testimoni as $testi): ?>
                            <div class="item text-center">
                                <div class="testimony-wrap p-4 pb-5">
                                    <div class="user-img mb-4" style="background-image: url('<?= base_url('assets/newtemplate2020/images/person_1.png') ?>')">
                                        <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                        </span>
                                    </div>
                                    <div class="text">
                                        <p class="mb-5">
                                            <?= $testi->keterangan ?>
                                        </p>
                                        <p class="name"><?= $testi->nama ?></p>
                                        <span class="position">
                                        <?php for($i=0; $i<$testi->bintang; $i++){ ?>
                                            <i class="fas fa-star"></i>
                                        <?php } ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-7 text-center heading-section ftco-animate">
                        <!-- <span class="subheading">Blog</span> -->
                        <h2>Artikel Terbaru</h2>
                    </div>
                </div>
                <div class="row">
                    <?php $articles = $this->home_model->get_new_artikel(3); ?>
                    <?php foreach($articles as $artikel): ?>
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
                    <?php endforeach ?>
                </div>
            </div>
        </section>

        <section class="ftco-section bg-light">
            <div class="container">
                <div class="row justify-content-center mb-5 pb-5">
                    <div class="col-md-6 text-center heading-section ftco-animate">
                        <h2 class="mb-4">Lowongan Kerja</h2>
                        <p>Kami memberikan kesempatan kepada anda untuk bergabung bersama kami.</p>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <?php $lowongan = $this->lowongan_model->getData(); ?>
                    <?php foreach($lowongan as $lowongan): ?>
                    <div class="col-md-3 ftco-animate">
                        <div class="media block-6 services d-block text-center">
                            <div class="d-flex justify-content-center">
                                <a href="<?= site_url('lowongan/detail/'. $lowongan->id) ?>">
                                    <div class="icon color-2 d-flex justify-content-center mb-3">
                                        <span class="align-self-center font-icon">
                                            <i class="fas fa-users"></i>
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="media-body p-2 mt-3">
                                <a href="<?= site_url('lowongan/detail/'. $lowongan->id) ?>">
                                    <h3 class="heading"><?= $lowongan->judul ?></h3>
                                </a>
                                <p><?= date('d F Y', strtotime($lowongan->tgl)) ?></p>
                            </div>
                        </div>      
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <?php $this->load->view('frontend/page/footer') ?>
    <!-- footer -->

    <!-- script -->
    <?php $this->load->view('frontend/page/javascript') ?>
    <!-- script -->
    </body>
</html>