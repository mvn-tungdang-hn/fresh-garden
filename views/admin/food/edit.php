<title><?php echo $title ?> | Fresh garden</title>
<script src="public/js/food.js" defer></script>

<form action="<?php echo $formAction ?>" class="<?php if (isset($detail) && $detail->thumbnail != null) { ?>has-thumbnail<?php } ?>" id="form" method="POST" enctype="multipart/form-data">
  <div class="shadow-sm py-2 bg-white sticky-top mb-4">
    <div class="layout-edit d-flex justify-content-between">
      <a href="admin/<?php echo $pathList ?>/1" class="btn bg-transparent">
        <i class="bi bi-arrow-left pe-1"></i> Quay lại
      </a>
      <button class="btn bg-info text-white" type="submit">Lưu thay đổi</button>
    </div>
  </div>

  <div class="layout-edit">
    <div class="card border-0 shadow-sm mb-4">
      <div class="card-body">
        <div class="form-custom">
          <label for="title" class="form-label">Tiêu đề</label>
          <input class="form-control" id="title" name="title" placeholder="example" value="<?php echo $detail->TenMonAn ?? '' ?>" />
        </div>

        <div class="form-custom">
          <label for="category_id" class="form-label">Danh mục món ăn</label>
          <select class="form-select" id="category_id" name="category_id">
            <?php if (!isset($detail) || $detail->id == null) { ?>
              <option selected value="">-- Lựa chọn --</option>
            <?php } ?>
            <?php foreach ($categories as $category) { ?>
              <option <?php if (isset($detail) && $detail->MaLoaiDanhMuc == $category->MaLoaiDanhMuc) { ?>selected<?php } ?> value="<?php echo $category->MaLoaiDanhMuc ?>">
                <?php echo $category->TenDanhMuc ?>
              </option>
            <?php } ?>
          </select>
        </div>

        <div class="form-custom">
          <label for="price" class="form-label">Dơn Giá</label>
          <input class="form-control" id="price" name="price" placeholder="VNĐ" value="<?php echo $detail->DonGia ?? '' ?>" />
        </div>

        <div class="form-custom">
          <label for="quantity" class="form-label">Số lượng còn</label>
          <input class="form-control" id="quantity" name="quantity" placeholder="example: 1" value="<?php echo $detail->SoLuongCon ?? '' ?>" />
        </div>

        <div class="form-custom">
          <label for="content" class="form-label">Mô tả</label>
          <textarea class="form-control" name="content" id="content">
            <?php echo $detail->MoTa ?? '' ?>
          </textarea>
        </div>

        <div class="form-upload">
          <div class="form-upload-label">Ảnh</div>
          <label for="thumbnail">
            <div class="form-upload-container">
              <div class="form-upload-image">
                <?php if (!isset($detail) || $detail->HinhAnh == null) { ?>
                  <i id="thumbnailIcon" class="bi bi-upload"></i>
                  <img id="thumbnailPreview" src="" alt="" class="img-fluid w-100 d-none">
                <?php } else { ?>
                  <img id="thumbnailPreview" src="<?php echo $detail->HinhAnh ?>" alt="" class="img-fluid w-100">
                <?php } ?>
              </div>
            </div>
          </label>
          <input accept="image/*" type="file" id="thumbnail" name="thumbnail" hidden />
        </div>
      </div>
    </div>
  </div>
</form>