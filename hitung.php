<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Hitung - CekIPK</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart - v1.4.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<?php include'header.php';?>
<!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Hitung</li>
        </ol>
        <!-- <h2>Inner Page</h2> -->

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
      <!-- Hitung   -->
      <?php
      $btnReset = false;
// $total = [
// 	"","","","","","","","","","",
// 	"","","","","","","","","","",
// 	"","","","","","","","","","",
// 	"","","","","","","","","","",
// 	"","","","","","","","","","",
// 	"","","","","","","","","","",
// 	"","","","","","","","","","",
// 	"","","","","","","","","","",
// 	"","","","","","","","","","",
// 	"","","","","","","","","",""
// 	];
//   $header = "

//   <meta charset=\"utf-8\">
//   <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
//   <meta property=\"og:url\"                content=\"\" />
//   <meta property=\"og:type\"               content=\"article\" />
//   <meta property=\"og:title\"              content=\"Aplikasi perhitungan IPK\" />
//   <meta property=\"og:description\"        content=\"Aplikasi perhitungan IPK Mahasiswa Setiap Semester\" />
//   <meta property=\"og:image\"              content=\"assets\iconlogo-x.jpg\" />
  
//   <link rel=\"manifest\" href=\"assets/icon/manifest.json\">
//   <meta name=\"msapplication-TileColor\" content=\"#ffffff\">
//   <meta name=\"msapplication-TileImage\" content=\"assets/icon/ms-icon-144x144.png\">
//   <meta name=\"theme-color\" content=\"#ffffff\">
//   <link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/style1.css\" />
//   ";

    ?>
<?php
function validasiAngka(){
	$input = $_POST["j_semester"];
	$var = "/^[0-9]*$/";
	if (!preg_match($var, $input)) {
		echo "
		<script>
			alert('Data tidak sesuai ketentuan, Hanya menerima inputan angka');
			document.location.href='index.php';
		</script>
		";
	}elseif ($_POST["j_semester"] > 100 || $_POST["j_semester"] < 1 ) {
		echo "
		<script>
			alert('Data melebihi kapasitas maksimal, Hanya menerima inputan 1 - 100');
			document.location.href='index.php';
		</script>
		";		
	}
}

?>
<!DOCTYPE html>
<html>
<body>
	<div class="clear"></div>
	<div class="clear"></div>
<!-- TEST COBA -->
  <div style="margin: 0 auto; width:55%">
    <form action="" method="post" id="jml_semester">
      <!-- <div class="row"> -->
        <!-- <div class="col-md-10 col-sm-10 col-xs-10"> -->
          <div class="form-group">
              <label for="j_semester"><strong>Jumlah Semester: </strong></label>
              <?php if (isset($_POST["submit"])) : ?>
              <?php $btnReset = true; ?>
              <input min="1" max="100" class="form-control" value="<?= $_POST["j_semester"]; ?>" type="number" id="j_semester" name="j_semester" required="" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
              <?php else : ?>
              <input min="1" max="100" class="form-control" placeholder="Masukan angka saja" type="number" id="j_semester" name="j_semester" required="" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
              <?php endif ?>
          </div>
          <button type="submit" id="submit" class="btn btn-primary" name="submit" style="float: right;">Submit</button>
          <?php if ($btnReset) {
          echo "<a style='margin: 0 auto; float' href=\"hitung.php\" class=\"btn btn-primary\">Reset</a>";
          } ?>
      <!-- </div> -->
      <!-- </div> -->
    </form>
 </div>
 <br>

	<div class="clear"></div>

<!-- <div style="margin: 0 auto; width:55%"> -->
<?php if (isset($_POST["submit"])) : ?>
      <?php validasiAngka(); ?>
      <div class="container" style="margin-left:7%">
      <form action="hasil.php" method="post">
        <?php for ($i=1; $i<= $_POST["j_semester"]; $i++) :?>
          <div class="inputan">
            <h1><strong>Semester <?= $i; ?></strong></h1>
                <!-- <div class="form-group">
                  <label for="nama<?= $i; ?>">Semester Ke-: </label><br>
                  <input type="text" id="nama<?= $i; ?>" name="nama[]" required="" placeholder="Semester ke-">
                </div> -->
            <div class="form-group">
            <label for="sks<?= $i; ?>">Jumlah SKS: </label><br>
            <input min="1" type="number" id="sks<?= $i; ?>" name="sks[]" required="" placeholder="Jumlah SKS Semester <?= $i; ?>">
            </div>
            <div class="form-group">
            <label for="mutu<?= $i; ?>">Nilai Mutu per Semester: </label><br>
            <input min="1" type="number_float" id="mutu<?= $i; ?>" name="mutu[]" required="" placeholder="Total Nilai Mutu Semester <?= $i; ?>">
            </div>
          </div>
        <?php endfor ?>
        
        <div class="clear"></div>
        <br>
        <!-- Nama -->

        <div>
        <input type="text" id="nama" name="jml_semester" value="<?= $_POST["j_semester"]; ?>" hidden="hidden">
        <button type="submit" style="margin: 0 auto; width:30%" class="btn btn-primary"  id="enter" name="enter">Submit</button>
        </div>
      </form>
        <div class="clear"></div>
      </div>
<?php endif ?>
        <!-- </div>  -->
        <!-- end div style -->
<div class="clear"></div>

</body>
</html>

      <!-- End Hitung -->

      </div>
    </section>

  </main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php include'footer.php';?>
<!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>