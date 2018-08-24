<?php
/**
 * Created by PhpStorm.
 * User: stevin
 * Date: 2018/7/9
 * Time: 下午4:21
 */

namespace Youzan\SDK;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Container\Container as Application;
use Illuminate\Foundation\Application as LaravelApplication;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 *
 *
 * Class      YouzanServiceProvider
 *
 * @license   MIT
 * @resource  YouzanServiceProvider
 * @package   Youzan\SDK
 * @author    Stevin.john
 * @email     stevin.john@qq.com
 */
class YouzanServiceProvider implements ServiceProviderInterface
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register(Container $pimple)
    {
        $this->registerBase($pimple);
    }

    /**
     *
     * registerBase
     *
     * @param $pimple
     */
    protected function registerBase($pimple)
    {
        $pimple['access_token'] = function ($pimple) {
            $accessToken = new AccessToken(
                $pimple['config']['client_id'],
                $pimple['config']['client_secret'],
                $pimple['config']->get('kdt_id')
            );

            $accessToken->setType($pimple['config']['type']);
            $accessToken->setCache($pimple['config']['cache']);

            return $accessToken;
        };

        $pimple['api'] = function ($pimple) {
            return new Api($pimple['access_token']);
        };

        $pimple['push'] = function ($pimple) {
            return new Push(
                $pimple['config']['client_id'],
                $pimple['config']['client_secret'],
                $pimple['request']
            );
        };
    }

}