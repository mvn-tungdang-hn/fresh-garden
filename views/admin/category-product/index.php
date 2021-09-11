<title><?php echo $title ?> | Fresh garden</title>

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
    <form action="">
      <div class="row">
        <div class="col-sm-4">
          <div class="mb-3">
            <label for="title" class="form-label">Tiêu đề</label>
            <input type="email" class="form-control" id="title" placeholder="example" />
          </div>
        </div>
      </div>
      <button class="btn btn-secondary">Tìm kiếm</button>
    </form>
  </div>
</div>

<!-- Table -->
<div class="card border-0 shadow-sm">
  <div class="card-header py-3 bg-white d-flex align-items-center justify-content-between">
    <h5 class="card-title mb-0 text-capitalize"><?php echo $title ?></h5>
    <a href="admin/<?php echo $pathForm ?>/create" class="btn btn-info">
      <i class="bi bi-plus-circle me-2"></i>
      Thêm mới
    </a>
  </div>
  <div class="table-responsive">
    <table class="table table-hover align-middle">
      <thead>
        <tr>
          <th style="width: 40%">Tiêu đề</th>
          <th style="width: 25%">Ảnh</th>
          <th style="width: 25%">Ngày tạo</th>
          <th style="width: 10%">Hành động</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($categories as $item) { ?>
          <tr>
            <td><?php echo $item->title ?></td>
            <td>
              <img src="<?php echo $item->thumbnail ?>" width="60" height="60" style="object-fit: cover;" alt="">
            </td>
            <td><?php echo $item->created_at ?></td>
            <td>
              <a href="admin/<?php echo $pathForm ?>/edit/<?php echo $item->id ?>" class="text-decoration-none text-info me-2">
                <i class="bi bi-pencil-square"></i>
              </a>
              <button data-id="<?php echo $item->id ?>" data-bs-toggle="modal" data-bs-target="#deleteModal" class="delete-btn text-decoration-none text-danger btn bg-transparent">
                <i class="bi bi-trash-fill"></i>
              </button>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>

    <div class="d-flex align-items-center justify-content-between px-2">
      <div class="text-secondary">Hiển thị <?php echo $start + 1 ?> đến <?php echo $end ?> trong tổng số <?php echo $totalRecord ?> bản ghi</div>
      <nav aria-label="Page navigation">
        <ul class="pagination justify-content-end">
          <?php if ($page > 1 && $totalPage > 1) { ?>
            <li class="page-item">
              <a class="page-link text-info" href="admin/<?php echo $pathList ?>/<?php echo ($page - 1) ?>" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
          <?php } ?>

          <?php for ($i = 0; $i < $totalPage; $i++) { ?>
            <li class="page-item">
              <a class="page-link text-info" href="admin/<?php echo $pathList ?>/<?php echo ($i + 1) ?>"><?php echo $i + 1 ?></a>
            </li>
          <?php } ?>

          <?php if ($page < $totalPage && $totalPage > 1) { ?>
            <li class="page-item">
              <a class="page-link text-info" href="admin/<?php echo $pathList ?>/<?php echo ($page + 1) ?>" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          <?php } ?>
        </ul>
      </nav>
    </div>
  </div>
</div>

<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Delete?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Do you want delete record?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a id="deleteConfirmBtn" data-link="<?php echo $pathForm ?>" href="#" type="button" class="btn btn-info">Save changes</a>
      </div>
    </div>
  </div>
</div>