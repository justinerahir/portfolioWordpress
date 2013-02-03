<?php get_header(); ?>	
	<section id="content">
		<h1 class="none">Contact - Formulaire de contact et mes coordonnées</h1>
		<article class="sidebar">
			<?php get_sidebar();?>
		</article>
		
		<article class="contenu">
			<header>
				<h3 class="contact">Contact</h3>
			</header>
			<p class="news">
				Un commentaire, une suggestion, un avis ? <br>C'est par ici&hellip;
			</p>
			<div class="form">
				<form method="post" id="contactus_form">
					<p>
						<label for="nom">Nom&nbsp;:</label>
						<input type="text" name="yourname" id="yourname" rows="1" required/>
					</p>
					<p>
						<label for="email">Email&nbsp;:</label>
						<input type="email" name="email" id="email" rows="1" required/>
					</p>
					<p>
						<label for="sujet">Sujet&nbsp;:</label>
						<input type="text" name="subject" id="subject" rows="1" required>
					</p>
					<p>
						<label for="message">Message&nbsp;:</label>
						<textarea name="message" id="message" rows="5" required/></textarea>
					</p>
					<p>
						<input type="submit" name="submit" id="submit" value="Envoyer"/>
					</p>
				</form>
			</div>
			<div class="direct">
				<h4>Plus direct</h4>
					<h6>Justine Rahir</h6>
					<p>Rue mandeville, 29</p>
					<p>4000 &ndash; Liège BE </p>
					<p>(+32) 0475/52.88.37</p>
					<p class="email"><a href="mailto:justine.rahir@gmail.com">justine.rahir@gmail.com</a></p>
			</div>
		</article>
	</section>
	<?php get_footer();?>