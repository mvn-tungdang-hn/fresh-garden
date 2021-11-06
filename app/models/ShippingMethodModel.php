<?php
class ShippingMethodModel extends Model
{
  public $table = 'shipping_methods';

  /**
   * Lấy danh sách phần tử
   */
  public function getListShippingMethod()
  {
    $result = parent::getListAll("Select * from `$this->table` order by id asc");

    return $result;
  }
}
