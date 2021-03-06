<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>
<article>
  <h2 class="tagine"> <?php echo get_post_meta(49, 'header', true); ?> </h2>
  <h3><?php echo get_post_meta(49,"sub-header",true); ?></h3>
</article>
<?php

$posts = get_posts('category_name=home_page'); 
sort($posts);
foreach($posts as $post) { 
    setup_postdata( $post );?>

   <h2 class="titleHeadings"><?php  the_title(); ?></h2>
    <p><?php the_content(); ?></p>
    <?php the_post_thumbnail() ?>
<?php } ?>

<?php the_posts_navigation(); ?>



