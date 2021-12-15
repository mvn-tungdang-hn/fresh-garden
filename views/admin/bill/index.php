<title><?php echo $title ?></title>

<div class="text-white my-5">
  <h1 class="fs-2 text-uppercase"><?php echo $title ?></h1>
  <!-- Breadcrumbs -->
  <nav aria-label="breadcrumb" class="py-2">
    <ol class="breadcrumb mb-0">
      <li class="breadcrumb-item">
        <a href="#" class="text-decoration-none text-white-50">Dashboard</a>
      </li>
      <li class="breadcrumb-item active" aria-current="page">
        <?php echo $title ?>
      </li>
    </ol>
  </nav>
</div>

<!-- Search -->
<div class="card border-0 shadow-sm mb-4">
  <div class="card-header py-3 bg-white">
    <h5 class="card-title mb-0">Tìm kiếm</h5>
  </div>
  <div class="card-body">
    <form action="" method="POST">
      <div class="row">
        <div class="col-sm-4">
          <div class="mb-3">
            <label for="orderId" class="form-label">Mã đơn hàng</label>
            <input class="form-control" id="orderId" placeholder="example" name="orderId" />
          </div>
          <div class="mb-3">
            <label for="userId" class="form-label">Mã khách hàng</label>
            <input class="form-control" id="userId" placeholder="example" name="userId" />
          </div>
        </div>
      </div>
      <button class="btn btn-secondary">Tìm kiếm</button>
    </form>
  </div>
</div>

<!-- Table -->
<div class="card border-0 shadow-sm">
<div class="card-header py-3 bg-white d-flex align-items-center justify-content-end">
    <a href="admin/<?php echo $pathForm ?>/create" class="btn btn-info">
      <i class="bi bi-plus-circle me-2"></i>
      Thêm mới
    </a>
  </div>
  <?php if (count($bills) > 0) { ?>
    <div class="table-responsive">
      <table class="table table-hover align-middle">
        <thead>
          <tr>
            <th style="width: 15%; min-width: 80px">Mã hóa đơn</th>
            <th style="width: 15%; min-width: 80px">Mã bàn ăn</th>
            <th style="width: 15%; min-width: 80px">Mã nhân viên</th>
            <th style="width: 15%; min-width: 80px">Tổng tiền</th>
            <th style="width: 15%; min-width: 80px">Ngày tạo đơn</th>
            <th style="width: 15%; min-width: 80px">Trạng thái</th>
            <th style="width: 15%; min-width: 80px">Loại hóa đơn</th>
            <th style="width: 10%; min-width: 50px"></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($bills as $item) { ?>
            <?php
            $status = null;
            switch ($item->TrangThai) {
              case 1:
                $status = "Chưa thanh toán";
                break;

              default:
                $status = "Đã thanh toán";
                break;
            }
            $type_bill = null;
            switch ($item->LoaiHoaDon) {
              case 1:
                $type_bill = "Hóa đơn tại bàn";
                break;

              default:
                $type_bill = "Hoá đơn bán mang về";
                break;
            }
            ?>
            <tr>
              <td><?php echo $item->MaHoaDon ?></td>
              <td><?php echo $item->MaBanAn ?></td>
              <td><?php echo $item->MaNhanVien ?></td>
              <td><?php echo number_format($item->TongTien) ?>đ</td>
              <td><?php echo $item->NgayLap ?></td>
              <td><?php echo $status ?></td>
              <td><?php echo $type_bill ?></td>
              <td>
                <a href="admin/<?php echo $pathForm ?>/view/<?php echo $item->MaHoaDon ?>" class="text-decoration-none text-info me-2">
                  <i class="bi bi-eye-fill"></i>
                </a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  <?php } else { ?>
    <div class="p-3 text-center">Không có bản ghi.</div>
  <?php } ?>
</div>