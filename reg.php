<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .error{
            color:red;
        }
    </style>
</head>
<body>
    用户名: <input type="text" id="username">
    <span class="error name-error"></span>
    <br/>
    密码： <input type="password" id="pwd1">
    <span class="error p1-error"></span>
    <br/>
    确认密码： <input type="password" id="pwd2">
    <span class="error p2-error"></span>
    <button id="btn">注册</button>
    <span class="error p-error"></span>

    <script src="jquery-1.12.4.js"></script>
    <script>
        $(function(){
            $('#btn').on('click',function(){
                var username = $('#username').val();
                var pwd1 = $('#pwd1').val();
                var pwd2 = $('#pwd2').val();
                $.get('server.php',{
                    name:username,
                    p1:pwd1,
                    p2:pwd2
                },function(data){
                    if(data == "nameErr")
                    {
                        $('.name-error').html("用户名不能为空");
                    }else if(data == "p1Err")
                    {
                        $('.p1-error').html("密码不能为空");
                    }else if(data == "p2Err"){
                        $('.p2-errorr').html("确认密码不能为空");
                    }else if(data == "error"){
                        $('.p-error').html("两个密码不一致");
                    }else{
                        $('.p-error').html("注册成功");
                    }


            },'text')
        })

     })
    </script>

</body>
</html>