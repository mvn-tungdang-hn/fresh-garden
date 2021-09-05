<?php

class SignUpController extends BaseController
{
  public $model;

  public function __construct()
  {
    $this->setTemplate("auth/sign-up/index");
    $this->setHeadTag("auth/sign-up/head");
    $this->setLayout("AuthLayout");
  }
}
