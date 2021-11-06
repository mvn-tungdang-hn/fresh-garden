<?php
class MyOrderController extends BaseController
{
  public function __construct()
  {
    $this->setTemplate("client/myorder/index");
    $this->setLayout("ClientLayout");
  }
}
