<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

  <style type="text/css">
    .font-w-100 {
      font-weight: 100 !important;
    }
  </style>
</head>
<body>
	<?php include 'nav.php'; ?>

 <!--  <div class="px-5">
    <div class="row g-0 position-relative justify-content-center">
      <div class="col-md-6 mb-md-0 p-md-4">
        <div class="card bg-dark text-white">
          <img src="assets/img/foto1.jpg" class="card-img">
          <div class="card-img-overlay">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text">Last updated 3 mins ago</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 p-4 ps-md-0">
        <h5 class="mt-0">Columns with stretched link</h5>
        <p>Another instance of placeholder content for this other custom component. It is intended to mimic what some real-world content would look like, and we're using it here to give the component a bit of body and size.</p>
        <a href="#" class="stretched-link">Go somewhere</a>
      </div>
    </div>
  </div> -->
  
  <div class="container text-center">
    <h2 class="font-w-100">Produk</h2>
    <hr class="border-dark w-100 mx-auto d-block" style="max-width: 800px">
    <div class="row justify-content-center">
      <?php for ($i=0; $i < 4; $i++) : ?>
        <div class="col-3">
          <div class="card border-0" style="min-height: 350px">
            <div class="card-body">
              <h5 class="card-title" style="font-weight: 400">Nama Produk Aplikasi</h5>
              <p class="card-text" style="font-size: 14px">Keterangan singkat tentang produk aplikasi.</p>
              <h6 class="card-subtitle mb-2 text-muted">400.000 Rp</h6>
              <a href="#" class="card-link">Beli Aplikasi</a>
            </div>
          </div>
        </div>
      <?php endfor; ?>
    </div>
  </div>


  <?php include 'footer.php'; ?>

<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>