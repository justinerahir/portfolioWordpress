<?php get_header(); ?>	
	<section id="content">
		<h1 class="none">Section content - sidebar + contenu</h1>
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
			<?php 
			if(have_posts()):
				while(have_posts()):
					the_post();
			?>
			<div class="form">
				<?php the_content(); ?>
			</div>
			
			<?php 
				endwhile;
			endif;
			?>
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