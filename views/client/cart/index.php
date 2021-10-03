<title>My cart - Highlands</title>

<!-- Breadcrumbs -->
<nav aria-label="breadcrumb" class="py-4">
  <ol class="breadcrumb container mb-0">
    <li class="breadcrumb-item">
      <a href="#" class="text-decoration-none">Home</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">Cart</li>
  </ol>
</nav>

<!-- Cart -->
<section class="container py-4">
  <div class="row">
    <div class="col-sm-9">
      <h1 class="fw-bold fs-1 ff-kausan">SHOPPING CART</h1>
      <?php if (count($_SESSION['cart']) > 0) { ?>
        <div class="text-end mb-2">
          <a href="cart/destroy" class="btn btn-danger">Delete all</a>
        </div>
        <div class="table-responsive border">
          <table class="table align-middle">
            <tbody>
              <?php foreach ($_SESSION['cart'] as $key => $cart) { ?>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="<?php echo $cart['thumbnail'] ?? 'public/images/static/noimage.jpg' ?>" width="60" height="60" class="shadow-sm" style="object-fit: cover;" alt="">
                      <a href="product/<?php echo $cart['id'] ?>" class="ms-2 text-decoration-none text-black fw-medium">
                        <?php echo $cart['title'] ?>
                      </a>
                    </div>
                  </td>
                  <td>
                    <span class="fw-medium fs-5">$<?php echo number_format($cart['price']) ?></span>
                    <small class="text-decoration-line-through text-secondary">
                      $<?php echo number_format($cart['original_price']) ?>
                    </small>
                  </td>
                  <td><?php echo $cart['quatity'] ?></td>
                  <td>$<?php echo number_format($cart['total']) ?></td>
                  <td>
                    <a href="cart/delete/<?php echo $cart['id'] ?>" class="text-decoration-none text-danger btn bg-transparent">
                      <i class="bi bi-trash-fill"></i>
                    </a>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      <?php } else { ?>
        <div class="text-center">
          <img src="https://salt.tikicdn.com/desktop/img/mascot@2x.png" alt="empty cart" class="img-fluid" width="100" />
          <div class="my-3">
            No product.
          </div>
          <a href="product" class="btn btn-primary text-white">Continue shopping</a>
        </div>
      <?php } ?>
    </div>
    <div class="col-sm-3">
      <div class="border p-3 mb-3">
        <div class="d-flex justify-content-between align-items-center mb-1">
          <div class="fw-medium">1 item</div>
          <div class="text-muted">#29</div>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-4">
          <div class="fw-medium">Shipping</div>
          <div class="text-muted">#29</div>
        </div>

        <div class="d-flex justify-content-between align-items-center mb-1">
          <div class="fw-medium">Total (tax excl.)</div>
          <div class="text-muted">#29</div>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-1">
          <div class="fw-medium">Total (tax incl.)</div>
          <div class="text-muted">#29</div>
        </div>
        <hr />

        <div class="d-flex justify-content-between align-items-center mb-1">
          <div class="fw-medium">Total (tax excl.)</div>
          <div class="text-muted">#29</div>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-1">
          <div class="fw-medium">Taxes</div>
          <div class="text-muted">#29</div>
        </div>
        <hr />
        <div class="p-2 text-center">
          <a href="checkout" class="btn btn-dark text-uppercase px-4 py-2">Process to checkout</a>
        </div>
      </div>
      <div class="border ff-kausan">
        <div class="p-3 border-bottom">
          <i class="bi bi-award me-2"></i>
          <span>Security policy (edit with Customer reassurance module)</span>
        </div>
        <div class="p-3 border-bottom">
          <i class="bi bi-piggy-bank-fill me-2"></i>
          <span>Delivery policy (edit with Customer reassurance module)</span>
        </div>
        <div class="p-3">
          <i class="bi bi-arrow-return-left me-2"></i>
          <span>Return policy (edit with Customer reassurance module)</span>
        </div>
      </div>
    </div>
  </div>
</section>