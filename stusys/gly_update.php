<?php
require_once 'session.php';
$glyid = $_POST['id'];
$glyzh = $_POST['zh'];
$glymm = $_POST['mm'];
$glyjs = $_POST['js'];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"> 
<title>更新管理员信息</title>

</head>

<body>

                <form action='gly_up.php' method="post">
                <input  name='id' value=<?php echo $glyid?>><br>
                <input  name='zh' value=<?php echo $glyzh?>><br>
                <input  name='mm' value=<?php echo $glymm?>><br>
                <input  name='js' value=<?php echo $glyjs?>><br>
                <input type='submit' value='更新'>
                </form>


</table>
</body>
</html>     

</table>
</body>
</html>