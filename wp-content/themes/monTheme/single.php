<?php 
	
	get_header();
?>	
	<section id="content">
		<h1 class="none">Article de mon blog en entiereté</h1>
		<article class="sidebar">
			<?php get_sidebar();?>
		</article>
		<article class="contenu">
		<?php 
			if(have_posts()):
				while(have_posts()):
					the_post();
		?>
			<header>
				<h3 class="single-article"><?php the_title(); ?></h3>
			</header>
			<div class="post_content complete-article"> 
				<?php the_content();?>
			</div>
		</article>
		<?php 
				endwhile;
			endif;
		?>
	</section>
<?php

	get_footer();