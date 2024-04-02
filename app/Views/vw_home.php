<!DOCTYPE html>
<html lang="en"data-bs-theme="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Website PAUD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <link rel="stylesheet" href="blog.css">

  <link rel = "icon" href ="logo.png" 
        type = "image/x-icon">

<style>
    /* stylelint-disable stylistic/selector-list-comma-newline-after */

@font-face {
  font-family: fontAtas ;
  src: url(PicturamaFounder_PERSONAL_USE_ONLY.otf);
}

@font-face {
  font-family: fontAkira;
  src: url(Akira_Expanded__Demo.otf);
}

@font-face {
  font-family: fontSummer;
  src: url(Summer_Dream_Sans.ttf);
}

.carousel-control-prev-icon, .carousel-control-next-icon {
  height: 50px;
  width: 100px;
  color: aliceblue;

  outline: white;
}

.row mb-2 {
  height: fit-content;
} 

.blog-header-logo {
  font-family: fontAtas;
  font-size: 3.0rem;
}

.blog-header-logo:hover {
  text-decoration: none;
}

.carousel-inner{
  height: 500px;
}
.with-bg-image-1 {
  background-image: url("poto1.jpg");
  background-size: cover; 
  background-position: center; 
}

.with-bg-image-2 {
  background-image: url("poto2.jpg");
  background-size: cover; 
  background-position: center; 
}

.with-bg-image-3 {
  background-image: url("poto3.jpg");
  background-size: cover; 
  background-position: center; 
}

h4.pb-4.mb-4.fst-italic.border-bottom {
  font-family: fontAkira;
}

h1.display-5 {
  font-family: fontSummer;
}

h1, h2, h3, h4, h5 {
  font-family: "Playfair Display", Georgia, "Times New Roman", serif;
}

.flex-auto {
  flex: 0 0 auto;
}

.h-250 { height: 250px; }
@media (min-width: 768px) {
  .h-md-250 { height: 250px; }
}

/* Pagination */
.blog-pagination {
  margin-bottom: 4rem;
}

/*
 * Blog posts
 */
.blog-post {
  margin-bottom: 4rem;
}

.blog-post h3{
  font-family: fontSummer;
}

.blog-post ol li {
  font-family: fontAkira;
}
.blog-post ol li h5 {
  font-family: fontAkira;
}

.blog-post-meta {
  margin-bottom: 1.25rem;
  color: #727272;
}

.col-md-4 h4{
  font-family: fontSummer;
}
a.btn.btn-outline-primary.rounded-pill {
  display: block;
  width: fit-content; /* Opsional: Mengatur lebar elemen sesuai kontennya */
  margin: auto;
  text-align: center;
}

h2.display-5.link-body-emphasis.mb-1 {
  text-align: center;
  font-family: fontAkira;
}

h5.display-7{
  text-align: center;
  font-family: fontSummer;
}
    
</style>  

</head>

<style>


    </style>

<body>

  <div class="container">
    <header class="border-bottom lh-1 py-3">
      <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-6">
          <a class="blog-header-logo text-body-emphasis text-decoration-none" href="#">PAUD</a>
        </div>
        <div class="col-6 d-flex justify-content-end align-items-center">
          <a class="link-secondary" href="#" aria-label="Search" id="searchIcon">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"></circle><path d="M21 21l-5.2-5.2"></path></svg>
          </a>
          <div class="search-bar d-none">
            <!-- Kolom pencarian -->
            <input type="text" class="form-control" placeholder="Search...">
          </div>
          <script>
            const searchIcon = document.getElementById('searchIcon');
            const searchBar = document.querySelector('.search-bar');
          
            searchIcon.addEventListener('click', function () {
              searchBar.classList.toggle('d-none');
            });
          </script>
          
          <a class="btn btn-sm btn-outline-secondary" href="login">Login</a>
        </div>
      </div>
    </header>
  
    <div class="nav-scroller py-1 mb-3 border-bottom">
      <nav class="nav nav-underline justify-content-between">
        
      <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>formulirrr">Formulir</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>paud"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>tentang">Tentang kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>induk"></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" aria-current="page" href="/induk/guestview"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>datamurid"></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" aria-current="page" href="/absensi/guestview"></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" aria-current="page" href="/rekap/guestview"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>absensi"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>rekap"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>/logout"></a>
                    </li>
                
      </nav>
    </div>
  </div>

  <main class="container">

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active slide-1">
          <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary with-bg-image-1">
            <div class="col-lg-6 px-0">
              <h1 class="display-4 fst-italic">Salah satu Paud terbaik di Kota Bandung pada tahun ini</h1>
              <p class="lead my-3">Ayah rizal memilih untuk mendaftarkan anak nya di paud ini pada tahun sekarang</p>
            </div>  
          </div>
        </div>
    
        <!-- Slide 2 -->
        <div class="carousel-item slide-2">
          <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary with-bg-image-2">
            <div class="col-lg-6 px-0">
              <h1 class="display-4 fst-italic">Guru yang ramah terhadap anak didik menjadi daya tarik</h1>
              <p class="lead my-3">Juan salah satu anak didik di paud ini yang mengakui guru nya ramah</p>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item slide-3">
          <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary with-bg-image-3">
            <div class="col-lg-6 px-0">
              <h1 class="display-4 fst-italic">Banyak nya alat permainan di paud menjadikan anak didik lebih ceria</h1>
              <p class="lead my-3">Ibu surya sangat senang sekali melihat anak nya bermain di taman paud</p>
            </div>
          </div>
        </div>
      </div>
    
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
    </div>
  
    <div class="row g-5">
      <div class="col-md-8">
  
        <article class="blog-post">
          <h1 class="display-5 link-body-emphasis mb-1">Visi PAUD Al-Latief:</h1>
  
          <p>Menjadi Pusat Pendidikan Anak Usia Dini Terdepan di Indonesia pada Tahun 2044, yang Berfokus pada Pengembangan Potensi Anak Secara Holistik, Inovatif, dan Berkelanjutan.</p>
          <hr>
          <h3>MISI:</h3>
          <p>1. Menciptakan Lingkungan Pembelajaran yang Aman dan Mendukung: Menyediakan lingkungan belajar yang aman, nyaman, dan kondusif untuk pertumbuhan dan perkembangan anak, dengan mengedepankan aspek kesehatan, keamanan, dan kebersihan.</p>
          <p>2. Pengembangan Kurikulum yang Inovatif: Merancang dan mengimplementasikan kurikulum yang inovatif, yang mengintegrasikan pengetahuan, keterampilan, dan nilai-nilai untuk mengembangkan potensi anak secara maksimal.</p>
          <p>3. Pendidikan Karakter dan Kecakapan Hidup: Mengutamakan pendidikan karakter dan kecakapan hidup sebagai fondasi utama dalam setiap proses pembelajaran untuk membentuk anak yang mandiri, kreatif, dan memiliki integritas.</p>
          <p>4. Pengembangan Sumber Daya Manusia yang Berkualitas: Menginvestasikan waktu dan sumber daya untuk pengembangan profesional guru dan staf, agar mereka dapat memberikan pendidikan dan pengasuhan terbaik bagi anak-anak.</p>
          <p>5. Kerjasama dengan Orang Tua dan Masyarakat: Membangun kolaborasi yang erat dengan orang tua dan masyarakat untuk mendukung proses pendidikan anak secara menyeluruh.</p>
          <p>6. Pemanfaatan Teknologi dalam Pembelajaran: Mengintegrasikan teknologi secara efektif dalam proses pembelajaran untuk meningkatkan keterlibatan anak dan efisiensi pengajaran.</p>
          <p>7. Pengembangan Berkelanjutan dan Inovasi: Berkomitmen pada peningkatan kualitas pendidikan secara berkelanjutan melalui penelitian, evaluasi, dan inovasi yang berorientasi pada kebutuhan masa depan anak.</p>
          <br>  
         
          <h3>Menu Website Paud:</h3>
          <ul>
          <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>formulir">formulir</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>paud">buku pendaftaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>induk">buku induk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>datamurid">buku klaper</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" aria-current="page" href="/absensi/guestview">Daftar Absensi</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" aria-current="page" href="/rekap/guestview">Rekap Absensi Bulanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>absensi">Absensi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>rekap">Rekap</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>/logout">Logout</a>
                    </li>
          </ul>
          </dl>
          
        </article>

        <article class="blog-post">
          <h2 class="display-5 link-body-emphasis mb-1">Belum punya akun?</h2>
          <br>
          
          <h5 class="display-7">Klik tombol Sign Up dibawah!</h5>
        </article>
  
        <nav class="blog-pagination" aria-label="Pagination">
          <a class="btn btn-outline-primary rounded-pill" href="/register">Sign Up</a>
        </nav>
      </div>
  
      <div class="col-md-4">
        <div class="position-sticky" style="top: 2rem;">
          <div class="p-4 mb-3 bg-body-tertiary rounded">
            <h4 class="fst">PAUD</h4>
            <p class="mb-0">Kami adalah lembaga PAUD yang berkomitmen memberikan pendidikan berkualitas untuk anak-anak usia dini. Temukan lebih banyak tentang tim dan filosofi pendidikan kami di halaman ini.</p>
          </div>
  
          <div>
            <h4 class="fst-italic">Recent posts</h4>
            <ul class="list-unstyled">
              <li>
                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                  <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect>
                    <image xlink:href="poto4.jpg" width="100%" height="150" />
                  </svg>
                  <div class="col-lg-8">
                    <h6 class="mb-0">Pengajaran pada anak didik ketika makan bersama</h6>
                    <small class="text-body-secondary">October 19, 2023</small>
                  </div>
                </a>
              </li>
              <li>
                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                  <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect>
                  <image xlink:href="poto5.jpg" width="105%" height="120" />
                  </svg>
                  <div class="col-lg-8">
                    <h6 class="mb-0">Guru memberi arahan pada anak didik</h6>
                    <small class="text-body-secondary">October 20, 2023</small>
                  </div>
                </a>
              </li>
              <li>
                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                  <svg class="bd-placeholder-img" width="120%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect>
                  <image xlink:href="poto6.jpg" width="150px" height="100px" />
                  </svg>
                  <div class="col-lg-8">
                    <h6 class="mb-0">Pembelajaran kelompok</h6>
                    <small class="text-body-secondary">January 13, 2023</small>
                  </div>
                </a>
              </li>
            </ul>
          </div>
  
          <div class="p-4">
            <h4 class="fst-italic">Event Archives</h4>
            <ol class="list-unstyled mb-0">
              <li><a href="#">September 2023</a></li>
              <li><a href="#">August 2023</a></li>
              <li><a href="#">July 2023</a></li>
              <li><a href="#">June 2023</a></li>
              <li><a href="#">May 2023</a></li>
              <li><a href="#">April 2023</a></li>
              <li><a href="#">March 2023</a></li>
              <li><a href="#">February 2023</a></li>
              <li><a href="#">January 2023</a></li>
              <li><a href="#">Desember 2022</a></li>
              <li><a href="#">November 2022</a></li>
              <li><a href="#">October 2022</a></li>
            </ol>
          </div>
  
          <div class="p-4">
            <h4 class="fst-italic">Media Sosial</h4>
            <ol class="list-unstyled">
              <li><a href="#">Instagram</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
              <li><a href="#">TikTok</a></li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  
  </main> 

  <footer class="py-5 text-center text-body-secondary bg-body-tertiary">
    <p>All Rights Reserved</p>
    <p>Copyright© George Amadeus - Teguh RH - Jemi Setiadi</p>
    <p class="mb-0">
      <a href="#">Back to top</a>
    </p>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>