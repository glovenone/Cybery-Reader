<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html profile="http://gmpg.org/xfn/11">
	<head>
		<title>
			Cybery Reader
		</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>

		<script type="text/javascript" src="../static/jquery.js"></script>
		<link rel="stylesheet" href="../static/css/style.css" type="text/css" />
		<script type="text/javascript">
			$(document).ready(function(){
			    <?php if($this->tpl_vars["isitem"]){ ?>
			    <?php foreach($this->tpl_vars["items"] as $this->tpl_vars["item"]) { ?>
				$("h3.flip<?php echo $this->tpl_vars["item"]["guid"]; ?>").click(function(){
					$("#panel<?php echo $this->tpl_vars["item"]["guid"]; ?>").slideToggle("slow");
				});
				$("img.star<?php echo $this->tpl_vars["item"]["guid"]; ?>").click(function(){
					 $("img.star<?php echo $this->tpl_vars["item"]["guid"]; ?>").attr("src","../static/images/starfull.png");
				});
				<?php } ?>
				<?php } ?>
				$("h2.flip").click(function(){
					$("#panall").slideToggle("slow");
				});
				$("img.myfeed").click(function(){

                                        $("img.myfeed").attr("src","../static/images/butplus.gif");
					$("ul.myfeed").slideToggle("slow");
				});
				$("img.hotfeed").click(function(){
                                        $("img.hotfeed").attr("src","../static/images/butplus.gif");
					$("ul.hotfeed").slideToggle("slow");
				});
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
		<div class="useraction">
			<ul>
			    <li><a href="../subscribe/" >添加订阅</a></li>
			    <li><a href="../logout/" >退出</a></li>
			</ul>
		</div>
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

	<div id="leftsidebar">
	<ul>

		<li><img src="../static/images/butsub.gif" class="myfeed" />我的Feed
		    <ul class="myfeed">
		    <?php if($this->tpl_vars["ismyfeed"]){ ?>
		    <?php foreach($this->tpl_vars["myfeed"] as $this->tpl_vars["row"]) { ?>
		    <li class="choose"><a href="?url=<?php echo $this->tpl_vars["row"]["url"]; ?>"><?php echo $this->tpl_vars["row"]["title"]; ?><?php if($this->tpl_vars["row"]["unread"]){ ?>(<?php echo $this->tpl_vars["row"]["unread"]; ?>)<?php } ?></a></li>
		    <?php } ?>
		    <?php } ?>
         	</ul>
		</li> 

		<li><img src="../static/images/butsub.gif" class="hotfeed" />热门Feed
		<ul class="hotfeed">
		    <?php if($this->tpl_vars["isfavfeed"]){ ?>
		    <?php foreach($this->tpl_vars["favfeed"] as $this->tpl_vars["row"]) { ?>
		    <li class="choose"><a href="?url=<?php echo $this->tpl_vars["row"]["url"]; ?>"><?php echo $this->tpl_vars["row"]["title"]; ?></a></li>
		    <?php } ?>
		    <?php } ?>
         	</ul>
		</li>
	</ul>
	</div>

	<div id="rightsidebar">

		<p class="rightitle"><?php echo $this->tpl_vars["ctitle"]; ?></p>
		<?php if($this->tpl_vars["iscomments"]){ ?>
		<ul>
		<?php foreach($this->tpl_vars["comments"] as $this->tpl_vars["comment"]) { ?>
			<li class="rightext"><a href="" class="rightext"><?php echo $this->tpl_vars["comment"]["alias"]; ?></a><?php echo $this->tpl_vars["comment"]["content"]; ?></li>
	    <?php } ?>
		</ul>
		<?php } ?>
	</div>

	<div id="main">
	    <h2 class="flip"><p><?php echo $this->tpl_vars["feedname"]; ?></p></h2>
	    <div id="panall">
	    <?php if($this->tpl_vars["isitem"]){ ?>
	    <?php foreach($this->tpl_vars["items"] as $this->tpl_vars["item"]) { ?>
	        <div>
		    <h3 class="flip flip<?php echo $this->tpl_vars["item"]["guid"]; ?>">
			    <img src="../static/images/starblank.png" class="star star<?php echo $this->tpl_vars["item"]["guid"]; ?>" />
			    <?php echo $this->tpl_vars["item"]["title"]; ?>
		    </h3>
	            <div id="panel<?php echo $this->tpl_vars["item"]["guid"]; ?>" class="panel" style="display:none;">
	            <?php if($this->tpl_vars["item"]["content"]){ ?>
	                <?php echo $this->tpl_vars["item"]["content"]; ?>
	            <?php } else { ?>
	                <?php echo $this->tpl_vars["item"]["description"]; ?>
	            <?php } ?>
	            </div>
            </div>
        <?php } ?>
        <?php } ?>
        </div>
    </div>	
    </div>
	
       <div id="footer">
		@ 2011 CopyRight 
	</div>
	</body>
</html>
