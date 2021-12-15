<?php
class BillModel extends Model
{
  public $table = 'hoadon';

  /**
   * Lấy danh sách phần tử
   */
  public function getListBill()
  {
    $result = parent::getListAll("Select * from `$this->table`");

    return $result;
  }

  /**
   * Thêm mới phần tử
   */
  public function addNewBill($fields)
  {
    $values = [];
    foreach ($fields as $key => $val) {
      $values[] = "`$key`='$val'";
    }
    $sql = "Insert into `$this->table` set " . implode(',', $values);

    return parent::execute($sql);
  }

  /**
   * Lấy thông tin phần tử
   */
  public function getDetailBill($id)
  {
    $result = parent::getRecord("Select * from `$this->table` where MaHoaDon = $id");
    return $result;
  }
}
