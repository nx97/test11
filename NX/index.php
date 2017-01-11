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
    $sql="select * from blog,user where user.uid=blog.uid";
    $query=mysqli_query($link,$sql);
    while($rs=mysqli_fetch_array($query)){
        ?>
        <h3><a href="#"><?php echo $rs['title']?></a>&nbsp;|<a href="#">修改</a>|<a href="#">删除</a></h3>
        <li>时间： <?php echo $rs['time']?></li>&nbsp;&nbsp;<span>作者： <?php echo $rs['uname']?></span><br>
        <p>内容： <?php echo $rs['content']?></p>
        <hr>
    <?php
    }
?>
</div>
