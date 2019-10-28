<?php
require_once 'session.php';
$id = $_POST['id'];
$xybm = $_POST['xybm'];
$xymc = $_POST['xymc'];

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"> 
<title>更新管理员信息</title>

</head>

<body>

                <form action='xy_up.php' method="post">
                <input  type='hidden' name='id' value=<?php echo $id?>><br>
                <input  name='xybm' value=<?php echo $xybm?>><br>
                <input  name='xymc' value=<?php echo $xymc?>><br>

                <input type='submit' value='更新'>
                </form>


</table>
</body>
</html>     

</table>
</body>
</html>