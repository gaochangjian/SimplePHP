<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/25
 * Time: 3:48 PM
 */

namespace Simple\core\db\drver;


use PDO;
use Simple\core\db\DBInterface;

class Mysql implements DBInterface
{
    private $dbname;
    private $host;
    private $port;
    private $type;
    private $user;
    private $pwd;
    private static $instance;
    private $mysql;
    private function __construct($config)
    {

        $this->dbname = $config['dbname'];
        $this->host   = $config['host'];
        $this->port   = $config['port'];
        $this->user   = $config['user'];
        $this->type   = $config['type'];
        $this->pwd    = $config['pwd'];
        $this->mysql = new PDO($this->type.':host='.$this->host.';dbname='.$this->dbname.'', $this->user, $this->pwd);
    }
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    public static function getInstence(array $config)
    {
        if (!self::$instance instanceof self) {
            return $instance = new self($config);
        }
        return self::$instance;
    }

    //新增和删除，用的方法
    public function exec($sql)
    {
        return $count = $this->mysql->exec($sql);
        // TODO: Implement exec() method.
    }

    public function query()
    {
        // TODO: Implement query() method.
    }

    public function insert()
    {
        // TODO: Implement insert() method.
    }

    public function delete()
    {
        // TODO: Implement delete() method.
    }

    public function update()
    {
        // TODO: Implement update() method.
    }
}