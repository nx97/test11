<style>
    *{
        margin: 0;
        padding: 0;

    }
    #div1{
        width: 500px;
        height: 800px;
        margin-left: 100px;
        margin-top: 50px;
    }
</style>

<a href="add.php">添加文章</a>
<div id="div1">
<?php
/**
 * Created by PhpStorm.
 * User: niexin
 * Date: 2017/1/11
 * Time: 15:06
 */
    include "conn.php";
    $sql="select * from blog";
    $query= mysqli_query($link,$sql);
    while($rs=mysqli_fetch_array($query)){
        ?>
        <h3><a href="<?php echo $rs['title']?>"></a> |<a href="#">修改</a>|<a href="#">删除</a></h3>
        <li>时间： <?php echo $rs['time']?></li>&nbsp;&nbsp;<span>作者:xxxx </span>
        <p><?php echo $rs['content']?></p>
        <hr>


    <?php
    }
?>
</div>