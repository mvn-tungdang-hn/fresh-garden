<?php
class FoodModel extends Model
{
  public $table = 'monan';

  /**
   * Lấy danh sách phần tử
   */
  public function getListFood()
  {
    $result = parent::getListAll("Select * from `$this->table`");

    return $result;
  }

  /**
   * Lấy số bản ghi
   */
  public function getRowCountFood($where = '')
  {
    $result = parent::getRowCount("Select MaMonAn from `$this->table` $where");

    return $result;
  }

  /**
   * Lấy thông tin phần tử
   */
  public function getDetailFood($id)
  {
    $result = parent::getRecord("Select * from `$this->table` where MaMonAn = $id");
    return $result;
  }

  /**
   * Thêm mới phần tử
   */
  public function addNewFood($fields)
  {
    $values = [];
    foreach ($fields as $key => $val) {
      if ($val != null) {
        $values[] = "`$key`='$val'";
      }
    }
    $sql = "Insert into `$this->table` set " . implode(',', $values);

    return parent::execute($sql);
  }

  /**
   * Update phần tử
   */
  public function updateFood($id, $fields)
  {
    $values = [];
    foreach ($fields as $key => $val) {
      if ($val != null) {
        $values[] = "`$key`='$val'";
      }
    }
    $sql = "Update `$this->table` set " . implode(',', $values) . " where MaMonAn = $id";

    return parent::execute($sql);
  }

  /**
   * Xoá phần tử
   */
  public function deleteFood($id)
  {
    return parent::execute("Delete from `$this->table` where MaMonAn = $id");
  }
}
