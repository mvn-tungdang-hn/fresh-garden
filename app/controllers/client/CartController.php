<?php

class CartController extends BaseController
{
  public $model;

  public function __construct()
  {
    $this->model = new Model();

    $action = $_GET['action'] ?? null;


    if (!isset($_SESSION["cart"])) {
      $_SESSION["cart"] = array();
    }

    switch ($action) {
      case 'add':
        $this->addCart();
        break;
      case 'destroy':
        $this->destroyCart();
        break;
      case 'delete':
        $this->deleteCartItem();
        break;
      default:
        $this->getCartList();
        break;
    }
  }

  /**
   * Lấy danh sách giỏ hàng
   */
  public function getCartList()
  {
    $result = [
      'carts' => $_SESSION["cart"],
    ];

    $this->setTemplate("client/cart/index", $result);
    $this->setLayout("ClientLayout");
  }

  /**
   * Thêm mới sản phẩm vào giỏ hàng
   */
  public function addCart()
  {
    global $APP_URL;
    $id = $_POST['id'] ??  null;
    $quatity = $_POST['quatity'] ?? 1;

    if (isset($_SESSION['cart'][$id])) {
      $_SESSION['cart'][$id]['quatity'] += $quatity;
      if ($_SESSION['cart'][$id]['quatity'] == 0) {
        $this->deleteCartItem($id);
      }
    } else {
      $product = $this->model->getRecord("Select * from products where id = $id");
      $_SESSION['cart'][$id] = array(
        'id' => $id,
        'title' => $product->title,
        'thumbnail' => $product->thumbnail,
        'original_price' => $product->original_price,
        'price' => $product->price,
        'quatity' => $quatity,
        'total' => $quatity * $product->price
      );
    }

    header("location:$APP_URL/cart");
  }

  /**
   * Xoá giỏ hàng
   */
  public function destroyCart()
  {
    global $APP_URL;

    unset($_SESSION['cart']);
    header("location:$APP_URL/cart");
  }

  /**
   * Xoá phần tử trong giỏ hàng
   */
  public function deleteCartItem()
  {
    global $APP_URL;
    $id = $_GET['id'] ??  null;

    unset($_SESSION['cart'][$id]);
    header("location:$APP_URL/cart");
  }
}
