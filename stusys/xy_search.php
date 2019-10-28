<!DOCTYPE html>

<html lang="en">

<head>

 <meta charset="UTF-8">

 <title>学院信息管理</title>
 <script>

 </script>
</head>
<body>
 <h3>查询学院信息</h3>
<form action="#" method="post"> 
<input enctype="multipart/form-data" placeholder="请输入学院名称"  name="xymc" maxlength="8"/>
<input type="submit" value="查询" id="btn_search" >
<a href='xy_list.php'>学院列表</a>
</form>


 <table width="500" border="1">
  <tr>
   <th>学院编码</th>
   <th>学院名称</th>
  </tr>
  <?php

//  1. 链接数据库
//使用define函数定义数据库服务器地址、用户名和密码常量
  define("HOST","localhost");
  define("USER","root");
  define("PASSWD","123456");
  //使用mysql_connect()函数，连接数据服务器
  $conn=mysql_connect(HOST,USER,PASSWD);
  //选择所要操作的数据库
  $dbselect=mysql_select_db("stusys",$conn);
  mysql_query("set names 'utf8'");

  //2.执行sql
  $xymc = $_POST['xymc'];
  

  $sql_select = "select * from xyxxb where xymc ='".$xymc."'";
  
   
  
  
  $result=mysql_query($sql_select);
  $rows=mysql_fetch_array($result);
//   echo $row;
//    var_dump($result);
   
  //3.data 解析
  $num=mysql_num_rows($result);
  if ($num>0){
      echo "<tr>";
      echo "<th>{$rows['xybm']}</th>";
      echo "<th>{$rows['xymc']}</th>";


      echo "</tr>";}
      mysql_close($conn);
  ?>
 </table>

</body>
</html>