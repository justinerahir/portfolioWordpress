<?php 
	
	get_header();
?>	
	<hgroup>
		<h1><a href="<?php bloginfo('wpurl'); ?>"><?php bloginfo('name'); ?></a></h1>
		<h2><?php bloginfo('description'); ?></h2>
	</hgroup>
	
	<section id="content">
		<?php 
		
		$args = array('post_type' => 'works', 'post_per_page' => 10);
		$loop = new WP_Query($args);
			if($loop->have_posts()):
				while($loop->have_posts()):
					$loop->the_post();
		?>
		
		<article <?php post_class(); ?>>
			<hgroup>
				<h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
				<h3><?php _e('Publié le') ?> <?php echo get_the_date(); ?></h3>
			</hgroup>
			<div class="thumb"><?php the_post_thumbnail('thumbnail'); ?></div>
			<div class="post_content">
				<?php the_content();?>
			</div>
		</article>
		<?php 
				endwhile;
			endif;
		?>
	</section>
	
<?php
	get_sidebar('primary');
?>
<hr/>
<?php
	get_sidebar('secondary');
?>

<?php
	get_footer();
