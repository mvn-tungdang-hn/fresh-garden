<title><?php echo $title ?> - Fresh garden</title>

<div class="text-white my-5">
  <h1 class="fs-2">DataTables</h1>
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
    <h5 class="card-title mb-0">Search</h5>
  </div>
  <div class="card-body">
    <form action="">
      <div class="row">
        <div class="col-sm-4">
          <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="email" class="form-control" id="title" placeholder="example" />
          </div>
        </div>
      </div>
      <button class="btn btn-secondary">Search</button>
    </form>
  </div>
</div>

<!-- Table -->
<div class="card border-0 shadow-sm">
  <div class="card-header py-3 bg-white d-flex align-items-center justify-content-between">
    <h5 class="card-title mb-0 text-capitalize"><?php echo $title ?></h5>
    <button class="btn btn-info px-4">
      <i class="bi bi-plus-circle me-2"></i>
      Add
    </button>
  </div>
  <div class="table-responsive">
    <table class="table table-hover">
      <thead>
        <tr>
          <th style="width: 40%">Title</th>
          <th style="width: 25%">Thumbnail</th>
          <th style="width: 25%">Created at</th>
          <th>Actions</th>
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
              <a href="#" class="text-decoration-none text-info me-2">
                <i class="bi bi-pencil-square"></i>
              </a>
              <a href="#" class="text-decoration-none text-danger">
                <i class="bi bi-trash-fill"></i>
              </a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>

    <div class="d-flex align-items-center justify-content-between px-2">
      <div class="text-secondary">Showing <?php echo $start + 1 ?> to <?php echo $end ?> of <?php echo $totalRecord ?> entries</div>
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