<?php
class LoaiDanhMucModel extends Model
{
  public $table = 'loaidanhmuc';

  /**
   * Lấy danh sách phần tử
   */
  public function getListCategory()
  {
    $result = parent::getListAll("Select * from `$this->table`");

    return $result;
  }
}
