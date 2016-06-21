<?php
namespace App\Controller;


class Lm extends BaseController {

    private $storeroot = "../Store/";


    public function __construct(){
        parent::__construct();
    }

    public function doView()
    {
        $chr    = req('Get')['chr'];
        $child  = req('Get')['child'];

        //获取栏目信息
        $res = Model('md')->getar($chr);


        //读取内容转化markdown
        $file = $this->storeroot.$chr.'/'.$child.'.md';
        $nr = @file_get_contents($file);
        $nr = app('Parsedown')->text($nr);


        //计算上一�? 下一�?
        $list  = $res['list'];
        foreach($list as $key=>$value){
            $vs[] = $key;
        }

        $zha = array();
        array_push($zha,'');
        $page = array();
        for($i=0;$i<=(count($vs)-1);$i++){

            if($child == $vs[$i]){
                //去三个�??,栈里面的,当前�?,和后面的 组成新的数组
                $one = array_pop($zha);
                $two = $child;
                //$three = (count($vs)==($i+1))?"":next($vs);             //有可能是�?后一个报�?
                $three = (count($vs)==($i+1))?"":$vs[$i+1];             //有可能是�?后一个报�?
                $page = array($one,$two,$three);

                break;
            }
            array_push($zha,$vs[$i]);
        }


        //D($ar);         //是上�?�? 本页 和下�?�?

        view('',[
            'res'   => $res,
            'chr'   => $chr,
            'child' => $child,
            'nr'    => $nr,
            'page'  => $page,
        ]);
    }

    public function doIndex()
    {
        $chr = req('Get')['chr'];
        $res = Model('md')->getar($chr);
        //D($res);
        //D($res['list']);
        //---------------------------------------
        if($res['type']){
            //�?要循环读取每个文件的内容,生成前端页面显示,就没有下级页面了
//            D($res['list']);
            foreach($res['list'] as $key=>$value){
                $file = $this->storeroot.$chr.'/'.$key.'.md';
                $nr[$key] = @file_get_contents($file);
                $nr[$key] = app('Parsedown')->text($nr[$key]);
            }
            //D($res['list']);
            view('indexext',[
                'list'  => $res['list'],
                'nr'    => $nr,
                'res'   => $res
            ]);
        }else{
            //还是列表,下面有专门显示文章的地方

            view('',[
                'res'=> $res
            ]);
        }


    }



    public function doIndex2()
    {

        view('',[
            'res'=> $res
        ]);
    }

    public function doIndex3()
    {

        view('',[
            'res'=> $res
        ]);
    }

}
