<?php include('Views/HeadView.php')?>

<div class="francais">
	<div id="projets">
		<div class="projets">
			<h1 class="titreprensentation">Aleth Arrias, webdesigner</h1>

			<div class="projetsin contre">
				<div class="projetgche">
					<h4>{{ item4.titre }} </h4> <br>
					<p><strong>Consigne:</strong> {{item4.principe}}.</p>
					<p><strong>Cahier des charges: </strong>
						<span v-for="value in item4.cahierCharges">{{value}}</span>.

					</p>
					<p><strong>Langages à utiliser: </strong>
						<span v-for="value in item4.technologies">{{value}}</span>.
					</p><br>
					<p>{{item4.description}}</p>
					<div class="boutons">

						<a v-bind:href="item4.github">
							<button class="rainbow rainbow-1">GitHub du projet</button>
						</a>
						<a v-bind:href="item4.link">
							<button class="rainbow rainbow-1">Site en ligne</button>
						</a>
					</div>

				</div>
				<div class="projetdrte">
					<a v-bind:href="item4.link"><img v-bind:src="item4.illustration" v-bind:alt="altimg"></a>

				</div>

			</div>
		</div>
		<div class="projets">

			<div class="projetsin">
				<div class="projetgche">
					<a v-bind:href="item.link"><img v-bind:src="item5.illustration" v-bind:alt="altimg"></a>

				</div>
				<div class="projetdrte">

					<h4>{{ item5.titre }} </h4> <br>
					<p><strong>Consigne:</strong> {{item5.principe}}.</p>
					<p><strong>Cahier des charges: </strong>
						<span v-for="value in item5.cahierCharges">{{value}}</span>.

					</p>
					<p>
						<strong>Langages à utiliser: </strong>
						<span v-for="value in item5.technologies">{{value}}</span>.
					</p><br>
					<p>{{item5.description}}</p>
					<div class="boutons">

						<a v-bind:href="item5.github">
							<button class="coolBeans"
							class="coolBeans">GitHub du projet</button>
						</a>
						<a v-bind:href="item5.link">
							<button class="coolBeans"
							class="coolBeans">Site en ligne</button>
						</a>
					</div>
				</div>	
			</div>
		</div>
		<div class="projets">

			<div class="projetsin">
				<div class="projetgche">

					<h4>{{ item.titre }} </h4> <br>
					<p><strong>Consigne:</strong> {{item.principe}}.</p>
					<p><strong>Cahier des charges: </strong>
						<span v-for="value in item.cahierCharges">{{value}}</span>.

					</p>
					<p><strong>Langages à utiliser: </strong>
						<span v-for="value in item.technologies">{{value}}</span>.
					</p><br>
					<p>{{item.description}}</p>
					<div class="boutons">

						<a v-bind:href="item.github">
							<button class="rainbow rainbow-1">GitHub du projet</button>
						</a>
						<a v-bind:href="item.link">
							<button class="rainbow rainbow-1">Site en ligne</button>
						</a>
					</div>

				</div>
				<div class="projetdrte">

					<img v-bind:src="item.illustration" v-bind:alt="altimg">
				</div>	
			</div>
		</div>
		<div class="projets">

			<div class="projetsin contre">
				<div class="projetgche">

					<a v-bind:href="item2.link">
						<img v-bind:src="item2.illustration" v-bind:alt="altimg">
					</a>
				</div>
				<div class="projetdrte">

					<h4>{{ item2.titre }} </h4> <br>
					<p><strong>Consigne:</strong> {{item2.principe}}.</p>
					<p><strong>Cahier des charges: </strong>
						<span v-for="value in item2.cahierCharges">{{value}}</span>.

					</p>
					<p><strong>Langages à utiliser: </strong>
						<span v-for="value in item2.technologies">{{value}}</span>.
					</p><br>
					<p>{{item2.description}}</p>
					<div class="boutons">

						<a v-bind:href="item2.github">
							<button class="coolBeans"
							class="coolBeans">GitHub du projet</button>
						</a>
						<a v-bind:href="item2.link">
							<button class="coolBeans"
							class="coolBeans">Site en ligne</button>
						</a>
					</div>
				</div>

			</div>
		</div>
		<div class="projets">

			<div class="projetsin">
				<div class="projetgche">

					<h4>{{ item3.titre }} </h4> <br>
					<p><strong>Consigne:</strong> {{item3.principe}}.</p>
					<p><strong>Cahier des charges: </strong>
						<span v-for="value in item3.cahierCharges">{{value}}</span>.

					</p>
					<p><strong>Langages à utiliser: </strong>
						<span v-for="value in item3.technologies">{{value}}</span>.
					</p><br>
					<p>{{item3.description}}</p>
					<div class="boutons">

						<a v-bind:href="item3.github"><button class="rainbow rainbow-1">GitHub du projet</button></a>
						<a v-bind:href="item3.link"><button class="rainbow rainbow-1">Site en ligne</button></a>
					</div>
				</div>
				<div class="projetdrte">

					<a v-bind:href="item3.link"><img v-bind:src="item3.illustration" v-bind:alt="altimg"></a>
				</div>	
			</div>
		</div>
		<div class="projets">

			<div class="projetsin contre">
				<div class="projetgche">

					<a v-bind:href="item6.link"><img v-bind:src="item6.illustration" v-bind:alt="altimg"></a>
				</div>
				<div class="projetdrte">

					<h4>{{ item6.titre }} </h4> <br>
					<p><strong>Consigne:</strong> {{item6.principe}}.</p>
					<p><strong>Cahier des charges: </strong>
						<span v-for="value in item6.cahierCharges">{{value}}</span>.

					</p>
					<p><strong>Langages à utiliser: </strong>
						<span v-for="value in item6.technologies">{{value}}</span>.
					</p><br>
					<p>{{item6.description}}</p>
					<div class="boutons">

						<a v-bind:href="item6.github"><button class="coolBeans"
							class="coolBeans">GitHub du projet</button></a>
							<a v-bind:href="item6.link"><button class="coolBeans"
								class="coolBeans">Site en ligne</button></a>
							</div>
						</div>

					</div>
				</div>
				<div class="projets">

					<div class="projetsin">
						<div class="projetgche">

							<h4>{{ item7.titre }} </h4> <br>
							<p><strong>Consigne:</strong> {{item7.principe}}.</p>
							<p><strong>Cahier des charges: </strong>
								<span v-for="value in item7.cahierCharges">{{value}}</span>.

							</p>
							<p><strong>Langages à utiliser: </strong>
								<span v-for="value in item7.technologies">{{value}}</span>.
							</p><br>
							<p>{{item7.description}}</p>
							<div class="boutons">

								<a v-bind:href="item7.github"><button class="rainbow rainbow-1">GitHub du projet</button></a>
								<!-- <a v-bind:href="item7.link"><button class="rainbow rainbow-1">Site en ligne</button></a> -->
							</div>
						</div>
						<div class="projetdrte">

							<a v-bind:href="item7.link"><img v-bind:src="item7.illustration" v-bind:alt="altimg"></a>
						</div>	
					</div>
				</div>
				<div class="projets">

					<div class="projetsin contre">
						<div class="projetgche">

							<a v-bind:href="item8.link"><img v-bind:src="item8.illustration" v-bind:alt="altimg"></a>
						</div>
						<div class="projetdrte">

							<h4>{{ item8.titre }} </h4> <br>
							<p><strong>Consigne:</strong> {{item8.principe}}.
							</p>
							<p><strong>Cahier des charges: </strong>
								<span v-for="value in item8.cahierCharges">{{value}}</span>.

							</p>
							<p><strong>Langages à utiliser: </strong>
								<span v-for="value in item8.technologies">{{value}}</span>.
							</p><br>
							<p>{{item8.description}}</p>
							<div class="boutons">

								<a v-bind:href="item8.github"><button class="coolBeans"
									class="coolBeans">GitHub du projet</button></a>
					<!-- <a v-bind:href="item8.link"><button class="coolBeans"
						class="coolBeans">Site en ligne</button></a> -->
					</div>
				</div>

			</div>
		</div>


	</div>
</div>







<div class="anglais">
	<div id="projetsang">
		<div class="projets">
			<h1 class="titreprensentation">Aleth Arrias, webdesigner</h1>

			<div class="projetsin">
				<div class="projetgche">
					<a v-bind:href="item.link"><img v-bind:src="item5.illustration" v-bind:alt="altimg"></a>
				</div>
				<div class="projetdrte">


					<h4>{{ item5.titre }} </h4> <br>
					<p><strong>Topic:</strong> {{item5.principe}}.</p>
					<p><strong>Specifications: </strong>
						<span v-for="value in item5.cahierCharges">{{value}}</span>.

					</p>
					<p><strong>Web languages: </strong>
						<span v-for="value in item5.technologies">{{value}}</span>.
					</p><br>
					<p>{{item5.description}}</p>
					<div class="boutons">

						<a v-bind:href="item5.github"><button class="rainbow rainbow-1">The project on GitHub</button></a>
						<a v-bind:href="item5.link"><button class="rainbow rainbow-1">Online website</button></a>
					</div>
				</div>	
			</div>
		</div>
		<div class="projets">

			<div class="projetsin">
				<div class="projetgche">

					<h4>{{ item.titre }} </h4> <br>
					<p><strong>Topic:</strong> {{item.principe}}.</p>
					<p><strong>Specifications: </strong>
						<span v-for="value in item.cahierCharges">{{value}}</span>.

					</p>
					<p><strong>Web languages: </strong>
						<span v-for="value in item.technologies">{{value}}</span>.
					</p><br>
					<p>{{item.description}}</p>
					<div class="boutons">

						<a v-bind:href="item.github"><button class="coolBeans">The project on GitHub</button></a>
						<a v-bind:href="item.link"><button class="coolBeans">Online website</button></a>
					</div>
				</div>
				<div class="projetdrte">

					<a v-bind:href="item.link"><img v-bind:src="item.illustration" v-bind:alt="altimg"></a>
				</div>	
			</div>
		</div>
		<div class="projets">

			<div class="projetsin contre">
				<div class="projetgche">

					<a v-bind:href="item2.link"><img v-bind:src="item2.illustration" v-bind:alt="altimg"></a>
				</div>
				<div class="projetdrte">

					<h4>{{ item2.titre }} </h4> <br>
					<p><strong>Topic:</strong> {{item2.principe}}.</p>
					<p><strong>Specifications: </strong>
						<span v-for="value in item2.cahierCharges">{{value}}</span>.

					</p>
					<p><strong>Web languages: </strong>
						<span v-for="value in item2.technologies">{{value}}</span>.
					</p><br>
					<p>{{item2.description}}</p>
					<div class="boutons">

						<a v-bind:href="item2.github"><button class="rainbow rainbow-1">The project on GitHub</button></a>
						<a v-bind:href="item2.link"><button class="rainbow rainbow-1">Online website</button></a>
					</div>
				</div>

			</div>
		</div>
		<div class="projets">

			<div class="projetsin">
				<div class="projetgche">

					<h4>{{ item3.titre }} </h4> <br>
					<p><strong>Topic:</strong> {{item3.principe}}.</p>
					<p><strong>Specifications: </strong>
						<span v-for="value in item3.cahierCharges">{{value}}</span>.

					</p>
					<p><strong>Web languages: </strong>
						<span v-for="value in item3.technologies">{{value}}</span>.
					</p><br>
					<p>{{item3.description}}</p>
					<div class="boutons">

						<a v-bind:href="item3.github"><button class="coolBeans">The project on GitHub</button></a>
						<a v-bind:href="item3.link"><button class="coolBeans">Online website</button></a>
					</div>
				</div>
				<div class="projetdrte">

					<a v-bind:href="item3.link"><img v-bind:src="item3.illustration" v-bind:alt="altimg"></a>
				</div>	
			</div>
		</div>
		<div class="projets">

			<div class="projetsin contre">
				<div class="projetgche">

					<a v-bind:href="item4.link"><img v-bind:src="item4.illustration" v-bind:alt="altimg"></a>
				</div>
				<div class="projetdrte">

					<h4>{{ item4.titre }} </h4> <br>
					<p><strong>Topic:</strong> {{item4.principe}}.</p>
					<p><strong>Specifications: </strong>
						<span v-for="value in item4.cahierCharges">{{value}}</span>.

					</p>
					<p><strong>Web languages: </strong>
						<span v-for="value in item4.technologies">{{value}}</span>.
					</p><br>
					<p>{{item4.description}}</p>
					<div class="boutons">

						<a v-bind:href="item4.github"><button class="rainbow rainbow-1">The project on GitHub</button></a>
						<a v-bind:href="item4.link"><button class="rainbow rainbow-1">Online website</button></a>
					</div>
				</div>

			</div>
		</div>
		<div class="projets">

			<div class="projetsin">
				<div class="projetgche">

					<h4>{{ item6.titre }} </h4> <br>
					<p><strong>Topic:</strong> {{item6.principe}}.</p>
					<p><strong>Specifications: </strong>
						<span v-for="value in item6.cahierCharges">{{value}}</span>.

					</p>
					<p><strong>Web languages: </strong>
						<span v-for="value in item6.technologies">{{value}}</span>.
					</p><br>
					<p>{{item6.description}}</p>
					<div class="boutons">

						<a v-bind:href="item6.github"><button class="coolBeans">The project on GitHub</button></a>
						<a v-bind:href="item6.link"><button class="coolBeans">Online website</button></a>
					</div>
				</div>
				<div class="projetdrte">

					<a v-bind:href="item6.link"><img v-bind:src="item6.illustration" v-bind:alt="altimg"></a>
				</div>	
			</div>
		</div>
		<div class="projets">

			<div class="projetsin contre">
				<div class="projetgche">

					<a v-bind:href="item8.link"><img v-bind:src="item8.illustration" v-bind:alt="altimg"></a>
				</div>
				<div class="projetdrte">

					<h4>{{ item8.titre }} </h4> <br>
					<p><strong>Topic:</strong> {{item8.principe}}.</p>
					<p><strong>Specifications: </strong>
						<span v-for="value in item8.cahierCharges">{{value}}</span>.

					</p>
					<p><strong>Web languages: </strong>
						<span v-for="value in item8.technologies">{{value}}</span>.
					</p><br>
					<p>{{item8.description}}</p>
					<div class="boutons">

						<a v-bind:href="item8.github"><button class="rainbow rainbow-1">The project on GitHub</button></a>
						<a v-bind:href="item8.link"><button class="rainbow rainbow-1">Online website</button></a>
					</div>
				</div>

			</div>
		</div>
		<div class="projets">

			<div class="projetsin">
				<div class="projetgche">

					<h4>{{ item7.titre }} </h4> <br>
					<p><strong>Topic:</strong> {{item7.principe}}.</p>
					<p><strong>Specifications: </strong>
						<span v-for="value in item7.cahierCharges">{{value}}</span>.

					</p>
					<p><strong>Web languages: </strong>
						<span v-for="value in item7.technologies">{{value}}</span>.
					</p><br>
					<p>{{item7.description}}</p>
					<div class="boutons">

						<a v-bind:href="item7.github"><button class="coolBeans">The project on GitHub</button></a>
						<a v-bind:href="item7.link"><button class="coolBeans">Online website</button></a>
					</div>
				</div>
				<div class="projetdrte">

					<a v-bind:href="item7.link"><img v-bind:src="item7.illustration" v-bind:alt="altimg"></a>
				</div>	
			</div>
		</div>

	</div>
</div>

<!-- <img src="Images/strw2.jpg">
-->
<?php include('Views/ContactView.php');
include('Views/FooterView.php')?>
<script type="text/javascript" src="scriptprojets.js"></script>