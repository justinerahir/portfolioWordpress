<h5><?php _e('Commentaires'); ?></h5>
<?php 
	if(have_comments()):
		while(have_comments()):
			the_comment();
?>

	<div <?php comment_class(); ?>>
		<p class="auteur">Posté par <?php the_author();?> le <?php the_date();?></p>
		<?php comment_text(); ?>
	</div>
<?php 
	endwhile;
		endif;
?>