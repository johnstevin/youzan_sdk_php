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
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->setupConfig($this->app);
        $this->setupMigrations($this->app);
    }

    /**
     *
     * setupConfig
     *
     * @param Application $app
     */
    protected function setupConfig(Application $app)
    {
        $this->mergeConfigFrom(dirname(__DIR__).'/config/youzan.php', 'youzan');
    }

    /**
     *
     * setupMigrations
     *
     * @param Application $app
     */
    protected function setupMigrations(Application $app)
    {

    }

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
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

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