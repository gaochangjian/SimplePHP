<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/25
 * Time: 4:22 PM
 */

namespace Simple\core;


use Simple\core\db\drver\Mysql;

class Db
{
    public static function name($table_name)
    {
        return $table_name;
        //$sql = ''
    }

    public function insert(array $arr)
    {
        //array_keys($arr)；
//        foreach ($arr as $k => $v) {
//            $value = implude()
//        }
        //$sql = 'INSERT INTO '
        return $this;
    }
}
Db::name('test')->insert(['name' => 1]);