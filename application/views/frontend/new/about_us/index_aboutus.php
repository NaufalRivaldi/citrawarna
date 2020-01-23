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
        <section class="ftco-section mt-5">
        <div class="container mt-5">
          <div class="row">
            <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
              <a href="portfolio.html" class="image" style="background-image: url('<?= base_url('assets/newtemplate2020/images/depan.jpg')?>'); " data-scrollax=" properties: { translateY: '-20%'}">
              </a>
              <div class="text">
                <h4 class="subheading"></h4>
                <h2 class="heading"><a href="#">Toko Cat <strong>Citra Warna</strong></a></h2>
                <p>Toko cat di Bali yang menyediakan berbagai kebutuhan pengecatan anda, Citra Warna memiliki berbagai macam produk berkualitas dengan harga yang kompetitif. Saat ini Citra Warna memiliki 22 cabang yang terletak di provinsi Bali, Lombok, Sulawesi Selatan dan akan terus berkembang ke provinsi lainnya. Dengan hadirnya toko cat kami dilingkungan anda, kami berharap dapat menjadi toko cat terdekat anda serta memudahkan dalam memenuhi kebutuhan pengecatan anda.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="ftco-section bg-light">
        <div class="container">
            <div class="row no-gutters justify-content-center ">
                <div class="col-md-7 text-center heading-section ftco-animate">
                  <!-- <span class="subheading">Works</span> -->
                  <h2 class="mb-4">Visi & Misi</h2>
                  <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p> -->
                </div>
              </div>
            <div class="row no-gutters justify-content-center">
                <div class="col-md-5 text-center heading-section ftco-animate pr-5">
                  <b>Membentuk karakter guna kesejahteraan bersama di PT. Citra Warna Jaya Abadi</b>
                </div>
                <div class="col-md-5 text-left heading-section ftco-animate pr-5">
                  <ul>
                    <li>Memberikan pelayanan dan edukasi pengecatan yang optimal kepada pelanggan</li>
                    <li>Memberikan pilihan produk yang berkualitas dengan pilihan yang lengkap</li>
                    <li>Memberikan harga yang kompetitif</li>
                  </ul>
                </div>
              </div>
          </div>
      </section>

      <section class="ftco-section">
        <div class="container">
            <div class="row no-gutters justify-content-center ">
              <div class="col-md-7 text-center heading-section ftco-animate">
                <!-- <span class="subheading">Works</span> -->
                <h2 class="mb-4">Budaya Organisasi</h2>
                <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p> -->
              </div>
            </div>
              <div class="row no-gutters justify-content-center">
                <div class="col-md-8 ftco-animate mb-4">
                  <img style="max-width: 100%; height: auto;" src="<?= base_url('assets/newtemplate2020/images/budayaa.png')?>" alt="">
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