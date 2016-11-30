<?php

// 操作MySQL数据库
$mysql = new MySQL();
$mysql->select();
$mysql->insert();
$mysql->update();
$mysql->delete();


// 操作Oracle数据库
$oracle = new Oracle();
$oracle->select();
$oracle->insertOracle();
$oracle->update();
$oracle->delete();

?>
