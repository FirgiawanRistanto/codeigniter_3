<!-- carousel slider -->
<div id="carouselExampleControls" class="carousel slide mt-5" data-bs-ride="carousel">
  <div class="carousel-inner">

    <?php 
    foreach ($slider as  $data) {
      $active = "";
      if ($data->id == 1) {
        $active = "active";
      }
    ?>
    <div class="carousel-item  <?php echo $active ?>">
      <img src="<?php echo ("assets/img/").$data->slider ?>" alt="<?php echo $data->caption ?>">
    </div>
   

    <?php } ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- end carousel slider -->

<!-- card berita -->
<div class="container mt-5">
  <h3 style="font-style: bold; font-weight: 700;">Berita Universitas</h3>
</div>

<div class="container mt-1 p-5">
  <div class="row">
    <div class="col-md-4">
    <div class="card mt-3" style="width: 23rem; cursor: pointer;">
  <img src="<?php echo base_url("assets/img/b1.jpg") ?>" class="card-img-top my-image" alt="...">
  <div class="card-body">
    <h5 class="card-text">Bekal Bersaing di Dunia Kerja, Mahasiswa Kearsipan Digital Unpad Ikuti Uji Kompetensi</h5>
    <p style="font-weight: 100; font-size: 12px;">25-10-2024</p>
  </div>
</div>
    </div>
    <div class="col-md-4">
    <div class="card mt-3" style="width: 23rem; cursor: pointer;">
  <img src="<?php echo base_url("assets/img/b2.jpg") ?>" class="card-img-top my-image" alt="...">
  <div class="card-body">
    <h5 class="card-text">Melalui Rangkaian Silaturahmi, Rektor Serap Aspirasi untuk Penyusunan Rencana Strategis</h5>
    <p style="font-weight: 100; font-size: 12px;">25-10-2024</p>
  </div>
</div>
    </div>
    <div class="col-md-4">
    <div class="card mt-3" style="width: 23rem; cursor: pointer;">
  <img src="<?php echo base_url("assets/img/b3.jpg") ?>" class="card-img-top my-image" alt="...">
  <div class="card-body">
    <h5 class="card-text">Mencari Ide Kreatif Kelola Sampah di Padjadjaran Green Innovation Summit 2024</h5>
    <p style="font-weight: 100; font-size: 12px;">25-10-2024</p>
  </div>
</div>
    </div>
  </div>
</div>

<div style="margin-top: -40px; margin-left: 50px;" class="container d-flex justify-content-end">
  <h6>Berita selengkapnya -></h6>
</div>
<!-- end card berita -->

<!-- form search -->
<div class="container mt-5 d-flex justify-content-center">
  <h2 style="font-style: bold; font-weight: 700;">Pencarian Program Pendidikan</h2>
</div>

<div class="container mt-4 d-flex justify-content-center">
    <select id="program" class="form-select" style="width: 70%; height: 100px">
        <option value="1">Administrasi Bisnis - Sarjana Administrasi Bisnis (S.A.B.)</option>
        <option value="2">Administrasi Bisnis - PSDKU Pangandaran - Sarjana Administrasi Bisnis (S.A.B.)</option>
        <option value="3">Administrasi Publik - Sarjana Administrasi Publik (S.A.P.)</option>
        <option value="4">Agribisnis - Sarjana Pertanian (S.P.)</option>
        <option value="5">Agroteknologi - Sarjana Pertanian (S.P.)</option>
    </select>
</div>

<div style="margin-right: 1000px;" class="container mt-3 d-flex justify-content-end">
    <div class="btn btn-outline-primary me-2">Informasi Beasiswa</div>
    <div class="btn btn-primary me-5">Daftar Sekarang</div>
</div>
<!-- end form search -->

<!--carousel -->
<div class="container py-5">
  <div class="row">
    <div class="col-md-6">
    <h1 class="fw-bold mb-4">Temui beberapa <br> dosen dan <br> peneliti kami</h1>
    <p style="font-weight: 600; font-size: 25px;">Berikut adalah beberapa <br> dosen dan peneliti yang <br> akan Anda temui</p>
    </div>
    <div class="col-md-6">
    <div id="cardSlider" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        
        <!-- Card 1 -->
        <div class="carousel-item active">
          <div class="card">
            <img src="<?php echo base_url("assets/img/yudha.jpg") ?>" class="card-img-top" alt="Dr. rer.nat. Yudha Prawira Budiman">
            <div class="card-body">
              <h5 class="card-title">Dr. rer.nat. Yudha Prawira Budiman Publikasikan Artikel di Chemical Reviews, Jurnal Kimia Terkemuka Dunia</h5>
              <p class="card-text">[Kanal Media Unpad] Dalam jejak karir seorang akademisi, dia akan dituntut lebih dari sekedar melakukan riset...</p>
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="carousel-item">
          <div class="card">
            <img src="<?php echo base_url("assets/img/anis.jpg") ?>" class="card-img-top" alt="Prof. Anis Yohana Chaerunisaa">
            <div class="card-body">
              <h5 class="card-title">Prof. Anis Yohana Chaerunisaa Teliti Kandungan Mineral Laut Dalam untuk Cegah Stunting</h5>
              <p class="card-text">[Kanal Media Unpad] Memiliki ketertarikan dalam meneliti berbagai manfaat mineral laut untuk...</p>
            </div>
          </div>
        </div>

        <!-- Card 3-->
        <div class="carousel-item">
          <div class="card">
            <img src="<?php echo base_url("assets/img/nasrul.jpg") ?>" class="card-img-top" alt="Prof. Nasrul Wathoni">
            <div class="card-body">
              <h5 class="card-title">Prof. Nasrul Wathoni Kembangkan Plester untuk Terapi Sariawan</h5>
              <p class="card-text">[Kanal Media Unpad] Hampir setiap orang khususnya di Indonesia pasti pernah mengalami...</p>
            </div>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="carousel-item">
          <div class="card">
            <img src="<?php echo base_url("assets/img/laili.jpg") ?>" class="card-img-top" alt="Laili Rahayu">
            <div class="card-body">
              <h5 class="card-title">Laili Rahayu Plus untuk Batas Timur Kota</h5>
              <p class="card-text">[Kanal Media Unpad] Peneliti yang fokus dalam pengembangan kawasan batas timur Kota...</p>
            </div>
          </div>
        </div>

      </div>

      <!-- Carousel Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#cardSlider" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#cardSlider" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    </div>
    </div>
  </div>
  <!-- end carousel -->

<!-- card explore -->
  <div class="container" style="text-align: center;">
    <h2>#ExploreUNPAD     |    <span style="font-style: italic; font-size: 20px;">Menjadi Universitas bereputasi dunia dan berdampak pada masyarakat</span></h2>
  </div>


  <div class="container my-4 mt-5">
  <div class="row g-3">
    
    <!-- card video -->
    <div class="col-md-6">
      <div class="card text-white">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/maZFY-Go6X8?si=2HuYMhED7SPyeqLK" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <div class="card-img-overlay-text">
          <h5 class="card-title"><i class="bi bi-play-circle"></i> Agenda Dies Natalis ke-67 Universitas Padjadjaran</h5>
        </div>
      </div>
    </div>

    <!-- card sholarship information -->
    <div class="col-md-6">
      <div class="card text-white">
        <img src="<?php echo base_url("assets/img/beasiswa.jpg") ?>" class="card-img" alt="Scholarship Information">
        <div class="card-img-overlay-text">
          <h5 class="card-title">Informasi Beasiswa</h5>
          <p class="card-text">Raih ambisi belajar Anda — ajukan permohonan beasiswa...</p>
        </div>
      </div>
    </div>

    <!-- card international student -->
    <div class="col-md-4">
      <div class="card text-white">
        <img src="<?php echo base_url("assets/img/inter.jpg") ?>" class="card-img" alt="International Students">
        <div class="card-overlay">
          <h6>International Students</h6>
          <p class="small">Kami menawarkan berbagai macam kesempatan belajar...</p>
        </div>
      </div>
    </div>

    <!-- card campus life -->
    <div class="col-md-4">
      <div class="card text-white">
        <img src="<?php echo base_url("assets/img/kekampus.jpg") ?>" class="card-img" alt="Campus Life">
        <div class="card-overlay">
          <h6>Kehidupan Kampus</h6>
          <p class="small">Bergabunglah dalam kehidupan kampus Universitas Padjadjaran...</p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card text-white">
        <img src="<?php echo base_url("assets/img/prestasi.jpg") ?>" class="card-img" alt="Academic Achievements">
        <div class="card-overlay">
          <h6>Prestasi Akademik</h6>
          <p class="small">Berbagai capaian prestasi yang diukur oleh sivitas akademika...</p>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- end card explore -->

