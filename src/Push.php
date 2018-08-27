<?php

namespace Youzan\SDK;

use Symfony\Component\HttpFoundation\Request;
use Youzan\SDK\Exception\YouzanException;
use Youzan\SDK\Foundation\Log;

/**
 *
 *
 * Class      Push
 *
 * @license   MIT
 * @resource  Push
 * @package   Youzan\SDK
 * @author    Stevin.john
 * @email     stevin.john@qq.com
 */
class Push
{

    /**
     * @var Request
     */
    private $request;
    private $clientId;
    private $secret;

    public function __construct($clientId, $secret, Request $request)
    {
        $this->clientId = $clientId;
        $this->secret = $secret;
        $this->request = $request;
    }

    /**
     * @return array
     */
    public function parse()
    {
        $data = $this->request->getContent();
        
        $data = json_decode($data, true);
        
        echo json_encode(['code' => 0, 'msg' => 'success']);

        if ($data['test'] === true) {
            return;
        }

        $this->checkSign($data);

        $data['msg'] = json_decode(urldecode($data['msg']), true);

        Log::debug('Push data:', $data);

        return $data;
    }

    public function checkSign($data)
    {
        $sign = md5($this->clientId.$data['msg'].$this->secret);

        if($sign != $data['sign']){
            Log::error('Push checkSign error');
            throw new YouzanException('签名不正确');
        }
    }

}
