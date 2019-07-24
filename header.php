<!DOCTYPE html>
<html>

<head>
  <title>title</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all" />
  <?php wp_head();?>
</head>

<body>
  <div class="navbar">

    <nav class="menu">
      <ul>
        <li>
          <a class="menu__item" href="#shop">Shop</a>
        </li>
        <li>
          <a class="menu__item" href="#portfolio">Portfolio</a>
        </li>
        <li class="has-submenu">
          <a class="menu__item" href="#">Blog</a>
          <ul class="menu__sub">
            <li><a class="menu__sub__link" href="#">Article 1</a></li>
            <li><a class="menu__sub__link" href="#">Article 2</a></li>
            <li><a class="menu__sub__link" href="#">Article 3</a></li>
            <li><a class="menu__sub__link" href="#">Article 4</a></li>
            <li><a class="menu__sub__link" href="#">Article 5</a></li>
          </ul>
        </li>
        <li><a class="menu__item" href="#">About Us</a></li>
      </ul>
    </nav>
    <a href="index.html" class="logo" id="start"><svg version="1.1" xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 132 24">
        <path d="M5.205,16.528c0.09,1.59,1.44,2.91,3.57,2.91c2.01,0,3.33-1.05,3.42-2.49c0.09-1.35-0.84-2.25-2.85-2.82
      l-2.55-0.66c-3.479-1.02-5.22-2.939-5.22-5.76c0-1.77,0.66-3.24,2.01-4.35c1.35-1.14,3-1.71,4.95-1.71c2.01,0,3.63,0.57,4.919,1.71
      c1.29,1.11,1.95,2.64,1.95,4.53h-3.84c0-1.65-1.17-2.7-3.09-2.7c-1.77,0-3.09,0.99-3.09,2.43c0,1.14,0.81,1.92,2.46,2.37l2.55,0.75
      c4.29,1.17,5.85,3.54,5.64,6.3c-0.09,1.8-0.81,3.24-2.22,4.29c-1.38,1.05-3.06,1.56-5.04,1.56c-2.19,0-3.96-0.6-5.34-1.83
      s-2.07-2.73-2.07-4.53H5.205z" />
        <path d="M30.645,4.769c2.01-2.07,4.5-3.12,7.44-3.12s5.43,1.05,7.439,3.12c2.04,2.07,3.06,4.56,3.06,7.5
      c0,2.91-1.02,5.43-3.06,7.5c-2.04,2.07-4.53,3.09-7.439,3.09c-2.91,0-5.4-1.02-7.44-3.09c-2.01-2.07-3.03-4.59-3.03-7.5
      C27.615,9.328,28.635,6.838,30.645,4.769z M31.425,12.268c0,1.89,0.63,3.51,1.92,4.83c1.29,1.32,2.88,1.98,4.74,1.98
      s3.42-0.66,4.71-1.98c1.29-1.32,1.95-2.939,1.95-4.83s-0.66-3.51-1.95-4.83c-1.29-1.35-2.85-2.01-4.71-2.01s-3.45,0.66-4.74,2.01
      C32.055,8.758,31.425,10.378,31.425,12.268z" />
        <path d="M61.485,10.198h7.83c1.35,0,2.22-1.05,2.22-2.49c0-1.47-0.87-2.4-2.34-2.4h-7.709V1.889h8.1
      c3.63,0,5.939,2.16,5.939,5.609c0,1.71-0.81,3.3-2.729,4.02c1.199,0.3,2.13,0.93,2.819,1.89c0.69,0.96,1.021,1.95,1.021,2.939
      c0,1.74-0.601,3.21-1.771,4.41c-1.17,1.2-2.7,1.8-4.649,1.8h-8.73v-3.42h8.52c1.59,0,2.609-1.32,2.609-2.85
      c0-1.47-1.02-2.88-2.699-2.88h-8.43V10.198z" />
        <path d="M89.505,22.558V1.889h12.779v3.419h-8.97v5.37h7.859v3.39h-7.859v5.07h9.27v3.42H89.505z" />
        <path d="M130.573,22.558h-4.619l-4.86-7.35h-1.59v7.35h-3.84V1.889h8.279c2.13,0,3.78,0.66,4.891,1.979
        c1.14,1.29,1.71,2.88,1.71,4.71c0,1.59-0.45,3-1.351,4.23c-0.87,1.23-2.189,1.98-3.899,2.25L130.573,22.558z M119.504,5.308v6.48
        h4.14c1.891,0,2.91-1.5,2.91-3.21c0-1.68-0.99-3.27-2.79-3.27H119.504z" />
      </svg></a>
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