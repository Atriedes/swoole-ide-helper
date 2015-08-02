<?php

/**
 * Class swoole_buffer
 */
class swoole_buffer
{
    /**
     * @param int $size
     */
    public function __construct($size = 128) {}

    /**
     * append data to memory
     *
     * @param string $data
     * @return int
     */
    public function  append($data) {}

    /**
     * @param int $offset
     * @param int $length
     * @param bool $remove
     */
    public function  substr($offset, $length = -1, $remove = false) {}

    /**
     * clear memory buffer
     */
    public function  clear() {}

    /**
     * expand memory buffer size
     *
     * @param int $new_size
     */
    public function  expand($new_size) {}


    /**
     * write data to memory
     *
     * @param int $offset
     * @param string $data
     */
    public function  write($offset, $data) {}
}
