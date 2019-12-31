<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Personal Website</title>
	<?php require_once('heading2.php'); ?>
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
							<span id="body_content_title"><u>COURSES TAUGHT</u></span>
							<br />
							<br>
							<ul>
								<li class="mt">
									• Transport Phenomena (Heat and Mass Transfer) BTE3210
								</li>
								<br>
								<br>
								<li class="mt">
									• Biochemical Processes BTE3710
								</li>
								<br>
								<br>

								<li class="mt">
									• Waste Management and Utilization BTE3610
								</li>
								<br>
								<br>

								<li class="mt">
									• Separation Processes for Biochemical Products BTE4410
								</li>
								<br>
								<br>

								<li class="mt">
									• Environmental Biotechnology BTE4218
								</li>
								<br>
								<br>

								<li class="mt">
									• Biological Reactor Design and Analysis BTE4412
								</li>
								<br>
								<br>

								<li class="mt">
									• Design and Optimization of Process Biotechnology BTE4227
								</li>
								<br>
								<br>

								<li class="mt">
									• Probability and Statistics MTH3111
								</li>
								<br>
								<br>

								<li class="mt">
									• Biological Waste Treatment Design BTE6303
								</li>
								<br>
								<br>

								<li class="mt">
									• Advanced Biochemical Processes BTE 6203
								</li>
								<br>
								<br>


							</ul>

							<hr>

							<h2><u>TEACHING ASSESMENT</u></h2>

							<p>The teaching efficiency rate (TER) or student feedback survey (SFS) by the students is above 90% for each course in every semester.</p>

						</div>
					</div>
				</div>
			</div>
			<?php
			include 'footer.php';
			?>
		</div>
	</div>

</body>

</html>