<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <script src="js/main.js"></script>
  <?php
  echo $this->headTag;
  ?>
</head>

<body class="bg-light layout-admin">
  <!-- Sidebar -->
  <aside class="sidebar position-fixed top-0 start-0 bottom-0 bg-white">
    <!-- Brand -->
    <div class="px-3 py-2 bg-info">
      <a href="#" class="fw-bold text-decoration-none d-flex align-items-center">
        <i class="bi bi-bar-chart fs-2 me-2 text-white-50"></i>
        <span class="text-white">Fresh Garden</span>
      </a>
    </div>

    <div class="sidebar-content">
      <!-- Info -->
      <div class="text-center px-2 py-4">
        <img src="https://images.pexels.com/photos/133472/pexels-photo-133472.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="avatar" class="img-fluid avatar rounded-circle shadow-sm" />
        <div class="fw-bold mt-2">Linda Miller</div>
        <small>Front-end Developer </small>
      </div>
      <!-- Nav -->
      <ul class="sidebar-nav">
        <li class="sidebar-header">Main</li>
        <li class="sidebar-item active">
          <a class="sidebar-link" href="#">
            <i class="align-middle me-2 bi bi-house-fill fs-5 text-info"></i>
            <span class="align-middle">Dashboard</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="#">
            <i class="
                  align-middle
                  me-2
                  bi bi-calendar3-range-fill
                  fs-5
                  text-info
                "></i>
            <span class="align-middle">Categories</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="#">
            <i class="align-middle me-2 bi bi-cloud-moon-fill fs-5 text-info"></i>
            <span class="align-middle">Products</span>
          </a>
        </li>

        <li class="sidebar-header">Settings</li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="#">
            <i class="align-middle me-2 bi bi-gear-fill fs-5 text-info"></i>
            <span class="align-middle">Settings</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="#">
            <i class="align-middle me-2 bi bi-person-circle fs-5 text-info"></i>
            <span class="align-middle">Profile</span>
          </a>
        </li>

        <li class="sidebar-header">Actions</li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="#">
            <i class="align-middle me-2 bi bi-box-arrow-right fs-5 text-info"></i>
            <span class="align-middle">Logout</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>

  <!-- Main -->
  <section class="main">
    <!-- Top nav -->
    <nav class="bg-info px-3 py-2 text-white d-flex align-items-center justify-content-between">
      <i class="bi bi-list pointer fs-2"></i>
      <div class="d-flex align-items-center">
        <a href="#" class="btn text-white">
          <i class="bi bi-bell-fill"></i>
        </a>
        <a href="#" class="btn text-white">
          <i class="bi bi-house-door-fill"></i>
        </a>
        <div class="dropdown">
          <button class="btn text-white dropdown-toggle" type="button" id="user-action" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-gear-fill"></i>
          </button>
          <ul class="dropdown-menu border-0 shadow-sm" aria-labelledby="user-action">
            <li><a class="dropdown-item" href="#">View Profile</a></li>
            <li><a class="dropdown-item" href="#">Contacts</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li>
              <hr class="dropdown-divider bg-secondary" />
            </li>
            <li><a class="dropdown-item" href="#">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Content -->
    <main class="flex-grow-1 container-fluid px-3">
      <?php
      echo $this->content;
      ?>
    </main>

    <!-- Footer -->
    <footer class="container-fluid py-2 text-center bg-white shadow-sm">
      <p class="mb-0">
        © 2021 -
        <a href="dashboard-default.html" class="text-muted text-decoration-none">Fresh Garden</a>
      </p>
    </footer>
  </section>
</body>

</html>