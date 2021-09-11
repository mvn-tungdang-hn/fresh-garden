<?php
include_once "app/models/BannerModel.php";
include_once "app/models/CollectionModel.php";

class HomeController extends BaseController
{
  public $bannerModel;
  public $collectionModel;

  public function __construct()
  {
    $this->bannerModel = new BannerModel();
    $this->collectionModel = new CollectionModel();

    $result = [
      'banners' => $this->bannerModel->getListBanner("where status = 1"),
      'collections' => $this->collectionModel->getListCollection("where status = 1"),
    ];

    $this->setTemplate("client/home/index", $result);
    $this->setLayout("ClientLayout");
  }
}
