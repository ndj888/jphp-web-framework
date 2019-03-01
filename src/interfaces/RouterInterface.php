<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/1
 * Time: 11:27
 */

namespace jPHPWeb\interfaces;


/**
 * jphp router interface
 * Class RouterInterface
 * @package jPHPWeb\interfaces
 */
interface RouterInterface
{

    /**
     * bind a router to jphp server
     * @param string $routerName
     * @param string $method
     * @param \Closure $fun | param HttpServerRequest $req HttpServerResponse $res
     * @return mixed
     */
    public static function bind(string $routerName , string $method , \Closure $fun);

}