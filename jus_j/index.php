<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Personal Website</title>
	<?php require_once('heading.php'); ?>
	<?php
	session_start();
	$_SESSION['tab'] =  "home";
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
							<!-- <table border="0" cellpadding="0" cellspacing="0"> 
							<tr>
							<td id="banner_left_td"> -->
							<div id="banner_left_content" class="banner_left_right_div">
								<div id="left_content_top">
									<div id="left_content_top_image" class="left_content_top_left_right_div">
										<img src="./private_image/010c1-mijanur.jpg" id="banner_personal_image" />
									</div>
									<div id="left_content_top_info" class="left_content_top_left_right_div">
										<span id="banner_name_style">Professor Dr. Md. Mijanur Rahman</span>
										<br />
										<span id="banner_desig_style">Chairman</span>
										<br />
										<br />
										Department of Computer Science and Engineering,
										<br />
										Faculty of Science and Engineering,
										<br />
										Uttara University (UU),
										<br />
										Uttara, Dhaka - 1230, Bangladesh.
										<br />
										<br />
										<table border="0" cellpadding="0" cellspacing="0">
											<tr>
												<td>Tell: </td>
												<td>+88 02 58951116, 58955794 (Off.)</td>
											</tr>
											<tr>
												<td> </td>
												<td>+88 01968374794(HP)</td>
											</tr>
											<tr>
												<td> </td>
												<td>+88 01754823989(HP*)</td>
											</tr>
											<tr>
												<td>Fax: </td>
												<td>+88 02 588952047</td>
											</tr>
											<tr>
												<td>E-mail:&nbsp;</td>
												<td>mijanur@gmail.com; mijanur@uttarauniversity.edu.bd</td>
											</tr>
										</table>
									</div>
								</div>
								<div id="left_content_bottom" class="left_content_bottom_div">
									<table border="0" cellpadding="2" cellspacing="0">
										<tr valign="top">
											<td>Ph.D.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
											<td>:&nbsp;&nbsp;&nbsp;</td>
											<td>
												Quantum Communication, Multimedia University, Malaysia (2010)
												<br />
												Research:
												Quantum Data Communication
											</td>
										</tr>
										<tr valign="top">
											<td>M.Sc.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
											<td>:&nbsp;&nbsp;&nbsp;</td>
											<td>
												Satellite Image Processing, Universiti Malaysia Sarawak, Malaysia, (1999)
												<br />
												Research: Computer and Robot Vision, Deep Learning
											</td>
										</tr>
										<tr valign="top">
											<td>B.Sc.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
											<td>:&nbsp;&nbsp;&nbsp;</td>
											<td>
												BUET, Bangladesh (1995)
												<br />
												Research: Embedded Systems, Scientific Computation
											</td>
										</tr>
										<tr valign="top">
											<td>H.Sc.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
											<td>:&nbsp;&nbsp;&nbsp;</td>
											<td>Science, Govt. Bakergonj College, Bakergonj, Barisal, Bangladesh.</td>
										</tr>
										<tr valign="top">
											<td>S.Sc.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
											<td>:</td>
											<td>Science, K. M. Latif Institution, Mathbaria, Pirojpur, Bangladesh.</td>
										</tr>
									</table>
								</div>
							</div>
							<!-- </td>
							<td id="banner_right_td"> -->
							<div id="banner_right_content" class="banner_left_right_div">
								<div class="slideshow-container">

									<div class="mySlides fade">
										<div class="numbertext">1 / 3</div>
										<img src="private_image/mijanur_02.jpg" id="banner_right_image" style="width:100%;">
										<div class="text">Caption One</div>
									</div>

									<div class="mySlides fade">
										<div class="numbertext">2 / 3</div>
										<img src="private_image/mijanur_03.jpg" id="banner_right_image" style="width:100%">
										<div class="text">Caption Two</div>
									</div>

									<div class="mySlides fade">
										<div class="numbertext">3 / 3</div>
										<img src="private_image/mijanur_04.jpg" id="banner_right_image" style="width:100%">
										<div class="text">Caption Three</div>
									</div>

								</div>
								<br>

								<div style="text-align:center">
									<span class="dot"></span>
									<span class="dot"></span>
									<span class="dot"></span>
								</div>

							</div>
							<!-- </td>
							</tr>
							</table> -->
						</div>
						<div id="page_body_content">
							<br />
							<span id="body_content_title">Welcome to my Home page</span>
							<br />
							<span>
								<p>A human like autonomous robot which is capable to adapt with the changes of its environment and continue to reach its goal is considered as Humanoid Robot. In recent years there has been much progress in the development of humanoid and still there are a lot of scopes in this field. A number of research groups are interested in this area and trying to design and develop various humanoid platforms through mechanical and biological inspiration. Many researchers focus on designing lower torso of the robotic platform to perform locomotion as like as human. Upper torso mainly includes the design of arms and neck. Designing lower torso which includes west, hip, knee, ankle, and toe, is complex and more challenging task. Analysis of walking gait, optimal control of multiple actuators, controlling Degree of Freedom (DoF), adaptability control, and Artificial Intelligence (AI) make a humanoid to behave like a human. Basically research on this field combines a variety of disciplines which make it more thought provoking area in Mechatronics Engineering.</p>
								<p>Nowadays robots become very powerful elements in industry because of its capability to perform many difficult operations precisely. Besides these industrial robots, significant advances have been made in the development of biologically inspired social robots. Bipedal robot, especially humanoid robot, is naturally enthused from the functional mobility of human body. However, the complex nature of the human musculoskeletal structure cannot be reproduced in this system. A bipedal robot therefore has fewer DoF than human body. It is very important to choose the number of DoFs for each articulation where the selection approach needs to analyze the structure from sagittal, frontal, and transversal planes.</p>
								<p>Japanese have a predilection for humanoid robots. In 1952 a Japanese cartoonist, Osamu Tezuka created a human-like robot character, "Atom" also known as "Astro-boy", who became the favorite idol for Japanese children. About 150 years ago Japan had a super-technology in a mechanical doll, a tea serving doll that could carry a tea cup to the guest, serve the cup and then
									come back to its start position. Basically today's humanoid robots are nothing but walking or dancing dolls and not yet ready to serve our household works. Though, humanoids are neither intelligent enough nor fully autonomous, they currently are represented as one of the mankind's greatest accomplishments. It is the single greatest attempt of mankind to produce an artificial sentient being. In the recent years manufacturers are making various types of humanoid robots which are more attainable to the general public.</p>
								<p>Presently robots are replacing humans in most the manufacturing industries, soon it will also replace human in all kind of service jobs. Economic development will be primarily determined by the advancement of robotics. Japan&#39;s current strength in this field says that they may become the economic leader in the near future. US military research on robotics reflects that robots will actively participate in future battle-fields mostly in humanoid form. Gesture, posture, locomotion, and navigation are not easy to adapt in a humanoid robot, especially when the ground is bumpy or slippery. Advanced research are focusing to design all the complex movements such as walking, running, and jumping which are already applied in some recent humanoid robots, but still there are a huge opportunity to work in this field to achieve the perfection of the system. A perfect Mechatronics design with robust Control Engineering and its implementation in high processing controller-chip are the basic idea. These will involve Dynamics and Inverse-dynamics, Kinematics and Inverse-Kinematics, Jacobians and Inverse-jacobians, Modern control engineering, Powerful control electronics, and Programming tools.</p>
								<p>In near future humanoids will exhibit emotion, forge relationships, and make decisions as they will learn through interaction with the environment. Robots that can incrementally acquire new knowledge from autonomous interactions with the environment are the main target to accomplish. Humanoid Robotics also offers a unique research tool for understanding the human brain and body. Humanoids have provided revolutionary ways for studying cognitive science.</p>
								<p>The field of humanoid robotics is extensively and unavoidably multidisciplinary and has interrelations to a host of new horizon technologies, such as, Mechatronics Engineering, Neurobio Engineering, Neuromorphic Engineering, Nanoelectromechanical systems, and so on. The robotics industry is experiencing exponential growth worldwide and stands poised to become one of the most exciting and expansive markets for technology in the twenty-first century. Robots will soon be everywhere, in our home and at work. They will change the way we live. This will raise many philosophical, social, and political questions that will have to be thought and answered. In science fiction, robots become so intelligent that they decide to take over the world because humans are deemed inferior. In real life, however, they might not choose to do that. Robots might follow some particular rules such as Asimov's Three Laws of Robotics, which will prevent them from creating danger to mankind.</p>
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
	<script>
		var slideIndex = 0;
		showSlides();

		function showSlides() {
			var i;
			var slides = document.getElementsByClassName("mySlides");
			var dots = document.getElementsByClassName("dot");
			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";
			}
			slideIndex++;
			if (slideIndex > slides.length) {
				slideIndex = 1
			}
			for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" active", "");
			}
			slides[slideIndex - 1].style.display = "block";
			dots[slideIndex - 1].className += " active";
			setTimeout(showSlides, 9000); // Change image every 2 seconds
		}
	</script>
</body>

</html>