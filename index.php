<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>纸条聊天 | Note chat</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>名</label>
            <input type="text" name="fname" placeholder="名" required>
          </div>
          <div class="field input">
            <label>姓</label>
            <input type="text" name="lname" placeholder="姓" required>
          </div>
        </div>
        <div class="field input">
          <label>用户名</label>
          <input type="text" name="user" placeholder="用户名" required>
        </div>
        <div class="field input">
          <label>密码</label>
          <input type="password" name="password" placeholder="密码" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>上传头像</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="注册">
        </div>
      </form>
      <div class="link">有账号了？ <a href="login.php">登录</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
