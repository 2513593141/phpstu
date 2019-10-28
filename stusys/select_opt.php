<html>
<head>
    <title>数据库后台操作</title>
    <meta charset="utf-8">
</head>
<body>
<?php
//这个页面主要是对插入进行处理
function get_str($str){
    $val = ($_POST[$str])?$_POST[$str]:null;
    return $val;
}
$num = get_str("id");//接收学号
$name = get_str("name");//接收姓名
$class = get_str("class");//接收班级
$sex = get_str("sex");//接收性别
$chi = get_str("chinese");//接收语文成绩
$mat = get_str("math");//接收数学成绩
$eng = get_str("english");//接收英语成绩
$syn = get_str("science");//接收理综成绩
if($num==0 or $name ==null or $class == null or $sex ==null or $chi ==0 or $mat ==0 or $eng ==0 or $syn ==0){?>
    <script type="text/javascript">
        alert("数据输入有误，请重新输入");
        window.location.href="insert.html";
    </script>
    <?php
}
$sum = $chi + $mat + $eng + $syn;//计算总分
$con = mysqli_connect("localhost","root","123456"); /* 连接数据库*/
if(!$con){
    ?>
    <script type="text/javascript">
        alert("数据库连接失败");
        window.location.href="insert.html";
    </script>
    <?php
}
mysqli_query($con,"SET NAMES utf8");
//将这组数据写进数据库
$sql = "insert into stu_info (id,name,calss,sex,chinese,math,english,science,sum)   
			values($num,'$name','$class','$sex',$chi,$mat,$eng,$syn,$sum)";
mysqli_select_db($con,"sgmsystem");
$info = mysqli_query($con,$sql);
if($info){

    ?>
    <script type="text/javascript">
        alert("写入成功");
        window.location.href="insert.html";
    </script>
<?php
}
else{
?>
    <script type="text/javascript">
        alert("没有找到账号密码");
        window.location.href="insert.html";
    </script>
    <?php
}
?>
</body>
</html>
