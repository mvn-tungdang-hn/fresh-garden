<title>Fresh garden</title>
<script src="public/js/home.js" defer></script>

<!-- Banner -->
<section class="swiper" id="banner">
  <div class="swiper-wrapper">
    <?php foreach ($banners as $item) { ?>
      <a class="swiper-slide d-block position-relative" href="<?php echo isset($item->link) ? $item->link : "#" ?>" target="<?php echo $item->is_external === 1 ? "_blank" : "_self" ?>">
        <img src="<?php echo $item->thumbnail ?>" class="img-fluid" alt="<?php echo $item->title ?>" />
        <div class="text-white fs-1 fw-bold position-absolute top-50 start-50 translate-middle ff-kausan">
          <?php echo $item->title ?>
        </div>
      </a>
    <?php } ?>
  </div>
</section>

<!-- Main categories -->
<section class="my-5">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="text-center fs-1 ff-kausan">Collections</h2>
      <p class="text-secondary">Lorem Ipsum is simply dummy text of the printing and typesettin</p>
    </div>
    <div class="row">
      <?php foreach ($collections as $collection) { ?>
        <a href="#" class="col-sm-6 mb-3">
          <div class="main-category-2 position-relative overflow-hidden">
            <img src="<?php echo $collection->thumbnail ?? 'public/images/static/noimage.jpg' ?>" class="img-fluid w-100 shadow" alt="..." />
            <div class="position-absolute top-50 start-50 translate-middle w-75 h-75 border border-white d-flex justify-content-center align-items-center flex-column">
              <h3 class="fs-1 text-white fw-bold mb-3"><?php echo $collection->title ?></h3>
              <button class="btn btn-dark">
                <i class="bi bi-hand-thumbs-up pe-2"></i>Read more
              </button>
            </div>
          </div>
        </a>
      <?php } ?>
    </div>
  </div>
</section>

<!-- About us -->
<section class="mb-5">
  <div class="bg-about-us bg-cover d-none d-lg-block" style="background-image: url(public/images/static/bg-about-us.jpg);">
  </div>
  <div class="container translate-middle-y content-about-us">
    <div class="text-center">
      <h2 class="ff-kausan fs-1">About us</h2>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
    </div>
    <div class="shadow bg-white">
      <div class="row g-0">
        <div class="col-sm-6">
          <img src="public/images/static/homepage1_03.jpg" class="img-fluid w-100" alt="">
        </div>
        <div class="col-sm-6">
          <div class="p-5">
            <h4 class="text-uppercase mb-3">WHAT'S THE HEALTHIEST BREAD FOR YOUR SANDWICH?</h4>
            <p class="text-secondary mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
            </p>
            <button class="btn btn-outline-dark fw-normal btn-lg text-uppercase fs-6 px-4">Read more</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Out products -->
<section class="mb-5" id="hot-deals">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="text-center ff-kausan fs-1">Hot Deals</h2>
      <p class="text-secondary">Lorem Ipsum is simply dummy text of the printing and typesettin</p>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <div class="x-product">
          <div class="x-product-image">
            <img src="https://demo1.leotheme.com/bos_highlands_demo/25-large_default/hummingbird-printed-t-shirt.jpg" alt="" />
            <div class="x-product-include">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor
            </div>
          </div>
          <a href="">
            <h5 class="x-product-title text-truncate">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor
            </h5>
          </a>
          <div class="text-end">
            <span class="x-product-original-price">$23.90</span>
            <span class="x-product-price">$20.00</span>
          </div>
          <div class="x-product-add">
            <button class="btn btn-light">Add to cart</button>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="row">
          <div class="col-sm-6">
            <div class="x-product">
              <div class="x-product-image">
                <img src="https://demo1.leotheme.com/bos_highlands_demo/25-large_default/hummingbird-printed-t-shirt.jpg" alt="" />
                <div class="x-product-include">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor
                </div>
              </div>
              <a href="">
                <h5 class="x-product-title text-truncate">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor
                </h5>
              </a>
              <div class="text-end">
                <span class="x-product-original-price">$23.90</span>
                <span class="x-product-price">$20.00</span>
              </div>
              <div class="x-product-add">
                <button class="btn btn-light">Add to cart</button>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="x-product">
              <div class="x-product-image">
                <img src="https://demo1.leotheme.com/bos_highlands_demo/25-large_default/hummingbird-printed-t-shirt.jpg" alt="" />
                <div class="x-product-include">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor
                </div>
              </div>
              <a href="">
                <h5 class="x-product-title text-truncate">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor
                </h5>
              </a>
              <div class="text-end">
                <span class="x-product-original-price">$23.90</span>
                <span class="x-product-price">$20.00</span>
              </div>
              <div class="x-product-add">
                <button class="btn btn-light">Add to cart</button>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="x-product">
              <div class="x-product-image">
                <img src="https://demo1.leotheme.com/bos_highlands_demo/25-large_default/hummingbird-printed-t-shirt.jpg" alt="" />
                <div class="x-product-include">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor
                </div>
              </div>
              <a href="">
                <h5 class="x-product-title text-truncate">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor
                </h5>
              </a>
              <div class="text-end">
                <span class="x-product-original-price">$23.90</span>
                <span class="x-product-price">$20.00</span>
              </div>
              <div class="x-product-add">
                <button class="btn btn-light">Add to cart</button>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="x-product">
              <div class="x-product-image">
                <img src="https://demo1.leotheme.com/bos_highlands_demo/25-large_default/hummingbird-printed-t-shirt.jpg" alt="" />
                <div class="x-product-include">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor
                </div>
              </div>
              <a href="">
                <h5 class="x-product-title text-truncate">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor
                </h5>
              </a>
              <div class="text-end">
                <span class="x-product-original-price">$23.90</span>
                <span class="x-product-price">$20.00</span>
              </div>
              <div class="x-product-add">
                <button class="btn btn-light">Add to cart</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Why Choose Us -->
<section class="mb-5 bg-cover pt-5" style="background-image: url(public/images/static/bg-image2.jpg);">
  <div class="container">
    <div class="row align-items-end">
      <div class="col-12 col-sm-8">
        <div class="bg-white p-4 mb-5">
          <h2 class="ff-kausan fs-1 mb-4">Why Choose Us</h2>
          <p class="text-secondary">This is Photoshop’s version of Lorem Ipsum. Proin gravida nibh vel velit auctorer aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequa ipsum nec sagittis sem nibh id elit.
          </p>
          <ul class="list-group list-group-flush mb-4">
            <li class="list-group-item ps-0">100% Organic!</li>
            <li class="list-group-item ps-0">Fast Free Delivery</li>
            <li class="list-group-item ps-0">Best Shopping Startegies</li>
            <li class="list-group-item ps-0">More than 15 Years in the business</li>
          </ul>
          <button class="btn btn-outline-dark fw-normal btn-lg text-uppercase fs-6 px-4">Read more</button>
        </div>
      </div>
      <div class="col-4 d-none d-lg-block">
        <img src="public/images/static/homepage1_03.png" class="img-fluid" alt="">
      </div>
    </div>
  </div>
</section>

<!-- Sale products -->
<section class="mb-5">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="text-center ff-kausan fs-1">Sale Products</h2>
      <p class="text-secondary">Lorem Ipsum is simply dummy text of the printing and typesettin</p>
    </div>
    <div class="swiper sale-products">
      <div class="swiper-wrapper">
        <div class="swiper-slide h-100">
          <div class="x-product">
            <div class="x-product-image">
              <img src="https://demo1.leotheme.com/bos_highlands_demo/25-large_default/hummingbird-printed-t-shirt.jpg" alt="" />
              <div class="x-product-include">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor
              </div>
            </div>
            <a href="">
              <h5 class="x-product-title text-truncate">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor
              </h5>
            </a>
            <div class="text-end">
              <span class="x-product-original-price">$23.90</span>
              <span class="x-product-price">$20.00</span>
            </div>
            <div class="x-product-add">
              <button class="btn btn-light">Add to cart</button>
            </div>
            <div class="x-product-status">
              <div class="text-danger">On sale!</div>
              <div class="text-success">New</div>
            </div>
          </div>
        </div>
        <div class="swiper-slide h-100">
          <div class="x-product">
            <div class="x-product-image">
              <img src="https://demo1.leotheme.com/bos_highlands_demo/25-large_default/hummingbird-printed-t-shirt.jpg" alt="" />
              <div class="x-product-include">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor
              </div>
            </div>
            <a href="">
              <h5 class="x-product-title text-truncate">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor
              </h5>
            </a>
            <div class="text-end">
              <span class="x-product-original-price">$23.90</span>
              <span class="x-product-price">$20.00</span>
            </div>
            <div class="x-product-add">
              <button class="btn btn-light">Add to cart</button>
            </div>
          </div>
        </div>
        <div class="swiper-slide h-100">
          <div class="x-product">
            <div class="x-product-image">
              <img src="https://demo1.leotheme.com/bos_highlands_demo/25-large_default/hummingbird-printed-t-shirt.jpg" alt="" />
              <div class="x-product-include">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor
              </div>
            </div>
            <a href="">
              <h5 class="x-product-title text-truncate">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor
              </h5>
            </a>
            <div class="text-end">
              <span class="x-product-original-price">$23.90</span>
              <span class="x-product-price">$20.00</span>
            </div>
            <div class="x-product-add">
              <button class="btn btn-light">Add to cart</button>
            </div>
          </div>
        </div>
        <div class="swiper-slide h-100">
          <div class="x-product">
            <div class="x-product-image">
              <img src="https://demo1.leotheme.com/bos_highlands_demo/25-large_default/hummingbird-printed-t-shirt.jpg" alt="" />
              <div class="x-product-include">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor
              </div>
            </div>
            <a href="">
              <h5 class="x-product-title text-truncate">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor
              </h5>
            </a>
            <div class="text-end">
              <span class="x-product-original-price">$23.90</span>
              <span class="x-product-price">$20.00</span>
            </div>
            <div class="x-product-add">
              <button class="btn btn-light">Add to cart</button>
            </div>
          </div>
        </div>
        <div class="swiper-slide h-100">
          <div class="x-product">
            <div class="x-product-image">
              <img src="https://demo1.leotheme.com/bos_highlands_demo/25-large_default/hummingbird-printed-t-shirt.jpg" alt="" />
              <div class="x-product-include">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor
              </div>
            </div>
            <a href="">
              <h5 class="x-product-title text-truncate">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor
              </h5>
            </a>
            <div class="text-end">
              <span class="x-product-original-price">$23.90</span>
              <span class="x-product-price">$20.00</span>
            </div>
            <div class="x-product-add">
              <button class="btn btn-light">Add to cart</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>