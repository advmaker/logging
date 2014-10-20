<?php

interface WriterInterface
{
    /**
     * @param $msg
     * @return bool
     */
    public function write($msg);
}