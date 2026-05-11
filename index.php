<!DOCTYPE html> 
<html lang="id"> 
<head> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>PPDB SMK 2026</title> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> 
<style>
  .facility-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border: none;
    border-radius: 16px;
  }
  .facility-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);
  }
  .facility-icon {
    font-size: 3rem;
    margin-bottom: 1rem;
  }
</style>
</head> 
<body> 
 
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary"> 
    <div class="container"> 
      <a class="navbar-brand fw-bold" href="index.php">SMK BISA!</a> 
      <div class="collapse navbar-collapse"> 
        <ul class="navbar-nav ms-auto"> 
          <li class="nav-item">
            <a class="nav-link" href="#jurusan">Jurusan</a>
          </li> 
          <li class="nav-item"> 
            <a class="btn btn-warning ms-3 text-dark fw-bold" href="pendaftaran.php">Daftar Sekarang</a> 
          </li> 
        </ul> 
      </div> 
    </div> 
  </nav>
 
  <!-- HERO SECTION -->
  <header class="bg-light py-5"> 
    <div class="container text-center py-5"> 
      <h1 class="display-4 fw-bolder text-primary">Masa Depanmu Dimulai di Sini!</h1> 
      <p class="lead text-muted mb-4">Penerimaan Peserta Didik Baru Tahun Ajaran 2026/2027 telah dibuka.</p> 
      <a class="btn btn-primary btn-lg px-4" href="pendaftaran.php">Isi Formulir Pendaftaran</a> 
    </div> 
  </header>
 
  <!-- FASILITAS UNGGULAN SECTION -->
  <section class="py-5 bg-white" id="fasilitas">
    <div class="container">
 
      <div class="text-center mb-5">
        <h2 class="fw-bold text-primary">Fasilitas Unggulan Kami</h2>
        <p class="text-muted">Didukung fasilitas modern untuk mempersiapkan generasi siap kerja.</p>
      </div>
 
      <div class="row g-4">
 
        <!-- CARD 1 -->
        <div class="col-md-4">
          <div class="card facility-card h-100 shadow-sm text-center p-4">
            <div class="card-body">
              <div class="facility-icon">🖥️</div>
              <h5 class="card-title fw-bold text-primary">Laboratorium Komputer</h5>
              <p class="card-text text-muted">
                Dilengkapi 40 unit komputer terbaru, internet cepat, dan software industri untuk mendukung pembelajaran berbasis teknologi.
              </p>
            </div>
          </div>
        </div>
 
        <!-- CARD 2 -->
        <div class="col-md-4">
          <div class="card facility-card h-100 shadow-sm text-center p-4">
            <div class="card-body">
              <div class="facility-icon">📚</div>
              <h5 class="card-title fw-bold text-primary">Perpustakaan Digital</h5>
              <p class="card-text text-muted">
                Akses ribuan buku, jurnal, dan modul pembelajaran secara digital kapan saja melalui platform e-library sekolah kami.
              </p>
            </div>
          </div>
        </div>
 
        <!-- CARD 3 -->
        <div class="col-md-4">
          <div class="card facility-card h-100 shadow-sm text-center p-4">
            <div class="card-body">
              <div class="facility-icon">⚽</div>
              <h5 class="card-title fw-bold text-primary">Lapangan Olahraga</h5>
              <p class="card-text text-muted">
                Tersedia lapangan serbaguna untuk sepak bola, basket, dan voli guna mendukung kesehatan fisik dan karakter siswa.
              </p>
            </div>
          </div>
        </div>
 
      </div><!-- /row -->
    </div><!-- /container -->
  </section>
 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body> 
</html>