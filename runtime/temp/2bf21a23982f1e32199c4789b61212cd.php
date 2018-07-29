<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:57:"/var/www/movie/application/index/view/admin/addvideo.html";i:1527084641;s:53:"/var/www/movie/application/index/view/admin/base.html";i:1527083065;s:53:"/var/www/movie/application/index/view/admin/head.html";i:1527083065;s:53:"/var/www/movie/application/index/view/admin/left.html";i:1527083065;}*/ ?>
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
    
  <link rel="stylesheet" href="/public/com/jQuery-File-Upload-9.9.3/css/jquery.fileupload.css">
  <div class="box box-solid">
    <div class="box-header with-border">
      <h3 class="box-title">添加/编辑视频</h3><a href="<?php echo url('Admin/videolist'); ?>" class='btn btn-default btn-xs pull-right'>返回列表</a>
    </div><!-- /.box-header -->
    <div class="box-body">
         <form method="POST" id='form'>

            <div class='form-group'>
              <label>标题：</label>
              <input type='text' name='title' class='form-control'>
            </div>


              <div class="form-group">

                <label>分类</label>
                <select class="form-control" name="cate">
                  <option value="1">影院购票</option>
                  <option value="2">在线资源</option>
                </select>
              </div>

            <div class='form-group'>
              <label>封面图片：</label>
                <a href="javascript:$('#cover').val('');$('.showcover').html('');" onclick="return confirm('确定清除封面？');" class='pull-right'>清除封面</a> <br>
                  <button type='button' class='btn btn-success btn-sm fileinput-button'><i class="glyphicon glyphicon-picture"></i> <small>推荐尺寸 400*300 点击上传</small><input  id="uploadcover" type="file" name="files" accept="image/*" ></button>
                    <div id="progress" class="progress">
                        <div class="progress-bar progress-bar-success"></div>
                    </div>
                    <div id="files" class="files">
                    </div>
                    <div class='showcover'>

                    </div>
                <input class='hide' name='cover' id='cover'>
            </div>



            <div class="form-group">
              <label>导演</label>
              <input type="text" name="director" class="form-control">
            </div>



            <div class='form-group'>
              <label>上映时间</label>
              <input type='date' name='publishtime' class='form-control' placeholder="">
            </div>


            <div class="form-group">
              <label>票价</label>
              <input type="number" name="price" class="form-control">
            </div>




            <div class="panel panel-primary">
                <div class="panel-heading"><button class="btn btn-success" type="button" onclick="AddOne()">添加影院</button></div>
                <div class="panel-body" id="cinemabox">







                </div>
            </div>
         </form>
    </div><!-- /.box-body -->
    <div class="box-footer clearfix">
      <button type="button" onclick="saveart();" class="btn btn-success pull-right saveart">确定</button>
    </div>
  </div>

<div class="modal fade" tabindex="-1" id="ticket" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">添加影院</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>选择影院</label>
          <select name="cinema" id="cinema" class="form-control">
            <?php if(is_array($cinemas) || $cinemas instanceof \think\Collection || $cinemas instanceof \think\Paginator): if( count($cinemas)==0 ) : echo "" ;else: foreach($cinemas as $key=>$cin): ?>
              <option value="<?php echo $cin['id']; ?>"><?php echo $cin['name']; ?></option>
            <?php endforeach; endif; else: echo "" ;endif; ?>
          </select>
         <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">首映日期</span>
          <input type="date"  class="form-control" aria-describedby="basic-addon1" id="publishstart">
        </div>


        <div class="input-group">
          <span class="input-group-addon"  id="basic-addon1">结束日期</span>
          <input type="date" class="form-control" aria-describedby="basic-addon1" id="publishend">
        </div>


        <div class="input-group">
            <span>tickets numbers for eachday each time</span>
            <input type="text" name="stock" value="30" class="form-control">

        </div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="pickCinema()">Save</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade" id="addtime" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
          <div class="form-group">
          <label>选择时间</label>
             <input type="time" id="showmin" class="form-control">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <button type="button" id="btntimeadd" class="btn btn-primary" onclick="AddOneTi()" data-cid=''>添加</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script charset="utf-8" src="/public/com/kindeditor/kindeditor.js"></script>
<script charset="utf-8" src="/public/com/kindeditor/lang/zh_CN.js"></script>
<script type="text/javascript">
//
function saveart(){

  var cinemas = [];
  $(".ticked_cinema").each(function(inx,obj){
    var times = [];

    let spanarr = $(obj).children('span');
    spanarr.each(function(k,v){
        var vt = $(v).html();
        times.push(vt);
    });
    var btime = $(obj).attr('data-start');
    var etime = $(obj).attr('data-end');
    var stock = $(obj).attr('data-stock');
    var item = {
        'cid':$(obj).attr('data-id'),
        'btime':btime,
          'etime':etime,
        'time':times,
        'stock':stock
      };

    cinemas.push(item);
  });



  console.log(cinemas);


  var title = $("input[name='title']").val();
  var cover = $("input[name='cover']").val();
  var publishtime = $("input[name='publishtime']").val();
  var director = $("input[name='director']").val();
  var price = $("input[name='price']").val();
  var cate = $("select[name='cate']").val();
  $.post("<?php echo url('Admin/addvideo'); ?>",{'title':title,'cover':cover,'publishtime':publishtime,'director':director,'price':price,'cinemas':cinemas,'cate':cate},function(data){
      alert(data.msg);

  },'JSON');
}


function AddOne(){
  $("#ticket").modal('show');
}

function AddOneTime(obj){

  var id = $(obj).parent().attr('data-id');
  console.log(id);
  $("#btntimeadd").attr('data-cid',id);
  $("#addtime").modal('show');

}

function pickCinema(){

  var cinemaid = $("#cinema option:selected").val();
  var cinemaname = $("#cinema option:selected").text();
  var start = $("#publishstart").val();
  var end = $("#publishend").val();
  var stock = $("input[name='stock']").val();

  var domcinema = `<div class="well ticked_cinema" data-stock=`+stock+` data-id= `+cinemaid+` data-start=`+start+` data-end=`+end+` style='word-break:break-all'>
                        `+cinemaname+`<button type='button' class="btn btn-primary" onclick="AddOneTime(this)">+</button>
                      </div>`;

    $("#cinemabox").append(domcinema);

}

function AddOneTi(){
  var newtime = $("#showmin").val();
  var newdom = `<span class="label label-warning">`+newtime+`</span>&nbsp`;
  var id = $("#btntimeadd").attr('data-cid');
  $("div[data-id='"+id+"']").append(newdom);

}
</script>
<script src="/public/com/jQuery-File-Upload-9.9.3/js/vendor/jquery.ui.widget.js"></script>
<script src="/public/com/jQuery-File-Upload-9.9.3/js/load-image.all.min.js"></script>
<script src="/public/com/jQuery-File-Upload-9.9.3/js/canvas-to-blob.min.js"></script>
<script src="/public/com/jQuery-File-Upload-9.9.3/js/jquery.iframe-transport.js"></script>
<script src="/public/com/jQuery-File-Upload-9.9.3/js/jquery.fileupload.js"></script>
<script src="/public/com/jQuery-File-Upload-9.9.3/js/jquery.fileupload-process.js"></script>
<script src="/public/com/jQuery-File-Upload-9.9.3/js/jquery.fileupload-image.js"></script>
<script type="text/javascript">
$(function(){
    $('#uploadcover').fileupload({
        url: "<?php echo url('Common/upload'); ?>",
        dataType: 'JSON',
        acceptFileTypes: 'jpg,png,gif,jpeg,bmp',
      maxFileSize: 8000000, // 800kb
      disableImageResize: /Android(?!.*Chrome)|Opera/.test(window.navigator && navigator.userAgent),
        imageMaxWidth: 300, //自动裁剪保持该宽度
        imageMaxHeight: 350,
        imageCrop: true,
        done: function (e, data) {
          if(data.result.ret == 1){
              $("input[name='cover']").val(data.result.file);
              $(".showcover").html("<img src='/"+data.result.file+"'>");
            }else{
              alert(data.result.msg);
            }
        },
        progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            $('#progress .progress-bar').css(
                'width',
                progress + '%'
            );
        }
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');

});
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
