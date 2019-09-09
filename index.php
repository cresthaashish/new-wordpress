<?php get_header(); ?>
<!-- Looping through the pages and printing the h2, date and p, F=month,j=day,Y=year, g=hour, i=minute and a=am or pm -->
	<?php if( have_posts()): 
			while ( have_posts() ): the_post(); ?>
				<?php get_template_part('content'); ?>
	<?php		
			endwhile;
		  endif;

	?>
<?php get_footer(); ?>