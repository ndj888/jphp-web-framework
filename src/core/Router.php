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
use php\http\HttpServerRequest;
use php\http\HttpServerResponse;

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


    public static function bind(string $routerName, string $method, $res)
    {
        // TODO: Implement bind() method.
        if ( is_callable($res)){
            self::$server->route($method, $routerName, $res);
        }else{
            // controller exec
            self::$server->router($method , $routerName , function(HttpServerRequest $req , HttpServerResponse $res){

            });
        }
    }

    public function loadRouterDriver(){

    }

}