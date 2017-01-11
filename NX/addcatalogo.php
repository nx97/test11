<?php
/**
 * Created by PhpStorm.
 * User: niexin
 * Date: 2017/1/10
 * Time: 18:02
 */
    include "conn.php";
    if(isset($_POST['sub'])){
        $cname=$_POST['cname'];
        $sql= "select * from catalog where cname='$cname'";
        $query=mysqli_query($link,$sql);
        $result=mysqli_fetch_array('$query');
        if($result){
            echo "<script>alert('该分类已经存在！')</script>";
            echo "<script>location='addcatalogo.php'</script>";
        }else{
            $sql="insert into catalog(cid,cname) value(null,'$cname')";
            $query=mysqli_query($link,$sql);
            if($query){
                echo "<script>location='add.php'</script>";
            }

        }
    }



?>

<meta charset="utf-8">
<form action="addcatalogo.php" method="post">
    分类名: <input type="text" name="cname" >
    <input type="submit" name="sub" value="增加分类名">
</form>
