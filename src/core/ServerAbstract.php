<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/1
 * Time: 13:37
 */

namespace jPHPWeb\core;


use jPHPWeb\bean\ServerConfigBean;
use php\http\HttpServer;

/**
 * the abstract server class
 * Class ServerAbstract
 * @package jPHPWeb\core
 */
abstract class ServerAbstract
{
    /**
     * @var ServerConfigBean
     */
    private static $serverConfig;
    /**
     * @var HttpServer
     */
    private static $server;

    public function setServerConfig(ServerConfigBean $serverConfigBean){
        $this::$serverConfig = $serverConfigBean;
    }


    /**
     * init http server
     */
    private function init(){
        self::$server = new HttpServer(
            self::$serverConfig->getListen(),
            self::$serverConfig->getPort()
        );
        self::$server->minThreads(self::$serverConfig->getMaxThreadNum());
        self::$server->maxThreads(self::$serverConfig->getMaxThreadNum());
        self::$server->threadIdleTimeout(self::$serverConfig->getTimeOut());
    }
    public function run() : void {

    }
}