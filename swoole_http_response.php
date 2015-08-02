<?php

/**
 * Class swoole_http_response
 */
class swoole_http_response
{
    /**
     * end request
     * @param string $data
     */
    public function end($data = '') {}

    /**
     * wite http chunk data
     * @param $data
     */
    public function write($data) {}

    /**
     * set http header
     *
     * @param $key
     * @param $value
     */
    public function header($key, $value) {}

    /**
     * set cookie
     *
     * @param string $key
     * @param string $value
     * @param int $expire
     * @param string $path
     * @param string $domain
     * @param bool $secure
     * @param bool $httponly
     */
    public function cookie($key, $value, $expire = 0, $path='/', $domain='', $secure=false, $httponly=false) {}

    /**
     * set http status
     * @param $code
     */
    public function status($code) {}

    /**
     * set gzip compression level
     * @param int  $level
     */
    public function gzip($level = 1) {}
}
