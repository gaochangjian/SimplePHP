<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/25
 * Time: 4:40 PM
 */

namespace Simple\core\db;


use Simple\core\db\drver\Mysql;

class DBFactory
{
    private static $config = [
        'pwd' => 'Aa123456',
        'port' => '3306',
        'host' => '127.0.0.1',
        'user' => 'root',
        'dbname' => 'o2o',
        'type'  => 'mysql'
    ];
    public static function create_db($type)
    {
        switch ($type) {
            case 'mysql':
                return Mysql::getInstence(self::$config);
            default:
                return null;
        }

    }
}