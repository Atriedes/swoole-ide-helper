<?php

/**
 * Class swoole_client
 */
class swoole_client
{
    /**
     * @var int
     */
    public $errCode;

    /**
     * socket stream resource
     * @var int
     */
    public $sock;

    /**
     * @param int $sock_type SWOOLE_SOCK_TCP|SWOOLE_SOCK_TCP6|SWOOLE_SOCK_UDP|SWOOLE_SOCK_UDP6
     * @param int $sync_type SWOOLE_SOCK_SYNC|SWOOLE_SOCK_ASYNC
     */
    public function __construct($sock_type, $sync_type = SWOOLE_SOCK_SYNC) {}

    /**
     * connect to remote server
     *
     * @param string $host
     * @param string $port
     * @param float $timeout in second default is 0.1s = 100 ms
     * @param int $flag
     */
    public function connect($host, $port, $timeout = 0.1, $flag = 0) {}

    /**
     * Send data to remote server
     *
     * return false if fail and set swoole_client->errCode for error code
     * otherwise return true
     *
     * @param string $data
     * @return bool
     */
    public function send($data) {}

    /**
     * send data to specific remote server
     *
     * @param string $ip
     * @param int $port
     * @param string $data
     */
    public function sendto($ip, $port, $data) {}

    /**
     * receive data from remote server
     *
     * if $waitall set true, you have to set correct size
     * otherwise it will wait receive data size = $size
     *
     * @param int $size
     * @param bool $waitall
     * @return string
     */
    public function recv($size = 65535, $waitall = false) {}

    /**
     * close current connection
     *
     * @return bool
     */
    public function close() {}

    /**
     * register callback for specified event
     *
     * @param string $event
     * @param callable $callback
     */
    public function on($event, callable $callback) {}

    /**
     * check if already connected to server or not
     *
     * @return bool
     */
    public function isConnected() {}

    /**
     * return current connection host:port information
     * return false if fail
     *
     * @return bool | array
     */
    public function getsockname() {}

    /**
     * @return bool | array
     */
    public function getpeername() {}
}
