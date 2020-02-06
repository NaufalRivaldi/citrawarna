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
            <a class="nav-link <?php if($menu == 3) echo "active" ?>" href="<?= base_url('backend/slideshow') ?>">
              <i class="fa fa-image"></i> &nbsp;
              Slideshow
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if($menu == 4) echo "active" ?>" href="<?= base_url('backend/barang') ?>">
              <i class="fa fa-shopping-cart"></i>&nbsp; 
              Barang
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if($menu == 7) echo "active" ?>" href="<?= base_url('backend/detail_barang') ?>">
              <i class="fa fa-eye"></i>&nbsp; 
              Detail Barang
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if($menu == 5) echo "active" ?>" href="<?= base_url('raw') ?>">
              <i class="fa fa-database"></i>&nbsp; 
              Raw Data
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if($menu == 6) echo "active" ?>" href="<?= base_url('backend/cabang') ?>">
              <i class="fa fa-globe"></i>&nbsp; 
              Cabang
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if($menu == 8) echo "active" ?>" href="<?= base_url('admin/testimoni') ?>">
              <i class="fa fa-comments"></i>&nbsp; 
              Testimoni
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if($menu == 9) echo "active" ?>" href="<?= base_url('admin/lowongan') ?>">
            <i class="fa fa-user"></i>&nbsp; 
              Lowongan
            </a>
          </li>
        </ul>
      </div>
      <p style="font-size:12px;" align="center">Copyright 2018 - Refo Junior</p>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
     