<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>学生基本信息管理系统</title>
<script type="text/javascript" src=".\js\jquery-1.12.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	//当单击登录按钮时触发的事件
	$(".btn").click(function(){
		// 获账号文本域的值
		var user=$("#user").val();
		//获取密码文本域的值
		var passwd=$("#passwd").val();
		//定义正则表达式对象
		var pattern = new RegExp("[~'!@#$%^&*()-+_=:]");
		//对账号和密码进行非空判断  
		if(user==""){
			alert("请输入账号！");
			$("#user").focus();
			return false;
		}else if(pattern.test(user)){
			alert("温馨提示：用户名中含有非法字符，请重新输入！");
            $("#user").focus();
            return false;
		}else if(passwd==""){
			alert('请输入密码!');
			$("#passwd").focus();
			return false;
		}else if(pattern.test(passwd)){
			alert("温馨提示：密码中含有非法字符，请重新输入！");
            $("#passwd").focus();
            return false;
		}else{
			$.post("login_check.php",{user:user,passwd:passwd},function(data){
				if($.trim(data)=='yes'){
					alert('登录成功！');
					window.location.href='index.php';
					return true;
				}else{
					alert('你输入的账号或密码不正确！');
					window.location.href='login.php';
					return false;
				}
			},"text");
			
		}
	});
});
</script>
<style type="text/css">
* {
	margin: 0px;
	padding: 0px;
}
a {
	text-decoration: none;
}
body {
	background: #159BDB;
}
.main {
	width: 600px;
	height: 370px;
	background: #FFF;
	margin-top: 100px;
	margin-left: auto;
	margin-right: auto;
}
.main .title {
	height: 100px;
	text-align: center;
	line-height: 100px;
	margin-bottom: 16px;
	border-bottom: 1px solid #999;
	background: #F3F3F3;
}
.main .title img {
	margin-top: 26px;
}
.main ul {
	list-style: none;
	height: 70px;
	width: 360px;
	margin: 0 auto;
}
.main ul li.txt {
	height: 70px;
	width: 70px;
	float: left;
	text-align: right;
	margin-right: 10px;
	line-height: 70px;
	font-size: 18px;
	font-weight: bold;
	font-family: 微软雅黑;
}
.main ul li.user input {
	height: 32px;
	line-height: 32px;
	width: 200px;
	margin-top: 19px;
	background: url(images/u.png) 5px center no-repeat;
	padding-left: 40px;
}
.main ul li.passwd input {
	height: 32px;
	line-height: 32px;
	width: 200px;
	margin-top: 19px;
	background: url(images/w.png) 5px center no-repeat;
	padding-left: 40px;
}
.main .btn {
	text-align: center;
}
.main .btn input {
	width: 120px;
	height: 32px;
	margin: 0 auto;
	line-height: 32px;
	background: #159BDB;
	color: #FFF;
	margin-top: 30px;
	font-weight: bold;
	border: 0px;
}
</style>
</head>
<body>
<div class="main">
    <div class="title"> <img src="images/logo.png" width="296" height="48" /> </div>
    <ul>
        <li class="txt">账号</li>
        <li class="user">
            <input type="text" name="user" id="user" />
        </li>
    </ul>
    <ul>
        <li class="txt">密码</li>
        <li class="passwd">
            <input type="password" name="passwd" id="passwd" />
        </li>
    </ul>
    <p class="btn">
        <input type="submit" value="登&nbsp;&nbsp;&nbsp;&nbsp;录" />
    </p>
</div>
</body>
</html>