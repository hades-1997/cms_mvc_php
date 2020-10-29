<?php
class Register extends Controller
{
    public $InsertDatabaseModel;
    public function __construct()
    {
        $this->InsertDatabaseModel = $this->model("InsertDatabaseModel");
    }
    public function SayHi(){
        $this->view("home",[
            "Page"=>"Register"
        ]);
    }
    public function KhachHangDangKy()
    {
        // get data khach hang nhap
        if(isset($_POST["submit_register"]))
        {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $password = password_hash($password, PASSWORD_DEFAULT);
            $email = $_POST['email'];

//            echo $password;
        }
        // insert database bang user
         $kq = $this->InsertDatabaseModel->InsertDatabase($username,$password,$email);
        //echo $kq;
        // Show chu ok or fail
        $this->view("home",[
            "Page"=>"Register",
            "result"=>$kq
        ]);
    }
}