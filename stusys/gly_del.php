
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
  $glyid = $_POST['id'];
  echo $glyid;

  $sql_del = "delete from glyxxb where id ='".$glyid."'";
  $info = mysql_query($sql_del,$conn);
  if ($info){?>
      
      <script type="text/javascript">
      alert("删除成功");
      window.location.href="gly_li.php";
      </script>
      <?php
      
  }else{
      
      
      ?>
				<script type="text/javascript">
					alert("删除失败");
					window.location.href="gly_li.php";
				</script>
      <?php
      
  }
  
//关闭数据库连接
  mysql_close($conn);
  //break;

  ?>

 

