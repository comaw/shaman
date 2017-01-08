<?php


namespace system;


class Core
{
    protected $config = [];

    public function __construct(array $config) {
        $this->config = $config;
    }

    public function run(){
        var_dump($this->config);
    }
}