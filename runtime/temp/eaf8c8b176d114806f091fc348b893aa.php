<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:54:"/var/www/movie/application/index/view/index/index.html";i:1527083065;s:53:"/var/www/movie/application/index/view/index/base.html";i:1527911933;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<title>立方体影视，在线购票</title>
<link href="<?php echo \think\Config::get('WEBSERVER'); ?>/public/film/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="<?php echo \think\Config::get('WEBSERVER'); ?>/public/film/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/film/js/jquery.min.js"></script>
<script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/film/js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="My Show Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.useso.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<!-- start menu -->
<link href="<?php echo \think\Config::get('WEBSERVER'); ?>/public/film/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/film/js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script type="text/javascript" src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/film/js/jquery.leanModal.min.js"></script>
<link rel="stylesheet" href="<?php echo \think\Config::get('WEBSERVER'); ?>/public/film/css/font-awesome.min.css" />
<script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/film/js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
                });
			   
</script>
<link rel="stylesheet" href="<?php echo \think\Config::get('WEBSERVER'); ?>/public/film/css/menu.css" />

<script type="text/javascript" src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/film/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/film/js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($){ 
				$(".scroll").click(function(event)	{	
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
</head>
<body>
	<!-- header-section-starts -->
		
		<div class="header-top-strip" id="home">
			<div class="container">
				<div class="header-top-left">
					<p><a href="support.html">24小时</a> | <a class="play-icon popup-with-zoom-anim" href="#small-dialog" href="#">如有问题，请联系我们400-2111022</a> </p>
		
				</div>
				<div class="header-top-right">

	
					<link href="<?php echo \think\Config::get('WEBSERVER'); ?>/public/film/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
					<script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/film/js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!---//pop-up-box---->
				

                     <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>
<div id="user">
    <?php if(\think\Session::get('login_nick') != ''): ?>

            <button class="btn btn-primary"  data-toggle="modal"><?php echo \think\Session::get('login_nick'); ?></button>
             <button class="btn btn-primary" onclick="location.href='<?php echo url('index/index/myticket'); ?>'">我的购票</button>
            <button class="btn btn-primary" onclick="logout()"  data-toggle="modal">登出</button>


    <?php else: ?>

<button class="btn btn-primary" id="loginbtn" data-toggle="modal" data-target="#loginmodal">Login</button>


    <?php endif; ?>
    </div>
				<!-- Large modal -->



<div class="modal fade" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;</button>
                <h4 class="modal-title" id="myModalLabel">
                    登录/注册</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#Login" data-toggle="tab">登录</a></li>
                            <li><a href="#Registration" data-toggle="tab">注册</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="Login">
                                <form role="form" class="form-horizontal" id="loginform">
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        邮箱</label>
                                    <div class="col-sm-10">
                                        <input type="email" name="loginemail" class="form-control" id="email1" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1" class="col-sm-2 control-label">
                                        密码</label>
                                    <div class="col-sm-10">
                                        <input type="password" name="loginpassword" class="form-control" id="exampleInputPassword1" placeholder="password" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <button type="button" onclick="login()" class="btn btn-primary btn-sm">
                                            登录</button>
                                        <a href="javascript:;">忘记密码?</a>
                                    </div>
                                </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="Registration">
                                <form role="form" class="form-horizontal" id="registerform">
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        昵称</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <select class="form-control" name="sex">
                                                    <option value="1">男士</option>
                                                    <option value="2">女士</option>
                                                    <option value="3">其他</option>
                                                </select>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="nickname" placeholder="Name" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        邮箱</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="mobile" class="col-sm-2 control-label">
                                        手机号码</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="phone" class="form-control" id="mobile" placeholder="Mobile" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-sm-2 control-label">
                                        密码</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <button type="button" onclick="register()" class="btn btn-primary btn-sm">
                                            注册</button>
                                        <button type="button" onclick="$('#loginmodal').modal('hide')" class="btn btn-default btn-sm">
                                            取消</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                        <div id="OR" class="hidden-xs">
                            哈</div>
                    </div>
                    <div class="col-md-4">
                        <div class="row text-center sign-with">
                            <div class="col-md-12">
                                <h3 class="other-nw">
                                    立方体影视</h3>
                            </div>
                            <div class="col-md-12">
                                <div class="btn-group btn-group-justified">
                                    <a href="#" class="btn btn-primary">祝您</a> <a href="#" class="btn btn-danger">
                                        开心</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
  //<?php echo $webserver; ?> 服务器域名
function register(){
	$.post("<?php echo $webserver; ?>Index/index/register",$("#registerform").serialize(),function(data){
		

	if(data.code === 1){

		alert("register success");
	}else if(data.code === -10){
        alert(data.msg);
    }
}
,'JSON');	
}


function login(){

	var mail = $("input[name='loginemail']").val();//获取表单值
	var password = $("input[name='loginpassword']").val();
	if(mail===null || password === null){
		alert('请填写邮箱及密码');
		return false;
	}
	$.post("<?php echo url('index/index/login'); ?>",{'email':mail,'password':password},function(data){

			if(data.code === 1){
				$("#loginmodal").modal('hide');
				// $("#loginbtn").attr('data-target','');
				// $("#loginbtn").html(data.nickname);

                var infouser = `<button class="btn btn-primary"  data-toggle="modal">`+data.nickname+`</button>
             <button class="btn btn-primary" onclick="location.href='<?php echo url('index/index/myticket'); ?>'">我的购票</button>
            <button class="btn btn-primary" onclick="logout()"  data-toggle="modal">登出</button>`;


            $("#user").html(infouser);
				// alert('登陆成功');
			}else{
				alert('邮箱或密码错误');
            }

        }
		
    ,'JSON');
}

function logout(){

    $.post("<?php echo url('index/index/logout'); ?>",function(ret){

        if(ret.code===1){
            location.href="<?php echo url('index/index/index'); ?>";
        }else{
            alert('未知的错误....');
        }


    },'JSON');


}
</script>
</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="container" style="padding-right: 0;padding-left: 0;">
		  <div class="main-content" style="margin-top: 1.5em;">
			<div class="header">
				<div class="logo">
					<a href="index.html"><h1>立方体影视</h1></a>
				</div>
				<div class="search">
					<div class="search2">
					  <form>
						<i class="fa fa-search"></i>
						 <input type="text" id="search">
					  </form>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
	<div class="bootstrap_container">
            <nav class="navbar navbar-default w3_megamenu" role="navigation">
                <div class="navbar-header">
          			<button type="button" data-toggle="collapse" data-target="#defaultmenu" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="<?php echo url('index/index/index'); ?>" class="navbar-brand"><i class="fa fa-home"></i></a>
				</div><!-- end navbar-header -->
        
            <div id="defaultmenu" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="<?php echo url('index/index/index'); ?>">主页</a></li>	
                    <!-- Mega Menu -->
			


					<li class="dropdown w3_megamenu-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">在线购票<b class="caret"></b></a>

                        <ul class="dropdown-menu half">
                            <li class="w3_megamenu-content withdesc">
                                <div class="row">

								<h3 class="title">最新上映</h3>

                            <!--     导航栏推荐购票 -->
                                <?php if(is_array($navbuy) || $navbuy instanceof \think\Collection || $navbuy instanceof \think\Paginator): if( count($navbuy)==0 ) : echo "" ;else: foreach($navbuy as $key=>$nb): ?>

                                    <div class="col-sm-3">
                                    	<div class="e-movie">
								<div class="e-movie-img">
									<a href="events.html"><img src="<?php echo \think\Config::get('WEBSERVER'); ?>/<?php echo $nb['cover']; ?>" alt="" /></a>
								</div>
								<div class="e-buy-tickets">
									<a href="<?php echo url('index/index/selectshow',array('id'=>$nb['id'])); ?>">购票</a>
								</div>
							</div>
                                    </div>

                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                  

                       
                                </div>
                            </li>
                        </ul>
					</li>


					<li class="dropdown w3_megamenu-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">在线视频<b class="caret"></b></a>
                        <ul class="dropdown-menu half3">
                            <li class="w3_megamenu-content withoutdesc">
                                <div class="row">
								<h5 class="movies-page">想要浏览更多 - <a href="<?php echo url('index/index/videolist'); ?>">点击这里</a> </h5>
								<h3 class="title">hot</h3>



                                            

                         <?php if(is_array($navonline) || $navonline instanceof \think\Collection || $navonline instanceof \think\Paginator): if( count($navonline)==0 ) : echo "" ;else: foreach($navonline as $key=>$navon): ?>

                                    <div class="col-sm-3">
                                        <div class="e-movie">
                                <div class="e-movie-img">
                                    <a href="events.html"><img src="<?php echo \think\Config::get('WEBSERVER'); ?>/<?php echo $navon['cover']; ?>" alt="" /></a>
                                </div>
                                <div class="e-buy-tickets">
                                    <a href="<?php echo url('index/index/playonline',array('id'=>$navon['id'])); ?>">在线播放</a>
                                </div>
                            </div>
                                    </div>

                                    <?php endforeach; endif; else: echo "" ;endif; ?>











                                </div>
                            </li>
                        </ul>
					</li>


					<li class="dropdown"><a href="<?php echo url('index/index/blog'); ?>">博客</a>
					
					</li>

                        <li><a href="<?php echo url('index/index/about'); ?>">关于我们</a></li>

                      


			
					<!-- end dropdown w3_megamenu-fw -->
                </ul><!-- end nav navbar-nav -->
                
				
			</div><!-- end #navbar-collapse-1 -->
            
			</nav><!-- end navbar navbar-default w3_megamenu -->
		</div><!-- end container -->
    
<!-- AddThis Smart Layers END -->



 
        <div class="col-md-12 text-center" style="padding: 15px;" id="searchbox">
                



        </div>


	   
<style type="text/css">
	.list-group-item{
		padding:20px 15px;
	}
</style>

	<div class="main-banner">


		 <div class="banner col-md-8">
			<section class="slider">
				<div class="flexslider">
						<ul class="slides">

							<?php if(is_array($slides) || $slides instanceof \think\Collection || $slides instanceof \think\Paginator): if( count($slides)==0 ) : echo "" ;else: foreach($slides as $key=>$vo): ?>
						<li>
							<img src="<?php echo \think\Config::get('WEBSERVER'); ?>/<?php echo $vo['cover']; ?>" class="img-responsive" alt="" />
						</li>

						<?php endforeach; endif; else: echo "" ;endif; ?>
			
				  </ul>
				</div>
					</section>
				 <!-- FlexSlider -->
				 <script defer src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/film/js/jquery.flexslider.js"></script>
				 <link rel="stylesheet" href="<?php echo \think\Config::get('WEBSERVER'); ?>/public/film/css/flexslider.css" type="text/css" media="screen" />
					<script type="text/javascript">
				$(function(){
				 SyntaxHighlighter.all();
				});
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				 });
				});
			 </script>
         </div>

         <!-- 公告 -->
		 <div class="col-md-4 banner-right">
			

		 			<div class="list-group">
						<?php if(is_array($notice) || $notice instanceof \think\Collection || $notice instanceof \think\Paginator): if( count($notice)==0 ) : echo "" ;else: foreach($notice as $key=>$noti): ?>
					  <a href="<?php echo url('index/index/readnotice',array('id'=>$noti['id'])); ?>" class="list-group-item list-group-item-info"><?php echo $noti['title']; ?></a>
					<?php endforeach; endif; else: echo "" ;endif; ?>
					</div>


		 </div>

		<!--  公告 -->
		 <div class="clearfix"></div>
	</div>
				<div class="review-slider">
			 <ul id="flexiselDemo1">


            <?php if(is_array($slidetwo) || $slidetwo instanceof \think\Collection || $slidetwo instanceof \think\Paginator): if( count($slidetwo)==0 ) : echo "" ;else: foreach($slidetwo as $key=>$slivo): ?>
			<li>
				<a href="<?php echo url('index/Index/selectshow',array('id'=>$slivo['id'])); ?>"><img src="<?php echo \think\Config::get('WEBSERVER'); ?>/<?php echo $slivo['cover']; ?>" alt=""/></a>
				<div class="slide-title"><h4><?php echo $slivo['title']; ?> </div>
				<div class="date-city">
					<h5><?php echo date("M d",$slivo['publishtime']); ?></h5>
					<h6>#在线购票#</h6>
					<div class="buy-tickets">
						<a href="<?php echo url('index/Index/selectshow',array('id'=>$slivo['id'])); ?>">购票</a>
					</div>
				</div>
			</li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
		
		</ul>
			<script type="text/javascript">
		$(window).load(function() {
			
		  $("#flexiselDemo1").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: false,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 2
					}, 
					landscape: { 
						changePoint:640,
						visibleItems: 3
					},
					tablet: { 
						changePoint:800,
						visibleItems: 4
					}
				}
			});
			});
		</script>
		<script type="text/javascript" src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/film/js/jquery.flexisel.js"></script>	
		</div>
		<div class="footer-top-grid">
		<div class="list-of-movies col-md-8">
			<div class="tabs">
				<div class="sap_tabs">	
						 <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						  <ul class="resp-tabs-list">
						  	  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Now 正在热映</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>本周放映</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>即将热映</span></li>
							  <div class="clearfix"></div>
						  </ul>				  	 
							<div class="resp-tabs-container">


							    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
									<ul class="tab_img">

										<?php if(is_array($now) || $now instanceof \think\Collection || $now instanceof \think\Paginator): if( count($now)==0 ) : echo "" ;else: foreach($now as $key=>$nvo): ?>
									  <li>
										<div class="view view-first">
					   		  			  <a href="<?php echo url('index/index/selectshow',array('id'=>$nvo['id'])); ?>"> <img src="<?php echo \think\Config::get('WEBSERVER'); ?>/<?php echo $nvo['cover']; ?>" class="img-responsive" alt=""/></a>
										   <div class="info1"> </div>
											 <div class="mask">
						                     </div>
								              <div class="tab_desc">
													<a href="<?php echo url('index/index/selectshow',array('id'=>$nvo['id'])); ?>">现在预订</a>
												<!-- 	<div class="percentage-w-t-s">
														<h5>97</h5>
														<p>人 <br> Want to see</p>
														<div class="clearfix"></div>
													</div> -->
											  </div>
										  </div>
										</li>

										<?php endforeach; endif; else: echo "" ;endif; ?>



										<div class="clearfix"></div>
									</ul>
							     </div>	






							     <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
									<ul class="tab_img">


									  			<?php if(is_array($week) || $week instanceof \think\Collection || $week instanceof \think\Paginator): if( count($week)==0 ) : echo "" ;else: foreach($week as $key=>$nvo): ?>
									  <li>
										<div class="view view-first">
					   		  			  <a href="<?php echo url('index/index/selectshow',array('id'=>$nvo['id'])); ?>"> <img src="<?php echo \think\Config::get('WEBSERVER'); ?>/<?php echo $nvo['cover']; ?>" class="img-responsive" alt=""/></a>
										   <div class="info1"> </div>
											 <div class="mask">
						                     </div>
								              <div class="tab_desc">
													<a href="<?php echo url('index/index/selectshow',array('id'=>$nvo['id'])); ?>">现在预订</a>
												<!-- 	<div class="percentage-w-t-s">
														<h5>97</h5>
														<p>% <br> Want to see</p>
														<div class="clearfix"></div>
													</div> -->
											  </div>
										  </div>
										</li>

										<?php endforeach; endif; else: echo "" ;endif; ?>




										<div class="clearfix"></div>
									</ul>
							     </div>	






							     <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
									<ul class="tab_img">
											

												<?php if(is_array($will) || $will instanceof \think\Collection || $will instanceof \think\Paginator): if( count($will)==0 ) : echo "" ;else: foreach($will as $key=>$nvo): ?>
									  <li>
										<div class="view view-first">
					   		  			  <a href="<?php echo url('index/index/selectshow',array('id'=>$nvo['id'])); ?>"> <img src="<?php echo \think\Config::get('WEBSERVER'); ?>/<?php echo $nvo['cover']; ?>" class="img-responsive" alt=""/></a>
										   <div class="info1"> </div>
											 <div class="mask">
						                     </div>
								              <div class="tab_desc">
													<a href="<?php echo url('index/index/selectshow',array('id'=>$nvo['id'])); ?>">现在预订</a>
												<!-- 	<div class="percentage-w-t-s">
														<h5>97</h5>
														<p>% <br> Want to see</p>
														<div class="clearfix"></div>
													</div> -->
											  </div>
										  </div>
										</li>

										<?php endforeach; endif; else: echo "" ;endif; ?>
								
				
										<div class="clearfix"></div>
									</ul>
							     </div>	

			     		    </div>	
                        </div>
					</div>
				</div>	
				<div class="clearfix"></div>
				<div class="featured">
					<h4>在线影院</h4>
					<ul>




						<?php if(is_array($online) || $online instanceof \think\Collection || $online instanceof \think\Paginator): if( count($online)==0 ) : echo "" ;else: foreach($online as $key=>$ovo): ?>



						<li>
							<div class="f-movie">
								<div class="f-movie-img">
									<a href="movies.html"><img src="<?php echo \think\Config::get('WEBSERVER'); ?>/<?php echo $ovo['cover']; ?>" alt="" /></a>
								</div>
									<div class="f-movie-name">
										<a href="movies.html"><?php echo $ovo['title']; ?></a>
										<p>#在线播放#</p>
									</div>
								<div class="f-buy-tickets">
									<a href="<?php echo url('index/index/playonline',array('id'=>$ovo['id'])); ?>">点击播放</a>
								</div>
							</div>
						</li>


						<?php endforeach; endif; else: echo "" ;endif; ?>
						

						


						<div class="clearfix"></div>
					</ul>
				</div>
			</div>
			<div class="right-side-bar">
				<div class="top-movies-in-india">
					<h4>Top Movies</h4>
					<?php if(is_array($top) || $top instanceof \think\Collection || $top instanceof \think\Paginator): if( count($top)==0 ) : echo "" ;else: foreach($top as $key=>$too): ?>
					<ul class="mov_list">
						<li><i class="fa fa-star"></i></li>
						<li><?php echo $too['view']; ?></li>
						<li><a href="<?php echo url('index/Index/selectshow',array('id'=>$too['id'])); ?>"><?php echo $too['title']; ?></a></li>
					</ul>
				<?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			
				<div class="our-blog">
					<h5>影视博客</h5>
					<?php if(is_array($blog) || $blog instanceof \think\Collection || $blog instanceof \think\Paginator): if( count($blog)==0 ) : echo "" ;else: foreach($blog as $key=>$new): ?>

					<div class="post-article">
						<a href="<?php echo url('index/index/readblog',array('id'=>$new['id'])); ?>" class="post-title"><?php echo $new['title']; ?></a>

						<?php if($new['likestatus'] == 0): ?>
						<span onclick="likeclick(<?php echo $new['id']; ?>,this)"  class="fa fa-thumbs-o-up" style="cursor: pointer;"><?php echo $new['likecount']; ?></span>

						<?php else: ?>

						<span onclick="likeclick(<?php echo $new['id']; ?>,this)"  class="fa fa-thumbs-up" style="cursor: pointer;"><?php echo $new['likecount']; ?></span>

						<?php endif; ?>
						&nbsp
						<i style="color:blueviolet">Posted on <?php echo date("M d,Y",$new['addtime']); ?></i>
						<p><?php echo $new['description']; ?><br> <a href="<?php echo url('index/index/readblog',array('id'=>$new['id'])); ?>">Read more</a></p>

					</div>

					<?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
			<div class="clearfix"></div>			
			</div>


		<div class="footer-top-strip">
			<p><span>表白 : </span>日日思君不见君，共饮长江水</p>

			<p><span>警告 :</span>本网站在测试阶段，一切造成的金钱后果有你自己承担</p>
		</div>

        <script type="text/javascript">
        	    <?php if(\think\Session::get('login_nick') == ''): ?>

        	    	 $('#loginmodal').modal('show');

        	    <?php endif; ?>
      	


      	function likeclick(blogid,obj){
      		$.post("<?php echo \think\Config::get('WEBSERVER'); ?>/Index/index/like",{'blogid':blogid},function(huizhi){


      				if(huizhi.code === 1){

      					//点赞成功
      					//把这条博客的点赞数更新
      					$(obj).html(huizhi.likecount);
      					$(obj).removeClass('fa-thumbs-o-up').addClass('fa-thumbs-up');

      				}else if(huizhi.code==-1){
      					//本人今天已经点赞
      					alert(huizhi.msg);
      				}
      			
      		},'JSON')
      	}
        
        </script>




		</div>
		<div class="footer">
			<div class="clearfix"></div>
			<div class="col-md-12">
			<div class="footer-right">
				<div class="follow-us">
					<h5 class="f-head">关注我们</h5>
					<ul class="social-icons">
						<li><a href="#"><i class="fa fa-weibo"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					</ul>
					<div class="clearfix"></div>
				</div>
			<!-- 	<div class="subscribe">
					<h5 class="f-head">Subscribe to our newsletters</h5>
					<input type="text" class="text" value="Enter Email ID" onfocus="this.value = '';" onblur="if (this.value == 'Enter email...') this.value = 'Enter Email ID';}">
					<input type="submit" value="submit">
					<div class="clearfix"></div>
				</div> -->
				<div class="recent_24by7">
					<a class="play-icon popup-with-zoom-anim"><i class="fa fa-calendar-o"></i>Resend Booking Confirmation</a>
					<a><i class="fa fa-question"></i>7*24客服电话000000000</a>
				</div>
					<div class="clearfix"></div>
			</div>
			</div>
			<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
			<div class="copy-rights text-center">
				<p>Copyright &copy; 2018.立方体影视 All rights reserved</p>
			</div>
	</div>
 <script type="text/javascript">
						$(document).ready(function() 
							/*
							var defaults = 
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop( easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


                <script type="text/javascript">
                    $("#search").on('input propertychange',function(){
                        keyuphandle();
                    });

                    var sktimer=null;

                   function keyuphandle() {
                    clearTimeout(sktimer);
                    var anima=`<i style='font-size:16em;' class="fa fa-spinner  fa-spin fa-pulse fa-fw"></i>
<span class="sr-only">Loading...</span>`;
                        $("#searchbox").html(anima);
                    sktimer = setTimeout(dosearch, 500);
                }

                function dosearch() {
                    
                    var k = $.trim($("#search").val());
                    console.log(k);
                    if(k==''){
                          $("#searchbox").html("没有搜索到数据");
                          return false;
                    }
                    $.get("<?php echo url('index/index/search'); ?>?keytext="+k+"",function(data){

                            if(data.code===1){


                            var con=`<ul>`;

                            $.each(data.list,function(k,obj){

                                    con+=`<li class='col-md-3'>
                            <div class="f-movie">
                                <div class="f-movie-img">
                                    <a href="movies.html"><img src="<?php echo \think\Config::get('WEBSERVER'); ?>/`+obj.cover+`" alt="" /></a>
                                </div>
                                    <div class="f-movie-name">
                                        <a href="movies.html">`+obj.title+`</a>
                                        <p>#在线播放#</p>
                                    </div>
                                <div class="f-buy-tickets">
                                    <a href="<?php echo url('index/index/playonline',array('id'=>$ovo['id'])); ?>">点击播放</a>
                                </div>
                            </div>
                        </li>`;

                            });




                            con+=  `</ul>`;
                            // console.log(con);
                           
        
                            }else{

                              con='没有相关结果';  
                            }

                             $("#searchbox").html(con);


                    },'JSON');
                }

                </script>
</body>
</html>
