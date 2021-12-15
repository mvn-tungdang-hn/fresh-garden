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
            <input type="text" class="form-control" name="keyword" placeholder="Tiêu đề"/>
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
  <?php if (count($foods) > 0) { ?>
    <div class="table-responsive">
      <table class="table table-hover align-middle">
        <thead>
          <tr>
            <th style="width: 15%; min-width: 100px;">Tiêu đề</th>
            <th style="width: 15%; min-width: 100px;">Ảnh</th>
            <th style="width: 15%; min-width: 120px;">Mô tả</th>
            <th style="width: 15%; min-width: 120px;">Đơn giá</th>
            <th style="width: 15%; min-width: 100px;">Số lượng còn</th>
            <th style="width: 10%; min-width: 100px;"></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($foods as $item) { ?>
            <tr>
              <td><?php echo $item->TenMonAn ?></td>
              <td>
                <img src="<?php echo $item->HinhAnh ?? 'public/images/static/noimage.jpg' ?>" width="60" height="60" style="object-fit: cover;" alt="">
              </td>
              <td><?php echo $item->MoTa ?></td>
              <td><?php echo number_format($item->DonGia) ?>đ</td>
              <td><?php echo $item->SoLuongCon ?></td>
              <td>
                <a href="admin/<?php echo $pathForm ?>/edit/<?php echo $item->MaMonAn ?>" class="text-decoration-none text-info me-2">
                  <i class="bi bi-pencil-square"></i>
                </a>
                <button data-id="<?php echo $item->MaMonAn ?>" data-bs-toggle="modal" data-bs-target="#deleteModal" class="delete-btn text-decoration-none text-danger btn bg-transparent">
                  <i class="bi bi-trash-fill"></i>
                </button>
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

<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Xác nhận xoá</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Bạn có chắc chắn xoá bản ghi này?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
        <a id="deleteConfirmBtn" data-link="<?php echo $pathForm ?>" href="#" type="button" class="btn btn-info">Xác nhận</a>
      </div>
    </div>
  </div>
</div>