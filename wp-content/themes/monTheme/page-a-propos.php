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
				<h3 class="about">A propos</h3>
			</header>
			
			<?php 
			if(have_posts()):
				while(have_posts()):
					the_post();
			?>
			<div class="about-bio">
				<?php the_content(); ?>
			</div>
			
			<?php 
				endwhile;
			endif;
			?>
			<div class="about-photo">
				<p>
					<img src="http://www.justinerahir.be/wordpress/wp-content/uploads/2013/01/moi2.jpg" alt="Photo de moi - Justine Rahir" width="142" height="173" class="alignnone size-full wp-image-65" />
				</p>

				<p class="info">JUSTINE RAHIR</p>
				<p class="info">Webdesigner</p>
			</div>
					
			<div class="about-skills">
				<header>
					<h4 class="skills"> Mes compétences</h4>
				</header>
				<ul class="skills">
					<?php 
					$skills = new WP_query(array('post_type'=>'capacity', 'posts_per_page' => 10));
					
					if($skills->have_posts()):
						while($skills->have_posts()):
							$skills->the_post();
							$postId = get_the_ID();
					?>
						<?php
					        $capacity = get_post_custom();
					        foreach ( $capacity as $key => $value ):
					        if(substr($key, 0, 1) != '_'):
					       ?>
					        <li class="<?php echo($value[0]); ?> sprite">
					        	<span><?php echo(the_title()); ?></span>
					        </li>
					       <?php 
					        endif;
					        endforeach; 
					       ?>
						<?php the_content();?>
					<?php 
						endwhile;
					endif; 
					?>
				</ul>
			</div>
		</article>
	</section>
	<?php get_footer();?>