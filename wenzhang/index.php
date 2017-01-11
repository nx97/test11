<style>
    *{
        margin:0;
        padding:0;
    }
    #div1{
        width:40%;
        height:70%;
        margin-left:100px;
        margin-top:50px;
    }

</style>

<a href="add.php">添加文章</a>

<div id="div1">
    <?php
    include "conn.php";
    $sql="select * from blog,user where user.uid=blog.uid";
    $query=mysqli_query($link,$sql);
    while($rs=mysqli_fetch_array($query)){
        ?>
        <h3><a href="#"><?php echo $rs['title']?></a> |<a href="#">修改</a> |<a href="#">删除</a></h3>
        <li>时间:<?php echo $rs['time']?></li>&nbsp;&nbsp;<span>作者:<?php echo $rs['uname']?></span><br/>
        <p><?php echo $rs['content']?></p>
        <hr />
        <?php
    }
    ?>
</div>