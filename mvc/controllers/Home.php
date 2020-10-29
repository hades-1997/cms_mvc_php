<?php
class Home extends Controller
{
    public $CategoryModel;
    public $AdsModel;
    function SayHi()
    {
        $this->CategoryModel = $this->model("Category");
     //   echo $teo->GetSV();
    }
    function  Show($a, $b)
    {
        $teo = $this->model("SinhVienModel");
        $tong= $teo->Tong($a, $b); //3
        $this->view("home", [
            "Page"=>"home",
            "category"=> $this->CategoryModel->ListAll()
        ]);
    }
}