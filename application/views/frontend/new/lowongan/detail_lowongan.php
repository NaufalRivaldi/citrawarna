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
        <section class=" konten">
            <div class="container">
                <div class="card mb-3 text-dark">
                    <div class="card-header row">
                        <div class="col-md-1">
                            <span class="align-self-center font-icon">
                                <i class="fas fa-users"></i>
                            </span>
                        </div>
                        <div class="col-md-11">
                            <h3>Lowongan : <?= $title ?></h3>
                        </div>
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