<?php

namespace Myblog\Core;

use Myblog\Utils\Singleton;
use Myblog\Exceptions\NotFoundException;

class Config extends Singleton
{
    private $data;

    protected function __construct() 
    {
        $json = file_get_contents(__DIR__ . '/../../config/app.json');
        $this->data = json_decode($json, true);
    }
    
    public function get($key) 
    {
        if (!isset($this->data[key])) {
           throw new NotFoundException("Key $key not in app.json");
        }
        return $this->data[$key];
    }
}

?>