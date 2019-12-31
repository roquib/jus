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
						<div id="page_body_content" class="mt">
							<br />
							<span id="body_content_title">Membership</span>
							<br />
							<span>
								<h4>PROFESSIONAL AND HONORARY SOCEITIES</h4>
								<div> • Member, Editorial Board, IIUM Engineering Journal (2003-2006)</div>
								<div>• Member, Editorial Board, Journal of Environmental Research and Development (2008-present)</div>
								<div> • Member, International Water Association (IWA), U.K.</div>
								<div> • Member, American Chemical Society (ACS), USA</div>
								<div> • Member, Institute of Engineers Bangladesh (IEB)</div>
							</span>
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