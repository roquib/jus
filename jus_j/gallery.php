<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Personal Website</title>
	<?php require_once("heading2.php"); ?>
</head>

<body id="index_body">

	<div>
		<div id="page_footer">
			<div id="page_content">
				<div id="page_header">
					<div class="inside_div_content">
						<table>
							<tr>
								<td>
									<div id="header_image_container">
										<img src="private_image/uu_logo.jpg" id="header_image_style" />
									</div>
								</td>
								<td>
									<div id="header_text_container">
										<span id="header_title">
											Department of Computer Science and Engineering
										</span>
										<br />
										<span id="header_sub_title">
											Uttara University, Uttara, Dhaka-1230, Bangladesh.
										</span>
									</div>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<div id="page_banner_content">
					<div class="inside_div_content">
						<?php require_once('navbar.php') ?>
						<div id="page_banner">
							<!-- <table border="0" cellpadding="0" cellspacing="0"> 
							<tr>
							<td id="banner_left_td"> -->
							<?php include 'page_banner_left.php' ?>
						</div>
						<div id="page_body_content">
							<br />
							<span id="body_content_title">Welcome to my Gallery page</span>
							<br />
							<div class="gallery">
								<div class="button">
									<button onclick="one()">1</button>
									<button onclick="two()">2</button>
									<button onclick="four()">3</button>
								</div>

								<div class="row">
									<div class="column">
										<img src="private_image/010c1-mijanur.jpg">
										<img src="private_image/mijanur_02.jpg">
										<img src="private_image/mijanur_03.jpg">
										<img src="private_image/mijanur_04.jpg">
										<img src="private_image/mijanurRahman.jpg">
										<img src="private_image/img_nature_wide.jpg">
										<img src="private_image/img_snow_wide.jpg">
									</div>
									<div class="column">
										<img src="private_image/010c1-mijanur.jpg">
										<img src="private_image/mijanur_02.jpg">
										<img src="private_image/mijanur_03.jpg">
										<img src="private_image/mijanur_04.jpg">
										<img src="private_image/mijanurRahman.jpg">
										<img src="private_image/img_nature_wide.jpg">
										<img src="private_image/img_snow_wide.jpg">
									</div>
									<div class="column">
										<img src="private_image/010c1-mijanur.jpg">
										<img src="private_image/mijanur_02.jpg">
										<img src="private_image/mijanur_03.jpg">
										<img src="private_image/mijanur_04.jpg">
										<img src="private_image/mijanurRahman.jpg">
										<img src="private_image/img_nature_wide.jpg">
										<img src="private_image/img_snow_wide.jpg">
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
			include 'footer.php';
			?>
		</div>
	</div>
	<script>
		var elements = document.getElementsByClassName("column");

		// Declare a "loop" variable
		var i;

		// Full-width images
		function one() {
			for (i = 0; i < elements.length; i++) {
				elements[i].style.flex = "100%";
			}
		}

		// Two images side by side
		function two() {
			for (i = 0; i < elements.length; i++) {
				elements[i].style.flex = "50%";
			}
		}

		// Four images side by side
		function four() {
			for (i = 0; i < elements.length; i++) {
				elements[i].style.flex = "25%";
			}
		}
	</script>
</body>

</html>