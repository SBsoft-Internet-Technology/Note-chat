<?php
  $hostname = "127.0.0.1";
  $username = "ztlt_sbsoft_rong";
  $password = "6NPDbmahKtndFe8c";
  $dbname = "ztlt_sbsoft_rong";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "连接数据库出错:(".mysqli_connect_error();
  }
?>
