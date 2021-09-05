<?php
session_start();

include_once "config.php";
include_once "app/controllers/BaseController.php";
include_once "app/models/Model.php";

$type = isset($_GET["type"]) ? $_GET["type"] : "";
$controller = isset($_GET["controller"]) ? $_GET["controller"] : "";
$controllerClass = "{$controller}Controller";

if ($type == "auth") {
  $controller = "app/controllers/auth/{$controller}Controller.php";
  include_once $controller;
  new $controllerClass();
} else {
  if (!isset($_SESSION["user"])) {
    include_once "app/controllers/auth/SignInController.php";
    new SignInController();
  }
}
