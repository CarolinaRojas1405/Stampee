<?php include './view/header.php'; ?>

<body>

  <main>
	<!-- banner -->
		<div class="head">
			<section class="banner-top grille">
				<div class="banner__photo">
					<img src="../img/timbre-loupe.jpg" alt="image timbres et loupe">
				</div>

				<div class="banner__text">
					<div class="banner__text-devise">
						<h2 class="banner__titre">Bienvenue sur enchères Lord Stampee</h2>
						<span>Tout ce dont vous avez besoin pour enrichir votre passion de philatéliste !</span>
					</div>
					<a class="bouton" href="/encheres/index.php/portailEncheres">Découvrez les enchères</a>
				</div>
			</section>
		</div>

	<!-- en vedettes -->
	<div class="grille conteneur-vedettes">
		<section class="vedettes">
			<h2 class="vedettes__entete">Vedettes</h2>
			<ul class="vedettes__liste">

			<li class="vedettes__item">

				<div class="vedettes__img">
					<a href="portailEncheres">
						<img src="../img/timbre-chineN.png" alt="timbre chine">
					</a>
					<span class="topCorner">
						<a class="new" href="#">nouvelle</a>
					</span>
				</div>
				<div class="vedettes__texte">

					<a href="/encheres/index.php/portailEncheres">
					<h3>Chine du Nord 1949-1950 / Occupation Japonaise</h3>
					<small>Lot 850</small>
					<h4>Prix : 205 $CAD</h4>
					</a>
				</div>
			</li>

			<li class="vedettes__item">
				<div class="vedettes__img">
					<a href="/encheres/index.php/portailEncheres">
						<img src="../img/timbre-24centsUSA.png" alt="timbre US">
					</a>
				</div>
				<div class="vedettes__texte">
					<a href="/encheres/index.php/portailEncheres">
					<h3>U.S. 24c / 1918 New York City GWG 95 </h3>
					<small>Lot 1029</small>
					<h4>Prix : 85 $CAD</h4>
					</a>
				</div>
			</li>

			<li class="vedettes__item">
				<div class="vedettes__img">
					<a href="/encheres/index.php/portailEncheres">
						<img src="../img/timbre-usa.png" alt="timbre USA 1979">
					</a>
					<span class="topCorner">
						<a class="new" href="portailEncheres">nouvelle</a>
					</span>
				</div>
				<div class="vedettes__texte">
					<a href="/encheres/index.php/portailEncheres">
					<h3>USA 1979 - CIA Invert block - UCIA79</h3>
					<small>Lot 984</small>
					<h4>Prix : 93 $CAD</h4>
					</a>
				</div>
			</li>
			<li class="vedettes__item">

				<div class="vedettes__img">
					<a href="/encheres/index.php/portailEncheres">
						<img src="../img/timbre-2c-canada.png" alt="timbre Canada">
					</a>
				</div>
				<div class="vedettes__texte">
					<a href="/encheres/index.php/portailEncheres">
					<h3>Canada 1868 Grande Reine-Papier vergé</h3>
					<small>Lot 682</small>
					<h4>Prix : 115 $CAD</h4>
					</a>
				</div>
			</li>

			</ul>

		</section>
	</div>

	<!-- Presentation Lord Stampee -->

	<div class=" grille about-lord">
        <div class="about-lord__ppal">
			<img class="photo-lord" src="../img/photoLord.png" alt="photo Lord Stampee">
		</div>
		<div class="about-lord__texte">
			<h1 class="h2">Lord Reginald Stampee</h1>
			<p class="p">Lord Stampee est né le 24 juin 1948 à Richmond Park, dans les faubourgs de Londres, sous le règne de son arrière-grand-mère, la reine Victoria. Il est le fils aîné du prince Groggy, duc de Warwickshire, lui-même second fils du prince de Galles. Sa mère, la duchesse de Warwickshire était la fille aînée du duc et de la duchesse de Teck. En tant qu'arrière-petit-fils du monarque dans la lignée mâle, Reginald reçut à la naissance le titre de duc de Worcessteshear.</p>

			<p class="p">Comme les autres enfants de la haute société britannique de l'époque, Reginald fut élevé par des nourrices. Sa mère montrait un caractère enjoué avec lui, et son père, quoique strict en matière de discipline et auprès duquel il apprend sa passion pour la philatélie.</p>

			<div class="btn__about-lord">
				<a class="btn-savoir-plus" href="accueil">savoir plus</a>
			</div>
		</div>


	</div>

	<!-- Section Mission -->

	<section class="main_section">
		<header>
		  <h2 class="section_titre">Notre mission consiste à offrir à tous nos clients, acheteurs et vendeurs des timbres rares ou d'exception, ainsi que l'expérience la plus simple et la plus passionnante possible.</h2>
		</header>
		<div class="cards_small_flex">
		  <div class="card_small">

			  <div class="card_small-img">
				<img src="../img/qualification.png" alt="transaction">
			  </div>
			<div class="card_content">
				<p><strong>99.9%</strong> de transaction évaluées à <strong>100%</strong></p>
				<p>Nous mettons en relation des acheteurs et des vendeurs du monde entier tout en assurant la transparence.</p>
			</div>

		  </div>
		  <div class="card_small">
			  <div class="card_small-img">
				<img src="../img/secure.png" alt="paiements secure">
			  </div>
			<div class="card_content">
				<p >Site et paiements <strong>sécurisés</strong></p>
				<p>Nous collaborons avec des fournisseurs de services de paiement afin de gérer tous les paiements de manière sûre.</p>
			</div>
		  </div>

		  <div class="card_small">
			  <div class="card_small-img">
				<img src="../img/topService.png" alt="service cliente">
			  </div>

			<div class="card_content">
				<p>Votre Service Clientèle à <strong>votre service</strong></p>
				<p>Notre centre de service à la clientèle disponible pour vous aider via la page d'aide de Stampee ou par téléphone.</p>
			</div>
		  </div>
		</div>
	  </section>

	<?php include './view/footer.php'; ?>