<?php

class SignInController extends BaseController
{
  public $model;

  public function __construct()
  {
    $this->setTemplate("auth/sign-in/index");
    $this->setHeadTag("auth/sign-in/head");
    $this->setLayout("AuthLayout");
  }
}
