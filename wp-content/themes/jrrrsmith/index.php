<?php get_header();?>
<div class="home wrap">
	<div class="home__hero">
	</div>
<?php while(have_posts()) : the_post(); ?>
	<h2 class="title"><?php the_title(); ?></h2>
	<?php the_content('Read More'); ?>
<?php endwhile; ?>
</div>
<?php get_footer();?>
