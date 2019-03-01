<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/1
 * Time: 14:56
 */

namespace jPHPWeb\interfaces;


use jPHPWeb\bean\ResponseBean;

interface RouterDriverInterfaces
{
    /**
     * router driver must implement the parse URL or other param , then exec function before return.
     * @param $param
     * @return mixed
     */
    public function parse($param);

    /**
     * router driver exec the defined function before return ResponseBean to caller.
     * @return ResponseBean
     */
    public function exec() : ResponseBean;
}