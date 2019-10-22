<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8" >
			<title>Mon Cv en ligne </title>
			<link rel="stylesheet" href="cv.css">

		</head>
			<body>
				<div class="page">
					<div class="infophoto">
						<div class="info">
							<p><strong>Quentin Robert</strong><br/><br>
							Né le 11 Décembre 1989 à Villers-Semeuse (08)</p>
							<p>161 Avenue de la paix,le manoir <br/>
								- 13600 la Ciotat<br/><br>
								+33 6 36 66 49 43<br/><br/>
								rasquent136@gmail.com</p>
						</div>
						<div class="photo">
								<img src="rasQuent.jpg" alt="Photo Quentin Robert" width="200px"/>
							</div>

					</div>
				</div>

				<nav id="navigation" role="navigation">
						<input type="checkbox" id="toggle-nav" aria-label="open/close navigation">
						<label for="toggle-nav" class="nav-button"></label>
						<ul id="menuFixe">
								<li><a href="?sectionFormation">Formation</a></li>
								<li><a href="?sectionExpérience">Expériences professionnel</a></li>				
								<li><a href="?sectionCompétences">Compétences</a></li>
								<li><a href="?sectionInterets">Centres d'intérêts</a></li>
								<li><a href="?sectionInterets">Centres d'intérêts</a></li>
								<li><a href="?sectionContact">Contact</a></li>
							</ul>
				</nav>
					<?php
					if (isset($_GET['sectionFormation'])) {
						include('formation.php'); 
					} else if (isset($_GET['sectionExpérience'])){
						include('expériencePro.php');
					} else if (isset($_GET['sectionCompétences'])) {
						include('compétences.php');
					} else if (isset($_GET['sectionInterets'])) {
						include('centreDinteret.php');
					} else if (isset($_GET['sectionContact'])) {
						include('contact.php');
					}
					?>

			</body>
	</html>