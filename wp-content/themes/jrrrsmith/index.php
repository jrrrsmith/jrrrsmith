<?php get_header();?>
<div class="home wrap">
	<div class="home__hero">
	</div>
  <div class="home__blog">
    <?php while(have_posts()) : the_post(); ?>
      <div class="home__blog__post">
      	<h2 class="title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
      	<?php the_content('Read More'); ?>
      </div>
    <?php endwhile; ?>
  </div>
</div>
<?php get_footer();?>
