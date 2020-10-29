<?php
class Controller
{
    public function model($model)
    {
        require_once "./mvc/model/".$model.".php";
           return new $model;

           //view
    }
    public  function view($view, $data=[])
    {
        require_once "./mvc/views/".$view.".php";
    }
}