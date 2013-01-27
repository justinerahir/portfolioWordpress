<?php 
	
	get_header();
?>	
	<section id="content">
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