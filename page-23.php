<?php get_header(); ?>
<!-- Looping through the pages and printing the h2, date and p, F=month,j=day,Y=year, g=hour, i=minute and a=am or pm -->
	<?php 
	if( have_posts()): 
			while ( have_posts() ): the_post(); ?>
				<h1> <?php the_title(); ?> </h1>
				<small> Published on: <?php the_time('F j,Y'); ?> at <?php the_time('g:i a'); ?></small>
				<p> <?php the_content(); ?> </p>
			
			<?php endwhile;
		  endif;

	?>
<?php get_footer(); ?>