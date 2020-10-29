<?php
class Ajax extends Controller
{
    public $UserModel;
    public function __construct()
    {
        $this->UserModel = $this->model("InsertDatabaseModel");
    }
    public function checkUsername(){
        $un = $_POST["un"];

     echo $this->UserModel->checkUsername($un);
    }
}