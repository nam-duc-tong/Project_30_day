<?php
    mysql_connect("localhost","root","");
    mysql_select_db("blog");
    $un = $_GET["un"];
    $qr = "SELECT * FROM users WHERE name = '$un'";
    $u = mysqli_query($qr);
    $dong = mysqli_num_rows($u);
    echo $dong;
?>