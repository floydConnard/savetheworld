<!DOCTYPE HTML>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<meta content="Bienvenue chez Nils Martin. Vous êtes sur ma page d'accueil. Elle se compose pour l'instant d'un bref résumé de mes activités. Bonne visite !" />
		
		<title>Nils Martin - Web Developpeur à Chamalières</title>
		
		<!-- SCRIPT -->
		
		<script src="/JS/vendor/modernizr.js"></script>
  		<script src="JS/optimus-princeps.cufonfonts.js"></script>
  		
  		<!-- CSS -->
  		<link rel="stylesheet" href="CSS/normalize.css">
  		<link rel="stylesheet" href="CSS/foundation.min.css">
  		<link rel="stylesheet" type="text/css" media="screen" title="main" charset="utf-8" href="CSS/main.css" />
  		  		
	</head>
	<body class="h-card">
		<article id="content">
			<header id="intro">
				<hgroup>
					<h1 class="p-name name">Nils Martin</h1>
					<h2 class="p-job-title">Developpeur Web en Freelance</h2>
				</hgroup>
			</header>
			<section id="ID_card">
				<p class="p-tel">(+33) 674 433 242</p>
				<p class="p-locality locality">Chamalières</p>
				<p class="p-country-name country-name">France</p>
			</section>
		</article>
		<aside>
			<img class="show-for-large-only" id="bg_large" width="300" height="300" alt="image originale par Z..." src="IMG/b_large.jpg" />
			<form id="contact_form" class="row" data-abide method="POST" action="#" >
				<fieldset id="you" name="you" data-magellan-destination="you" class="column small-12 medium-5 large-4">
					<legend class="myfieldsetlegend">Vos coordonnées</legend>
					<a href="#you"></a>
					<div class="name-field">
						<label for="name-input"> Votre nom <small>requis</small></label>
						<input name="nom" id="name-input" type="text" placeholder="Votre nom (requis)" required pattern="[a-zA-Z]+" />
						<small class="error">Veuillez entrer votre nom</small>
					</div>
					<div class="email-field">
						<label for="email-input"> Votre eMail <small>requis</small></label>
						<input name="email" id="email-input" type="email" placeholder="un email (requis)" required />
						<small class="error">Veuillez entrer votre email</small>
					</div>
					<label for="tel-input">Votre téléphone <small>facultatif</small></label>
					<input id="tel-input" type="tel" placeholder="Un téléphone ? (facultatif)" />
					<label for="site-input">Si vous avez un site web <small>facultatif</small></label>
					<input id="site-input" type="url" placeholder="Vous avez un site web ? (facultatif)" />
				</fieldset>
				<div class="show-for-medium-up column medium-1 large-1"></div>
				<div class="column small-12 medium-6 large-7">
					<fieldset id="msg" name="msg" data-magellan-destination="msg" class="row">
						<a href="#msg"></a>
						<legend class="myfieldsetlegend">Votre Message</legend>
						<label for="objet-input">Objet <small>facultatif</small></label>
						<input name="objet" id="objet-input" type="text" class="column small-12" placehoilder="Objet" />
						<div class="msg-field">
							<label for="msg-input">Votre message <small>requis</small></label>
							<textarea name="msg" id="msg-input" class="column small-12" placeholder="Votre message ici... (requis)" required ></textarea>
							<small class="error">Vous avez bien quelque chose a me dire...</small>
							<input type="checkbox" name="copie" value="" />
							<label for="copie">Je souhaite recevoir une copie de ce mail</label>
						</div>
					</fieldset>
					<div id="loader"></div>
					<input type="submit" class="button [ radius ] column small-12 medium-4 large-4 left" />
					<input type="reset" class="button [ radius alert ] column small-12 medium-1 large-1 left" />
				</div>
			</form>
			
			
		</aside>
		<nav>
			<a id="button_1" class="button round" href="#contact" title="Utilisez le formulaire de contact">Contactez-moi</a>
			<div id="screen2Nav" class="magellan-container" data-magellan-expedition="fixed">
				<dl id="screen2Nav_content" class="sub-nav">
					<dd data-magellan-arrival="top"><a id="button_2" href="#hm">Retour</a></dd> 
					<dd class="show-for-small-only" data-magellan-arrival="#you"><a href="#you">Vos Coordonnées</a></dd> 
					<dd class="show-for-small-only" data-magellan-arrival="#msg"><a href="#msg">Votre message</a></dd>
					
				</dl>
				<hr /> 
			</div>	
			
		</nav>
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="JS/foundation.min.js"></script>
		<script>$(document).foundation();</script>
  		<script src="JS/screen.js"></script>
  		
	</body>
</html>