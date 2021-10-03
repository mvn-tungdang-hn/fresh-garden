<?php
class CheckoutController extends BaseController
{
  public function __construct()
  {
    $this->setTemplate("client/checkout/index");
    $this->setLayout("ClientLayout");
  }
}
