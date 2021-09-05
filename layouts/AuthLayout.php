<!DOCTYPE html>
<html lang="en">

<head>
  <?php global $APP_URL; ?>
  <base href="<?php echo $APP_URL ?>/">
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="public/js/main.js"></script>
  <?php
  echo $this->headTag;
  ?>
</head>

<body class="flex-center flex-column min-vh-100 bg-light">
  <div class="box-auth">
    <div class="text-center">
      <div class="mb-3 w-50 mx-auto">
        <img src="https://freshgarden.vn/pic/Video/log_636790835426168936_HasThumb_Thumb.png" alt="logo" class="img-fluid" />
      </div>
    </div>
    <div class="shadow rounded-3 p-4 bg-white">
      <?php
      echo $this->content;
      ?>
    </div>
  </div>
</body>

</html>