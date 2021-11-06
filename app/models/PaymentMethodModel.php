<?php
class PaymentMethodModel extends Model
{
  public $table = 'payment_methods';

  /**
   * Lấy danh sách phần tử
   */
  public function getListPaymentMethod()
  {
    $result = parent::getListAll("Select * from `$this->table` order by id asc");

    return $result;
  }
}
