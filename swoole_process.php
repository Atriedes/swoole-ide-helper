<?php

class swoole_process
{
    /**
     * @var int
     */
    public $pipe;

    /**
     * @var int
     */
    public $pid;

    /**
     * @param callable $callback
     * @param bool|false $redirect_stdin_stdout
     * @param bool|true $create_pipe
     */
    public function __construct(callable $callback, $redirect_stdin_stdout = false, $create_pipe = true) {}

    /**
     * @param string $data
     * @return int
     */
    public function write($data) {}

    /**
     * @param int $buffer_len
     * @return string
     */
    public function read($buffer_len = 8192) {}

    /**
     * @param int $code
     * @return int
     */
    public function _exit($code = 0) {}

    /**
     * @param string $file
     * @param array $params
     * @return bool
     */
    public function exec($file, array $params) {}

    /**
     * @return false | array
     */
    public function wait() {}

    /**
     * @param bool|false $nochdir
     * @param bool|false $noclose
     */
    public function daemon($nochdir = false, $noclose = false) {}

    /**
     * @param int $msgkey
     * @param int $mode
     */
    public function useQueue($msgkey = -1, $mode = 2) {}

    /**
     * @param $data
     */
    public function push($data) {}

    /**
     * @param int $maxsize
     * @return string
     */
    public function pop($maxsize = 8192) {}

    /**
     * @param int $pid
     * @param int $signal
     */
    public function kill($pid, $signal = SIGTERM) {}

    /**
     * @param int $signo
     * @param callable $callback
     */
    public function signal($signo, callable $callback) {}

    /**
     * start process
     *
     * @return int
     */
    public function start() {}

    /**
     * set process name
     *
     * @param string $process_name
     */
    public function name($process_name) {}
}
