<?php
include_once "app/models/BillModel.php";
include_once "app/models/UserModel.php";
include_once "app/models/BillDetailModel.php";

class BillController extends BaseController
{
  public $billModel;
  public $userModel;
  public $billDetailModel;
  public $pathList = "bills";
  public $pathForm = "bill";
  public $title = "Quản lý hóa đơn";

  public function __construct()
  {
    $this->billModel = new BillModel();
    $this->userModel = new UserModel();
    $this->billDetailModel = new BillDetailModel();

    $action = $_GET['action'] ?? null;

    switch ($action) {
      case 'create':
        $this->redirectCreateBill();
        break;
      default:
        $this->getListBill();
        break;
    }
  }

  /**
   * Lấy danh sách phần tử
   */
  public function getListBill()
  {
    $result = [
      'bills' => $this->billModel->getListBill(),
      'pathList' => $this->pathList,
      'pathForm' => $this->pathForm,
      'title' => $this->title,
    ];


    $this->setTemplate("admin/$this->pathForm/index", $result);
    $this->setLayout('AdminLayout');
  }

  /**
   * Mở trang xem chi tiết
   */
  public function redirectCreateBill()
  {
    $result = [
      'formAction' => "admin/$this->pathForm/do_create",
      'title' => $this->title,
      'pathForm' => $this->pathForm,
      'pathList' => $this->pathList,
    ];

    $this->setTemplate("admin/$this->pathForm/create", $result);
    $this->setLayout('AdminNoSidebarLayout');
  }
}
