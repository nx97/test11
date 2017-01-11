<?php
if(!isset($_COOKIE['id']))
    $str=$_SERVER['REQUET_UIR'];
    $arr=explode('/',$str);
    $num=count($arr)-1;
    $uri=$arr["$num"];
    header("location:login.php?uri=$uri");


?>


<?php
/**
 * Created by PhpStorm.
 * User: niexin
 * Date: 2017/1/10
 * Time: 16:47
 */
    include "conn.php";
    if(isset($_POST['sub'])){
        $title=$_POST['title'];
        $cid=$_POST['catalog'];
        $con=$_POST['con'];

        $sql="insert into blog(wid,title,content,time,cid) value(null,'$title','$con',now(),'$cid')";
        $query=mysqli_query($link,$sql);
        if($query){
            echo "<script>location='index.php'</script>";
        }else{
            echo "<script>location='add.php'</script>";
        }
    }
?>

<meta charset="utf-8">
<form action="add.php" method="post">
    标题： <input type="text" name="title">
    <select name="catalog">
        <?php
            $sql="select * from catalog";
            $query= mysqli_query($link,$sql);
            while($rs=mysqli_fetch_array($query)){
                ?>
                <option value="<?php echo $rs['cid'] ?>"><?php echo $rs['cname']?></option>
        <?php
            }
        ?>
    </select><br>
    内容： <textarea name="con" cols="20" rows="10"></textarea><br>
    <input type="submit" name="sub" value="提交">
</form>









