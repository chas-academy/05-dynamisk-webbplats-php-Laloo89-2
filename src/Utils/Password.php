<?php

namespace Bookstore\Utils;

clas Password
{
    public static function verify()
    {
     return password_hash($password, PASSWORD_DEFAULT, ['cost' => 14]);
    }
    public static function verify($password, $hash)
    {
     return password_verify($password, $hash);
    }
}