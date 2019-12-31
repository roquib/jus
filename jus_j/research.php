<?php

include 'basic/list.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Personal Website</title>
	<?php require_once("heading2.php"); ?>
	<?php
	session_start();
	$_SESSION['tab'] =  "research";
	?>
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
							<?php include 'page_banner_left.php' ?>
						</div>
						<div id="page_body_content">
							<br>
							<h2><b><u>Research Interests:</u></b></h2>

							<ul>
								<li class="mt none">
									• New development of biological processes for the treatment of water/wastewater/wastewater sludge for environmentally friendly management, recycling and disposal.
								</li>

								<li class="mt none">
									• Bioconversion of industrial, domestic and agricultural waste for value added products i.e. biofuels (bio-ethanol), enzymes (lignin peroxidase, cellulase, amylase & lipase), compost (bio-fertilizer), animal feed, organic acid (citric acid) in liquid- and solid-state.
								</li>

								<li class="mt none">
									• Biodiesel production from waste frying oils/palm sludge oil/crude palm oil by esterfication/transesterification processes.
								</li>

								<li class="mt none">
									• Microbial fermentation technology and downstream processing for biotechnological products.
								</li>

								<li class="mt none">
									• Bioprocess optimization and modeling.
								</li>
								<li class="mt none">
									• Development of biosorbents for bioseparation processes.
								</li>


								<li class="mt none">
									• Development of carbon nanotubes (CNTs) for water treatment.
								</li>
							</ul>
							<h2><b><u>Research Grants:</u></b></h2>
							<div class="row mb-2">
								<div class="card ml-3" style="width: 95%; border:none;">
									<div class="card-header" style="border:none;">
										<h3 class="text-dark">Project 1</h3>
									</div>
									<div class="card-body" style="border:none;">
										<h5 class="card-title">
											IWK-UPM sludge management and disposal: Biodewatering of STP sludge—two-stage
										</h5>
										<div class="col">
											<p class="card-text">
												<strong>Source: </strong>
												Indah Water Konsortium (IWK), Malaysia
											</p>
										</div>
										<div class="col">
											<p class="card-text">
												<strong>Role: </strong>
												Co-researcher(collaboration research)
											</p>
										</div>
										<div class="col">
											<p class="card-text">
												<strong>Amount/Year/Outcomes: </strong>
												RM250,000(2001-2003)[JP:20;CP:3;P:2;PhD:2; M:2]
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="row mb-2">
								<div class="card ml-3" style="width: 95%;border:none;">
									<div class="card-header" style="border:none;">
										<h3 class="text-dark">Project 2</h3>
									</div>
									<div class="card-body">
										<h5 class="card-title">
											IWK-UPM sludge management and disposal: Biodewatering of STP sludge—two-stage
										</h5>
										<div class="col">
											<p class="card-text">
												<strong>Source: </strong>
												Indah Water Konsortium (IWK), Malaysia
											</p>
										</div>
										<div class="col">
											<p class="card-text">
												<strong>Role: </strong>
												Co-researcher(collaboration research)
											</p>
										</div>
										<div class="col">
											<p class="card-text">
												<strong>Amount/Year/Outcomes: </strong>
												RM250,000(2001-2003)[JP:20;CP:3;P:2;PhD:2; M:2]
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="row mb-2">
								<div class="card ml-3" style="width: 95%;border:none;">
									<div class="card-header" style="border:none;">
										<h3 class="text-dark">Project 3</h3>
									</div>
									<div class="card-body">
										<h5 class="card-title">
											IWK-UPM sludge management and disposal: Biodewatering of STP sludge—two-stage
										</h5>
										<div class="col">
											<p class="card-text">
												<strong>Source: </strong>
												Indah Water Konsortium (IWK), Malaysia
											</p>
										</div>
										<div class="col">
											<p class="card-text">
												<strong>Role: </strong>
												Co-researcher(collaboration research)
											</p>
										</div>
										<div class="col">
											<p class="card-text">
												<strong>Amount/Year/Outcomes: </strong>
												RM250,000(2001-2003)[JP:20;CP:3;P:2;PhD:2; M:2]
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="row mb-2">
								<div class="card ml-3" style="width: 95%;border:none;">
									<div class="card-header" style="border:none;">
										<h3 class="text-dark">Project 4</h3>
									</div>
									<div class="card-body">
										<h5 class="card-title">
											IWK-UPM sludge management and disposal: Biodewatering of STP sludge—two-stage
										</h5>
										<div class="col">
											<p class="card-text">
												<strong>Source: </strong>
												Indah Water Konsortium (IWK), Malaysia
											</p>
										</div>
										<div class="col">
											<p class="card-text">
												<strong>Role: </strong>
												Co-researcher(collaboration research)
											</p>
										</div>
										<div class="col">
											<p class="card-text">
												<strong>Amount/Year/Outcomes: </strong>
												RM250,000(2001-2003)[JP:20;CP:3;P:2;PhD:2; M:2]
											</p>
										</div>
									</div>
								</div>
							</div>

						</div>
						<div class="mt"></div>
					</div>
				</div>
			</div>
			<?php
			include 'footer.php';
			?>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>



</html>