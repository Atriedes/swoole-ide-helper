<?php

/**
 * Class swoole_websocket_server
 */
class swoole_websocket_server extends swoole_http_server
{
    /**
     * @param int $fd
     * @param string $data
     * @param bool|false $binary_data
     * @param bool|true $finish
     */
    public function push($fd, $data, $binary_data = false, $finish = true) {}
}
