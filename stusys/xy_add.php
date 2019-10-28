<?php ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>管理员操作信息</title>
<link href=".\css\bootstrap.css" rel="stylesheet">
<script src=".\js\bootstrap.min.js"></script>
</head>
<body>

<h3 align="justify">添加学院信息</h3>
<br>
<br>
<br>
<form class="form-horizontal" action="xy_do.php" method="post">

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">学院编码</label>
    <div class="col-sm-10">
      <input  class="form-control"  name="xybm" placeholder="xybm">
    </div>
  </div>
    <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">学院名称</label>
    <div class="col-sm-10">
      <input  class="form-control" name="xymc" placeholder="xymc">
    </div>
  </div>


  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">添加</button>
    </div>
  </div>
</form>
</body>
</html>