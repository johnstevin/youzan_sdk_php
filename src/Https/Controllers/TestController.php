<?php
/**
 * Created by PhpStorm.
 * User: stevin
 * Date: 2018/7/10
 * Time: 上午9:52
 */

namespace Youzan\SDK\Https\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TestController extends Controller
{

    public function __construct()
    {
    }

    public function getToken ()
    {
        $clientId = "d4ef476f9cd6dcd3e6";
        $clientSecret = "c4ffdd2e26325b537a2336aaf675c5f5";

        $type = 'self';
        $keys['kdt_id'] = '18160736';

        $accessToken = (new \Youzan\SDK\Open\Token($clientId, $clientSecret))->getToken($type, $keys);
        var_dump($accessToken);
    }

}