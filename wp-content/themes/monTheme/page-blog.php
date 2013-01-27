<?php 
	get_header();
?>	
	<section id="content">
		<h1 class="none">Section content - sidebar + contenu</h1>
		<article class="sidebar">
			<?php get_sidebar();?>
		</article>
		<article class="contenu">
			<header>
				<h3>Blog</h3>
			</header>

			<p class="news">
				Actualités, dernières tendances web, bons plans, &hellip; 
				<br>
				Voilà tout ce que vous trouverez sur ce blog ;-)
			</p>

			<?php 
				query_posts('cat=8');
					while (have_posts()): 
						the_post(); 
			?>
			<div class="article">
				<date class="article-date"><?php _e('Le')?> <?php echo(get_the_date());?></date>
				<h4><?php the_title(); ?></h4>
				<?php the_excerpt(); ?>
            </div>
            <?php 
            	endwhile; 
            ?>
		</article>
	</section>
	<?php get_footer();?>