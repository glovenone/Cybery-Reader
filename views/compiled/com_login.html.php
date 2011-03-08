<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html profile="http://gmpg.org/xfn/11">
	<head>
		<title>
			Login--Cybery Reader
		</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<script type="text/javascript" src="../static/jquery.js"></script>
		<link rel="stylesheet" href="../static/css/style_r.css" type="text/css" />
		<script type="text/javascript">
			$(document).ready(function(){
				$("p.remind").click(function(){
					$("#message").hide();
					$("#messagetext").show();
				});
				$("img.delete").click(function(){
					$("#message").hide();
					$("#messagetext").hide();
				});
			});
		</script>
		<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1350819-7']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

	</head>

	<body>
		<div id="header">
			<img src="../static/images/logo.png" class="logo" />
			<img src="../static/images/see.png" class="logonote"/>
		</div>
        <?php if($this->tpl_vars["ismsg"]){ ?>
		<div id="message">
			<img src="../static/images/butexit.gif" class="delete" /><p class="remind"><?php echo $this->tpl_vars["msg"]; ?></p>
		</div>
		
		<div id="messagetext">
			<img src="../static/images/butexit.gif" class="delete" /><p class="message"><?php echo $this->tpl_vars["msg"]; ?></p>
		</div>
		<?php } ?>
		
		<div id="context">
			<img src="../static/images/logintitle.png" class="title" />
			<a href="../regist/step1/"><img src="../static/images/register.png" class="command_regist" /></a>
			<form action="" method="POST" >
				<input class="name" type="text" name="username" value="请输入您的用户名"  onMouseOver="this.focus()" onMouseOut="if(this.value=='')this.value='请输入您的用户名';" onFocus="this.select()" onClick="if(this.value=='请输入您的用户名')this.value=''">
				<input class="password" type="password" name="password" value="请输入您的密码"  onMouseOver="this.focus()" onMouseOut="if(this.value=='')this.value='请输入您的密码';" onFocus="this.select()" onClick="if(this.value=='请输入您的密码')this.value=''">
				<input type="image" src="../static/images/login.png" class="command_1" />
			</form>
			
			
		</div>

	</body>
</html>
