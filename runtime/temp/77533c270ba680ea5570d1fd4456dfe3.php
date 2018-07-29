<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:54:"/var/www/movie/application/index/view/admin/index.html";i:1527083065;s:53:"/var/www/movie/application/index/view/admin/base.html";i:1527083065;s:53:"/var/www/movie/application/index/view/admin/head.html";i:1527083065;s:53:"/var/www/movie/application/index/view/admin/left.html";i:1527083065;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo $title; ?></title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="stylesheet" href="<?php echo \think\Config::get('WEBSERVER'); ?>/public/static/com/AdminLTE/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo \think\Config::get('WEBSERVER'); ?>/public/fontawesome/css/font-awesome.min.css">
<link rel="stylesheet" href="//cdn.bootcss.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="<?php echo \think\Config::get('WEBSERVER'); ?>/public/static/com/AdminLTE/css/AdminLTE.css">
<link rel="stylesheet" href="<?php echo \think\Config::get('WEBSERVER'); ?>/public/static/com/AdminLTE/css/skins/skin-red.css">
<!-- jQuery 2.1.4 -->
<script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/film/js/jquery-3.0.0.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/static/com/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/static/com/common.js"></script>
<script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/film/js/echarts.js"></script>
<style type="text/css">
/*loading*/
#mask{position: fixed;z-index: 999999;top: 0;bottom: 0;left: 0;right: 0;display: none;}
#mask .loading{padding: 10px 15px;background: #333;opacity: 0.75;text-align: center;color: #FFF;line-height: 23px;position: fixed;left:0;right: 0;bottom: 0;top: 0;width: 120px;height: 65px;z-index: 999999;margin: auto;border-radius: 4px;}
</style>
<!--[if lt IE 9]>
<script src="//cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">
  <!-- Main Header -->
<header class="main-header">

  <!-- Logo -->
  <a href="#" target='_blank' class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><i class='fa fa-television'></i></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><i class='fa fa-television'></i><?php echo \think\Config::get('APPNAME'); ?></span>
  </a>
  <!-- Header Navbar -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- User Account Menu -->
        <li class="dropdown user user-menu">
          <!-- Menu Toggle Button -->
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <!-- The user image in the navbar-->
            <img src="<?php echo $THink['Config']['WEBSERVER']; ?>/public/static/res/admin.png" class="user-image" alt="User Image">
            <!-- hidden-xs hides the username on small devices so only the image appears. -->
            <span class="hidden-xs">Admin</span>
          </a>
          <ul class="dropdown-menu">
            <!-- The user image in the menu -->
            <li class="user-header">
              <img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/static/res/admin.png" class="img-circle" alt="User Image">
              <p>
              </p>
            </li>

            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="" class="btn btn-default btn-flat">修改密码</a>
              </div>
              <div class="pull-right">
                <a href="javascript:logout()" class="btn btn-default btn-flat">退出系统</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>

<script type="text/javascript">
function logout(){
  var type = "<?php echo \think\Session::get('login_cinema_status'); ?>";

  if(type === '1'){
    // console.log(type);
    type = 1;
  }else{
    type=2;
  }


  $.post("<?php echo url('index/admin/logout'); ?>",{'type':type},function(ret){

      if(ret.code===1){
        location.href = ret.gourl;
      }


  },'JSON');


}
</script>

  <!-- Left side column. contains the logo and sidebar -->

  <aside class="main-sidebar">
  <section class="sidebar">
    <ul class="sidebar-menu">
      <li><a href="<?php echo url('index/admin/index'); ?>"><i class="fa fa-bar-chart"></i> <span>管理概况</span></a></li>


        <?php if(\think\Session::get('login_cinema_status') != 1): ?>

        <li><a href="<?php echo url('Index/admin/videolist'); ?>">视频管理</a></li>
        <li><a href="<?php echo url('Index/admin/bloglist'); ?>">博客管理</a></li>
        <li><a href="<?php echo url('Index/admin/noticelist'); ?>">公告管理</a></li>
        <li><a href="<?php echo url('Index/admin/userlist'); ?>">用户管理</a></li>
        <li><a href="<?php echo url('Index/admin/orderlist'); ?>">订单管理</a></li>
           <li><a href="<?php echo url('Index/admin/likelist'); ?>">点赞记录</a></li>
          <li><a href="<?php echo url('Index/admin/cinemalist'); ?>">影院管理</a></li>

        <?php else: ?>

              <li><a href="<?php echo url('Index/admin/ordercheck'); ?>">order管理</a></li>


      <?php endif; ?>

    </ul><!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
<if condition="$eq egt '0' OR $eq neq ''">
<script type="text/javascript">
if(!isNaN('<?php echo $eq; ?>')){
  $(".sidebar-menu > li").eq(<?php echo $eq; ?>).addClass('active');
}else{
  $(".sidebar-menu > li").each(function(){
    var txt = $.trim($(this).children('a').text());
    if(txt == '<?php echo $eq; ?>'){
      $(this).addClass('active');
      return;
    }
  });
}
</script>
</if>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- Main content -->
    <section class="content">
    
<script src="Public/com/Highcharts/highcharts.js"></script>
<div class='row'>

<!-- 曲线图 -->
<div class="box box-solid">


<div class="box-body">
	<div id="main" style="min-width: 310px; height: 250px; margin: 0 auto"></div>

  <div id='view' style="min-width:310px;height:250px;margin:0 auto;">

  </div>
</div>




</div>


</div>

<script type="text/javascript">
 var myChart = echarts.init(document.getElementById('main'));


option = {
    color: ['#3398DB'],
    tooltip : {
        trigger: 'axis',
        axisPointer : {            // 坐标轴指示器，坐标轴触发有效
            type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
        }
    },
    grid: {
        left: '3%',
        right: '4%',
        bottom: '3%',
        containLabel: true
    },
    xAxis : [
        {
            type : 'category',
            data : <?php echo $day; ?>,
            axisTick: {
                alignWithLabel: true
            }
        }
    ],
    yAxis : [
        {
            type : 'value'
        }
    ],
    series : [
        {
            name:'order number',
            type:'bar',
            barWidth: '60%',
            data:<?php echo $data; ?>
        }
    ]
};
myChart.setOption(option);
var view=myChart = echarts.init(document.getElementById('view'));
option2 = {
    xAxis: {
        type: 'category',
        data: <?php echo $day; ?>
    },
    yAxis: {
        type: 'value'
    },
    series: [{
        name:'view source',
        data: [200, 50, 23, 190, 350, 567, 124,700,800],
        type: 'line'
    }]
};
view.setOption(option2);
</script>

    </section><!-- /.content -->
  </div><!-- /.content-wrapper -->
  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs"></div>
    <!-- Default to the left -->
    <a  target='_blank'>&copy; </a>
  </footer>
</div><!-- ./wrapper -->
<!-- AdminLTE App -->
<script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/static/com/AdminLTE/js/app.min.js"></script>
<div id="mask"><div class='loading'></div></div>
</body>
</html>
