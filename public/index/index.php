<?php

use Simple\core\db\DBFactory;

require_once '../../vendor/autoload.php';

$gao = new Simple\Test();
$sql = "INSERT INTO tb_test (test_name,age) VALUE('HAHA',1)";
$db = DBFactory::create_db('mysql');
var_dump($db->exec($sql));die;