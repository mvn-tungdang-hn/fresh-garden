<?php

class CartController extends BaseController
{
  public function __construct()
  {
    $this->setTemplate("client/cart/index");
    $this->setLayout("ClientLayout");
  }
}
