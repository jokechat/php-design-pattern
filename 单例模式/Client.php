<?php
/**
 * @desc 单例模式
 * @author jokechat
 * @date 2016年11月24日12:43:24
 */
class Client
{
  // 私有化静态属性
  private static $_instance = null ;
  public $step = 0;

  protected function __construct()
  {
    $this->step++;
    // 数据库连接取得对象
  }

  // 静态方法产生对象
  public static function getInstance()
  {
    // 对象不存在则new一个对象
    if(self::$_instance === null)
    {
      self::$_instance = new Client();
    }
    return self::$_instance;
  }

}

 ?>
