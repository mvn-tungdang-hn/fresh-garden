<!DOCTYPE html>
<html lang="en">

<head>
  <?php global $APP_URL; ?>
  <base href="<?php echo $APP_URL ?>/">
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="public/js/main.js"></script>
  <script src="public/js/client.js" defer></script>
</head>
<?php
include_once "app/models/CategoryModel.php";
$categoryModel = new CategoryModel();

$categories = $categoryModel->getListCategory("where type = 1");
?>

<body class="d-flex flex-column min-vh-100">
  <!-- Top header -->
  <section class="container d-flex justify-content-end align-items-center py-2">
    <div class="me-3">
      <i class="bi bi-alarm pe-2"></i>Giờ mở cửa 7h00 - 21h30, Chủ nhật, ngày
      lễ: 8h00 - 21h30
    </div>
    <button class="btn btn-warning btn-sm rounded-pill text-white me-1">
      <i class="bi bi-search"></i>
    </button>
    <a href="cart" class="btn btn-warning btn-sm rounded-pill text-white">
      <i class="bi bi-basket"></i>
    </a>
  </section>

  <!-- Nav -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm sticky-top">
    <div class="container">
      <a class="navbar-brand" href="<?php echo $APP_URL ?>">
        <img src="public/images/static/logo.png" width="100" alt="logo" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav fw-medium">
          <li class="nav-item d-block d-lg-none">
            <?php if (!isset($_SESSION['user'])) { ?>
              <div>
                <a class="btn bg-transparent" href="sign-in">Đăng nhập</a>
                <a class="btn bg-transparent" href="sign-in">Đăng ký</a>
              </div>
            <?php } else { ?>
              <div class="dropdown">
                <button class="btn btn-btn-outline-light btn-lg rounded-circle dropdown-toggle px-0" type="button" id="user-action" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="bi bi-person-circle"></i>
                </button>
                <ul class="dropdown-menu border-0 shadow-sm" aria-labelledby="user-action">
                  <li><a class="dropdown-item" href="admin">Admin</a></li>
                  <li>
                    <hr class="dropdown-divider bg-secondary" />
                  </li>
                  <li><a class="dropdown-item" href="admin/logout" ?>Logout</a></li>
                </ul>
              </div>
            <?php } ?>
          </li>
          <li class="nav-item">
            <a class="nav-link text-uppercase" aria-current="page" href="<?php echo $APP_URL ?>/">Trang chủ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-uppercase" href="<?php echo $APP_URL ?>/about">Giới thiệu</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-uppercase" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Sản phẩm
            </a>
            <ul class="dropdown-menu border-0 shadow-sm" aria-labelledby="navbarDropdownMenuLink">
              <li>
                <a class="dropdown-item text-capitalize" href="<?php echo $APP_URL ?>/product">
                  Tất cả sản phẩm
                </a>
              </li>
              <?php foreach ($categories as $item) { ?>
                <li>
                  <a class="dropdown-item text-capitalize" href="<?php echo $APP_URL ?>/category-product/<?php echo $item->id ?>">
                    <?php echo $item->title ?>
                  </a>
                </li>
              <?php } ?>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link text-uppercase" href="#">Cửa hàng Fresh Garden</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-uppercase" href="#">Tin tức</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-uppercase" href="#">Tuyển dụng</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-uppercase" href="#">Liên hệ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-uppercase" href="#">Video</a>
          </li>
        </ul>
      </div>
      <?php if (!isset($_SESSION['user'])) { ?>
        <div class="d-none d-lg-block">
          <a class="btn bg-transparent" href="sign-in">Đăng nhập</a>
          <a class="btn bg-transparent" href="sign-in">Đăng ký</a>
        </div>
      <?php } else { ?>
        <div class="dropdown d-none d-lg-block">
          <button class="btn btn-btn-outline-light btn-lg rounded-circle dropdown-toggle px-0" type="button" id="user-action" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-circle"></i>
          </button>
          <ul class="dropdown-menu border-0 shadow-sm" aria-labelledby="user-action">
            <li><a class="dropdown-item" href="admin">Admin</a></li>
            <li>
              <hr class="dropdown-divider bg-secondary" />
            </li>
            <li><a class="dropdown-item" href="admin/logout" ?>Logout</a></li>
          </ul>
        </div>
      <?php } ?>
    </div>
  </nav>

  <!-- Content -->
  <main class="flex-grow-1">
    <?php
    echo $this->content;
    ?>
  </main>

  <!-- Footer -->
  <footer class="bg-light">
    <div class="container">
      <div class="row pb-3 pt-4">
        <div class="col-sm-6 col-lg-3">
          <div class="py-3">
            <h5 class="text-uppercase mb-4">CÔNG TY Fresh Garden</h5>
            <p class="fst-italic text-secondary">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab
              expedita amet quo quidem maiores nobis, officiis voluptate cum,
              rem at vel rerum earum autem accusamus ipsam nam aspernatur
              molestias quasi?
            </p>
            <p>Địa chỉ: 46 An Dương, Yên Phụ, Tây Hồ, Hà Nội</p>
            <p>Email: crm@freshgarden.vn</p>
            <p>Website: www.freshgarden.vn</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="py-3">
            <h5 class="text-uppercase mb-4">ĐĂNG KÝ NHẬN BẢN TIN</h5>
            <form action="">
              <div class="form-floating mb-3">
                <input type="email" class="form-control bg-white" id="email" name="email" placeholder="email" />
                <label for="email">Email của bạn...</label>
              </div>
              <button class="text-uppercase btn btn-primary rounded-pill w-100">Đăng ký nhận bản tin</button>
            </form>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="py-3">
            <h5 class="text-uppercase mb-4">HỖ TRỢ KHÁCH HÀNG</h5>
            <ul class="list-unstyled">
              <li class="mb-2">
                <a href="#" class="text-black text-decoration-none">Hướng dẫn mua hàng</a>
              </li>
              <li class="mb-2">
                <a href="#" class="text-black text-decoration-none">Chính sách vận chuyển</a>
              </li>
              <li class="mb-2">
                <a href="#" class="text-black text-decoration-none">Hướng dẫn thanh toán</a>
              </li>
              <li class="mb-2">
                <a href="#" class="text-black text-decoration-none">Chính sách bảo mật</a>
              </li>
              <li class="mb-2">
                <a href="#" class="text-black text-decoration-none">Chính sách đổi trả</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="py-3">
            <h5 class="text-uppercase mb-4">LIÊN HỆ VỚI FRESH GARDEN</h5>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center py-2">&copy; Design by Fresh Garden</div>
  </footer>
</body>

</html>