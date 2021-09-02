<?php
class HomeController extends BaseController
{
  public function __construct()
  {
    $this->setTemplate("client/home/index");
    $this->setLayout("ClientLayout");
  }
}
