<?php
class SinhVienModel extends Database
{
    public function GetSV(){
        return "Trang Sinh Vien Model";
    }
    public function  Tong($m, $n)
    {
        return $n + $m;
    }
    public function SinhVien(){
        $qr="SELECT * FROM username";
        return mysqli_query($this->con, $qr);
    }

}