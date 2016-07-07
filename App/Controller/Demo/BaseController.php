<?php

namespace App\Controller;


//hook
class BaseController{

    public function __construct(){
        if(method_exists($this,'init')){
            $this->init();
        }
    }

    public function actions()
    {

    }



    public function behaviors()
    {
        return [
            'access' => [
                'only' => [],                         //行为限定
                    'rules' => [
                    [
                        'actions' => [],              //行为限定
                        'allow' => true,              //判定
                        'roles' => ['G'],
                    ],
                ],
            ],
        ];
    }

}
