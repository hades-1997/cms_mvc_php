<?php
class CategoryModel extends Database
{
    public function  ListAll()
    {
        $qr="SELECT * FROM username";
        return mysqli_query($this->con, $qr);
        $mang = array();
        while ($row = mysqli_fetch_array($mang))
        {
            $mang[] = $row;
        }
        return json_encode($mang);
    }
}