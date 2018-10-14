<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="server.php" method="post">
        用户名：<input type="text" name="username"><br/>
        密码： <input type="password" name="pwd"><br/>
        <input type="radio" name="sex" value="f">女
        <input type="radio" name="sex" value="m">男<br/>
        <input type="checkbox" name="hobby[]" value="篮球">篮球
        <input type="checkbox" name="hobby[]" value="足球">足球
        <input type="checkbox" name="hobby[]" value="排球">排球
        <input type="checkbox" name="hobby[]" value="手球">手球<br/>
        <select name="school[]" id="" multiple="multiple">
            <option value="黑大" >黑大</option>
            <option value="林大">林大</option>
            <option value="农大">农大</option>
            <option value="理工">理工</option>
        </select>
        <input type="submit" value="登录">
    </form>

</body>
</html>