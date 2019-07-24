<?php /* Template Name: Custom Template */ ?>

<?php get_header(); ?>
<div class="slider">
  <?php if (have_rows('slider')) : ?>
    <ul id='slider' class="slides">
      <?php while (have_rows('slider')) : the_row();
        $image = get_sub_field('image');
        $caption = get_sub_field('caption');
        $link = get_sub_field('link');
        ?>
        <li class="slide slider-box">
          <img class="slider-box__img" src="<?php echo $image; ?>" />
          <div class="slider-box__caption">
            <?php echo $caption; ?>
            <a class="slider-box__btn" href="<?php echo $link; ?>">SHOP NOW</a>
          </div>
        </li>
      <?php endwhile; ?>
    </ul>
  <?php endif; ?>
  <div class="custom-dots"></div>
</div>
<?php if (have_rows('gallery')) : ?>
  <ul class="container-gallery">
    <?php while (have_rows('gallery')) : the_row();
      $image = get_sub_field('image');
      $caption = get_sub_field('caption');
      $link = get_sub_field('link');
      ?>
      <li class="slide gallery-box">
        <img class="gallery-box__i" src="<?php echo $image; ?>" />
        <span class="gallery-box__hoverblock"></span>
        <div class="gallery-box__caption">
          <?php echo $caption; ?>
          <a class="gallery-box__btn" href="<?php echo $link; ?>">Shop Now</a>
        </div>
      </li>
    <?php endwhile; ?>
  </ul>
<?php endif; ?>
<div class="shop">
  <div class="shop__container">
    <h1 class="shop__title" id="shop"><?php the_field(title); ?></h1>
    <div class="filter-box">
      <div class="filter-box__select">
        <label class="select-label">Category</label>
        <select class="select-control" id="select-category">
          <option value="0">All</option>
          <option value="1">Accesories</option>
          <option value="2">Outerwear</option>
          <option value="3">Shirt</option>
          <option value="4">Dress</option>
        </select>
      </div>
    </div>
    <div class="products">
      <?php if (have_rows('product_page')) : ?>
        <div class="product-box">
          <?php while (have_rows('product_page')) : the_row(); ?>
            <div class="product-box__item" data-category="<?php the_sub_field('product_category') ?>" data-all="0" data-price="<?php the_sub_field('product_price') ?>">
              <h4 class="product-box__title"><?php the_sub_field('product_title') ?></h4>
              <div class="product-box__i">
                <img src="<?php echo get_sub_field('image') ?>">
                <img class="i-hover" src="<?php echo get_sub_field('image_hover') ?>">
                <div class="product-box__btn"></div>
              </div>
              <div class="product-box__meta">
                <span>$</span>
                <p><?php the_sub_field('product_price') ?></p>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
  <div id="confirm-container" class="confirm-container">
    <div class="confirm-window">
      <form id="confirm-window__f" class="confirm-window__f">
        <div id="confirm-window__close" class="confirm-window__close"></div>
        <h2>Confirm purchase</h2>
        <input id="confirm-window__name" class="confirm-window__name" type="text" name="name" placeholder="Name" data-validate="1" autocomplete="off">
        <div class="error error_name"></div>
        <input id="confirm-window__tel" class="confirm-window__tel" type="tel" name="phone" placeholder="Phone" data-validate="1" autocomplete="off">
        <div class="error error_phone"></div>
        <button type="submit">Checkout</button>
      </form>
    </div>
  </div>
</div>
<div class="newsletter">
  <h2 class="newsletter__title"><?php the_field(newsletter) ?></h2>
  <p class="newsletter__text"><?php the_field(newsletter_text) ?></p>
  <form id="newsletter__f" class="newsletter__f" action="#">
    <?php the_field(newsletter_form) ?>
    <div class="error error_email-629"></div>
  </form>
</div>

<?php get_footer(); ?>