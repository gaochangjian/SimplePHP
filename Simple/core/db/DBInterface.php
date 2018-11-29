<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/25
 * Time: 3:46 PM
 */

namespace Simple\core\db;


interface DBInterface
{
    public function exec($data);
    public function query();
    public function insert();
    public function delete();
    public function update();
}