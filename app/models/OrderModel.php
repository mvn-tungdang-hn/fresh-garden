<?php
class OrderModel extends Model
{
    public $table = 'orders';

    /**
   * Thêm mới phần tử
   */
  public function addNewOrder($fields)
  {
    $values = [];
    foreach ($fields as $key => $val) {
      $values[] = "`$key`='$val'";
    }
    $sql = "Insert into `$this->table` set " . implode(',', $values);

    return parent::execute($sql);
  }
}