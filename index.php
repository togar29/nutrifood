<?php require_once("conn.php");
if (!isset($_SESSION)) {
	session_start();
} ?>
<!DOCTYPE html>
<html lang="en">
<?php include "head.php"; ?>

<body>

	<?php include "header.php"; ?>

	<!-- start: Slider -->
	<div class="slider-wrapper">

		<div id="da-slider" class="da-slider">
			<div class="da-slide">
				<h2>Ikan Mas Arsik</h2>
				<p>Ikan Mas arsik dengan rasa khas batak toba yang akan membuat sensasi budaya batak </p>
				<a href="produk.php" class="da-link">Lihat Produk</a>
				<div class="da-img"><img src="img/parallax-slider/ikanmas.jpg" style="border: 3px solid whitesmoke; border-radius: 10px;" alt="image01" /></div>
			</div>
			<div class="da-slide">
				<h2>Sayur Asem</h2>
				<p>Makanan khas sunda yang melegenda dan mendunia dengan cita rasa asam, gurih dan pedas.</p>
				<a href="produk.php" class="da-link">Lihat Produk</a>
				<div class="da-img"><img src="img/parallax-slider/2.jpg" style="border: 3px solid whitesmoke; border-radius: 10px;" alt="image03" /></div>

			</div>
			<div class="da-slide">
				<h2>Ayam Kremes</h2>
				<p>Ayam kremes dengan balutan telur dan dipadukan dengan sambal goreng terasi.</p>
				<a href="produk.php" class="da-link">Lihat Produk</a>
				<div class="da-img"><img src="img/parallax-slider/3.jpg" style="border: 3px solid whitesmoke; border-radius: 10px;" alt="image02" /></div>
			</div>
			<nav class="da-arrows">
				<span class="da-arrows-prev"></span>
				<span class="da-arrows-next"></span>
			</nav>
		</div>

	</div>
	<!-- end: Slider -->

	<!--start: Wrapper-->
	<div id="wrapper">

		<!--start: Container -->
		<div class="container">

			<!-- start: Hero Unit - Main hero unit for a primary marketing message or call to action -->
			<div class="hero-unit">
				<p>
					<b>Nutrifood</b> akan menyediakan kebutuhan anda dengan berbagai macam makanan sehat dan nikmat yang bisa anda pesan
				</p>
				<p><a class="btn btn-success btn-large" href="profil.php">Tentang Kami &raquo;</a></p>

			</div>
			<!--<div class="title"><h3>Keranjang Anda</h3></div>
            <div class="hero-unit">
            </div> -->
			<!-- end: Hero Unit -->

			<!-- start: Row -->

			<div class="row">
				<?php
				$sql = mysqli_query($koneksi, "SELECT * FROM produk ORDER BY kode DESC limit 9");
				while ($data = mysqli_fetch_array($sql)) {
				?>
					<div class="span4">
						<div class="icons-box">
							<div class="title">
								<h3><?php echo $data['nama']; ?></h3>
							</div>
							<img src="admin/<?php echo $data['gambar']; ?>" style="border: 2px solid grey; border-radius: 5px; width: 250px; height: 200px;" />
							<div>
								<h3>Rp.<?php echo number_format($data['harga'], 2, ",", "."); ?></h3>
							</div>
							<!--	<p>
						
						</p> -->
							<div class="clear"><a href="detailproduk.php?kd=<?php echo $data['kode']; ?>" class="btn btn-lg btn-danger">Detail</a> <a href="detailproduk.php?kd=<?php echo $data['kode']; ?>" class="clear"> <a href="index.html" class="btn btn-lg btn-success">Beli &raquo;</a></div>

						</div>
					</div>
				<?php
				}


				?>

			</div>

			<hr>

			<!-- start: Row -->
			<div class="row">

				<!-- start: Icon Boxes -->
				<div class="icons-box-vert-container">

					<!-- start: Icon Box Start -->
					<div class="span6">
						<div class="icons-box-vert">
							<i class="ico-ok ico-color circle-color big"></i>
							<div class="icons-box-vert-info">
								<h3>Pengiriman Cepat</h3>
								<p>Kami siap mengirim pesanan anda secara gratis dengan radius maksimal 5 KM.</p>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<!-- end: Icon Box-->

					<!-- start: Icon Box Start -->
					<div class="span6">
						<div class="icons-box-vert">
							<i class="ico-cup  ico-white circle-color-full big-color"></i>
							<div class="icons-box-vert-info">
								<h3>Rasa Nikmat dan Sehat</h3>
								<p>Tersedia Makanan Sehat dan Nikmat untuk memenuhi kebutuhan anda</p>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<!-- end: Icon Box -->

				</div>
				<!-- end: Icon Boxes -->
				<div class="clear"></div>
			</div>
			<!-- end: Row -->

			<hr>

		</div>
		<!--end: Container-->

	</div>
	<!-- end: Wrapper  -->


	<!-- end: Footer Menu -->
	<?php include "footer.php"; ?>

	<!-- start: Java Script -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/jquery-1.8.2.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/flexslider.js"></script>
	<script src="js/carousel.js"></script>
	<script src="js/jquery.cslider.js"></script>
	<script src="js/slider.js"></script>
	<script defer="defer" src="js/custom.js"></script>
	<!-- end: Java Script -->

</body>

</html>