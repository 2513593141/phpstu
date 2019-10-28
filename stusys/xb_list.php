<!DOCTYPE html>

<html lang="en">

<head>

 <meta charset="UTF-8">

 <title>学生信息管理</title>
 <script>

 </script>
</head>
<body>
 <h3>浏览学生信息</h3>
<form action="#" method="post"> 
<input enctype="multipart/form-data" placeholder="请输入管理员ID"  name="glyid" maxlength="8"/>
<input type="submit" value="查询" id="btn_search" >
</form>


 <table width="500" border="1">
  <tr>
   <th>ID</th>
   <th>账号</th>
   <th>密码</th>
   <th>角色</th>
   <th>操作</th>
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
  $glyid = $_POST['glyid'];
  

  $sql_select = "select * from glyxxb where id ='".$glyid."'";
  
   
  
  
  $result=mysql_query($sql_select);
  $rows=mysql_fetch_array($result);
//   echo $row;
//    var_dump($result);
   
  //3.data 解析
  $num=mysql_num_rows($result);
  if ($num>0){
      echo "<tr>";
      echo "<th>{$rows['id']}</th>";
      echo "<th>{$rows['zh']}</th>";
      echo "<th>{$rows['mm']}</th>";
      echo "<th>{$rows['js']}</th>";
      echo "<td>
     <a href='#'>修改</a>
     <a href='#'>删除</a>
    </td>";
      echo "</tr>";}
//   foreach ($rows as $row ) {
//    echo "<tr>";
//    echo "<th>{$rows['id']}</th>";
//    echo "<th>{$rows['zh']}</th>";
//    echo "<th>{$rows['mm']}</th>";
//    echo "<th>{$rows['js']}</th>";
//    echo "<td>
//      <a href='#'>修改</a>
//      <a href='#'>删除</a>
//     </td>";
//    echo "</tr>";}
  ?>
 </table>

</body>
</html>