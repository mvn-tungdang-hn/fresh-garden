<title>Đăng ký tài khoản - Fresh garden</title>
<script src="public/js/sign-up.js" defer></script>

<div class="text-center">
  <i class="bi bi-brightness-alt-high-fill d-inline-block fs-1 text-primary"></i>
  <h1 class="fs-2 fw-light mb-5">Đăng ký tài khoản</h1>
</div>
<form action="" method="POST" id="form-sign-up">
  <div class="form-floating mb-3">
    <input class="form-control" id="first-name" placeholder="first-name" />
    <label for="first-name">Họ <span class="text-danger">*</span></label>
  </div>
  <div class="form-floating mb-3">
    <input class="form-control" id="last-name" placeholder="last-name" />
    <label for="last-name">Tên <span class="text-danger">*</span></label>
  </div>
  <div class="form-floating mb-3">
    <input class="form-control" id="phone" placeholder="phone" />
    <label for="phone">Số điện thoại </label>
  </div>
  <div class="form-floating mb-3">
    <input type="email" class="form-control" id="email" placeholder="email" />
    <label for="email">Địa chỉ email <span class="text-danger">*</span></label>
  </div>
  <div class="form-floating mb-3">
    <input type="password" class="form-control" id="password" placeholder="password" />
    <label for="password">Mật khẩu <span class="text-danger">*</span></label>
  </div>
  <div class="form-floating mb-3">
    <input type="password" class="form-control" id="confirm-password" placeholder="confirm-password" />
    <label for="confirm-password">Xác nhận mật khẩu <span class="text-danger">*</span></label>
  </div>
  <button class="btn btn-primary w-100 btn-lg text-white">
    Tạo tài khoản
  </button>
</form>
<div class="mt-3">
  <small>Nếu bạn đã có tài khoản, vui lòng <a href="sign-in">đăng nhập</a></small>
</div>

<div class="toast align-items-center text-white bg-danger border-0 start-50 translate-middle-x" role="alert" aria-live="assertive" aria-atomic="true" id="toast">
  <div class="d-flex">
    <div class="toast-body">Email đã tồn tại.</div>
    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
</div>