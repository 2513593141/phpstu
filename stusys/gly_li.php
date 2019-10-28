<?php
require_once 'session.php';
require_once 'conn.php';
mysql_query("set names 'utf8'");

$gly_num=mysql_num_rows(mysql_query("select * from glyxxb "));
$sql = "SELECT id,zh,mm,js FROM glyxxb";
$result=mysql_query($sql);


if ($gly_num > 0) {
    // 输出数据
    ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"> 
<title>学院列表</title>
<style>
#customers
{
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	width:100%;
	border-collapse:collapse;
}
#customers td, #customers th 
{
	font-size:1em;
	border:1px solid #000000;
	padding:3px 7px 2px 7px;
}
#customers th 
{
	font-size:1.1em;
	text-align:left;
	padding-top:5px;
	padding-bottom:4px;
	background-color:#D8D8D8;
	color:#ffffff;
}
#customers tr.alt td 
{
	color:#000000;
	background-color:#EAF2D3;
}
div{
	display:inline-block;
}
</style>
</head>

<body>
 <h3>查询管理员信息</h3>
<form action="gly_search.php" method="post"> 
<input enctype="multipart/form-data" placeholder="请输入管理员ID"  name="glyid" maxlength="8"/>
<input type="submit" value="查询" id="btn_search" >
</form>
<br>
<br>
<table id="customers">
<tr>
  <th>ID</th>
  <th>账号</th>
  <th>密码</th>
  <th>角色</th>
  <th>操作</th>

</tr>
<?php    while($row = mysql_fetch_array($result)) {?>
		<tr>
			<td align="center"><?php echo  $row["id"] ?></td>
			<td align="center"><?php echo  $row["zh"] ?></td>
			<td align="center"><?php echo  $row["mm"] ?></td>
			<td align="center"><?php echo  $row["js"] ?></td>
			<td align="center">
			<div>
			<form action='gly_del.php' method="post">
                <input type='hidden' name='id' value=<?php echo $row["id"]?>>
                <input type='submit' value='删除'>
             </form>
             </div>
             <div>
                <form action='gly_update.php' method="post">
                <input type='hidden' name='id' value=<?php echo $row["id"]?>>
                <input type='hidden' name='zh' value=<?php echo $row["zh"]?>>
                <input type='hidden' name='mm' value=<?php echo $row["mm"]?>>
                <input type='hidden' name='js' value=<?php echo $row["js"]?>>
                <input type='submit' value='更新'>
                </form>
                </div>

             </td>
		</tr>
 											<?php }       
    
} else {
    echo "0 结果";
}

mysql_close($conn);
?>

</table>
</body>
</html>