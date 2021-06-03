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
        <section class="ftco-section contact-section ftco-degree-bg mt-5">
            <div class="container mt-5">
                <div class="row no-gutters justify-content-center">
                    <div class="col-md-7 text-center heading-section ftco-animate">
                        <h2>Lokasi Kami</h2>
                        <p class="mb-4">
                        "Temukan toko cat Citra Warna terdekat anda"
                        </p>
                    </div>

                    <div class="col-md-12 text-center">
                    <nav>
                    <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                        <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Bali</a>
                        <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Lombok</a>
                        <a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Makassar</a>
                        <a class="nav-link" id="nav-palembang-tab" data-toggle="tab" href="#nav-palembang" role="tab" aria-controls="nav-palembang" aria-selected="false">Palembang</a>
                    </div>
                    </nav>
                    <div class="tab-content mt-4" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="cabang_pc">
                                <div class="row text-left">
                                    <?php foreach($cabangBali as $bali) { ?>

                                    <div class="col-md-4 ftco-animate fadeInUp ftco-animated mb-3">
                                        <strong><?= $bali->nm_cbg; ?> </strong>
                                        <br>
                                        <?= $bali->alamat . '<br>' . $bali->telp ?><br>                                
                                    </div>

                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="cabang_pc">
                                <div class="row text-left">
                                    <?php foreach($cabangLombok as $bali) { ?>

                                    <div class="col-md-4 ftco-animate fadeInUp ftco-animated mb-3">
                                        <strong><?= $bali->nm_cbg; ?> </strong>
                                        <br>
                                        <?= $bali->alamat . '<br>' . $bali->telp ?><br>                                
                                    </div>

                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="cabang_pc">
                                <div class="row text-left">
                                    <?php foreach($cabangMakassar as $bali) { ?>

                                    <div class="col-md-4 ftco-animate fadeInUp ftco-animated mb-3">
                                        <strong><?= $bali->nm_cbg; ?> </strong>
                                        <br>
                                        <?= $bali->alamat . '<br>' . $bali->telp ?><br>                                
                                    </div>

                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="nav-palembang" role="tabpanel" aria-labelledby="nav-palembang-tab">
                            <div class="cabang_pc">
                                <div class="row text-left">
                                    <?php foreach($cabangPalembang as $bali) { ?>

                                    <div class="col-md-4 ftco-animate fadeInUp ftco-animated mb-3">
                                        <strong><?= $bali->nm_cbg; ?> </strong>
                                        <br>
                                        <?= $bali->alamat . '<br>' . $bali->telp ?><br>                                
                                    </div>

                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                    
                    
                </div>
            </div>
        </section>
        
        <div class="row">
            <div class="col-md-12">
                <script src="https://maps.google.com/maps/api/js?key=AIzaSyC4xI03S7A49UtfJRr8cyE7IMptn3XTPKw" 
                type="text/javascript"></script>
                <div id="map" style="width: 100%; height: 500px;"></div>
                <script type="text/javascript">
                    var locations = [
                        ['Citra Warna Imam Bonjol 1', -8.6831194,115.1961952, 1],
                        ['Citra Warna Imam Bonjol 2', -8.6980697,115.1855397, 2],
                        ['Citra Warna Buluh Indah', -8.6500855,115.1953654, 3],
                        ['Citra Warna Canggu', -8.6464189,115.1656472, 4],
                        ['Citra Warna Teuku Umar Barat', -8.6720333,115.1731858, 5],
                        ['Citra Warna Sunset Road', -8.696235,115.1758945, 6],
                        ['Citra Warna Gatot Subroto', -8.6357431,115.2299356, 7],
                        ['Citra Warna Ubud', -8.5258281,115.271246, 8],
                        ['Citra Warna Nusa Dua', -8.784843, 115.195003, 9],
                        ['Citra Warna Mahendradatta', -8.664949, 115.189706, 10],
                        ['Citra Warna Semabaung', -8.534997, 115.307913, 11],
                        ['Citra Warna Dalung', -8.635750, 115.175192],
                        ['Citra Warna Panjer', -8.677053, 115.239976],
                        ['Citra Warna Kediri Tabanan', -8.549910, 115.123622],
                        ['Citra Warna Singaraja', -8.120536, 115.072607],
                        ['Citra Warna Tibubeneng', -8.640428, 115.152664],
                        ['Citra Warna WR. Supratman', -8.640707, 115.252245],
                        ['Citra Warna Waturenggong', -8.678151, 115.224420],
                        ['Citra Warna Mataram', -8.587264, 116.126844],
                        ['Citra Warna Ahmad Yani', -8.626979, 115.207801],
                        ['Citra Warna Hayam Wuruk', -8.656681, 115.223152],
                        ['Citra Warna Palembang', -2.941286, 104.767345],
                        ['Citra Warna Makassar', -5.140920, 119.479929],
                    ];

                    var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 12,
                        center: new google.maps.LatLng(-8.6595943,115.2019129),
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    });

                    var infowindow = new google.maps.InfoWindow();

                    var marker, i;

                    for (i = 0; i < locations.length; i++) {  
                        marker = new google.maps.Marker({
                        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                        map: map
                        });

                        google.maps.event.addListener(marker, 'click', (function(marker, i) {
                        return function() {
                            infowindow.setContent(locations[i][0]);
                            infowindow.open(map, marker);
                        }
                        })(marker, i));
                    }
                </script>                
            </div>
        </div>

        <section class="ftco-section contact-section ftco-degree-bg mt-5">
            <div class="container bg-light  ">
                <div class="row no-gutters justify-content-center">
                    <div class="col-md-7 text-center heading-section ftco-animate">
                        <h2 class="mb-4">Hubungi Kami</h2>
                    </div>
                    </div>
                <div class="row block-9">
                <div class="col-md-6">
                    <img style="max-width: 100%; height: auto;" src="<?= base_url('assets/newtemplate2020/images/cs.png')?>" alt="">
                </div>
					<?php echo validation_errors(); ?>
                <div class="col-md-6 pr-md-5">
                    <form action="<?= base_url('send_email'); ?>" method="post" class="contact-form">
                    <div class="form-group">
                        <input id="name" name="name" class="form-control input-text js-input" placeholder="Nama" type="text" >
                    </div>
                    <div class="form-group">
                        <input id="email" name="email" class="form-control input-text js-input" type="email" placeholder="E-mail">
                    </div>
                    <div class="form-group">
                        <input id="no_telp" name="no_telp" class="form-control input-text js-input" type="text" placeholder="No Telp">
                    </div>
                    <div class="form-group">
                        <input id="subject" name="subject" class="form-control input-text js-input" type="text" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="message" cols="30" rows="7" class="input-text js-input form-control" placeholder="Ketikkan pesan"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Kirim Pesan" class="btn btn-primary py-3 px-5">
                    </div>
                    </form>
                
                </div>
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