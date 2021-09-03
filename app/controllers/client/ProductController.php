<?php
include_once "app/models/CategoryModel.php";
include_once "app/models/ProductModel.php";

class ProductController extends BaseController
{
  public $categoryModel;
  public $productModel;

  public function __construct()
  {
    $this->categoryModel = new CategoryModel();
    $this->productModel = new ProductModel();

    $categories = $this->categoryModel->getListCategory();
    foreach ($categories as $category) {
      $category->products = $this->productModel->getListProduct("where category_id = $category->id and status = 1");
    }

    $result = [
      'categories' => $categories,
    ];

    $this->setTemplate("client/product/index", $result);
    $this->setHeadTag("client/product/head");
    $this->setLayout("ClientLayout");
  }
}
