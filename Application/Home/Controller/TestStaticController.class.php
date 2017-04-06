<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017-3-9
 * Time: 14:36
 */

namespace Home\Controller;


use Home\Controller;
class TestStaticController extends IndexController
{

    public function only_getInfo()
    {
        $result = get_client_ip();
        print_r($result);
    }
}