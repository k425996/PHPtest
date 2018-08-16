<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>QQ城市查询助手</title>
    <meta name="keywords" content="QQ城市查询,QQ城市查询助手,城市查询">
    <meta name="description" content="免费在线查询QQ所在城市！">
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//lib.baomitu.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="//cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  </head>
  <style>
	body{
		margin: 0 auto;
		text-align: center;
	}
	.container {
	  max-width: 580px;
	  padding: 15px;
	  margin: 0 auto;
	}
</style>
  <body style="background-image: url(http://www.pptbz.com/pptpic/UploadFiles_6909/201406/2014061415430467.jpg);background-attachment: fixed;background-repeat: no-repeat;background-size: cover;-moz-background-size: cover;">
    <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right" role="tablist">
          <li role="presentation" class="active">
            <a href="index.php">首页</a></li>
          <li role="presentation">
            <a href="http://wpa.qq.com/msgrd?v=3&uin=1304348418&site=qq&menu=yes">0度</a></li>
        </ul>
        <h3 class="text-muted" align="left">QQ城市查询</h3></div>
      <hr>
      <div class="panel panel-primary" style="margin:1% 1% 1% 1%;background: rgba(255, 251, 251, 0.7)">
        <div class="panel-heading bk-bg-primary">
          <h6>
            <span class="panel-title">QQ城市查询</span></h6>
        </div>
        <div class="panel-body">
          <form action="index.php?qq=" method="GET">
            <input type="text" style="background: rgba(255, 251, 251, 0.7)" class="form-control" name="qq" placeholder="请输入需要查询的QQ">
            <br>
            <input type="submit" class="btn btn-primary btn-block" value="开始查询"></form>
<?php
    $qq=$_GET['qq'];
    $html = file_get_contents('http://city2.aiteqq.cn/?qq='.$qq.'');
?>
<?php
if($qq>1){
    echo"<div class='progress progress-striped active'><div class='progress-bar progress-bar-success' style='width: 100%'>正在查询中…</div></div><div id='ajax_thread_msg'><div class='alert alert-success' style='margin-bottom: 0px;'><b>QQ：$qq&nbsp;&nbsp;&nbsp;所在城市：【 $html 】</b></div></div>";
}
?>
          <div class="tip"></div>
        </div>
      </div>
      <div class="panel panel-primary" style="margin:1% 1% 1% 1%;background: rgba(255, 251, 251, 0.7)">
        <div class="panel-body">
          <div class="alert alert-info" role="alert">
              1.部分QQ号码无法查询（号段限制）<br>
              2.在国外登陆或使用的QQ无法查询<br>
              3.接口延迟也无法查询QQ所在城市<br>
              以上三种情况查询结果都会显示外太空<br>
          </div>
        </div>
        <div class="container-fluid">
          <a href="http://wpa.qq.com/msgrd?v=3&uin=1304348418&site=qq&menu=yes" class="btn btn-default btn-sm">
            <span class="fa fa-users"></span> 联系</a>
          <a href="http://wpa.qq.com/msgrd?v=3&uin=1304348418&site=qq&menu=yes" class="btn btn-default btn-sm">
            <span class="glyphicon glyphicon-exclamation-sign"></span> 帮助</a>
          <a href="http://wpa.qq.com/msgrd?v=3&uin=1304348418&site=qq&menu=yes" class="btn btn-info btn-sm">
            <span class="glyphicon glyphicon-user"></span> 客服</a>
          <a href="http://wpa.qq.com/msgrd?v=3&uin=1304348418&site=qq&menu=yes" class="btn btn-default btn-sm">
            <span class="glyphicon glyphicon-pencil"></span> 反馈</a>
        </div>
        <p style="text-align:center">
          <br>&copy; Powered by
          <a href="">小波仔</a>!</p></div>
  </body>
</html>