<?php
namespace App\Controller;


class Admin extends BaseController {

    private $storeroot = "../Store/";

    public function __construct(){
        parent::__construct();
    }





    //对栏目进行设置
    public function doLm()
    {
        $chr = req('Get')['chr'];
        $root = $this->storeroot;

        //读取主json文件
        $json = $root.'Index.json';
        $_res = file_get_contents($json);
        $indexjson = json_decode($_res,true);
        //主json文件读取完毕 index.json
        $lminfo =$indexjson['list'][$chr];

//D($lminfo);

        //读取主json文件
        $json = $root.$chr.'/Index.json';
        $_res = file_get_contents($json);
        $listjson = json_decode($_res,true);
        //主json文件读取完毕 index.json


        //读取下面所有的文件
        //获取物理目录
        $dirall = scandir($root.$chr.'/');
       // D($dirall);
        foreach($dirall as $v){
            if(strpos($v,'.md'))$_v[] = trim($v,'.md');
        }
        //获取所有文章 respath;

    D($_v);
        //排序
        foreach($respath as $value){
            if($resjson['list'][$value]['sort']){
                $_v[$value] = $resjson['list'][$value]['sort'];
            }else{
                $_v[$value] = 0;
            }
        }
        asort($_v);//排序完成
        $respath = array_keys($_v);



        //遍历下面有哪些目录
        view('',[
            'lminfo'    => $lminfo,
            'root'      => $root,
            'chr'       => $chr,
            'listjson'  => $listjson
        ]);
    }

    //首页响应
    public function doIndexPost()
    {

        //paixu$list
        $res = $_POST;
        $list = $_POST['list'];
        foreach($list as $value){
            $_v[] = $value['sort'];
        }
        array_multisort($_v,SORT_ASC,$list);
        //小的前面
        $res['list'] = $list;
        $json = json_encode($res);


        file_put_contents($this->storeroot.'Index.json',$json);
        //wanbi
        R('/admin/');

    }


    //首页的
    public function doIndex()
    {

        $res = Model('md')->getar();

        //遍历下面有哪些目录
        view('',[
            'res'=>$res
        ]);
    }

}
