<?php
/**
 * Created by PhpStorm.
 * User: de
 * Date: 2018/10/14
 * Time: 9:26
 */
//echo "登陆成功";
$name = $_GET['name'];
$p1 = $_GET['p1'];
$p2 = $_GET['p2'];
if($name == ''){
    echo "nameErr";
}elseif($p1 == ''){
    echo "p1Err";
}elseif($p2 == ''){
    echo "p2Err";
}elseif($p1 != $p2){
    echo "error";
}else{
    echo "success";

}

//$username = $_POST['username'];
//$pwd = $_POST['pwd'];
//if($username == 'abc'&& $pwd =='123'){
//    echo "登录成功";
//}
//else
//    echo "登录失败";
//$s = $_POST['sex'];
//$h = $_POST['hobby'];
//$m = $_POST['school'];
//var_dump($h);
//var_dump($m);
//echo "您的用户名为:".$username,"您的密码为:".$pwd,$s;