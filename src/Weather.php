<?php

namespace Insua\Weather;

class Weather
{
    protected $key;

    public function __construct(string $key)
    {
        $this->key = $key;
    }
}