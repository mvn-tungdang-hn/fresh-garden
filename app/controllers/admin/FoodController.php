<?php
include_once "app/models/FoodModel.php";
include_once "app/models/LoaiDanhMucModel.php";

class FoodController extends BaseController
{
  public $foodModel;
  public $categoryModel;
  public $pathList = "foods";
  public $pathForm = "food";
  public $imageFolder = "food";
  public $title = "Món ăn";

  public function __construct()
  {
    $this->foodModel = new FoodModel();
    $this->categoryModel = new LoaiDanhMucModel();

    $action = $_GET['action'] ?? null;
    $id = $_GET['id'] ?? null;

    switch ($action) {
      case 'create':
        $this->redirectCreateFood();
        break;
      case 'do_create':
        $this->createFood();
        break;
      case 'show':
        $this->showFood($id);
        break;
      case 'update':
        $this->updateFood($id);
        break;
      case 'delete':
        $this->deleteFood($id);
        break;
      default:
        $this->getListFood();
        break;
    }
  }

  /**
   * Lấy danh sách phần tử
   */
  public function getListFood()
  {
    $result = [
      'foods' => $this->foodModel->getListFood(),
      'pathList' => $this->pathList,
      'pathForm' => $this->pathForm,
      'title' => $this->title,
    ];
    $this->setTemplate("admin/$this->pathForm/index", $result);
    $this->setLayout('AdminLayout');
  }

  /**
   * Mở trang thêm phần tử
   */
  public function redirectCreateFood()
  {
    $result = [
      'formAction' => "admin/$this->pathForm/do_create",
      'title' => $this->title,
      'pathForm' => $this->pathForm,
      'pathList' => $this->pathList,
      'categories' => $this->categoryModel->getListCategory(),
    ];

    $this->setTemplate("admin/$this->pathForm/edit", $result);
    $this->setLayout('AdminNoSidebarLayout');
  }

  /**
   * Thêm phần tử
   */
  public function createFood()
  {
    global $APP_URL;

    $thumbnail = null;

    if ($_FILES['thumbnail']['name'] != '') {
      $fileName = time() . $_FILES['thumbnail']['name'];
      move_uploaded_file($_FILES['thumbnail']['tmp_name'], "public/images/upload/$this->imageFolder/$fileName");
      $thumbnail = "public/images/upload/$this->imageFolder/" . $fileName;
    }

    $this->foodModel->addNewFood([
      'TenMonAn' => $_POST['title'],
      'DonGia' => $_POST['price'],
      'MoTa' => $_POST['content'],
      'SoLuongCon' => $_POST['quantity'],
      'MaLoaiDanhMuc' => $_POST['category_id'],
      'HinhAnh' => $thumbnail,
    ]);

    header("location:$APP_URL/admin/$this->pathList/1");
  }

  /**
   * Hiển thị chi tiết phần tử
   */
  public function showFood($id)
  {
    $result = [
      'formAction' => "admin/$this->pathForm/update/$id",
      'title' => $this->title,
      'detail' => $this->foodModel->getDetailFood($id),
      'pathForm' => $this->pathForm,
      'pathList' => $this->pathList,
      'categories' => $this->categoryModel->getListCategory(),
    ];

    $this->setTemplate("admin/$this->pathForm/edit", $result);
    $this->setLayout('AdminNoSidebarLayout');
  }

  /**
   * Cập nhật phần tử
   */
  public function updateFood($id)
  {
    global $APP_URL;

    if ($_FILES['thumbnail']['name'] != '') {
      $fileName = time() . $_FILES['thumbnail']['name'];
      move_uploaded_file($_FILES['thumbnail']['tmp_name'], "public/images/upload/$this->imageFolder/$fileName");
      $thumbnail = "public/images/upload/$this->imageFolder/" . $fileName;

      $this->foodModel->updateFood($id, [
        'HinhAnh' => $thumbnail,
      ]);
    }

    $this->foodModel->updateFood($id, [
      'TenMonAn' => $_POST['title'],
      'DonGia' => $_POST['price'],
      'MoTa' => $_POST['content'],
      'SoLuongCon' => $_POST['quantity'],
      'MaLoaiDanhMuc' => $_POST['category_id'],
    ]);

    header("location:$APP_URL/admin/$this->pathList/1");
  }

  /**
   * Xoá phần tử
   */
  public function deleteFood($id)
  {
    global $APP_URL;

    $this->foodModel->deleteFood($id);

    header("location:$APP_URL/admin/$this->pathList/1");
  }
}
