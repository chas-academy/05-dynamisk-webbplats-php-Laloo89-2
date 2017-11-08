<?php
    namespace Myblog\Models;

    use Myblog\Core\Connection;

    abstract class AbstractModel
    {
        protected $db;

        public function __construct()
        {
            $this->db = Connection::getInstance()->handler;
        }
    }