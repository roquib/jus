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
							<?php include 'page_banner_left.php' ?>
						</div>
						<div id="page_body_content" class="mt">
							<br />
							<span id="body_content_title" class="mt">International Journal Papers </span>
							<br />
							<br />
							<?php

							$conn = mysqli_connect('localhost', 'root', '', 'jerin');
							if ($conn) {
								echo "connected successfully";
							} else {
								echo "not connected";
							}


							?>
							<span class="mt">
								<b><u>ISI-listed with Journal Impact Factor (JIF)</u></b>
							</span>

							<ol>
								<li class="mt">Alam, M. Z.; Fakhru’l-Razi, A.; Molla, A. H.; Roychoudhury, P. K. (2001). Treatment of wastewater sludge by liquid state bioconversion process. Journal of Environmental Science and Health, A36(7), 1237-1243. [Journal Impact Factor (JIF): 1.002 (2008)]</li>

								<li class="mt">Molla, A. H.; Fakhru’l-Razi, A.; Abd-Aziz, S.; Hanafi, M. M.; Alam, M. Z. (2001). In-vitro compatibility evaluation of fungal mixed culture for bioconversion of domestic wastewater sludge. World Journal of Microbiology and Biotechnology 17 (9), 849-856. [JIF: 0.945 (2008)]</li>

								<li class="mt">Fakhru’l-Razi, A.; Alam, M. Z.; Abd-Aziz, S.; Molla, A. H. (2002). Filamentous fungi in Indah Water Konsortium (IWK) sewage treatment plant for biological treatment of domestic wastewater sludge. Journal of Environmental Science and Health, A37(3), 309-320. [JIF: 1.002 (2008)]</li>

							</ol>

							<span id="body_content_title" class="mt"><b><u>ISI/SCOPUS-listed withoutJournal Impact Factor (JIF) </u></b> </span>

							<ol>
								<li class="mt">Alam, M. Z. (2004). Biosorption of basic dyes using sewage treatment plant biosolids. Biotechnology, 3(2), 200-204. </li>

								<li class="mt">Alam, M. Z. (2004). Biosorption of phenol from aqueous solution by biosolids. The Medical Journal of Malaysia, 59, Supplement B, 216-217. </li>

								<li class="mt">Rafiqul, I. M.; Jalal, K. C. A.; Alam, M. Z. (2005). Environmental factors for optimisation of Spirulina biomass in laboratory culture. Biotechnology, 4(1), 19-22. </li>


							</ol>
							<br><br><br><br><br><br><br>
							<span id="body_content_title" class="mt"><b><u>Non-ISI/Scopus Journal Papers (Local/International)</u></b> </span>


							<ol>
								<li class="mt">Takriff, M. S; Alam, M. Z. (2000). Gas holdup in gas-liquid oscillatory flow in a baffled column. Journal of Industrial Technology, 9(1), 55-61. </li>

								<li class="mt">Takriff, M. S; Daud, W. R. W; Fisal, Z; Alam, M. Z. (2000). Multiphase oscillatory flow in a baffled tube. Journal of Industrial Technology, 9(2), 75-84.</li>

								<li class="mt">Alam, M. Z.; Muyibi, S. A.; Mansor, M. F.; Wahid, R. (2004). Production of activated carbon from palm oil mill effluent sludge and its adsorption characteristics for phenol removal. IFMBE Proceedings, 7, 173-176.</li>

							</ol>

							<br><br><br><br><br><br><br>
							<h2><b><u>Book Chapters:</u></b></h2>

							<ol>
								<li class="mt">
									Alam, M. Z.; Muyibi, S. A.; Jamal, P.; Jalal, K. C. A. (2005). Potential microbes isolated from wastewater treatment plants for effective sludge bioconversion, IWA Water and Environmental Management Series, IWA Publishing, (p-479-482). UK.
								</li>

								<li class="mt">
									Kabbashi, N. A.; Alam, M. Z.; and Ainuddin, M. (2007). Bio-Composting Process Development by SSF for Utilization Agro-Industrial Wastes, Biotechnology Book Series-IFMBE Proceedings (Vol. 15), Part 11, (p.464-468). Springer-Verlag Berlin Heidelberg.
								</li>

								<li class="mt">
									Alam, M. Z.; Kabbashi, N. A.; Razak, A. A. (2007). Liquid state bioconversion of domestic wastewater sludge for bioethanol production. Biotechnology Book Series-IFMBE Proceedings (Vol. 15), Part 11, (p.479-482). Springer-Verlag Berlin Heidelberg.
								</li>
							</ol>

							<br><br><br><br><br><br><br>
							<h2><b><u>Patent:</u></b></h2>
							<h3><b><u>Granted:</u></b></h3>

							<ol>
								<li class="mt">
									Alam, M. Z.; Muyibi, S. A. (2010). Solid state bioconversion of oil palm biomass by white-rot fungus for ligninase production in rotary drum bioreactor. (MY….).
								</li>

								<li class="mt">
									Alam, M. Z.; Kabbashi, N. A.; Ismail, A. F. (2011). Production of bioethanol by single-step bioconversion of domestic wastewater sludge. (MY142205-A)
								</li>

								<li class="mt">
									Alam, M. Z., Muyibi, S. A., Jamal, P. Mamun, A. A., Bari, N. M. (2011). Method for producing citric acid from oil palm empty fruit bunches using aspergillus niger. (MY143760-A)
								</li>
							</ol>

							<br><br><br><br><br><br><br>
							<h3><b><u>Filed:</u></b></h3>

							<ol>
								<li class="mt">
									Fakhru’l-Razi, A.; Alam, M. Z.; Molla.A. H. (2003). Treatment of domestic wastewater treatment plant sludge by liquid state bioconversion process. (Malaysian Patent filed: PI 20030941).
								</li>

								<li class="mt">
									Fakhru’l-Razi, A.; Molla, A. H.; Alam, M. Z. (2003). Solid state bioconversion of domestic pollution control. (Malaysian Patent filed: PI20070289)
								</li>

								<li class="mt">
									Alam, M. Z., Kabbashi, N. A., Ismail, A. F. (2008). Direct bioconversion of empty fruit bunches for bioethanol production. (Malaysian Patent filed: PI20082672)
								</li>
							</ol>

							<br><br><br><br><br><br><br>
							<h2><b><u>Technical Reports/Dissertations/theses:</u></b></h2>

							<ol>
								<li class="mt">
									Alam, M. Z. (1996). Crystallization of ZnSO4 7H2O and FeSO4 7H2O. BSc Thesis
								</li>
								<br>
								<br>
								<br>

								<li class="mt">
									Alam, M. Z. (1999). Hydrodynamic investigations of multiphase oscillatory flow in a baffled tube. MSc Thesis

								</li>

								<li class="mt">
									Alam, M. Z. (2002). Microbial treatment of domestic wastewater treatment plant sludge by liquid state bioconversion process. PhD Dissertation

								</li>
							</ol>

							<br><br><br><br><br><br>
							<h2><b><u>Conference Publications/Presentations (International & Local):</u></b></h2>

							<ol>
								<li class="mt">
									Takriff, M. S.; Daud, W. R. W.; Fisal, Z.; Alam, M. Z. (1999). Hydrodynamic investigations of multiphase oscillatory flow in a baffled tube. Regional Symposium on Chemical Engineering, Vol. II, 22-24 November, Songkhla, Thailand, ppB55-1-B55-7
								</li>
								<br>
								<br>


								<li class="mt">
									Alam, M. Z.; Fakhru’l-Razi, A.; Idris, A.; Abd-Aziz, S. (2001). Bioconversion of wastewater sludge by immobilized microbial treatment. Proceedings of International Water Association (IWA) Conference on water and wastewater management for developing countries, Vol. 1, 29-31 October, Kuala Lumpur, Malaysia, pp343-351.

								</li>

								<li class="mt">
									Fakhru’l-Razi, A.; Alam, M. Z. (2002). Use of Aspergillus niger to landfill leachate treatment. 2nd World Engineering Congress (WEC), 22-25 July, Sarawak, Malaysia.

								</li>
							</ol>
						</div>
					</div>
				</div>
				<?php
				include 'footer.php';
				?>
			</div>
		</div>
	</div>

</body>

</html>