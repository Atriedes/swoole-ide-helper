<?php

/**
 * Class swoole_http_request
 */
class swoole_http_request
{
    /**
     * @var array
     */
    public $get;

    /**
     * @var array
     */
    public $post;

    /**
     * @var array
     */
    public $header;

    /**
     * @var array
     */
    public $server;

    /**
     * @var array
     */
    public $cookie;

    /**
     * @var array
     */
    public $files;

    /**
     * @var int
     */
    public $fd;

    /**
     * get raw request body
     */
    public function rawContent() {}
}
