<title>Fresh garden</title>
<script src="public/js/home.js" defer></script>

<!-- Banner -->
<section class="swiper" id="banner">
  <div class="swiper-wrapper">
    <?php foreach ($banners as $item) { ?>
      <a class="swiper-slide d-block" href="<?php echo isset($item->link) ? $item->link : "#" ?>" target="<?php echo $item->is_external === 1 ? "_blank" : "_self" ?>">
        <img src="<?php echo $item->thumbnail ?>" class="img-fluid" alt="<?php echo $item->title ?>" />
      </a>
    <?php } ?>
  </div>
</section>

<!-- Main categories -->
<section class="row g-0">
  <?php foreach ($collections as $collection) { ?>
    <a href="#" class="main-category-2 col-sm-6 position-relative overflow-hidden">
      <img src="<?php echo $collection->thumbnail ?? 'public/images/static/noimage.jpg' ?>" class="img-fluid w-100" alt="..." />
      <div class="position-absolute top-50 start-50 translate-middle w-75 h-75 border border-white d-flex justify-content-center align-items-center flex-column">
        <h3 class="fs-1 text-white fw-bold mb-3"><?php echo $collection->title ?></h3>
        <button class="btn btn-secondary rounded-pill">
          <i class="bi bi-hand-thumbs-up pe-2"></i>Xem chi tiết
        </button>
      </div>
    </a>
  <?php } ?>
</section>

<!-- Main news -->
<section class="row g-0">
  <div class="col-sm-6 p-5 d-flex flex-column justify-content-center">
    <div class="mb-3">
      <img src="public/images/static/logo.png" alt="" />
    </div>
    <p>
      Các sản phẩm của Fresh Garden được sản xuất trên dây chuyền hiện đại,
      với những nguyên liệu nhập khẩu trực tiếp từ các nước có truyền thống
      làm bánh lâu đời trên thế giới. Bởi vậy, Fresh Garden luôn tự hào đưa
      đến với khách hàng những sản phẩm có chất lượng tốt nhất.
    </p>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">An item</li>
      <li class="list-group-item">A second item</li>
      <li class="list-group-item">A third item</li>
      <li class="list-group-item">A fourth item</li>
      <li class="list-group-item">And a fifth one</li>
    </ul>
  </div>
  <div class="col-sm-6">
    <a href="#" class="d-block position-relative h-100">
      <img src="https://freshgarden.vn/pic_css/bg-video-right.jpg" class="img-fluid w-100 h-100" alt="" />
      <h5 class="text-white position-absolute bottom-0 p-3">
        Mua 1 bánh cuộn Nhật 79k, tặng ngay 1 túi bánh mì nướng 30k trên
        toàn hệ thống Fresh Garden
      </h5>
    </a>
  </div>
</section>