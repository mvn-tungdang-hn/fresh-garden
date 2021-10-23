<title>Checkout - Highlands</title>

<!-- Breadcrumbs -->
<nav aria-label="breadcrumb" class="py-4">
  <ol class="breadcrumb container mb-0">
    <li class="breadcrumb-item">
      <a href="#" class="text-decoration-none">Home</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
  </ol>
</nav>

<!-- Checkout -->
<section class="container py-4">
  <form class="accordion accordion-flush" id="accordionCheckout" method="POST">
    <div class="row">
      <div class="col-sm-9">
        <div class="border mb-3">
          
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed ff-kausan text-uppercase fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePersonal" aria-expanded="false" aria-controls="collapsePersonal">
                  1. Personal information
                </button>
              </h2>
              <div id="collapsePersonal" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionCheckout">
                <div class="accordion-body">
                  <p class="text-muted">If you have an account, <a href="sign-in">Sign In</a></p>
                  <div class="mb-3 row">
                    <label for="firstName" class="col-sm-2 col-form-label">First name <span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                      <input class="form-control" id="firstName" placeholder="example" name="firstName">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="lastName" class="col-sm-2 col-form-label">Last name <span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                      <input class="form-control" id="lastName" placeholder="example" name="lastName">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="phoneNumber" class="col-sm-2 col-form-label">Phone number <span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                      <input class="form-control" id="phoneNumber" placeholder="097xxxxxxx" name="phoneNumber">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="email" class="col-sm-2 col-form-label">Email address <span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                      <input class="form-control" id="email" placeholder="email@example.com" name="email">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="address" class="col-sm-2 col-form-label">Address <span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                      <textarea placeholder="Your address here..." class="form-control" id="address" name="address"></textarea>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed ff-kausan text-uppercase fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseShippingMethod" aria-expanded="false" aria-controls="collapseShippingMethod">
                  2. Shipping Method
                </button>
              </h2>
              <div id="collapseShippingMethod" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionCheckout">
                <div class="accordion-body">
                  <div class="mb-2 bg-light p-2">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="shippingMethod" id="shippingMethod1" checked>
                      <label class="form-check-label row" for="shippingMethod1">
                        <span class="col-4">Fast shipping</span>
                        <span class="col-4">Delivery next day!</span>
                        <span class="col-4">$7.00</span>
                      </label>
                    </div>
                  </div>
                  <div class="mb-2 bg-light p-2">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="shippingMethod" id="shippingMethod2">
                      <label class="form-check-label row" for="shippingMethod2">
                        <span class="col-4">Default shipping</span>
                        <span class="col-4">Delivery next week!</span>
                        <span class="col-4">$5.00</span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed ff-kausan text-uppercase fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePayment" aria-expanded="false" aria-controls="collapsePayment">
                  3. Payment
                </button>
              </h2>
              <div id="collapsePayment" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionCheckout">
                <div class="accordion-body">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment" id="payment1" checked>
                    <label class="form-check-label" for="payment1">
                      Pay by Check
                    </label>
                  </div>
                  <div class="ms-4">
                    <p>Please send us your check including the following details:</p>
                    <div class="row g-2 mb-2">
                      <div class="col-6">
                        <div class="bg-light p-2">Amount</div>
                      </div>
                      <div class="col-6">
                        <div class="bg-light p-2">$36.00 (tax incl.)</div>
                      </div>
                    </div>
                    <div class="row g-2 mb-2">
                      <div class="col-6">
                        <div class="bg-light p-2">Payee</div>
                      </div>
                      <div class="col-6">
                        <div class="bg-light p-2">___________</div>
                      </div>
                    </div>
                    <div class="row g-2 mb-2">
                      <div class="col-6">
                        <div class="bg-light p-2">Send your check to this address</div>
                      </div>
                      <div class="col-6">
                        <div class="bg-light p-2">___________</div>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment" id="payment1" disabled>
                    <label class="form-check-label" for="payment1">
                      Pay by bank wire
                    </label>
                  </div>
                </div>
              </div>
            </div>
        </div>
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
        </div>
        <div class="border ff-kausan mb-3">
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
        <div class="text-center">
          <!-- <a href="order-success" class="btn btn-dark text-uppercase w-100">Purchase confirmation</a> -->
          <button type="submit" class="btn btn-dark text-uppercase w-100">Purchase confirmation</button>
        </div>
      </div>
    </div>
  </form>
</section>