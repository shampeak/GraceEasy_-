<?php
/**
 * Created by PhpStorm.
 * User: shampeak
 * Date: 2016/6/19
 * Time: 18:44
 */

namespace App\Model;


class MdModel
{

    private $storeroot  = "../Store/";
    private $chr        = 'index';
    //分析路径得到的数组
    private $jsoninfo   = '';
    //读取json文件或得到的数据
    private $jsonfile   = array();

    public function setchr($chr = 'Index')
    {
        if(!$chr)$chr = 'Index';
        $this->chr = $chr;
        return $this;
    }

    public function getar($chr = 'Index')
    {
        $this->setchr($chr)->getjsonfile()->getjsoninfo()->mix();
        return $this->res;
    }


    public function mix()
    {
        $_v = array();
        //排序
        foreach($this->jsoninfo as $value){
            if($this->jsonfile['list'][$value]['sort']){
                $_v[$value] = $this->jsonfile['list'][$value]['sort'];
            }else{
                $_v[$value] = 0;
            }
        }
        asort($_v);//排序完成
        $chrlist = array_keys($_v);

        $list = array();
        $i = 0;


if($this->chr == 'Index'){
    //        /OK构建新的数组
    foreach($chrlist as $value){
        $_list = array();
        $_list['sort'] = $i;
        $_list['chr'] = $value;
        $_list['title'] = $this->jsonfile['list'][$value]['title'];
        $_list['des'] = $this->jsonfile['list'][$value]['des'];
        $_list['path'] = $this->jsonfile['list'][$value]['path'];
        $i++;
        $list[$value] = $_list;
    }
    $res['title']   =$this->jsonfile['title'];
    $res['descrijption'] =$this->jsonfile['descrijption'];
    $res['list']    = $list;
}else{
    //对于这个 title 和des 通过读取文件得到


    foreach($chrlist as $value){
        $file = $this->storeroot.$this->chr.'/'.$value.'.md';
        //读取文件
        $nr = file_get_contents($file);
        $sp = explode("\n",$nr);


        foreach($sp as $k=> $v){
            if(empty(trim($v)))unset($sp[$k]);
        }

        $title = trim(trim(trim(array_pop($sp),"\r"),'#'),'>');
        $des = trim(trim(trim(array_pop($sp),"\r"),'#'),'>');

        $_list = array();
        $_list['sort'] = $i;
        $_list['chr'] = $value;
        $_list['title'] = $title;
        $_list['des'] = $des;
        $_list['path'] = "?$value";
        $i++;
        $list[$value] = $_list;
    }
    $res['title']   =$this->jsonfile['title'];
    $res['descrijption'] =$this->jsonfile['descrijption'];
    $res['list']    = $list;
}

        $this->res = $res;
        return $this;
    }


    /*获取路径情况
     * */
    public function getjsoninfo()
    {
        if($this->chr == 'Index'){
            $dirall = scandir($this->storeroot);
            foreach($dirall as $v){
                if(is_dir($this->storeroot.$v) && $v!= '.' && $v != '..')
                    $res[] = $v;
            }

        }else{
            $dirall = scandir($this->storeroot.$this->chr.'/');
            foreach($dirall as $v){
                if(strpos($v,'.md'))
                    $res[] = trim($v,'.md');
            }
        }
        if(!$res)$res= array();
        $this->jsoninfo = $res;
        return $this;


    }


    /*
     * 1 : index
     * 2 : chr下面的
     * */
    public function getjsonfile()
    {
        if($this->chr == 'Index'){
            $file = $this->storeroot.'Index.json';
        }else{
            $file = $this->storeroot.$this->chr.'/Index.json';
        }
        $_res = file_get_contents($file);
        $res = json_decode($_res,true);
        $this->jsonfile = $res;
        return $this;
    }



    //写文件
    public function setjsonfile($value,$chr = 'index')
    {
        if($chr == 'index'){
            $file = $this->storeroot.'Index.json';
        }else{
            $file = $this->storeroot.$chr.'/Index.json';
        }
        $value = json_encode($value);
        file_put_contents($file,$value);
    }



}