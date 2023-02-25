<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form login">
      <header>纸条聊天 | Note chat</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>用户名</label>
          <input type="text" name="user" placeholder="输入你的屑用户名" required>
        </div>
        <div class="field input">
          <label>密码</label>
          <input type="password" name="password" placeholder="输入你的密码" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="登录">
        </div>
      </form>
      <div class="link">没有账号？ <a href="index.php">注册</a></div>
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
