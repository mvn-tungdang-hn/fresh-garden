<?php
include_once "app/models/CategoryModel.php";

class CategoryProductController extends BaseController
{
  public $categoryModel;
  public $pathList = "categories-product";
  public $pathForm = "category-product";

  public function __construct()
  {
    $this->categoryModel = new CategoryModel();

    $action = $_GET['action'] ?? null;

    switch ($action) {
      case 'create':
        //
        break;
      case 'do_create':
        // 
        break;
      case 'edit':
        // 
        break;
      case 'do_edit':
        // 
        break;
      case 'delete':
        //
        break;
      default:
        $this->getListCategoryProduct();
        break;
    }

    $this->setLayout("AdminLayout");
  }

  /**
   * Lấy danh sách phần tử
   */
  public function getListCategoryProduct()
  {
    global $pathList;
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $totalRecord = $this->categoryModel->getRowCountCategory();
    $limit = 10;
    $totalPage = ceil($totalRecord / $limit);

    if ($page > $totalPage) {
      $page = $totalPage;
    } else if ($page < 1) {
      $page = 1;
    }

    $start = ($page - 1) * $limit;
    $end = $limit + $start;
    if ($end > $totalRecord) {
      $end = $totalRecord;
    }

    $result = [
      "categories" => $this->categoryModel->getListCategory("where type = 1", "limit $start, $limit"),
      "page" => $page,
      "totalPage" => $totalPage,
      "totalRecord" => $totalRecord,
      "limit" => $limit,
      "start" => $start,
      "end" => $end,
      "pathList" => $pathList,
      "title" => "Categories Product"
    ];

    $this->setTemplate("admin/category-product/index", $result);
  }

  /**
   * Mở trang thêm phần tử
   */
  public function createCategoryProduct()
  {
    $result = [
      'formAction' => "admin/$this->path/do_add",
      'title' => 'Thêm mới danh mục bất động sản',
      'path' => $this->path
    ];

    $this->setTemplate("admin/$this->path/edit", $result);
    $this->setLayout("AdminLayout");
  }
}
