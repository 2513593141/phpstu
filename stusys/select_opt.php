<html>
<head>
    <title>���ݿ��̨����</title>
    <meta charset="utf-8">
</head>
<body>
<?php
//���ҳ����Ҫ�ǶԲ�����д���
function get_str($str){
    $val = ($_POST[$str])?$_POST[$str]:null;
    return $val;
}
$num = get_str("id");//����ѧ��
$name = get_str("name");//��������
$class = get_str("class");//���հ༶
$sex = get_str("sex");//�����Ա�
$chi = get_str("chinese");//�������ĳɼ�
$mat = get_str("math");//������ѧ�ɼ�
$eng = get_str("english");//����Ӣ��ɼ�
$syn = get_str("science");//�������۳ɼ�
if($num==0 or $name ==null or $class == null or $sex ==null or $chi ==0 or $mat ==0 or $eng ==0 or $syn ==0){?>
    <script type="text/javascript">
        alert("����������������������");
        window.location.href="insert.html";
    </script>
    <?php
}
$sum = $chi + $mat + $eng + $syn;//�����ܷ�
$con = mysqli_connect("localhost","root","123456"); /* �������ݿ�*/
if(!$con){
    ?>
    <script type="text/javascript">
        alert("���ݿ�����ʧ��");
        window.location.href="insert.html";
    </script>
    <?php
}
mysqli_query($con,"SET NAMES utf8");
//����������д�����ݿ�
$sql = "insert into stu_info (id,name,calss,sex,chinese,math,english,science,sum)   
			values($num,'$name','$class','$sex',$chi,$mat,$eng,$syn,$sum)";
mysqli_select_db($con,"sgmsystem");
$info = mysqli_query($con,$sql);
if($info){

    ?>
    <script type="text/javascript">
        alert("д��ɹ�");
        window.location.href="insert.html";
    </script>
<?php
}
else{
?>
    <script type="text/javascript">
        alert("û���ҵ��˺�����");
        window.location.href="insert.html";
    </script>
    <?php
}
?>
</body>
</html>
