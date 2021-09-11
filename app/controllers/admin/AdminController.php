<?php

class AdminController extends BaseController
{
  public function __construct()
  {
    $this->setTemplate("admin/dashboard/index");
    $this->setLayout("AdminLayout");
  }
}
