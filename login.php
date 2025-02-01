<?php
$user = $_GET["user"];
$password = $_GET["password"];
?>
<!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript" src="nourli=1.js"></script>
<title>登 录 本 站</title>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
html {
    font-size: 10px;
}
html::before {
    content: '';
    width: 100%;
    height: 100%;
    position: fixed;
    z-index: -1;
}
::selection {
    color: #fff;
    background-color: rgb(144,129,241);
}
.box {
    display: flex;
    overflow: hidden;
    width: 90rem;
    height: 55rem;
    background-color: rgba(255,255,255,70%);
    border-radius: 1.5rem;
    margin: 5% auto;
    box-shadow: 0 0 1rem 0.2rem rgb(0 0 0 / 10%);
}
.box .left {
    position: relative;
    width: 45%;
    height: 100%;
}
.box .left::before {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background-image: url(../bg-sj.png);
    background-size: cover;
}
.box .right {
    display: flex;
    width: 55%;
    flex-direction: column;
    align-items: center;
}
.box .right h2{
    color: rgb(144,129,241);
    font-size: 3rem;
    margin-top: 5rem;
}
.box .right form {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}
.box .right form .acc {
    outline: none;
    width: 80%;
    height: 5rem;
    font-size: 1.6rem;
    margin-top: 5rem;
    padding: 1rem 0 0 1.6rem;
    border: none;
    border-bottom:1px solid rgb(144,129,241) ;
    color: rgb(144,129,241);
    background-color: rgba(0,0,0,0);
}
.right form .acc:focus {
    outline: none;
    color: rgb(144,129,241);
    padding: 1rem 0 0 1.6rem;
}
.right .submit {
    width: 60%;
    height: 5rem;
    color: #f6f6f6;
    background-image: linear-gradient(120deg, #e0c3fc 0%, #8ec5fc 100%);
    font-size: 1.4rem;
    border: none;
    border-radius: 0.5rem;
    margin: 6rem 0 0 50%;
    transform: translateX(-50%);
}
.right .submit:hover {
    box-shadow: 0 0 2rem -0.5rem rgb(0 0 0 / 15%);
}
.right .fn {
    display: flex;
    justify-content: space-between;
    margin-top: 1rem;
    width: 70%;
}
.right .fn font {
    font-size: 1.3rem;
    margin-top: 5rem;
    padding: 1rem 2rem;
    color: #666;
}
.right .fn font:hover {
    color: rgb(144,129,241);
}
@media screen and (orientation: landscape) {
body {
    background-image: url('../bg-pc.png');
    background-repeat: no-repeat;
    background-size: 100%100%;
    background-attachment: fixed;
}
}
@media screen and (orientation: portrait) {
body {
    background-image: url('../bg-sj.png');
    background-repeat: no-repeat;
    background-size: 100%100%;
    background-attachment: fixed;
}
.left {
    display: none;
}
}
</style>
<link rel="icon" href="../icon.jpg">
</head>
<body>
<div class="box"><div class="left"></div>
<div class="right">
<h2>登 录</h2>
<form action="#" method="get">
<input class="acc" type="text" name="user" placeholder="用 户 名" value="<?php echo($user) ?>">
<input class="acc" type="password" name="password" placeholder="密 码" value="<?php echo($password) ?>">
<input class="submit" type="submit" value="登 录" onclick="robin()">
</form>
<div class="fn">
<font onclick="window.open('/')">返回首页</font>
<font onclick="robin()">注册账号</font>
</div>
</div></div>
<script>
if (window.location.href.endsWith("?i=1")) {
  var newUrl = window.location.href.replace("?i=1", "");
  window.location.href = newUrl;
}
if (window.location.href.endsWith("&i=1")) {
  var newUrl = window.location.href.replace("&i=1", "");
  window.location.href = newUrl;
}
function robin(){
alert("此功能尚未开放，施工中");}
</script>
<!-- </body>
</html>