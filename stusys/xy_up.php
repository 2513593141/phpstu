
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
  $xybm = $_POST['xybm'];
  $xymc = $_POST['xymc'];
  $id = $_POST['id'];
  echo $xybm;
  echo $xymc;

  $sql_update = "update xyxxb set xybm ='$xybm' , xymc ='$xymc' where id='$id'";

  
  $info = mysql_query($sql_update,$conn);
  if ($info){?>
      
      <script type="text/javascript">
      alert("更新成功");
      window.location.href="xy_list.php";
      </script>
      <?php
      
  }else{
      
      
      ?>
				<script type="text/javascript">
					alert("更新失败");
					window.location.href="xy_list.php";
				</script>
      <?php
      
  }
  
//关闭数据库连接
  mysql_close($conn);
  //break;

  ?>

 

