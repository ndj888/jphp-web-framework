<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/1
 * Time: 11:48
 */

namespace jPHPWeb\bean;


use com_jjcbs\lib\SimpleRpc;

class ServerConfigBean extends SimpleRpc
{
    protected $listen = '0.0.0.0';
    protected $port = '80';
    protected $minThreadNum = 5;
    protected $maxThreadNum = 20;
    // ms
    protected $timeOut = 2000;
    // log driver
    protected $logDriver;
    // if system exception or error the handler
    protected $errorDriver;

    /**
     * @return string
     */
    public function getListen(): string
    {
        return $this->listen;
    }

    /**
     * @param string $listen
     */
    public function setListen(string $listen): void
    {
        $this->listen = $listen;
    }

    /**
     * @return string
     */
    public function getPort(): string
    {
        return $this->port;
    }

    /**
     * @param string $port
     */
    public function setPort(string $port): void
    {
        $this->port = $port;
    }

    /**
     * @return int
     */
    public function getMinThreadNum(): int
    {
        return $this->minThreadNum;
    }

    /**
     * @param int $minThreadNum
     */
    public function setMinThreadNum(int $minThreadNum): void
    {
        $this->minThreadNum = $minThreadNum;
    }

    /**
     * @return int
     */
    public function getMaxThreadNum(): int
    {
        return $this->maxThreadNum;
    }

    /**
     * @param int $maxThreadNum
     */
    public function setMaxThreadNum(int $maxThreadNum): void
    {
        $this->maxThreadNum = $maxThreadNum;
    }

    /**
     * @return int
     */
    public function getTimeOut(): int
    {
        return $this->timeOut;
    }

    /**
     * @param int $timeOut
     */
    public function setTimeOut(int $timeOut): void
    {
        $this->timeOut = $timeOut;
    }

    /**
     * @return mixed
     */
    public function getLogDriver()
    {
        return $this->logDriver;
    }

    /**
     * @param mixed $logDriver
     */
    public function setLogDriver($logDriver): void
    {
        $this->logDriver = $logDriver;
    }

    /**
     * @return mixed
     */
    public function getErrorDriver()
    {
        return $this->errorDriver;
    }

    /**
     * @param mixed $errorDriver
     */
    public function setErrorDriver($errorDriver): void
    {
        $this->errorDriver = $errorDriver;
    }


}