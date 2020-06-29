<?php

namespace App\Model;

use Horizom\Database\Table;

class User
{
    /**
     * @return bool object
     */
    public static function login(string $username, string $password)
    {
        $table = new Table("users");

        return $table->select("*")->where("ussername = $username AND password = $password")->toArray()->find();
    }

    /**
     * @return bool object
     */
    public static function signup(array $data, int $userId)
    {
        $table = new Table("users");

        return $table->update($data)->where("id = $userId")->save();
    }
}
