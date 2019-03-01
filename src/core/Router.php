<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/1
 * Time: 11:23
 */

namespace jPHPWeb\core;


use jPHPWeb\bean\RouterConfigBean;
use jPHPWeb\interfaces\RouterInterface;

class Router implements RouterInterface
{
    /**
     * @var HttpServer
     */
    protected static $server;
    /**
     * @var RouterConfigBean
     */
    protected static $routerConfig;

    /**
     * @param RouterConfigBean $routerConfig
     */
    public static function setRouterConfig(RouterConfigBean $routerConfig): void
    {
        self::$routerConfig = $routerConfig;
    }


    public static function loadRouterTable(){

    }


    public static function bind(string $routerName, string $method, \Closure $fun)
    {
        // TODO: Implement bind() method.
        self::$server->route($method , $routerName , $fun);
    }

}