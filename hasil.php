<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Inner Page - FlexStart Bootstrap Template</title>
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
          <li><a href="index.html">Home</a></li>
          <li>Hitung</li>
        </ol>
        <!-- <h2>Inner Page</h2> -->

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
      <!-- Hitung   -->
<?php
	$baris = $_POST["jml_semester"];
	$totalipk  = 0;
	$nomor = 0;
	$totalmutu = 0;
	$totalsks = 0;

	// $output = number_format($totalipk, 2, '.', '');
	// algoritm
	for ($i=0; $i < $baris; $i++) { 
		$ipsemester[$i] = ($_POST["mutu"][$i]/$_POST["sks"][$i]);
		$totalmutu += $_POST["mutu"][$i];
		$totalsks += $_POST["sks"][$i];
		$totalipk = $totalmutu/$totalsks;
		
	}
 ?>
<!DOCTYPE html>
<html>
<body>
	<div class="clear"></div>
	<div class="navbar">
	<form action="index.php" method="post" id="jml_semester">
		<label for="j_semester" class="label2">Jumlah Semester: </label>
		<input min="1" max="100" value="<?= $baris; ?>" type="number" id="j_semester" name="j_semester" required="" onkeypress="return event.charCode >= 48 && event.charCode <= 57">

	</form>
	<div class="clear"></div>
	</div>

	<div class="container2">
	<table>
		<tr class="title centers">
			<td rowspan="1">Semester Ke-</td>
			<!-- <td rowspan="1">Semester ke-</td> -->
			<td rowspan="1">Nilai Mutu</td>
			<td colspan="1">SKS</td>
			<td colspan="1">IP per Semester</td>
		</tr>

	<?php for ($i=0; $i < $baris; $i++) : $nomor++;?>
			<?php if ($nomor%2 == 0) :?>
			<tr id="genap">
			<?php else: ?>
			<tr id="ganjil">
			<?php endif ?>
			<td class="centers"><?= $nomor; ?></td>
			<!-- <td class="centers"><?= $_POST["nama"][$i]; ?></td> -->
			<td class="centers"><?= $_POST["mutu"][$i]; ?></td>
			<td class="centers"><?= $_POST["sks"][$i]; ?> sks</td>
			<td class="centers"><?= number_format((float)$ipsemester[$i], 2, '.', ''); ?></td>
		</tr>
	<?php endfor ?>
	<tr class="title">
		<td colspan="7">
			Total IPK <?= number_format((float)$totalipk, 2, '.', ''); ?><br>
			<!-- Total IPK <?= $_POST["pemakaian"]; ?> Hari Rp. <?= $totalipk; ?>	 -->
			</td>
	</tr>
	</table>
	</div>
	<div class="clear"></div>
	<a href="hitung.php" style="float:right;" class="btn btn-primary">Reset</a>
</body>
</html>

      <!-- End Hitung -->
<!-- chart -->                             
<!-- end chart  -->

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