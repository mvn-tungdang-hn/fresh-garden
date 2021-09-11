<?php
include_once "app/models/CategoryModel.php";
include_once "app/models/ProductModel.php";

class CategoryProductController extends BaseController
{
  public $categoryModel;
  public $productModel;

  public function __construct()
  {
    $this->categoryModel = new CategoryModel();
    $this->productModel = new ProductModel();

    $categoryId = $_GET['id'] ?? null;

    $result = [
      'category' => $this->categoryModel->getDetailCategory($categoryId),
      'products' => $this->productModel->getListProduct("where category_id = $categoryId and status = 1")
    ];

    $this->setTemplate("client/category-product/index", $result);
    $this->setLayout("ClientLayout");
  }
}
