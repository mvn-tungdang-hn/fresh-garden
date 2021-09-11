<title><?php echo $product->title ?> - Fresh garden</title>
<script src="public/js/product-detail.js" defer></script>

<!-- Breadcrumbs -->
<nav aria-label="breadcrumb" class="py-2 bg-secondary">
  <ol class="breadcrumb container mb-0 px-2">
    <li class="breadcrumb-item">
      <a href="" class="text-decoration-none">Trang chủ</a>
    </li>
    <li class="breadcrumb-item">
      <a href="product" class="text-decoration-none">Sản phẩm</a>
    </li>
    <li class="breadcrumb-item">
      <a href="category-product/<?php echo $category->id ?>" class="text-decoration-none">
        <?php echo $category->title ?>
      </a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">
      <?php echo $product->title ?>
    </li>
  </ol>
</nav>

<!-- Product -->
<section class="container-fluid py-3 p-lg-4">
  <!-- Product detail -->
  <div class="row mb-5">
    <div class="col-sm-6 mb-3">
      <div class="mb-3">
        <img src="<?php echo $product->thumbnail ?>" class="img-fluid w-100 shadow rounded" alt="">
      </div>
      <div class="row px-6">
        <?php foreach ($images as $image) { ?>
          <a data-fancybox="gallery" class="col-3" href="<?php echo $image->thumbnail ?>">
            <img class="rounded shadow img-fluid" src="<?php echo $image->thumbnail ?>" />
          </a>
        <?php } ?>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="px-0 px-lg-2">
        <h1 class="fs-2 text-uppercase">
          <?php echo $product->title ?>
        </h1>
        <p>
          <span class="fs-5 fw-medium">Giá: </span>
          <span class="fw-bold fs-3 text-primary">
            <?php if (isset($product->price)) { ?>
              <span class="text-warning"><?php echo number_format($product->price) ?>đ</span>
            <?php } else { ?>
              <span class="text-primary">Liên hệ</span>
            <?php } ?>
          </span>
          <?php if (isset($product->original_price)) { ?>
            <span class="mb-1 text-secondary fs-5 text-decoration-line-through ps-3">
              <?php echo number_format($product->original_price) ?>đ
            </span>
          <?php } ?>
        </p>
        <p class="fs-5">
          <span class="fw-medium">Tình trạng: </span>
          <?php if ($product->quatity > 0) { ?>
            <span>Còn hàng</span>
          <?php } else { ?>
            <span class="text-danger">Hết hàng</span>
          <?php } ?>
        </p>
        <p class="fs-5 fw-medium">Mô tả sản phẩm:</p>
        <p class="border rounded p-3">
          <?php echo $product->description ?>
        </p>
        <div class="d-flex align-items-center mb-3">
          <p class="fs-5 fw-medium mb-0">Số lượng:</p>
          <div class="ps-3 d-flex align-items-center">
            <button class="
                      btn btn-outline-dark
                      rounded-circle
                      btn-plus
                      flex-center
                    " id="btn-dash">
              <i class="bi bi-dash"></i>
            </button>
            <span id="qty" class="px-3 fs-5">1</span>
            <button class="
                      btn btn-outline-dark
                      rounded-circle
                      btn-plus
                      flex-center
                    " id="btn-plus">
              <i class="bi bi-plus"></i>
            </button>
          </div>
        </div>
        <button class="
                  btn btn-primary btn-lg
                  rounded-pill
                  text-uppercase
                  fw-bold
                  text-white
                ">
          <i class="bi bi-plus-circle pe-2"></i>Thêm vào giỏ
        </button>
      </div>
    </div>
  </div>

  <!-- Product content tabs -->
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active text-uppercase fw-bold" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
        Tổng quan sản phẩm
      </button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link text-uppercase fw-bold" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
        Vận chuyển, giao hàng
      </button>
    </li>
  </ul>
  <div class="tab-content p-3 border border-top-0 rounded-bottom" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
      <?php echo $product->content ?>
    </div>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      Đang cập nhật tính năng.
    </div>
  </div>
</section>