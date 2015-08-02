<?php

/**
 * Class swoole_table
 */
class swoole_table
{
    const TYPE_INT = 1;
    const TYPE_STRING = 2;
    const TYPE_FLOAT = 3;

    /**
     * @param mixed $key
     * @return array
     */
    public function get($key){}

    /**
     * @param mixed $key
     * @param array $array
     */
    public function set($key, array $array) {}

    /**
     * @param mixed $key
     * @return bool
     */
    public function del($key){}

    /**
     * @param string $key
     * @param string $column
     * @param int $incrby
     * @return bool
     */
    public function incr($key, $column, $incrby = 1) {}

    /**
     * @param string $key
     * @param string $column
     * @param int $decrby
     */
    public function decr($key, $column, $decrby = 1) {}

    /**
     * @param string $name
     * @param int $type
     * @param int $len
     */
    public function column($name, $type, $len = 4) {}

    /**
     * @return bool
     */
    public function create(){}

    /**
     * @return bool
     */
    public function lock(){}

    /**
     * @return bool
     */
    public function unlock(){}
}
