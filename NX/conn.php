<?php
/**
 * Created by PhpStorm.
 * User: niexin
 * Date: 2017/1/10
 * Time: 16:34
 */
    $link=@mysqli_connect('localhost:3306','root','') or die('数据库加载失败');
    @mysqli_select_db($link,'blog6') or die('数据库加载失败');
    mysqli_set_charset($link,'utf8');
