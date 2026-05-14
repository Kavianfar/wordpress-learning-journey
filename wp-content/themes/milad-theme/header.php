<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
  <h1><?php bloginfo('name'); ?></h1>
</header>
<nav>
  <div class="navbar">
    <div class="pic">
      <img src="https://wallpapers.com/images/featured-full/office-desk-a1yivbaxal92jim2.jpg" alt="office desk" class="image">
    </div>

       <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'container' => false,
            'menu_class' => 'menu',
        ));
       ?>

    <div class="nav-action">
      <button>sign in</button>
    </div>
  </div>
</nav>
