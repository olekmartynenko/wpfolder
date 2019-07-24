<?php /* Template Name: Portfolio Template */ ?>

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

<?php get_footer(); ?>