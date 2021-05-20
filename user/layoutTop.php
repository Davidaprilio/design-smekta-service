<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/user/style.css">
</head>
<body>
  <nav class="navbar pe-md-5 sticky-top navbar-dark bg-dark p-0 position-relative">
    <div class="container-fluid p-0">
      <a class="navbar-brand ms-3 d-none d-md-block" href="#"><strong>S</strong>s</a>
      <div class="me-auto d-flex align-items-center">
        <div class="profile me-3 d-flex text-white dropdown">
          <div class="foto ms-2 d-flex justify-content-center align-items-center">
            <img src="https://instrktiv.com/media/ferry-vermeulen-300x300.jpg" class="rounded-circle" style="width: 42px;">
          </div>
          <div class="label ms-2 d-none d-md-block py-2">
            <h5>David Aprilio</h5>
            <small>david.14pril@gmail.com</small>
          </div>
          <a class="toggle d-flex justify-content-center align-items-center text-white text-decoration-none" id="profileddown" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="material-icons-round">expand_more</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end mt-2" aria-labelledby="profileddown">
            <li><span class="dropdown-item" href="#">Action</span></li>
            <li><a class="dropdown-item" href="#"><span class="material-icons-round" style="font-size: 15px;">account_circle</span> Profile Saya</a></li>
            <li><a class="dropdown-item" href="#"><span class="material-icons-round" style="font-size: 15px;">logout</span> Keluar</a>
            </li>
          </ul>
        </div>
        <div class="">
          <input type="text" name="search" id="searchIn" class="form-control bg-transparent border-dark" placeholder="Cari ..." spellcheck="false">
        </div>  
      </div>

      <div class="dropdown ms-auto">
        <button class="btn-dark btn-focus-none btn text-white" type="button" id="notifBell" data-bs-toggle="dropdown" aria-expanded="false">
          <span class="material-icons-round">notifications</span>
        </button>
        <div class="dropdown-menu dropdown-menu-end mt-2" aria-labelledby="notifBell" style="z-index: 1090 !important">
          <div class="dropdown-header py-2 px-3">
            <span class="text-muted" style="font-size: 14px">Notifikasi Baru</span>
          </div>
          <div class="dropdown-item d-flex border-top">
            <div class="d-flex align-items-center">
              <img src="http://i.imgur.com/74sByqd.jpg" class="rounded-circle my-auto d-block" width="30">
            </div>
            <div class="ps-2">
              <h5 class="mb-0" style="font-size: 15px">Aziz anshori</h5>
              <small style="font-size: 13px;">Menjadi telah menjadi member sekarang</small>
            </div>
          </div>
          <div class="dropdown-item d-flex border-top">
            <div class="d-flex align-items-center">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJkueqf2PfkXtUe_p_kd7j4SBwBEtacRFDmB7O5situL9zj1QSbuV9QWOx8wDqqEDPf5g&usqp=CAU" class="rounded-circle my-auto d-block" width="30">
            </div>
            <div class="ps-2">
              <h5 class="mb-0" style="font-size: 15px">Muzan Zakkie</h5>
              <small style="font-size: 13px;">Mulai berlanganan Internet WiFi (1 bulan)</small>
            </div>
          </div>
          <div class="dropdown-item d-flex border-top">
            <div class="d-flex align-items-center">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuxzJjzxPGbFTU8NQjZxGxRSltwfSvRd2x9NxUr5XG872AL99VfW8z4poKC8DevT7gE3k&usqp=CAU" class="rounded-circle my-auto d-block" width="30">
            </div>
            <div class="ps-2">
              <h5 class="mb-0" style="font-size: 15px">Hendra Rahadzan</h5>
              <small style="font-size: 13px;">Membeli Aplikasi Pustaka Sekolah</small>
            </div>
          </div>
        </div>
      </div>
      <button class="btn btn-dark btn-focus-none" data-bs-toggle="offcanvas" data-bs-target="#panelChat" aria-controls="panelChat">
        <span class="material-icons-round" >question_answer</span>
      </button>

      </div>
    <div class="loading">
      <div class="loading_line_wrapper">
        <div class="loading_line">
          <div class="loading_line_inner loading_line_inner--1"></div>
          <div class="loading_line_inner loading_line_inner--2"></div>
        </div>
      </div>
    </div>
  </nav>


  <div class="offcanvas offcanvas-end" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="panelChat" aria-labelledby="panelChatLabel" style="z-index: 1018">
    <div class="offcanvas-header justify-content-start border-bottom p-2">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDao1eZSuUtWDnNqdEFEyMV2j24qy7nYgTkURKrt17BE5lPBTugsfZYo218uIJxHOoz_4&usqp=CAU" width="50" height="50" class="rounded-circle" alt="">
      <div class="ms-3">
        <h5 style="font-size: 16px;" class="offcanvas-title" id="panelChatLabel">Muhammad Najmudin (admin)</h5>
        <small class="text-muted">sedang aktif</small>
      </div>
    </div>
    <div class="offcanvas-body p-2">
      <ul class="list-unstyled">
        <li class="clearfix out">
          <div class="message-data text-end">
            <span class="message-data-time" >10:10 AM, Today</span> &nbsp; &nbsp;
            <span class="message-data-name" >Olia</span>
            <span class="material-icons-round circleOn">circle</span>
            
          </div>
          <div class="message other-message float-end">
            Hi Vincent, how are you? How is the project coming along?
          </div>
        </li>
        
        <li class="in">
          <div class="message-data">
            <span class="material-icons-round circleOn">circle</span>
            <span class="message-data-name">Vincent</span>
            <span class="message-data-time">10:12 AM, Today</span>
          </div>
          <div class="message my-message">
            Are we meeting today? Project has been already finished and I have results to show you.
          </div>
        </li>
        
        <li class="clearfix out">
          <div class="message-data text-end">
            <span class="message-data-time" >10:14 AM, Today</span> &nbsp; &nbsp;
            <span class="message-data-name" >Olia</span>
            <span class="material-icons-round circleOn">circle</span>
            
          </div>
          <div class="message other-message float-end">
            Well I am not sure. The rest of the team is not here yet. Maybe in an hour or so? Have you faced any problems at the last phase of the project?
          </div>
        </li>
      </ul>
    </div>
    <div class="offcanvas-footer p-1 border-top bg-light">
      <!-- <input type="text" placeholder="Ketik pesan ..." class="form-control"> -->
      <textarea name="message-to-send" id="message-to-send" placeholder ="Ketik pesan ..." class="text-dark" rows="3"></textarea>
    </div>
  </div>


  <div class="body bg-light d-flex">
    <div class="sideBar border-end pe-3 pt-2">
      <ul class="nav flex-column ms-3 border-bottom">
        <li class="nav-item">
          <a class="nav-link" href="./">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="langanan.php">Langanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profile.php">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ulasan.php">Ulasan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ulasan.php">Pengaturan</a>
        </li>
      </ul>
    </div>
    <div class="main-content ps-3 pe-2 pt-2">