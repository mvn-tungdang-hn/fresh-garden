<?php

class SignUpController extends BaseController
{
  public $model;

  public function __construct()
  {
    $this->setTemplate("auth/sign-up/index");
    $this->setLayout("AuthLayout");
  }
}
