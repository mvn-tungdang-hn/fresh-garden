<title>Sản phẩm - Fresh garden</title>
<script src="public/js/product.js" defer></script>

<!-- Breadcrumbs -->
<nav aria-label="breadcrumb" class="py-2 bg-secondary">
  <ol class="breadcrumb container mb-0 px-2">
    <li class="breadcrumb-item">
      <a href="#" class="text-decoration-none">Trang chủ</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">Sản phẩm</li>
  </ol>
</nav>

<!-- Product -->
<section class="container-fluid py-3 p-lg-4">
  <?php foreach ($categories as $idxCategory => $category) { ?>
    <div class="row mb-4 <?php if ($idxCategory % 2 != 0) { ?>flex-row-reverse<?php } ?>">
      <div class="col-lg-4">
        <a href="category-product/<?php echo $category->id ?>" class="main-category d-block col-sm-6 position-relative overflow-hidden w-100">
          <img src="<?php echo $category->thumbnail ?? 'public/images/static/noimage.jpg' ?>" class="img-fluid w-100" alt="..." />
          <div class="position-absolute top-50 start-50 translate-middle w-75 h-75 border border-white d-flex justify-content-center align-items-center flex-column">
            <h3 class="fs-1 text-white fw-bold mb-3 text-uppercase">
              <?php echo $category->title ?>
            </h3>
            <button class="btn btn-secondary rounded-pill">
              <i class="bi bi-hand-thumbs-up pe-2"></i>Xem chi tiết
            </button>
          </div>
        </a>
      </div>
      <div class="col-lg-8">
        <div class="swiper category">
          <div class="swiper-wrapper pb-2">
            <?php if (count($category->products) > 0) { ?>
              <?php foreach ($category->products as $product) { ?>
                <div class="swiper-slide h-100">
                  <div class="product shadow-sm h-100">
                    <div class="product-image bg-cover" style="
                        background-image: url(<?php echo $product->thumbnail ?>);
                      "></div>
                    <div class="p-3 d-flex flex-column">
                      <a href="product/<?php echo $product->id ?>" class="text-decoration-none">
                        <h5 class="text-truncate">
                          <?php echo $product->title ?>
                        </h5>
                      </a>
                      <p class="mt-3 flex-grow-1">
                        <b>Thành phần: </b>
                        <?php echo $product->include ?>
                      </p>
                      <div class="mt-4">
                        <?php if (isset($product->original_price)) { ?>
                          <p class="mb-1 text-secondary fs-4 text-decoration-line-through">
                            <?php echo number_format($product->original_price) ?>đ
                          </p>
                        <?php } ?>
                        <p class="fw-bold fs-3">
                          <?php if (isset($product->price)) { ?>
                            <span class="text-warning"><?php echo number_format($product->price) ?>đ</span>
                          <?php } else { ?>
                            <span class="text-primary">Liên hệ</span>
                          <?php } ?>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              <?php } ?>
            <?php } else { ?>
              <div class="<?php if ($idxCategory % 2 != 0) { ?>text-end w-100<?php } ?>">Không có sản phẩm phù hợp</div>
            <?php  } ?>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
</section>