<?php include('Views/HeadView.php')?>
<main>
	<div id="accueil">

		<section  id="presentation">
			<div class="francais presentation">
				<h1 id="titreprensentation">Aleth Arrias, webdesigner</h1>
				<div class="containerGridAcc">
					<div class="GridAc1">
						<h3 class="GridAc1Titre">Qui suis-je?</h3>
						<div class="GridAc1Texte">Après huit ans passés dans les rédactions, la journaliste que je suis a décidé de prendre à bras-le-corps le virage du numérique.</div>
					</div>


					<div class="GridAc2">
						<div class="GridAc2Photo">
							<img src="Images/strw2.jpg">
						</div>
					</div>
					<div class="GridAc3">
						<div class="GridAc3Photo"><img src="Images/strw1.png">
						</div>
					</div>
					<div class="GridAc4">
						<h3 class="GridAc4Titre">Les projets avec l'Access Code School</h3>
						<div class="GridAc4Texte">Access Code School est un centre de formation labellisé "grande école du numérique". La formation de huit mois octroie un titre professionnel de designer web (bac +2) et s'organise sur un "mode projet". Pas de cours ni de contrôles, mais des projets à réalisés en groupe ou seul en des temps limités. Avant la date limite de rendu, à chaque projet, il faut délivrer un site internet fonctionnel respectant le cahier des charges.</div>
					</div>
				</div>
			</div>
		</section>
		<section id="derniersprojets">
			<div class="derniersprojets">
				<h2>Mes derniers projets</h2>
				<h3>Cliquez pour en savoir plus</h3>

				<!-- Trigger/Open The Modal -->
				<button id="myBtn">Open Modal</button>

				<!-- The Modal -->
				<div id="myModal" class="modal">

					<!-- Modal content -->
					<div class="modal-content">
						<span class="close">&times;</span>
						<p style="color: rgba(0,0,0,0.4)">carrousel here yoooooooooooooooo</p>
					</div>

				</div>
				<!-- fin modal -->
				<div class="flexboutons">
				<a href="?page=Projets"><button class="boutonprojets">Tous les projets</button></a>
				<a href="https://github.com/Neareeves/" target="_blank"><button class="boutongit">GitHub<i class="fab fa-github"></i></button></a>
				</div>
		</section>
	</div>



	<div class="anglais" id="accueilen">

		<section class="anglais" id="presentationen">
			<div class="anglais presentation">
				<h1 id="titreprensentationEN"  class="anglais">Aleth Arrias, webdesigner</h1>
				<div class="containerGridAcc anglais">
					<div class="GridAc1 anglais">
						<h1 class="GridAc1Titre francais">Qui suis-je?</h1>
						<div class="GridAc1Titre francais">Présentation rapide de moi-même à écrire.</div></div>
						<div class="GridAc2 anglais"></div>
						<div class="GridAc3 anglais"></div>
						<div class="GridAc4 anglais"></div>
					</div>
				</div>
			</section>
			<section class="anglais" id="derniersprojetsen">
				<div class="anglais derniersprojets">

				</div>
			</section>
		</div>
	</main>
	<?php include('Views/FooterView.php')?>