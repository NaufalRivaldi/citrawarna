<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link <?php if($menu == 1) echo "active" ?>" href="<?= base_url('backend/dashboard') ?>">
              <i class="fa fa-home"></i> &nbsp;
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if($menu == 2) echo "active" ?>" href="<?= base_url('backend/artikel') ?>">
              <i class="fa fa-file"></i> &nbsp;
              Artikel
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="anggota.php">
              <i class="fa fa-image"></i> &nbsp;
              Slideshow
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="peminjaman.php">
              <i class="fa fa-shopping-cart"></i>&nbsp; 
              Barang
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="angsuran.php">
              <i class="fa fa-database"></i>&nbsp; 
              Raw Data
            </a>
          </li>
        </ul>
      </div>
      <p style="font-size:12px;" align="center">Copyright 2018 - Refo Junior</p>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
     