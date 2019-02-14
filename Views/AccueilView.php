<?php include('Views/HeadView.php')?>
<main id="main">
	<div id="accueil">

		<section  id="presentation">
			<div class="francais presentation">
				<h1 class="titreprensentation">Aleth Arrias, web développeuse  <br> 
					<a href="https://github.com/Neareeves/" target="_blank"><i class="fab fa-github"> </i></a></h1>
					<div class="portfolio">Bienvenue sur mon portfolio! <br>N'hésitez pas à me contacter à l'issue de votre visite.</div>
					<div class="containerGridAcc">
						<div class="GridAc1">
							<h3 class="GridAc1Titre">Qui suis-je?</h3>
							<div class="GridAc1Texte">Après huit ans passés dans les rédactions, la journaliste que je suis a décidé sauter dans le numérique. J'ai intégré une formation intensive de web développeur : huit mois pour me familiariser avec les langages web et créer des projets aussi divers que des jeux en JavaScript, des répertoires de films ou des explorateurs de fichiers. S'il me reste encore, évidemment, des choses à maîtriser, PHP, MySQL, les variables, les boucles, et les frameworks JavaScript font maintenant partie de mon quotidien. <br>
							Cette formation est une adaptation aux évolutions de mon métier. Mon plan de bataille de départ était de retourner ensuite au journal pour donner une dimension plus interactive et visuelle à mes articles. Alors que j'avance dans la formation, je reçois la confirmation que je pourrais aussi m'épanouir dans le métier de web développeuse, pour lequel mon appétance n'est pas nouvelle. Ce qui fera pencher la balance entre ces deux métiers sera les projets que me proposeront les entreprise au moment de trouver mon nouvel emploi.</div>
						</div>


						<div class="GridAc2">
							<div class="GridAc2Photo">
								
								<img class="boxshadow" src="Images/ERA-wetransfer.png">
							</div>
						</div>
						<div class="GridAc3">
							<div class="wrapper">
								<div class="card">
							<div class="GridAc3Photo">
								<div class="front">
								<img class="boxshadow jiminy" src="Images/jimini.png">
							</div>
						</div>
						<div class="right">
							<h3>Découvrez le détail des projets et les liens GitHub dans la section "projets"</h3>
						</div>
					</div>
							</div>
						</div>
						<div class="GridAc4">
							<h3 class="GridAc4Titre">Les projets avec l'Access Code School</h3>
							<div class="GridAc4Texte">Access Code School est un centre de formation labellisé "grande école du numérique". La formation de huit mois octroie un titre professionnel de designer web (bac +2) et s'organise sur un "mode projet". Pas de cours ni de contrôles, mais des projets à réalisés en groupe ou seul en des temps limités. Avant la date limite de rendu, à chaque projet, il faut délivrer un site internet fonctionnel respectant le cahier des charges.</div>
						</div>
					</div>
				</div>
				<div class="anglais presentation">
					<h1 class="titreprensentation">Aleth Arrias, webdesigner</h1> 
					<div class="portfolio">Welcome! Your are visiting my portfolio right now. Feel free to explore and contact me if you have questions. Seen you soon!</div>
					<div class="containerGridAcc">
						<div class="GridAc1">
							<h3 class="GridAc1Titre">Who am I?</h3>
							<div class="GridAc1Texte">After eight years working as a journalist, I decided to move forward into the numeric revolution. One little year later, here am I, journalist and web developper full stack.<br>
							During eight months, I worked hard to developp my coding skills at school (Access Code School). I burst into the world of PHP and JavaScript, fell deep down in the Bootstrap maze and hardly found my way in the Twig forest. But with the giant amount of things I learned, I am able now to travel by myself in the web jungle and hope I will find great project to keep increasing my knowledges.</div>
						</div>


						<div class="GridAc2">
							<div class="GridAc2Photo">
								<img src="Images/ERA-wetransfer.png">
							</div>
						</div>
						<div class="GridAc3">
							<div class="GridAc3Photo"><img src="Images/jimini.png">
							</div>
						</div>
						<div class="GridAc4">
							<h3 class="GridAc4Titre">Projects with Access Code School</h3>
							<div class="GridAc4Texte">ACS is the school I went to in 2018-2019. Located in Belfort (France), this school is organised around reversed pedagogy. It means that we don't have class. We just have projects with dead-lines and specifications. Alone or with a team, we must figure it out by ourselves and deliver, before it's running too late, a perfectly functinnal website. The kind of projects were really different, from coding games, wish cards, databases for movies, or dataviz.</div>
						</div>
					</div>
				</div>
			</section>
		</div>


		<section id="derniersprojets">
			<div class="derniersprojets">
				<h2 class="francais">Quelques projets</h2>
				<h3 class="francais">Cliquez sur les photos pour en voir plus</h3>
				
				<h2 class="anglais">A few projects</h2>
				<h3 class="anglais">Click on the pictures to see elements</h3>

				<!-- Trigger/Open The Modal -->
				<div id="testscroll">
					<button id="myBtn"><img src="Images/spaceinvader.png"/></button>
				</div>

				<!-- The Modal -->
				<div id="myModal" class="modal">

					<!-- Modal content -->
					<div class="modal-content">
						<span class="close">&times;</span>
						<!-- Slideshow container -->
						<div class="slideshow-container">

							<!-- Full-width images with number and caption text -->
							<div class="mySlides fade">
								<div class="numbertext"></div>
								<img src="Images/logospace.gif" style="width:100%; max-height: 750px">
								<div class="text">Aliens animés</div>
							</div>

							<div class="mySlides fade">
								<div class="numbertext"></div>
								<img src="Images/starlight.gif" style="width:100%; max-height: 750px">
								<div class="text">Fond étoilé dynamique</div>
							</div>

							<div class="mySlides fade">
								<div class="numbertext"></div>
								<img src="Images/space2.png" style="width:100%; max-height: 750px">
								<div class="text">Capture d'écran en cours de jeu</div>
							</div>

							<!-- Next and previous buttons -->
							<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
							<a class="next" onclick="plusSlides(1)">&#10095;</a>
						</div>
						<br>

						<!-- The dots/circles -->
						<div style="text-align:center">
							<span class="dot" onclick="currentSlide(1)"></span>
							<span class="dot" onclick="currentSlide(2)"></span>
							<span class="dot" onclick="currentSlide(3)"></span>
						</div>

					</div>

				</div>
				<!-- fin modal -->

				<!--modal 2-->


				<button id="myBtn2"><img src="Images/cartevoeux.png"/></button>


				<!-- The Modal -->
				<div id="myModal2" class="modal">

					<div class="modal-content">
						<span class="close2">&times;</span>
						<!-- Slideshow container -->
						<div class="slideshow-container">

							<!-- Full-width images with number and caption text -->
							<div class="mySlides2 fade">
								<div class="numbertext">1 / 3</div>
								<img src="Images/cartepremiereanim.png" style="width:100%; max-height: 750px">
								<div class="text">Cature d'écran, hiver</div>
							</div>

							<div class="mySlides2 fade">
								<div class="numbertext">2 / 3</div>
								<img src="Images/tapins.png" style="width:100%; max-height: 750px">
								<div class="text"> </div>
							</div>

							<div class="mySlides2 fade">
								<div class="numbertext">3 / 3</div>
								<img src="Images/voeux.png" style="width:100%; max-height: 750px">
								<div class="text"> </div>
							</div>

							<!-- Next and previous buttons -->
							<a class="prev" onclick="plus2Slides(-1)">&#10094;</a>
							<a class="next" onclick="plus2Slides(1)">&#10095;</a>
						</div>
						<br>

						<!-- The dots/circles -->
						<div style="text-align:center">
							<span class="dot2" onclick="current2Slide(1)"></span>
							<span class="dot2" onclick="current2Slide(2)"></span>
							<span class="dot2" onclick="current2Slide(3)"></span>
						</div>

					</div>

				</div> 
				<!-- end modal -->

				<div class="flexboutons">
					<a href="?page=Projets"><button class="boutonprojets">Tous les projets</button></a>
					<a href="https://github.com/Neareeves/" target="_blank"><button class="boutongit">GitHub  <i class="fab fa-github"></i></button></a>
				</div>
			</section>
		</div>




	

	<script type="text/javascript">
		//modals************************************************
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
	modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
	modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
	if (event.target == modal) {
		modal.style.display = "none";
	}
} 

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
	showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
	showSlides(slideIndex = n);
}

function showSlides(n) {
	var i;
	var slides = document.getElementsByClassName("mySlides");
	var dots = document.getElementsByClassName("dot");
	if (n > slides.length) {slideIndex = 1}
		if (n < 1) {slideIndex = slides.length}
			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";
			}
			for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" active", "");
			}
			slides[slideIndex-1].style.display = "block";
			dots[slideIndex-1].className += " active";
		} 


//modal 2************************************************
// Get the modal
var modal2 = document.getElementById('myModal2');

// Get the button that opens the modal
var btn2 = document.getElementById("myBtn2");

// Get the <span> element that closes the modal
var span2 = document.getElementsByClassName("close2")[0];

// When the user clicks on the button, open the modal
btn2.onclick = function() {
	modal2.style.display = "block";
}

// When the user clicks on <span> (x), close the modal2
span2.onclick = function() {
	modal2.style.display = "none";
}

// When the user clicks anywhere outside of the modal2, close it
window.onclick = function(event) {
	if (event.target == modal2) {
		modal2.style.display = "none";
	}
} 

var slide2Index = 1;
show2Slides(slide2Index);

// Next/previous controls
function plus2Slides(n) {
	show2Slides(slide2Index += n);
}

// Thumbnail image controls
function current2Slide(n) {
	show2Slides(slide2Index = n);
}

function show2Slides(n) {
	var i;
	var slides2 = document.getElementsByClassName("mySlides2");
	var dots2 = document.getElementsByClassName("dot2");
	if (n > slides2.length) {slide2Index = 1}accueil
		if (n < 1) {slide2Index = slides2.length}
			for (i = 0; i < slides2.length; i++) {
				slides2[i].style.display = "none";
			}
			for (i = 0; i < dots2.length; i++) {
				dots2[i].className = dots2[i].className.replace(" active", "");
			}
			slides2[slide2Index-1].style.display = "block";
			dots2[slide2Index-1].className += " active";
		} 

	</script>
	<?php include('Views/ContactView.php');?>
</main>
	<?php
	include('Views/FooterView.php')?>