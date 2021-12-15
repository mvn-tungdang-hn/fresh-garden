<title><?php echo $title ?> | Fresh garden</title>
<script src="public/js/admin-product.js" defer></script>

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
          <input class="form-control" id="title" name="title" placeholder="example" value="<?php echo $detail->title ?? '' ?>" />
        </div>

        <div class="form-custom">
          <label for="category_id" class="form-label">Danh mục sản phẩm</label>
          <select class="form-select" id="category_id" name="category_id">
            <?php if (!isset($detail) || $detail->id == null) { ?>
              <option selected value="">-- Lựa chọn --</option>
            <?php } ?>
            <?php foreach ($categories as $category) { ?>
              <option <?php if (isset($detail) && $detail->category_id == $category->id) { ?>selected<?php } ?> value="<?php echo $category->id ?>">
                <?php echo $category->title ?>
              </option>
            <?php } ?>
          </select>
        </div>

        <div class="form-custom">
          <label for="collection_id" class="form-label">Bộ sưu tập</label>
          <select class="form-select" id="collection_id" name="collection_id">
            <?php if (!isset($detail) || $detail->id == null) { ?>
              <option selected value="">-- Lựa chọn --</option>
            <?php } ?>
            <?php foreach ($collections as $collection) { ?>
              <option <?php if (isset($detail) && $detail->collection_id == $collection->id) { ?>selected<?php } ?> value="<?php echo $collection->id ?>">
                <?php echo $collection->title ?>
              </option>
            <?php } ?>
          </select>
        </div>

        <div class="form-custom">
          <label for="original_price" class="form-label">Giá ban đầu</label>
          <input class="form-control" id="original_price" name="original_price" placeholder="VNĐ" value="<?php echo $detail->original_price ?? '' ?>" />
        </div>

        <div class="form-custom">
          <label for="price" class="form-label">Giá bán ra</label>
          <input class="form-control" id="price" name="price" placeholder="VNĐ" value="<?php echo $detail->price ?? '' ?>" />
        </div>

        <div class="form-custom">
          <label for="quantity" class="form-label">Số lượng còn</label>
          <input class="form-control" id="quantity" name="quantity" placeholder="example: 1" value="<?php echo $detail->quantity ?? '' ?>" />
        </div>

        <div class="form-custom">
          <label for="include" class="form-label">Thành phần</label>
          <textarea name="include" id="include" class="form-control">
            <?php echo $detail->include ?? '' ?>
          </textarea>
        </div>

        <div class="form-custom">
          <label for="description" class="form-label">Mô tả ngắn</label>
          <textarea name="description" id="description" class="form-control">
            <?php echo $detail->description ?? '' ?>
          </textarea>
        </div>

        <div class="form-custom">
          <label for="content" class="form-label">Nội dung</label>
          <textarea name="content" id="content">
            <?php echo $detail->content ?? '' ?>
          </textarea>
        </div>
      </div>
    </div>
  </div>
</form>