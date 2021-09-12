<title><?php echo $category->title ?> - Fresh garden</title>
<script src="public/js/category-product.js" defer></script>

<!-- Breadcrumbs -->
<nav aria-label="breadcrumb" class="py-2 bg-secondary">
  <ol class="breadcrumb container mb-0 px-2">
    <li class="breadcrumb-item">
      <a href="" class="text-decoration-none">Trang chủ</a>
    </li>
    <li class="breadcrumb-item">
      <a href="product" class="text-decoration-none">Sản phẩm</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">
      <?php echo $category->title ?>
    </li>
  </ol>
</nav>

<section class="container-fluid py-3 p-lg-4">
  <h1 class="fw-bold fs-1 mb-4 text-capitalize"><?php echo $category->title ?></h1>
  <div class="row">
    <div class="col-lg-2">
      <div class="mb-4">
        <p class="fs-6 text-uppercase mb-1 fw-medium">Giá</p>
        <div class="d-flex flex-wrap">
          <span class="
                    badge
                    rounded-pill
                    bg-secondary
                    fw-normal
                    pointer
                    me-2
                    mb-2
                    fs-6
                  ">
            Dưới 40.000
          </span>
          <span class="
                    badge
                    rounded-pill
                    bg-secondary
                    fw-normal
                    pointer
                    me-2
                    mb-2
                    fs-6
                  ">
            Từ 40.000 - 140.000
          </span>
          <span class="
                    badge
                    rounded-pill
                    bg-secondary
                    fw-normal
                    pointer
                    me-2
                    mb-2
                    fs-6
                  ">
            Từ 140.000 - 240.000
          </span>
        </div>
      </div>

      <div class="mb-4">
        <p class="fs-6 text-uppercase mb-1 fw-medium">Thương hiệu</p>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
          <label class="form-check-label" for="flexCheckDefault">
            Default checkbox
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked />
          <label class="form-check-label" for="flexCheckChecked">
            Checked checkbox
          </label>
        </div>
      </div>
    </div>
    <div class="col-lg-10">
      <?php if (count($products) > 0) { ?>
        <div class="row mb-4">
          <?php foreach ($products as $item) { ?>
            <div class="col-sm-12 col-md-6 col-lg-3 mb-3">
              <div class="shadow-sm h-100">
                <div class="product-image bg-cover" style="
                      background-image: url(<?php echo $item->thumbnail ?? 'public/images/static/noimage.jpg' ?>);
                    "></div>
                <div class="p-3 d-flex flex-column">
                  <a href="product/<?php echo $item->id ?>" class="text-decoration-none">
                    <h5 class="text-truncate">
                      <?php echo $item->title ?>
                    </h5>
                  </a>
                  <p class="mt-3 flex-grow-1">
                    <b>Thành phần: </b>
                    <?php echo $item->include ?>
                  </p>
                  <div class="mt-4">
                    <?php if (isset($item->original_price)) { ?>
                      <p class="
                          mb-1
                          text-secondary
                          fs-4
                          text-decoration-line-through
                        ">
                        <?php echo number_format($item->original_price) ?>đ
                      </p>
                    <?php } ?>
                    <p class="fw-bold fs-3">
                      <?php if (isset($item->price)) { ?>
                        <span class="text-warning"><?php echo number_format($item->price) ?>đ</span>
                      <?php } else { ?>
                        <span class="text-primary">Liên hệ</span>
                      <?php } ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
        <nav>
          <ul class="pagination justify-content-center">
            <?php if ($page > 1 && $totalPage > 1) { ?>
              <li class="page-item">
                <a class="page-link text-info" href="category-product/<?php echo $category->id ?>/<?php echo ($page - 1) ?>" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
            <?php } ?>
            <?php for ($i = 0; $i < $totalPage; $i++) { ?>
              <li class="page-item">
                <a class="page-link text-info" href="category-product/<?php echo $category->id ?>/<?php echo ($i + 1) ?>"><?php echo $i + 1 ?></a>
              </li>
            <?php } ?>
            <?php if ($page < $totalPage && $totalPage > 1) { ?>
              <li class="page-item">
                <a class="page-link text-info" href="category-product/<?php echo $category->id ?>/<?php echo ($page + 1) ?>" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            <?php } ?>
          </ul>
        </nav>
      <?php } else { ?>
        <div class="text-center">Không có sản phẩm phù hợp</div>
      <?php } ?>
    </div>
  </div>
</section>