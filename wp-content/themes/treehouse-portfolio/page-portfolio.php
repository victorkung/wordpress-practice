<?php 
/* 
  Template Name: Portfolio Page
*/
?>
<?php get_header(); ?>

<section class="row">
  <div class="small-12 columns text-center">
    <div class="leader">
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
      <h1><?php the_title(); ?></h1>            
      <?php the_content(); ?>

    <?php endwhile; endif; ?>
    
    </div>
  </div>
</section>


<!-- PORTFOLIO ITEMS -->

<!-- Creates array to be passed into WP_Query -->
<?php 
  $num_posts = ( is_front_page() ) ? 4 : -1;

  $args = array(
    'post_type' => 'portfolio',
    'posts_per_page' => $num_posts
  );
  $query = new WP_Query( $args );
?>

<!-- Where WP_Query loop is called -->
<section class="row no-max pad">

  <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

    <div class="small-6 medium-4 large-3 columns grid-item">
      <!-- the_permalink knows the URL for portfolio item -->
      <!-- the_post_thumbnail will display the image -->
      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
    </div>

  <?php endwhile; endif; wp_reset_postdata(); ?> 
  <!-- reset postdata will clear the loop so if there are multiple loops there will be no conflict -->

</section>


<?php get_footer(); ?>