<!DOCTYPE html>
<html>

<head>
  <title>title</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <?php wp_head();?>
</head>

<body>
  <div class="navbar">

    
    <?php wp_nav_menu( array( 
      'theme_location' => 'header-menu-custom', 
      'container_class' => 'menu'
       ) ) ?>
  
      <div class="logo"><?php the_custom_logo() ?></div>
    <button id="checkout" class="checkout cart">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 34.1 30">
        <path d="M11,20L11,20C11,20,11,20,11,20l18.1,0c0.4,0,0.8-0.3,1-0.7l4-14c0.1-0.3,0-0.6-0.2-0.9C33.7,4.1,33.4,4,33.1,4H8.7L8,0.8
    	C7.9,0.3,7.5,0,7,0H1C0.4,0,0,0.4,0,1s0.4,1,1,1h5.2c0.1,0.6,3.4,15.4,3.6,16.2C8.7,18.7,8,19.8,8,21c0,1.7,1.3,3,3,3h18.1
    	c0.6,0,1-0.4,1-1s-0.4-1-1-1H11c-0.6,0-1-0.4-1-1C10,20.4,10.4,20,11,20z M31.8,6l-3.4,12H11.8L9.1,6H31.8z" />
        <path
          d="M10,27c0,1.7,1.3,3,3,3s3-1.3,3-3s-1.3-3-3-3S10,25.3,10,27z M13,26c0.6,0,1,0.4,1,1s-0.4,1-1,1s-1-0.4-1-1S12.4,26,13,26z" />
        <path d="M24.1,27c0,1.7,1.3,3,3,3s3-1.3,3-3s-1.3-3-3-3S24.1,25.3,24.1,27z M27.1,26c0.6,0,1,0.4,1,1s-0.4,1-1,1s-1-0.4-1-1
    	S26.6,26,27.1,26z" /></svg><span class="top-cart-info__item">
        $<span id="final-price" class="red-info">0</span></span></button>

    <a href="#" class="menu-button">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </a>
  </div>

  <div class="dark-overlay"></div>

  <div class="mobile-menu">
    <a href="#" class="menu-button in-mobile active">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </a>

    <nav class="mobile-navigation">
      <ul>
        <li>
          <a class="menu__item" href="#shop ">Shop</a>

        </li>
        <li>
          <a class="menu__item" href="#">Portfolio</a>
        </li>
        <li class="has-submenu">
          <a class="menu__item" href="#">Blog</a>
          <ul>
            <li><a href="#">Article 1</a></li>
            <li><a href="#">Article 2</a></li>
            <li><a href="#">Article 3</a></li>
            <li><a href="#">Article 4</a></li>
            <li><a href="#">Article 5</a></li>
          </ul>
        </li>
        <li><a class="menu__item" href="#">About Us</a></li>
      </ul>
    </nav>
  </div>
  <main>