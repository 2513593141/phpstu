<?php
require_once 'session.php';
require_once 'conn.php';
mysql_query("set names 'utf8'");

$gly_num=mysql_num_rows(mysql_query("select * from xyxxb "));
$sql = "SELECT id,xybm,xymc FROM xyxxb";
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
<form action="xy_search.php" method="post"> 
<input enctype="multipart/form-data" placeholder="请输入学院名称"  name="xymc" maxlength="8"/>
<input type="submit" value="查询" id="btn_search" >
</form>
<br>
<br>
<table id="customers">
<tr>
  <th>学院编码</th>
  <th>学院名称</th>

  <th>操作</th>

</tr>
<?php    while($row = mysql_fetch_array($result)) {?>
		<tr>
		
			<td align="center"><?php echo  $row["xybm"] ?></td>
			<td align="center"><?php echo  $row["xymc"] ?></td>


			<td align="center">
			<div>
			<form action='xy_del.php' method="post">
                <input type='hidden' name='xymc' value=<?php echo $row["xymc"]?>>
                <input type='submit' value='删除'>
             </form>
             </div>
             <div>
                <form action='xy_update.php' method="post">
                <input type="hidden" name='id' value=<?php echo $row["id"]?>>
                <input type='hidden' name='xybm' value=<?php echo $row["xybm"]?>>
                <input type='hidden' name='xymc' value=<?php echo $row["xymc"]?>>

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