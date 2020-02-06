<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark <?= (!empty($this->uri->segment(1)))? 'ftco-navbar-dark' : 'ftco-navbar-light' ?>" id="ftco-navbar">
    <div class="container">
    <a class="navbar-brand" href="<?= site_url('/')?>">
        <img src="<?= site_url('assets/newtemplate2020/images/logo.png') ?>" alt="logo" class="logo-img">
        CITRA WARNA
        <!-- <h1 style="color:white" class="logo-head nav-item"><strong>CITRA WARNA</strong>   </h1> -->
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item  <?= ($this->uri->segment(1)=='')?"active":"" ?>" ><a href="<?= site_url('/') ?>"class="nav-link">Home</a></li>
            <li class="nav-item dropdown <?= ($this->uri->segment(1)=='product')?"active":"" ?>">
                <a class="nav-link" href="produk.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produk</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                <?php $nav = $this->db->order_by('parent_of', 'asc')->get('kat_barang')->result_array(); ?>
                <?php foreach($nav as $link) { ?>	
                    <a class="dropdown-item" href="<?= site_url('product/kategori/'.$link['kd_kategori']) ?>"><?= $link['desk_kategori'] ?></a>		
                <?php } ?>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link <?= ($this->uri->segment(1)=='artikel')?"active":"" ?>" href="" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Artikel</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                <?php $kat = $this->home_model->get_kategori(); ?>
                <a class="dropdown-item" href="<?= site_url('artikel') ?>">Semua Artikel</a>
                <?php foreach($kat as $row) { ?>	
                    <a class="dropdown-item" href="<?= site_url('kategori/lists/').strtolower($row['id_kategori']) ?>"><?= $row['nama_kategori'] ?></a>	
                <?php } ?>
                </div>
            </li>
            <li class="nav-item"><a href="https://konsultasi.cwabali.com/" class="nav-link">Konsultasi Warna</a></li>
            <li class="nav-item <?= ($this->uri->segment(1)=='aboutUs')?"active":"" ?>"><a href="<?= site_url('aboutUs') ?>" class="nav-link">Tentang Kami</a></li>
            <li class="nav-item <?= ($this->uri->segment(1)=='contact')?"active":"" ?>"><a href="<?= site_url('contact') ?>" class="nav-link">Kontak</a></li>
            <li class="nav-item"><button class="nav-link btn btn-sm btn-warning" data-toggle="modal" data-target="#modalSearch"><i class="fas fa-search"></i></button></li>
        </ul>
    </div>
    </div>
</nav>
<!-- END nav -->