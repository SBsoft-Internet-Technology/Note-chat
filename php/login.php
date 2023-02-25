<?php 
    session_start();
    include_once "config.php";
    $user = mysqli_real_escape_string($conn, $_POST['user']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    if(!empty($user) && !empty($password)){
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE user = '{$user}'");
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            $user_pass = md5($password);
            $enc_pass = $row['password'];
            if($user_pass === $enc_pass){
                $status = "活着";
                $sql2 = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id = {$row['unique_id']}");
                if($sql2){
                    $_SESSION['unique_id'] = $row['unique_id'];
                    echo "success";
                }else{
                    echo "出了点小问题， 请再逝一次。";
                }
            }else{
                echo "密码错误！";
            }
        }else{
            echo "$user - 该用户不存在。";
        }
    }else{
        echo " 傻逼傻逼傻逼";
    }
?>