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
use Youzan\SDK\CacheBridge;

class TestController extends Controller
{

    public function __construct()
    {
    }

    public function getToken ()
    {
        $youzan = new \Youzan\SDK\Youzan([
            'client_id' => '',
            'client_secret' => '',
            'type' => \Youzan\SDK\Youzan::PERSONAL, // 自用型应用
            'debug' => true, // 调试模式
            'kdt_id' => '', // 店铺ID
            'log' => [
                'name' => 'youzan',
                'file' => __DIR__.'/youzan.log',
                'level'      => 'debug',
                'permission' => 0777,
            ],
            'cache' => new CacheBridge(),
        ]);

        // 获取门店信息
        $result = $youzan->request('youzan.shop.get');
        dd($result);
    }

    public function getToken1 ()
    {
        $clientId = "";
        $clientSecret = "";

        $type = 'self';
        $keys['kdt_id'] = '';

        $accessToken = (new \Youzan\SDK\Open\Token($clientId, $clientSecret))->getToken($type, $keys);
        var_dump($accessToken);
    }

}