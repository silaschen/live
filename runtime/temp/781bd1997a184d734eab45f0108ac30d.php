<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:61:"/var/www/movie/application/index/view/admin/cinema_login.html";i:1527911933;}*/ ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $title; ?></title>

        <!-- CSS -->
        <link rel="stylesheet" href="/public/static/com/AdminLTE/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo \think\Config::get('WEBSERVER'); ?>/public/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="/public/static/res/form-elements.css">
        <link rel="stylesheet" href="/public/static/res/login.css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
	        <script src="//cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	        <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
    </head>

    <body>
        <!-- Top content -->
        <div class="top-content">
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Cube电影验票系统</strong></h1>
                            <div class="description">
                            	<p> </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>管理登录</h3>
                            		<p>输入管理员帐号密码:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-key"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" method="post" class="login-form" id="form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="user">帐号</label>
			                        	<input type="text" name="user" placeholder="帐号..." class="form-username form-control" id="user">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="pwd">密码</label>
			                        	<input type="password" name="pwd" placeholder="密码..." class="form-password form-control" id="pwd">
			                        </div>
			                        <a  class="btn btn-success btn-block btn-lg" onclick="CinemaLogin()">Login</a>
			                    </form>

		                    </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 social-login">
                        	<p><a href="http://binguo.me/wx/" title='智慧成就梦想!' style='color:#ccc;font-size:12px;'>&copy; xxx</a></p>
          
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/film/js/jquery-3.0.0.min.js"></script>
    	<script src="/public/static/com/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
        <script src="/public/static/res/jquery.backstretch.min.js"></script>        
<script type="text/javascript">
jQuery(document).ready(function() {
	
    /*
        Fullscreen background
    */
    $.backstretch("/public/static/res/admin-login.jpg");
    
    /*
        Form validation
    */
    $('.login-form input[type="text"], .login-form input[type="password"], .login-form textarea').on('focus', function() {
    	$(this).removeClass('input-error');
    });
    
    $('.login-form').on('submit', function(e) {
    	
    	$(this).find('input[type="text"], input[type="password"], textarea').each(function(){
    		if( $(this).val() == "" ) {
    			e.preventDefault();
    			$(this).addClass('input-error');
    		}
    		else {
    			$(this).removeClass('input-error');
    		}
    	});
    }); 
});

function CinemaLogin(){

   $.post(location.href,$('#form').serialize(),function(data){

                alert(data.msg);

                if(data.code == 1){
                    location.href = "<?php echo url('index/Admin/ordercheck'); ?>";
                }


   },'JSON');
}
</script>

</body>
</html>
