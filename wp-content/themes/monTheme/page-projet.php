<?php 
	get_header();
?>	
	<section id="content">
		<?php 
			$helloQuery = new WP_Query('page_id=85');
			while($helloQuery->have_posts()):
					$helloQuery->the_post();
		?>
			<article class="sidebar"><?php the_content();?></article>
		<?php 
			endwhile;
		?>

		<article class="contenu">
			<header>
				<h3 class="contact"> Projet - Détails</h3>
			</header>
			<p class="projet"><img src="http://localhost/wordpress/wp-content/uploads/2012/10/projet1Bis.png" title="Projet 1 - Scarlett Johanson" alt="Projet 1 - Scarlett Johanson" width="340" height="477"/></p>
			<div class="description">
				<p class="date"><span class="yellow">Date de création :</span> Février 2012</p>
				<p class="client"><span class="yellow">Client:</span> Dans le cadre de ma formation</p>
				<p class="proj"><span class="yellow">Projet:</span> Réalisation d'un visuel de présentation d'un personnage réel ou fictif. L'idée était d'intégrer
				le personnage dans un fond réalisé à partir d'un élément présent sur celui-ci.</p>
			</div>
		</article>
	</section>
<?php
	get_footer();
?>