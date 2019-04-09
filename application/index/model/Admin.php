<?php
namespace app\index\model;
/**
 * Created by PhpStorm.
 * User: bert.he
 * Date: 2019/4/8
 * Time: 15:59
 */

use think\Db;
use think\Model;
class Admin extends Model
{
    protected $table = "admin";
    function insertData($data)
    {
        //dump($data);
        //echo $this->table;exit;
        //$list = Db::table($this->table)->select();
        //dump($list);
        //$id = Db::table($this->table)->insertGetId($data);
        //echo Db::table($this->table)->getLastSql();
        //return $id;
//        Db::table($this->table)->insert($data);
//        echo Db::table($this->table)->getLastSql();
//        return Db::table($this->table)->getLastInsID();
        return Db::table($this->table)->insertGetId($data);
    }
}