<?php
//使用define函数定义数据库服务器地址、用户名和密码常量
define("HOST","localhost");
define("USER","root");
define("PASSWD","123456");
//使用mysql_connect()函数，连接数据服务器
$conn=mysql_connect(HOST,USER,PASSWD);
//如果数据库连接失败，抛出错误信息
if(!$conn)
{
	die('Could not connect:' .mysql_error());
}
//选择所要操作的数据库
$dbselect=mysql_select_db("stusys",$conn);
//如果数据库选择失败，抛出错误信息
if(!$dbselect)
{
	die('Can\'t use DataBase:' .mysql_error());
}
//设置编码为utf8
mysql_query("set names 'utf8'");
?>