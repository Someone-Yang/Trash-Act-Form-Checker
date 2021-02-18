# 垃圾验证

初学PHP，恰逢新春活动，自写临时验证表单网页。

# index.php

创建表单，动作指向"check.php"，POST方式
```
<form action="check.php" method="post">
```

创建输入标签，"name"为"T"和数字（从0开始的整数）
```
<input type="text" name="T1">
```

提交前要求用户输入昵称("fname")
```
<input type="text" name="fname">
```

# check.php

更新答案
```
$answers = array("a","b","c",...);
```

更新数据库信息
```
$servername = "localhost"; //Your DB Server
$username = ""; //Your Username
$password = ""; //Your Password
$dbname = ""; //Your DB name
```

# 数据库

创建库和表，结构如下  
|name(字符串)|scores(整数)|

# 其他

强烈建议修改提示信息。