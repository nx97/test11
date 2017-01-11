<?php
/**
 * Created by PhpStorm.
 * User: niexin
 * Date: 2017/1/11
 * Time: 16:01
 */
    if(isset($_GET['uri'])){
        $uri=$_GET['uri'];
    }else{
        $uri="index.php";
    }
    if(isset($_POST['sub'])){

    }
?>
<meta charset="utf-8">
<form action="login.php" method="post" id="f1">
    <input type="hidden" name="uri" value="<?php $uri?>">
    用户名： <input type="text" name="uid"><br>
    密码： <input type="password" name="pass" id="p1"><br>
    <input type="submit" name="sub" value="登录">
</form>
