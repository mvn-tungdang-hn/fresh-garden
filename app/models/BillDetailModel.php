<?php
class BillDetailModel extends Model
{
  public $table = 'chitiethoadon';

  /**
   * Thêm mới phần tử
   */
  public function addNewBillDetail($fields)
  {
    $values = [];
    foreach ($fields as $key => $val) {
      $values[] = "`$key`='$val'";
    }
    $sql = "Insert into `$this->table` set " . implode(',', $values);

    return parent::execute($sql);
  }

  /**
   * Lấy chi tiết đơn hàng
   */
  public function getDetailBillDetail($billId)
  {
    $result = parent::getListAll("Select chitiethoadon.DonGia as DonGia, chitiethoadon.SoLuongMua as SoLuongMua, products.title, monan.HinhAnh from chitiethoadon inner join monan on chitiethoadon.MaMonAn = monan.MaMonAn where MaHoaDon = $billId");

    return $result;
  }
}
