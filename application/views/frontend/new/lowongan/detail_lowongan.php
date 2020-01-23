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
                <div class="card">
                    <div class="card-header">
                        <h3>Lowongan : <?= $title ?></h3>
                    </div>
                    <div class="card-body">
                        <p>
                            Penempatan : <?= $lowongan['penempatan'] ?><br>
                        </p>
                        <hr>
                        <p>
                            <?= $lowongan['deskripsi'] ?>
                        </p>
                    </div>
                    <div class="card-footer">
                        <p><?= date('d F Y', strtotime($lowongan['tgl'])) ?></p>
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