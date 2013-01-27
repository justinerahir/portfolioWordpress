<?php get_header();?>	
<section id="content">
		<article class="sidebar"><?php get_sidebar();?></article>

		<article class="contenu">
			<?php 
				if(have_posts()):
					while(have_posts()):
						the_post();
			?>
			<header>
				<h3 class="single"><?php the_title(); ?></h3>
			</header>
			<div class="description">
				<?php the_content();?>
			</div>
			<?php 
				endwhile;
			endif;
		?>
		</article>
	</section>
<?php get_footer(); ?>