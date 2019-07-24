<?php get_header(); ?>
<div class="slider">
      <div id="slider">
        <figure class="slider-box">
          <img class="slider-box__img" src="i/slide1.jpg" />
          <figcaption class="slider-box__caption">
            <div class="slider-box__title">
              Enjoy This <br> Summer Trends
            </div>
            <p class="slider-box__text">Discover now Latest Collection</p>
            <a href="#shop" class="slider-box__btn">shop now</a>
          </figcaption>
        </figure>

        <figure class="slider-box">
          <img class="slider-box__img" src="i/slide2.jpg" />
          <figcaption class="slider-box__caption">
            <div class="slider-box__title">
              New Collections
            </div>
            <p class="slider-box__text">Discover now Latest Collection</p>
            <a href="#shop" class="slider-box__btn">shop now</a>
          </figcaption>
        </figure>

        <figure class="slider-box">
          <img class="slider-box__img" src="src/i/slide3.jpg" />
          <figcaption class="slider-box__caption">
            <div class="slider-box__title">
              Introducing <br> Spring/Summer
            </div>
            <p class="slider-box__text">Discover now Latest Collection</p>
            <a href="#shop" class="slider-box__btn">shop now</a>
            <div class="myDots"></div>
          </figcaption>
        </figure>

      </div>
      <div class="custom-dots"></div>
    </div>

    <div class="container-gallery">
      <figure class="gallery-box  gallery-box_one">
        <img class="gallery-box__i" src="src/i/img1.jpg">
        <span class="gallery-box__hoverblock"></span>
        <figcaption class="gallery-box__caption">
          <h2 class="gallery-box__title">New Arrivals</h2>
          <a href="#" class="gallery-box__btn">Shop Now</a>

        </figcaption>

      </figure>
      <figure class="gallery-box gallery-box_two">
        <img class="gallery-box__i" src="i/img2.jpg">
        <span class="gallery-box__hoverblock"></span>
        <figcaption class="gallery-box__caption">
          <h2 class="gallery-box__title gallery-box__title_sm">Woman Collection</h2>
          <a href="#" class="gallery-box__btn">Shop Now</a>

        </figcaption>
      </figure>
      <figure class="gallery-box gallery-box_three">
        <img class="gallery-box__i" src="i/img3.jpg">
        <span class="gallery-box__hoverblock"></span>
        <figcaption class="gallery-box__caption ">
          <h2 class="gallery-box__title gallery-box__title_sm">Man Collection</h2>
          <a href="#" class="gallery-box__btn">Shop Now</a>
        </figcaption>
      </figure>
      <figure class="gallery-box gallery-box_four">
        <img class="gallery-box__i" src="i/img4.jpg">
        <span class="gallery-box__hoverblock"></span>
        <figcaption class="gallery-box__caption">
          <h2 class="gallery-box__title gallery-box__title_sm">Free Shipping <br> On All Orders</h2>
          <a href="#" class="gallery-box__btn">Shop Now</a>
        </figcaption>
      </figure>
    </div>
    <div class="shop">
      <div class="shop__container">
        <h1 class="shop__title" id="shop">Featured Products</h1>
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

          <div class="product-box">
            <div class="product-box__item" data-prod_id="1" data-category="1" data-all="0" data-price="200">
              <h3 class="product-box__title">Azure Tote</h3>
              <div class="product-box__i">
                <img src="i/bag1.jpg">
                <img class="i-hover" src="i/bag2.jpg">
                <button class="product-box__btn"></button>
              </div>
              <div class="product-box__meta">
                <p>$200</p>
              </div>
            </div>
            <div class="product-box__item" data-prod_id="2" data-category="1" data-all="0" data-price="310">
              <h3 class="product-box__title">Black Glasses</h3>
              <div class="product-box__i">
                <img src="i/glasses1.jpg">
                <img class="i-hover" src="i/glasses2.jpg">
                <button class="product-box__btn"></button>
              </div>
              <div class="product-box__meta">
                <p>$310</p>
              </div>
            </div>
            <div class="product-box__item" data-prod_id="3" data-category="2" data-all="0" data-price="430">
              <h3 class="product-box__title">Blue Raincoat</h3>
              <div class="product-box__i">
                <img src="i/raincoat1.jpg">
                <img class="i-hover" src="i/raincoat2.jpg">
                <button class="product-box__btn"></button>
              </div>
              <div class="product-box__meta">
                <p>$430</p>
              </div>
            </div>
            <div class="product-box__item" data-prod_id="4" data-category="2" data-all="0" data-price="290">
              <h3 class="product-box__title">Bomber in Cotton</h3>
              <div class="product-box__i">
                <img src="i/bomber1.jpg">
                <img class="i-hover" src="i/bomber2.jpg">
                <button class="product-box__btn"></button>
              </div>
              <div class="product-box__meta">
                <p>$290</p>
              </div>
            </div>
            <div class="product-box__item" data-prod_id="5" data-category="3" data-all="0" data-price="210">
              <h3 class="product-box__title">Boxy Runway T-Shirt</h3>
              <div class="product-box__i">
                <img src="i/runway1.jpg">
                <img class="i-hover" src="i/runway2.jpg">
                <button class="product-box__btn"></button>
              </div>
              <div class="product-box__meta">
                <p>$210</p>
              </div>
            </div>
            <div class="product-box__item" data-prod_id="6" data-category="1" data-all="0" data-price="35">
              <h3 class="product-box__title">Cashmere Hat</h3>
              <div class="product-box__i">
                <img src="i/hatc1.jpg">
                <img class="i-hover" src="i/hatc2.jpg">
                <button class="product-box__btn"></button>
              </div>
              <div class="product-box__meta">
                <p>$35</p>
              </div>
            </div>
            <div class="product-box__item" data-prod_id="7" data-category="2" data-all="0" data-price="490">
              <h3 class="product-box__title">Classic Topper</h3>
              <div class="product-box__i">
                <img src="i/topper1.jpg">
                <img class="i-hover" src="i/topper2.jpg">
                <button class="product-box__btn"></button>
              </div>
              <div class="product-box__meta">
                <p>$490</p>
              </div>
            </div>
            <div class="product-box__item" data-prod_id="8" data-category="1" data-all="0" data-price="40">
              <h3 class="product-box__title">Cotton Hat</h3>
              <div class="product-box__i">
                <img src="i/hat1.jpg">
                <img class="i-hover" src="i/hat2.jpg">
                <button class="product-box__btn"></button>
              </div>
              <div class="product-box__meta">
                <p>$40</p>
              </div>
            </div>
            <div class="product-box__item" data-prod_id="9" data-category="2" data-all="0" data-price="100">
              <h3 class="product-box__title">Cotton Jacket</h3>
              <div class="product-box__i">
                <img src="i/jacket1.jpg">
                <img class="i-hover" src="i/jacket2.jpg">
                <button class="product-box__btn"></button>
              </div>
              <div class="product-box__meta">
                <p>$100</p>
              </div>
            </div>
            <div class="product-box__item" data-prod_id="10" data-category="4" data-all="0" data-price="155">
              <h3 class="product-box__title">Cotton Poplin Dress</h3>
              <div class="product-box__i">
                <img src="i/dress1.jpg">
                <img class="i-hover" src="i/dress2.jpg">
                <button class="product-box__btn"></button>
              </div>
              <div class="product-box__meta">
                <p>$155</p>
              </div>
            </div>
            <div class="product-box__item" data-prod_id="11" data-category="3" data-all="0" data-price="32">
              <h3 class="product-box__title">Cotton Shirt</h3>
              <div class="product-box__i">
                <img src="i/shirt1.jpg">
                <img class="i-hover" src="i/shirt2.jpg">
                <button class="product-box__btn"></button>
              </div>
              <div class="product-box__meta">
                <p>$32</p>
              </div>
            </div>
            <div class="product-box__item" data-prod_id="12" data-category="3" data-all="0" data-price="25">
              <h3 class="product-box__title">Cotton T-shirt</h3>
              <div class="product-box__i">
                <img src="i/tshirt1.jpg">
                <img class="i-hover" src="i/tshirt2.jpg">
                <button class="product-box__btn"></button>
              </div>
              <div class="product-box__meta">
                <p>$25</p>
              </div>
            </div>
            <div class="product-box__item" data-prod_id="13" data-category="3" data-all="0" data-price="215">
              <h3 class="product-box__title">Crewneck Blouse</h3>
              <div class="product-box__i">
                <img src="i/blouse1.jpg">
                <img class="i-hover" src="i/blouse2.jpg">
                <button class="product-box__btn"></button>
              </div>
              <div class="product-box__meta">
                <p>$215</p>
              </div>
            </div>
            <div class="product-box__item" data-prod_id="14" data-category="4" data-all="0" data-price="90">
              <h3 class="product-box__title">Denim Dress</h3>
              <div class="product-box__i">
                <img src="i/ddress1.jpg">
                <img class="i-hover" src="i/ddress2.jpg">
                <button class="product-box__btn"></button>
              </div>
              <div class="product-box__meta">
                <p>$90</p>
              </div>
            </div>
            <div class="product-box__item" data-prod_id="15" data-category="1" data-all="0" data-price="130">
              <h3 class="product-box__title">Headphones</h3>
              <div class="product-box__i">
                <img src="i/hp1.jpg">
                <img class="i-hover" src="i/hp2.jpg">
                <button class="product-box__btn"></button>
              </div>
              <div class="product-box__meta">
                <p>$130</p>
              </div>
            </div>
            <div class="product-box__item" data-prod_id="16" data-category="2" data-all="0" data-price="330">
              <h3 class="product-box__title">Coat</h3>
              <div class="product-box__i">
                <img src="i/coat1.jpg">
                <img class="i-hover" src="i/coat2.jpg">
                <button class="product-box__btn"></button>
              </div>
              <div class="product-box__meta">
                <p>$330</p>
              </div>
            </div>
          </div>

        </div>
      </div>
      <div id="confirm-container" class="confirm-container">
        <div class="confirm-window">
          <form id="confirm-window__f" class="confirm-window__f">
            <div id="confirm-window__close" class="confirm-window__close"></div>
            <h2>Confirm purchase</h2>
            <input id="confirm-window__name" class="confirm-window__name" type="text" name="name" placeholder="Name"
              data-validate="1" autocomplete="off">
            <div class="error error_name"></div>
            <input id="confirm-window__tel" class="confirm-window__tel" type="tel" name="phone" placeholder="Phone"
              data-validate="1" autocomplete="off">
            <div class="error error_phone"></div>
            <button type="submit">Checkout</button>
          </form>
        </div>
      </div>
    </div>
    <div class="newsletter">
      <h2 class="newsletter__title">Newsletter</h2>
      <p class="newsletter__text">Get timely updates from your favorite products</p>
      <form id="newsletter__f" class="newsletter__f" action="">
        <input id="newsletter__inp" class="newsletter__inp" name="email" type="email"
          placeholder="Enter your email address" data-validate="1" autocomplete="off">
        <div class="error error_email"></div>
        <button type="submit" class="newsletter__btn">Subscribe</button>
      </form>
    </div>

<?php get_footer(); ?>