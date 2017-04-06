<?php
namespace Mobile\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }

    public function getConfig()
    {
        return $this->config;
    }

     public function only_getInfo()
    {
        return $this->getConfig();
    }
    public function  web_test(){
       $this->display('test');
    }
    public function image_list(){
        $this->display('images');
    }

}