<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/1
 * Time: 13:51
 */

namespace jPHPWeb\bean;


use com_jjcbs\lib\SimpleRpc;

/**
 * Router Config bean
 * Class RouterConfigBean
 * @package jPHPWeb\bean
 */
class RouterConfigBean extends SimpleRpc
{
    /**
     * @var array [ '/add' => xxx::class]
     */
    protected $routerTable;
    /**
     * @var array any ['/error' => error::class]
     */
    protected $errorPage;

    /**
     * @return array
     */
    public function getRouterTable(): array
    {
        return $this->routerTable;
    }

    /**
     * @param array $routerTable
     */
    public function setRouterTable(array $routerTable): void
    {
        $this->routerTable = $routerTable;
    }

    /**
     * @return array
     */
    public function getErrorPage(): array
    {
        return $this->errorPage;
    }

    /**
     * @param array $errorPage
     */
    public function setErrorPage(array $errorPage): void
    {
        $this->errorPage = $errorPage;
    }




}