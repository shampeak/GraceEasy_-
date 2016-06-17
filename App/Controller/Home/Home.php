<?php
namespace App\Controller;


class Home extends BaseController {

    public function __construct(){
        parent::__construct();
    }

    public function doIndex()
    {




$res = app('db')->getall("select * from addons");
D($res);

        view('',[
            'title'=>'yang'
        ]);
    }

}
