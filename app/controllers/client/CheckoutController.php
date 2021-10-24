<?php
include_once "app/models/UserModel.php";
include_once "app/models/OrderModel.php";
include_once "app/models/OrderDetailModel.php";

class CheckoutController extends BaseController
{
  public $user;
  public $order;
  public $orderDetail;

  public function __construct()
  {
    $this->user = new UserModel();
    $this->order = new OrderModel();
    $this->orderDetail = new OrderDetailModel();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $user = $this->user->addNewUser([
        "first_name" => $_POST["firstName"],
        "last_name" => $_POST["lastName"],
        "email" => $_POST["email"],
        "address" => $_POST["address"],
        "phone" => $_POST["phoneNumber"],
      ]);

      $order = $this->order->addNewOrder([
        "user_id" => $user,
      ]);

      $cart = $_SESSION["cart"];
      foreach ($cart as $key => $value) {
        $this->orderDetail->addNewOrderDetail([
          "order_id" => $order,
          "product_id" => $value["id"],
          "price" => $value["price"],
          "quatity" => $value["quatity"],
        ]);
      }
      unset($_SESSION['cart']);
      global $APP_URL;
      header("location:$APP_URL/order-success");
    }

    $this->setTemplate("client/checkout/index");
    $this->setLayout("ClientLayout");
  }
}
