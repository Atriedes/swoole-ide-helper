<?php
/**
 * Swoole IDE Helper
 */


/**
 * @param swoole_server $server
 * @param $arguments
 */
function swoole_server_set(swoole_server $server, array $arguments) {
}


/**
 * @param string $host
 * @param int $port
 * @param int $mode
 * @param int $sock_type
 */
function swoole_server_create($host, $port, $mode = SWOOLE_PROCESS, $sock_type = SWOOLE_SOCK_TCP) {
}


/**
 * @param \swoole_server $server
 * @param string $host
 * @param int $port
 * @return void
 */
function swoole_server_addlisten(swoole_server $server, $host = '127.0.0.1', $port = 9502) {
}


/**
 * @param swoole_server $server
 * @param int $interval
 * @return bool
 */
function swoole_server_addtimer(swoole_server $server, $interval) {
}


/**
 * @param swoole_server  $server
 * @param string $event_name
 * @param callable $event_callback_function
 * @return bool
 */
function swoole_server_handler(swoole_server $server, $event_name, callable $event_callback_function) {
}


/**
 * @param swoole_server $serv
 * @return bool
 */
function swoole_server_start(swoole_server $serv) {
}


/**
 * @param swoole_server $server
 * @return void
 */
function swoole_server_reload(swoole_server $server) {
}


/**
 * @param swoole_server $server
 * @param int $fd
 * @param int $from_id
 * @return bool
 */
function swoole_server_close(swoole_server $server, $fd, $from_id = 0) {
}


/**
 * @param swoole_server $server
 * @param int $fd
 * @param string $data
 * @param int $from_id
 * @return bool
 */
function swoole_server_send(swoole_server $server, $fd, $data, $from_id = 0) {
}


/**
 * @param swoole_server $server
 * @param int $fd
 * @return array on success or false on failure.
 */
function swoole_connection_info(swoole_server $server, $fd) {
}


/**
 * @param swoole_server $server
 * @param int $start_fd
 * @param int $pagesize
 * @return array on success or false on failure
 */
function swoole_connection_list(swoole_server $server, $start_fd = 0, $pagesize = 10) {
}


/**
 * @param string $name
 * @return void
 */
function swoole_set_process_name($name) {
}


/**
 * @param int $sock
 * @param callable $read_callback
 * @param callable $write_callback
 * @param $flag
 * @return bool
 */
function swoole_event_add($sock, callable $read_callback = null, callable $write_callback = null, $flag = null) {
}

/**
 * @param $sock
 * @param $read_callback
 * @param null $write_callback
 * @param null $flag
 */
function swoole_event_set($sock, $read_callback = NULL, $write_callback = NULL, $flag = NULL) {
}

/**
 * @param int $sock
 * @return bool
 */
function swoole_event_del($sock) {
}


/**
 *
 * @return void
 */
function swoole_event_exit() {
}

/**
 * @param mixed  $socket
 * @param string $data
 */
function swoole_event_write($socket, $data){

}

/**
 * @param mysqli $db
 * @return int
 */
function swoole_get_mysqli_sock(\mysqli $db) {
}


/**
 * @param swoole_server $server
 * @param string $data
 * @return int $task_id
 */
function swoole_server_task(swoole_server $server, $data) {
}


/**
 * @param swoole_server  $server
 * @param string $response
 * @return void
 */
function swoole_server_finish(swoole_server $server, $response) {
}


/**
 * @param swoole_server $server
 * @param int $interval
 * @return void
 */
function swoole_server_deltimer(swoole_server $server, $interval) {
}


/**
 * @param swoole_server $server
 * @return void
 */
function swoole_server_shutdown(swoole_server $server) {
}


/**
 * @param string $task_data
 * @param float $timeout in second
 * @return string
 */
function swoole_server_taskwait($task_data, $timeout = 0.5) {
}

/**
 *
 * @return void
 */
function swoole_event_wait() {}

/**
 * @param $interval
 * @param $callback
 * @return int
 */
function swoole_timer_add($interval, $callback) {}

/**
 * @param int $ms in millisecond
 * @param callable $callback
 * @param $user_param
 * @return int
 */
function swoole_timer_after($ms, callable $callback, $user_param = null) {}

/**
 * @param int $interval in millisecond
 */
function swoole_timer_del($interval) {}

/**
 * @param int $timer_id
 * @return bool
 */
function swoole_timer_clear($timer_id) {}

/**
 * @param int $ms in millisecond
 * @param callable $callback
 * @param null $params
 * @return int
 */
function swoole_timer_tick($ms, callable $callback, $params = null) {}

/**
 * @return string
 */
function swoole_version() {
}

/**
 * @param int $errno
 */
function swoole_strerror($errno) {}

/**
 * @return int
 */
function swoole_errno() {}


/**
 * @return array
 */
function swoole_get_local_ip() {}


/**
 * @param string $filename
 * @param callable $callback
 */
function swoole_async_readfile($filename, callable $callback) {}

/**
 * @param string $filename
 * @param string $content
 * @param callable $callback
 */
function swoole_async_writefile($filename, $content, callable $callback) {}

/**
 * @param string $filename
 * @param callable $callback
 * @param int $trunk_size
 * @return bool
 */
function swoole_async_read($filename, callable $callback, $trunk_size = 8192) {}


/**
 * @param string $filename
 * @param string $content
 * @param int $offset
 * @param callable $callback
 *
 * @return bool
 */
function swoole_async_write($filename, $content, $offset, callable $callback = NULL) {}

/**
 * @param string $domain
 * @param callback $callback
 */
function swoole_async_dns_lookup($domain, callable $callback) {}

/**
 * @param array $read
 * @param array $write
 * @param array $error
 * @param float $timeout
 */
function swoole_client_select(array &$read, array &$write, array &$error, $timeout) {}


/**
 * swoole_http_server constant
 */
define('HTTP_GLOBAL_ALL', 1);
define('HTTP_GLOBAL_GET', 2);
define('HTTP_GLOBAL_POST', 4);
define('HTTP_GLOBAL_COOKIE', 8);

/**
 * swoole_websocket_server constant
 */
define('WEBSOCKET_OPCODE_TEXT', 1);

/**
 * swoole common constant
 */
define('SWOOLE_VERSION', '1.7.7'); //当前Swoole的版本号

/**
 * swoole_server constant
 */
define('SWOOLE_BASE', 1);
define('SWOOLE_THREAD', 2);
define('SWOOLE_PROCESS', 3);
define('SWOOLE_PACKET', 0x10);

/**
 * swoole_client constant
 */
define('SWOOLE_SOCK_TCP', 1);
define('SWOOLE_SOCK_TCP6', 3);
define('SWOOLE_SOCK_UDP', 2);
define('SWOOLE_SOCK_UDP6', 4);
define('SWOOLE_SOCK_UNIX_DGRAM', 5);
define('SWOOLE_SOCK_UNIX_STREAM', 6);

define('SWOOLE_SSL', 5);

define('SWOOLE_TCP', 1);
define('SWOOLE_TCP6', 2);
define('SWOOLE_UDP', 3);
define('SWOOLE_UDP6', 4);
define('SWOOLE_UNIX_DGRAM', 5);
define('SWOOLE_UNIX_STREAM', 6);

define('SWOOLE_SOCK_SYNC', 0);
define('SWOOLE_SOCK_ASYNC', 1);

define('SWOOLE_SYNC', 0);
define('SWOOLE_ASYNC', 1);

/**
 * swoole_lock constant
 */
define('SWOOLE_FILELOCK', 2);
define('SWOOLE_MUTEX', 3);
define('SWOOLE_RWLOCK', 1);
define('SWOOLE_SPINLOCK', 5);
define('SWOOLE_SEM', 4);

define('SWOOLE_EVENT_WRITE', 1);
define('SWOOLE_EVENT_READ', 2);
