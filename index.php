<?php
	if (have_posts()){
		while (have_posts()) : the_post(); ?>
		<h2><?php the_title(); ?></h2>
	<?php endwhile;
	} else {
		echo "<p>Sorry! there is No posts here</p>";
	}

?>