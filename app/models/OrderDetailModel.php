<?php
class OrderDetailModel extends Model
{
    public $table = 'order_details';

    /**
   * Thêm mới phần tử
   */
  public function addNewOrderDetail($fields)
  {
    $values = [];
    foreach ($fields as $key => $val) {
      $values[] = "`$key`='$val'";
    }
    $sql = "Insert into `$this->table` set " . implode(',', $values);

    return parent::execute($sql);
  }
}