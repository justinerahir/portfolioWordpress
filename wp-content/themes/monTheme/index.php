<?php 
	get_header();
?>	
	<section id="content">
		<h1 class="none">Portfolio - Galerie des travaux</h1>
		<section class="sidebar"><?php get_sidebar();?></section>
		<?php 
			if(have_posts()):
			while(have_posts()):
					the_post();
		?>
			<section class="contenu">
				<header>
					<h3><?php the_title(); ?></h3>
					<a href="#" title="Découvrez mes travaux de web" class="link cat cat-web">Travaux de web</a>
					<a href="#" title="Découvrez mes travaux de graphisme" class="link cat cat-graph">Travaux de graphisme</a>
				</header>
				<article id="categorie-web">
					<h4>Web / Webdesign</h4>
					<ul class="portfolio">
						<?php 
						$worksWeb = new WP_query(array('post_type'=>'works', 'categories' => 'Webdesign'));
						
						if($worksWeb->have_posts()):
							while($worksWeb->have_posts()):
								$worksWeb->the_post();
								$postId = get_the_ID();
						?>
						<li class="roll">
							<a class="thumbnail" href="<?php the_permalink();?>">
								<?php the_post_thumbnail();?>
								<div class="rollover">
									<h5><?php the_title(); ?></h5>
									<p>Découvrir le travail</p>
								</div>
							</a>
						</li>
						<?php 
							endwhile;
						endif; 
						?>
					</ul>	
				</article>
				<article id="categorie-graph">
					<h4>Graphisme</h4>
					<ul class="portfolio">
						<?php 
						$worksGraph = new WP_query(array('post_type'=>'works', 'categories' => 'Graphisme'));
						
						if($worksGraph->have_posts()):
							while($worksGraph->have_posts()):
								$worksGraph->the_post();
								$postId = get_the_ID();
						?>
						<li class="roll">
							<a class="thumbnail" href="<?php the_permalink();?>">
								<?php the_post_thumbnail();?>
								<div class="rollover">
									<h5><?php the_title(); ?></h5>
									<p>Découvrir le travail</p>
								</div>
							</a>
						</li>
						<?php 
							endwhile;
						endif; 
						?>
					</ul>	
				</article>
			</section>
		<?php 
			endwhile;
			endif;
		?>
	</section>
	<?php get_footer();?>