<title><?php echo $category->title ?> - Fresh garden</title>
<script src="public/js/category-product.js" defer></script>

<!-- Breadcrumbs -->
<nav aria-label="breadcrumb" class="py-4">
  <ol class="breadcrumb container mb-0">
    <li class="breadcrumb-item">
      <a href="#" class="text-decoration-none">Home</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">
      <?php echo $category->title ?>
    </li>
  </ol>
</nav>

<section class="container py-4 bg-white rounded">
  <div class="row">
    <div class="col-lg-3">
      <div class="mb-4">
        <p class="mb-1 fw-bold ff-kausan">Price</p>
        <div class="form-check text-secondary">
          <input class="form-check-input" type="checkbox" value="" id="filderPrice1" />
          <label class="form-check-label" for="filderPrice1">
            < $40</label>
        </div>
        <div class="form-check text-secondary">
          <input class="form-check-input" type="checkbox" value="" id="filderPrice2" />
          <label class="form-check-label" for="filderPrice2">
            $40 - $80</label>
        </div>
      </div>

      <div class="mb-4">
        <p class="mb-1 fw-bold ff-kausan">Brand</p>
        <div class="form-check text-secondary">
          <input class="form-check-input" type="checkbox" value="" id="filterBrand1" />
          <label class="form-check-label" for="filterBrand1">
            Studio Design
          </label>
        </div>
        <div class="form-check text-secondary">
          <input class="form-check-input" type="checkbox" value="" id="filterBrand2" checked />
          <label class="form-check-label" for="filterBrand2">
            Graphic Corner
          </label>
        </div>
      </div>

      <div class="mb-4">
        <p class="mb-1 fw-bold ff-kausan">Dimension</p>
        <div class="form-check text-secondary">
          <input class="form-check-input" type="checkbox" value="" id="filterDemension1" />
          <label class="form-check-label" for="filterDemension1">
            40x60cm
          </label>
        </div>
        <div class="form-check text-secondary">
          <input class="form-check-input" type="checkbox" value="" id="filterDemension2" checked />
          <label class="form-check-label" for="filterDemension2">
            60x90cm
          </label>
        </div>
      </div>
    </div>
    <div class="col-lg-9">
      <div class="bg-light py-2 px-3 row g-0 align-items-center mb-3">
        <div class="fs-4 col-sm-8">
          <i class="bi bi-grid-3x2-gap-fill pointer me-2 text-primary"></i>
          <i class="bi bi-list-ul pointer"></i>
        </div>
        <div class="col-sm-4">
          <div class="row g-0 align-items-center">
            <label for="sortSelect" class="form-label col-3 mb-0 text-secondary">Sort by:</label>
            <div class="col-9">
              <select class="form-select" id="sortSelect" name="sortby">
                <option selected value="" selected>-- Choose --</option>
                <option selected value="1">Name, A to Z</option>
                <option selected value="2">Name, Z to A</option>
                <option selected value="3">Price, low to high</option>
                <option selected value="4">Price, high to low</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <?php if (count($products) > 0) { ?>
        <div class="row mb-4">
          <?php foreach ($products as $item) { ?>
            <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
              <div class="x-product">
                <div class="x-product-image">
                  <img src="<?php echo $item->thumbnail ?? 'public/images/static/noimage.jpg' ?>" alt="" />
                  <div class="x-product-include">
                    <?php echo $item->include ?>
                  </div>
                </div>
                <a href="product/<?php echo $item->id ?>">
                  <h5 class="x-product-title text-truncate">
                    <?php echo $item->title ?>
                  </h5>
                </a>
                <div class="text-end">
                  <?php if (isset($item->original_price)) { ?>
                    <span class="x-product-original-price">
                      $<?php echo number_format($item->original_price) ?>
                    </span>
                  <?php } ?>
                  <?php if (isset($item->price)) { ?>
                    <span class="x-product-price">$<?php echo number_format($item->price) ?></span>
                  <?php } else { ?>
                    <span class="text-primary">Contact</span>
                  <?php } ?>
                </div>
                <div class="x-product-add">
                  <button class="btn btn-light">Add to cart</button>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>


        <nav class="bg-light py-2 px-3">
          <ul class="pagination justify-content-end mb-0">
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
        <div class="text-center">No product</div>
      <?php } ?>
    </div>
  </div>
</section>