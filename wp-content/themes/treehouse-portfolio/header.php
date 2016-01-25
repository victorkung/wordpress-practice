<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- WP Title -->
    <!-- bloginfo function contains lots of info about the site  -->
    <title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
    
    <!-- Tells WordPress that we are at end of the <head> section and if there are any theme-specific things that need to be injected into the head it can be inserted here -->
    <!-- Examples are your wp_enqueue files -->
    <?php wp_head(); ?>
  </head>


  <!-- body_class() adds helpful classes that tell you what page you are on, whether you are logged in and etc -->
  <body <?php  body_class(); ?>>
    <header class="row no-max pad main">
      <h1>
        <!-- Link to Root URL -->
        <a class='current' href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
      </h1>

      <a href="" class="nav-toggle"><span></span>Menu</a>

      <nav>
        <h1 class="open">
          <a class='current' href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
        </h1>

        <?php 
          // setting up default argumentes for the wp_nav_menu function
          $defaults = array(
            'container' => false, // by default WordPress wraps menu in a div element
            'theme_location'  => 'primary-menu', // this is where our menu lives
            'menu_class'  => 'no-bullet'  // assign class to first element of the nav
          );

          wp_nav_menu( $defaults );
        ?>

      </nav>
    </header>

    <!-- 

    Original Navigation HTML from index.html

    <ul class="no-bullet">
      <li class="parent"><a href="index.html">Portfolio</a>
        <ul class="sub-menu">
          <li class='current'><a class='current' href="item.html">Portfolio Item</a></li>
          <li class='current'><a class='current' href="item.html">Portfolio Item</a></li>
          <li class='current'><a class='current' href="item.html">Portfolio Item</a></li>
          <li class='current'><a class='current' href="item.html">Portfolio Item</a></li>
        </ul>
      </li>
      <li class="parent"><a href="blog.html">Blog</a>
        <ul class="sub-menu">
          <li><a href="single-post.html">Single Post</a></li>
          <li><a href="author.html">Author Page</a></li>
        </ul>
      </li>
      <li><a href="about.html">About</a></li>
      <li><a href="contact.html">Contact</a></li>
    </ul>

    -->