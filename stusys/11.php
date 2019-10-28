<?php require_once('session.php');?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>jQuery左侧菜单导航下拉代码</title>
</head>

<!--图标样式-->
<link rel="stylesheet" type="text/css" href="http://cdn.bootcss.com/font-awesome/4.6.0/css/font-awesome.min.css">


<link rel="stylesheet" href="css/index.css" />

<body>

    <div class="s-side">
        <ul>
            <!--这部分是导航栏信息。-->
            <li class="s-firstItem first">
                <a href="right.php" target="right">
                    <i class="fa fa-home"></i>
                    <span>首页</span>
                </a>
            </li>
            <li class="first">
                <div class="d-firstNav s-firstNav">
                    <i class="fa fa-bars"></i>
                    <span>管理员信息维护</span>
                    <i class="fa fa-caret-right fr"></i>
                </div>
                <ul class="d-firstDrop s-firstDrop">
                    <li class="s-secondItem">
                        <i class="fa fa-minus-square-o"></i>
                        <a href="gly_add.php" target="right">添加管理员</a>
                    </li>
                    <li class="s-secondItem">
                        <i class="fa fa-minus-square-o"></i>
                        <a href="gly_li.php" target="right">管理员列表</a>
                    </li>
                </ul>
            </li>

            <li class="first">
                <div class="d-firstNav s-firstNav">
                    <i class="fa fa-bars"></i>
                    <span>学院信息维护</span>
                    <i class="fa fa-caret-right fr"></i>
                </div>
                <ul class="d-firstDrop s-firstDrop">
                    <li class="s-secondItem">
                        <i class="fa fa-minus-square-o"></i>
                        <a href="xy_add.php" target="right">添加学院</a>
                    </li>
                    <li class="s-secondItem">
                        <i class="fa fa-minus-square-o"></i>
                        <a href="xy_list.php" target="right">学院列表</a>
                    </li>
                </ul>
            </li>
                        <li class="first">
                <div class="d-firstNav s-firstNav">
                    <i class="fa fa-bars"></i>
                    <span>系部信息维护</span>
                    <i class="fa fa-caret-right fr"></i>
                </div>
                <ul class="d-firstDrop s-firstDrop">
                    <li class="s-secondItem">
                        <i class="fa fa-minus-square-o"></i>
                        <a href="xb_add.php" target="right">添加系部</a>
                    </li>
                    <li class="s-secondItem">
                        <i class="fa fa-minus-square-o"></i>
                        <a href="xb_list.php" target="right">系部列表</a>
                    </li>
                </ul>
            </li>
                        <li class="first">
                <div class="d-firstNav s-firstNav">
                    <i class="fa fa-bars"></i>
                    <span>专业信息维护</span>
                    <i class="fa fa-caret-right fr"></i>
                </div>
                <ul class="d-firstDrop s-firstDrop">
                    <li class="s-secondItem">
                        <i class="fa fa-minus-square-o"></i>
                        <a target="right">添加专业</a>
                    </li>
                    <li class="s-secondItem">
                        <i class="fa fa-minus-square-o"></i>
                        <a >专业列表</a>
                    </li>
                </ul>
            </li>
                        <li class="first">
                <div class="d-firstNav s-firstNav">
                    <i class="fa fa-bars"></i>
                    <span>班级信息维护</span>
                    <i class="fa fa-caret-right fr"></i>
                </div>
                <ul class="d-firstDrop s-firstDrop">
                    <li class="s-secondItem">
                        <i class="fa fa-minus-square-o"></i>
                        <a target="right">添加班级</a>
                    </li>
                    <li class="s-secondItem">
                        <i class="fa fa-minus-square-o"></i>
                        <a target="right">班级列表</a>
                    </li>
                </ul>
            </li>
                        <li class="first">
                <div class="d-firstNav s-firstNav">
                    <i class="fa fa-bars"></i>
                    <span>学生信息维护</span>
                    <i class="fa fa-caret-right fr"></i>
                </div>
                <ul class="d-firstDrop s-firstDrop">
                    <li class="s-secondItem">
                        <i class="fa fa-minus-square-o"></i>
                        <a href="xy_add.php" target="right">添加学生</a>
                    </li>
                    <li class="s-secondItem">
                        <i class="fa fa-minus-square-o"></i>
                        <a href="xy_list.php" target="right">学生列表</a>
                    </li>
                </ul>
            </li>
                        <li class="first">
                <div class="d-firstNav s-firstNav">
                    <i class="fa fa-bars"></i>
                    <span>学生信息系统</span>
                    <i class="fa fa-caret-right fr"></i>
                </div>
                <ul class="d-firstDrop s-firstDrop">
                    <li class="s-secondItem">
                        <i class="fa fa-minus-square-o"></i>
                        <a  target="right">学习招生走势图</a>
                    </li>
                    <li class="s-secondItem">
                        <i class="fa fa-minus-square-o"></i>
                        <a  target="right">二级学院招生情况</a>
                    </li>
                                        <li class="s-secondItem">
                        <i class="fa fa-minus-square-o"></i>
                        <a target="right">生源分布情况</a>
                    </li>
                </ul>
            </li>


    

            

        </ul>
    </div>


    <script type="text/javascript" src="./js/jquery.min.js"></script>
    <script type="text/javascript" src="./js/index.js"></script>

</body>
</html>

