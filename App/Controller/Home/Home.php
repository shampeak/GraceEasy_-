<?php
namespace App\Controller;


class Home extends BaseController {

    public function __construct(){
        parent::__construct();
    }

    public function doIndex()
    {
        echo 'Hello doIndex';


    }

    public function doIndex_pe()
    {
        echo 'Hello doIndex_pe';
        view();

    }


}
