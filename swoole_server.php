<?php

/**
 * Class swoole_server
 */
class swoole_server
{
    /**
     * @var array
     */
    public $setting = [];

    /**
     * @var int
     */
    public $master_pid;

    /**
     * @var int
     */
    public $manager_pid;

    /**
     * @var int
     */
    public $worker_id;

    /**
     * @var int
     */
    public $worker_pid;

    /**
     * @var bool
     */
    public $task_worker;

    /**
     * @var array
     */
    public $connections;

    /**
     * @param string $host
     * @param string $port
     * @param int $mode SWOOLE_PROCESS|SWOOLE_BASE|SWOOLE_THREAD
     * @param int $sock_type SWOOLE_SOCK_TCP|SWOOLE_SOCK_TCP6|SWOOLE_SOCK_UDP|SWOOLE_SOCK_UDP6
     */
    public function __construct($host, $port, $mode = SWOOLE_PROCESS, $sock_type = SWOOLE_SOCK_TCP) {}

    /**
     * register callback for specified event
     *
     * @param string $event
     * @param callable $callback
     */
    public function on($event, callable $callback) {}

    /**
     * set server configuration
     *
     * @param array $setting
     */
    public function set(array $setting) {}

    /**
     * start swoole server
     *
     * @return bool
     */
    public function start() {}

    /**
     * send data to client
     *
     * @param int $fd
     * @param string $data
     * @param int $from_id
     * @return bool
     */
    public function send($fd, $data, $from_id = 0) {}

    /**
     * send data to specific ip and port
     *
     * @param string $ip
     * @param int $port
     * @param string $data
     * @param bool|false $ipv6
     * @return bool
     */
    public function sendto($ip, $port, $data, $ipv6 = false) {}

    /**
     * close specified connection
     *
     * @param int $fd
     * @param int $from_id
     * @return bool
     */
    public function close($fd, $from_id = 0) {}

    /**
     * run blocking task
     *
     * @param mixed $task_data
     * @param float $timeout in second, default is 0.5s = 500 ms
     * @param int $dst_worker_id
     * @return string
     */
    public function taskwait($task_data, $timeout = 0.5, $dst_worker_id = -1) {}

    /**
     * run non-blocking (async) task
     *
     * @param mixed $data
     * @param int $dst_worker_id
     * @return bool
     */
    public function task($data, $dst_worker_id = -1) {}

    /**
     * send message to specified worker
     *
     * @param string $message
     * @param $dst_worker_id
     * @return true
     */
    public function sendMessage($message, $dst_worker_id) {}

    /**
     * @param string $task_data
     */
    public function finish($task_data) {}

    /**
     * @param bool|true $if_close_connection
     */
    public function heartbeat($if_close_connection = true) {}

    /**
     * get connection information for specified id
     *
     * @param int $fd
     * @param int $from_id
     * @return array | bool
     */
    public function connection_info($fd, $from_id = -1) {}

    /**
     * get connection list
     *
     * @param int $start_fd
     * @param int $pagesize
     * @return array | bool
     */
    public function connection_list($start_fd = -1, $pagesize = 100) {}

    /**
     * reload worker
     *
     * @return bool
     */
    public function reload() {}

    /**
     * kill worker
     *
     * @return bool
     */
    public function shutdown() {}

    /**
     * add listener to swoole_server
     * @param string $host
     * @param int $port
     * @param int $type
     */
    public function addListener($host, $port, $type = SWOOLE_SOCK_TCP) {}

    /**
     * get server statistics
     *
     * @return array
     */
    public function stats() {}

    /**
     * run callback after specified time
     *
     * @param int $after_time in milisecond
     * @param callable $callback
     * @param null $param
     */
    public function after($after_time, callable $callback, $param = null) {}

    /**
     * listen to specified port, host and socket type
     *
     * @param string $host
     * @param int $port
     * @param int $type
     */
    public function listen($host, $port, $type = SWOOLE_SOCK_TCP) {}

    /**
     * add your own process, it will automatically ran after server start
     *
     * @param swoole_process $process
     */
    public function addProcess(swoole_process $process) {}

    /**
     * @param int $interval in millisecond
     */
    public function addtimer($interval) {}

    /**
     * @param int $interval in millisecond
     */
    public function deltimer($interval) {}

    /**
     * run periodic task on specified interval time
     *
     * @param int $interval in millisecond
     * @param callable $callback
     * @param null $param
     */
    public function tick($interval, callable $callback, $param = null) {}

    /**
     * @param int $id
     */
    public function clearAfter($id) {}

    /**
     * function alias of on
     * @param string $event
     * @param callable $callback
     * @return bool
     */
    public function handler($event, callable $callback) {}

    /**
     * send file to specified connection id
     * @param int $fd
     * @param string $filename
     * @return bool
     */
    public function sendfile($fd, $filename) {}

    /**
     * @param int $fd
     * @param int $uid
     * @return bool
     */
    public function bind($fd, $uid) {}
}
