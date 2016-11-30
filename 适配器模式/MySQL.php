<?php
/**
 *mysql 实现IDB数据库操作接口 达到规范化目的
 */
class MySQL implements IDB
{

  public function __construct($db_obj)
  {
    $this->db = $db_obj;
  }

  public function select()
  {
    $this->db->select();
  }

  public function insert()
  {
    $this->db->insert();
  }
  
  public function update()
  {
    $this->db->delete();
  }
}

?>
