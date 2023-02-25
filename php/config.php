<?php
  $hostname = "127.0.0.1";
  $username = "数据库用户名";
  $password = "数据库密码";
  $dbname = "数据库名";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "连接数据库出错:(".mysqli_connect_error();
  }
?>
