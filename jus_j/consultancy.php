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
							<span id="body_content_title">Consultancy</span>
							<br />
							<span>
								<h4> CONSULTANCY AND INDUSTRIAL ACTIVITIES</h4>
								<div> 1. Water Quality sampling, testing, inventory and conceptual design of wastewater treatment plant for Sungai Buloh Catchment, Client: Department of Irrigation and Drainage Malaysia (DID), Duration: July 2009 to July 2010.</div>
								<div> 2. Water quality modeling for Kuality Alam Sdn. Bhd, Waste Management Centre, Port Dickson, RM15,000</div>
								<div> 3. Study on improvement of biogas production at sewage treatment plants (STP), RM65,000, IWK (waiting for approval)</div>
							</span>
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