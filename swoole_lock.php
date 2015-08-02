<?php

/**
 * Class swoole_lock
 */
class swoole_lock
{
    /**
     * @param $type
     * @param null $lockfile
     */
    public function __construct($type, $lockfile = null) {}

    public function lock() {}

    public function trylock() {}

    public function unlock() {}

    public function lock_read() {}

    public function trylock_read() {}
}
