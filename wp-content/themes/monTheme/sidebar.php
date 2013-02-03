	<header>
		<h3> Hello</h3>
	</header>
	<p class="desc">
		Bienvenue sur mon portfolio! Je vais vous parler un peu de moi mais surtout de ce que je fais! 
		Du webdesign, du graphisme et encore pleins d'autres belles choses ;-) 
	</p>
	<p class="moi">
		Je m'appelle Justine, j'ai 21 ans et <br/> je suis une jeune <a href="index.html">graphiste</a> et <a href="index.html">webdesigner</a>.
	</p>
	<p class="follow">
		Retrouvez-moi aussi par ici ! 
	</p>
	<ul class="icones">
		<?php 
		$icones = new WP_query(array('post_type'=>'icones'));
		
		if($icones->have_posts()):
			while($icones->have_posts()):
				$icones->the_post();
				$postId = get_the_ID();
		?>
			<?php the_content();?>
		<?php 
			endwhile;
		endif; 
		?>
	</ul>