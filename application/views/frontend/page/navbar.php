<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark <?= (!empty($this->uri->segment(1)))? 'ftco-navbar-dark' : 'ftco-navbar-light' ?>" id="ftco-navbar">
    <div class="container">
    <a class="navbar-brand" href="<?= base_url('/')?>">
        <img src="<?= base_url('assets/newtemplate2020/images/logo.png') ?>" alt="logo" class="logo-img">
        CITRA WARNA
        <!-- <h1 style="color:white" class="logo-head nav-item"><strong>CITRA WARNA</strong>   </h1> -->
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item  <?= ($this->uri->segment(1)=='')?"active":"" ?>" ><a href="<?= base_url('/') ?>"class="nav-link">Home</a></li>
            <li class="nav-item dropdown <?= ($this->uri->segment(1)=='product')?"active":"" ?>">
                <a class="nav-link" href="produk.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produk</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                <?php $nav = $this->db->order_by('parent_of', 'asc')->get('kat_barang')->result_array(); ?>
                <?php foreach($nav as $link) { ?>	
                    <a class="dropdown-item" href="<?= base_url('product/kategori/'.$link['kd_kategori']) ?>"><?= $link['desk_kategori'] ?></a>		
                <?php } ?>
                </div>
            </li>
            <li class="nav-item <?= ($this->uri->segment(1)=='artikel')?"active":"" ?>"><a href="<?= base_url('artikel') ?>" class="nav-link">Artikel</a></li>
            <li class="nav-item"><a href="https://konsultasi.cwabali.com/" class="nav-link">Konsultasi Warna</a></li>
            <li class="nav-item <?= ($this->uri->segment(1)=='aboutus')?"active":"" ?>"><a href="<?= base_url('aboutus') ?>" class="nav-link">Tentang Kami</a></li>
            <li class="nav-item <?= ($this->uri->segment(1)=='contact')?"active":"" ?>"><a href="<?= base_url('contact') ?>" class="nav-link">Kontak</a></li>
        </ul>
    </div>
    </div>
</nav>
<!-- END nav -->