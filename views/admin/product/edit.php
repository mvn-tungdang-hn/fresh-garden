<title><?php echo $title ?> | Fresh garden</title>
<script src="public/js/admin-product.js" defer></script>

<form action="<?php echo $formAction ?>" class="<?php if (isset($detail) && $detail->thumbnail != null) { ?>has-thumbnail<?php } ?>" id="form" method="POST" enctype="multipart/form-data">
  <div class="shadow-sm py-2 bg-white sticky-top mb-4">
    <div class="layout-edit d-flex justify-content-between">
      <a href="admin/<?php echo $pathList ?>/1" class="btn bg-transparent">Back</a>
      <button class="btn bg-info text-white" type="submit">Save changes</button>
    </div>
  </div>

  <div class="layout-edit">
    <div class="card border-0 shadow-sm mb-4">
      <div class="card-body">
        <div class="form-custom">
          <label for="title" class="form-label">Title</label>
          <input class="form-control" id="title" name="title" placeholder="example" value="<?php echo $detail->title ?? '' ?>" />
        </div>

        <div class="form-custom">
          <label for="category_id" class="form-label">Category</label>
          <select class="form-select" id="category_id" name="category_id">
            <?php if (!isset($detail) || $detail->id == null) { ?>
              <option selected value="">-- Choose --</option>
            <?php } ?>
            <?php foreach ($categories as $category) { ?>
              <option <?php if (isset($detail) && $detail->category_id == $category->id) { ?>selected<?php } ?> value="<?php echo $category->id ?>">
                <?php echo $category->title ?>
              </option>
            <?php } ?>
          </select>
        </div>

        <div class="form-custom">
          <label for="collection_id" class="form-label">Collection</label>
          <select class="form-select" id="collection_id" name="collection_id">
            <?php if (!isset($detail) || $detail->id == null) { ?>
              <option selected value="">-- Choose --</option>
            <?php } ?>
            <?php foreach ($collections as $collection) { ?>
              <option <?php if (isset($detail) && $detail->collection_id == $collection->id) { ?>selected<?php } ?> value="<?php echo $collection->id ?>">
                <?php echo $collection->title ?>
              </option>
            <?php } ?>
          </select>
        </div>

        <div class="form-custom">
          <label for="original_price" class="form-label">Original price</label>
          <input class="form-control" id="original_price" name="original_price" placeholder="$" value="<?php echo $detail->original_price ?? '' ?>" />
        </div>

        <div class="form-custom">
          <label for="price" class="form-label">Price</label>
          <input class="form-control" id="price" name="price" placeholder="$" value="<?php echo $detail->price ?? '' ?>" />
        </div>

        <div class="form-custom">
          <label for="quatity" class="form-label">Quatity</label>
          <input class="form-control" id="quatity" name="quatity" placeholder="example: 1" value="<?php echo $detail->quatity ?? '' ?>" />
        </div>

        <div class="form-custom">
          <label for="include" class="form-label">Include</label>
          <textarea name="include" id="include" class="form-control">
            <?php echo $detail->include ?? '' ?>
          </textarea>
        </div>

        <div class="form-custom">
          <label for="description" class="form-label">Description</label>
          <textarea name="description" id="description" class="form-control">
            <?php echo $detail->description ?? '' ?>
          </textarea>
        </div>

        <div class="form-custom">
          <label for="content" class="form-label">Content</label>
          <textarea name="content" id="content">
            <?php echo $detail->content ?? '' ?>
          </textarea>
        </div>

        <div class="form-upload">
          <div class="form-upload-label">Thumbnail</div>
          <label for="thumbnail">
            <div class="form-upload-container">
              <div class="form-upload-image">
                <?php if (!isset($detail) || $detail->thumbnail == null) { ?>
                  <i id="thumbnailIcon" class="bi bi-upload"></i>
                  <img id="thumbnailPreview" src="" alt="" class="img-fluid w-100 d-none">
                <?php } else { ?>
                  <img id="thumbnailPreview" src="<?php echo $detail->thumbnail ?>" alt="" class="img-fluid w-100">
                <?php } ?>
              </div>
            </div>
          </label>
          <input accept="image/*" type="file" id="thumbnail" name="thumbnail" hidden />
        </div>

        <div class="form-check mb-3">
          <input type="hidden" name="is_hot" value="0" />
          <input class="form-check-input" type="checkbox" id="is_hot" name="is_hot" <?php if (isset($detail) && $detail->is_hot == 1 || !isset($detail)) { ?>checked <?php } ?> value="1" />
          <label class="form-check-label" for="is_hot">
            Hot
          </label>
        </div>

        <div class="form-check mb-3">
          <input type="hidden" name="status" value="0" />
          <input class="form-check-input" type="checkbox" id="status" name="status" <?php if (isset($detail) && $detail->status == 1 || !isset($detail)) { ?>checked <?php } ?> value="1" />
          <label class="form-check-label" for="status">
            Display
          </label>
        </div>
      </div>
    </div>
  </div>
</form>