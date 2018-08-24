<?php
/**
 * Created by PhpStorm.
 * User: stevin
 * Date: 2018/7/10
 * Time: 上午10:52
 */

namespace Youzan\SDK;

use Youzan\SDK\Foundation\Foundation;

/**
 *
 *
 * Class      Youzan
 *
 * @license   MIT
 * @resource  Youzan
 * @package   Youzan\SDK
 * @author    Stevin.john
 * @email     stevin.john@qq.com
 *
 * @property \Youzan\SDK\Api                $api
 * @property \Youzan\SDK\AccessToken        $access_token
 * @property \Youzan\SDK\Push               $push
 */
class Youzan extends Foundation
{

    const PERSONAL = 'PERSONAL';

    const PLATFORM = 'PLATFORM';

    const TOOL = 'TOOL';

    protected $providers = [
        YouzanServiceProvider::class
    ];

    /**
     * @param $kdtId
     * @return Youzan
     */
    public function setKdtId($kdtId)
    {
        $this->access_token->setKdtId($kdtId);

        return $this;
    }

    /**
     * API请求
     *
     * @param $method
     * @param array $params
     * @param string $version
     * @param array $files
     * @return array
     */
    public function request($method, $params = [], $files = [], $version = '3.0.0')
    {
        return $this->api->request($method, $params, $version, $files);
    }

}
