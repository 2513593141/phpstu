<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>学生基本信息管理系统</title>

<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body >
<ul class="nav nav-pills nav-stacked">
 <li role="presentation" class="active"><a href="#">Home</a></li>
  <li role="presentation"><a href="#">Profile</a></li>

  <li role="presentation" class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
      Dropdown <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
                         <li><a href="#">jmeter</a></li>
                    <li><a href="#">EJB</a></li>
                    <li><a href="#">Jasper Report</a></li>
                    <li class="divider"></li>
                    <li><a href="#">分离的链接</a></li>
                    <li class="divider"></li>
                    <li><a href="#">另一个分离的链接</a></li>
    </ul>
  </li>
    <li role="presentation"><a href="#">Messages</a></li>
</ul>







<div class="main">
	<div class="cattitle">系统菜单</div>
	<div class="menu">
		<div class="bclass">
        	<a href="right.php" target="right">首页</a>
        </div>
	</div>

	<div class="menu">
		<div class="bclass">管理员信息维护</div>
		<div class="sclass"> 
        	<a href="gly_add.php" target="right">添加管理员</a> 
            <a href="gly_list.php" target="right">管理员列表</a> 
        </div>
	</div>

	<div class="menu">
    	<div class="bclass">学院信息维护</div>
    	<div class="sclass">
        	<a href="xy_add.php" target="right">添加学院</a> 
            <a href="xy_list.php" target="right">学院列表</a> 
        </div>
  	</div>
  	<div class="menu">
		<div class="bclass">系部信息维护</div>
    	<div class="sclass"> 
        	<a href="xb_add.php" target="right">添加系部</a> 
            <a href="xb_list.php" target="right">系部列表</a>
         </div>
  	</div>
  	<div class="menu">
    	<div class="bclass">专业信息维护</div>
    	<div class="sclass"> 
        	<a href="zy_add.php" target="right">添加专业</a> 
            <a href="zy_list.php" target="right">专业列表</a>
        </div>
  	</div>
  	<div class="menu">
    	<div class="bclass">班级信息维护</div>
    	<div class="sclass"> 
        	<a href="bj_add.php" target="right">添加班级</a> 
            <a href="bj_list.php" target="right">班级列表</a>
        </div>
  	</div>
  	<div class="menu">
    	<div class="bclass">学生信息维护</div>
    	<div class="sclass"> 
        	<a href="xs_add.php" target="right">添加学生</a>
            <a href="xs_list.php" target="right">学生列表</a> 
        </div>
  	</div>
	<div class="menu">
		<div class="bclass">学生信息统计</div>
    	<div class="sclass"> 
        	<a href="tj_xx.php" target="right">学校招生走势图</a> 
            <a href="tj_xy.php" target="right">二级学院招生情况</a> 
            <a href="tj_syd.php" target="right">生源分布情况</a> 
        </div>
  	</div>
  	<div class="menu">
    	<div class="bclass">
        	<a href="#" id="logout">退出</a>
        </div>
  	</div>
</div>
</body>
</html>