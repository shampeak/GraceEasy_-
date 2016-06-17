<?php
namespace App\Controller;


class Manage extends BaseController {

    public function __construct(){
        parent::__construct();
    }

    //登录界面
    public function doLogin()
    {
        view('',[
            'title'=>'yang'
        ]);
    }

    public function doIndex()
    {

        view('',[
            'title'=>'yang'
        ]);
    }



}
