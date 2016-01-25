<?php
/*
  Template Name: Left Sidebar
*/
?>

<?php get_header(); ?>

<section class="two-column row no-max pad">
  <div class="small-12 columns">
    <div class="row">

      <!-- Primary Column -->
      <div class="small-12 medium-7 medium-offset-1 medium-push-4 columns">
        <div class="primary">
    
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
          <h1><?php the_title(); ?></h1>      
          <p><?php the_content(); ?></p>        
      
          <?php endwhile; else : ?>
      
          <p><?php _e( 'Sorry, no pages found.' ); ?></p>
      
          <?php endif; ?>
    
        </div>
      </div>
  
      <!-- Secondary Column -->
      <div class="small-12 medium-4 medium-pull-8 columns">
        <div class="secondary">
          
          <?php if( !dynamic_sidebar( 'blog' ) ): ?>

            <h2 class="module-heading">Sidebar Setup</h2>
            <p>Please add widgets via the admin area!</p>

          <?php endif; ?>

        </div>
      </div>

      <!-- Calls our Sidebar from a separate php file -->
      <?php  // get_sidebar( 'page' ); ?>

    </div>
  </div>
</section>





<?php get_footer(); ?>