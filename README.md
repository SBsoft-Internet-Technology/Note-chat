# Note Chat
一个简单的web端即时聊天软件。

# 这是什么？
一个简单的web端即时聊天软件。
此仓库基于[SYSTEMSGT的chat-app](https://github.com/SYSTEMSGT/chat-app)，由[rong6](https://github.com/rong6)、[xiaojiang233](https://github.com/xiaojiangxj233)汉化，最终变成了现在的“Note Chat（纸条聊天）”。

# 使用语言
* HTML
* CSS
* PHP
* JavaScript
* MySQL

# 如何使用？
将本仓库的代码下载下来，然后新建个数据库，并将根目录的```chatapp.sql```导入到数据库。

进入```/php/config.php```，修改```hostname``` ```username``` ```password``` ```dbname```的值，依次为：
```
hostname = "数据库地址"
username = "数据库用户名"
password = "数据库密码"
dbname = "数据库名"
```

最后访问你的网站即可。

# 常见问题
## PHP版本？
PHP版本建议最好为PHP-56。
## 注册报错？
如注册报错请检查数据库配置是否正确。
## 如何进入后台？
没有后台，仓库中的“admin”是我加的，里面啥内容自己看吧……
如果要管理用户或聊天记录，请登录数据库查看。

# License
本仓库基于[Apache License 2.0](https://github.com/SBsoft-Internet-Technology/Note-chat/blob/main/LICENSE)。
