<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!--标题块-->
  <title>后台管理系统</title>
  <meta name="description" content="这是一个 index 页面">
  <meta name="keywords" content="index">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="icon" type="image/png" href="assets/i/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-title" content="Amaze UI" />
  <link rel="stylesheet" href="/meal/Public/admin/css/amazeui.min.css"/>
  <link rel="stylesheet" href="/meal/Public/admin/css/admin.css">
  <!--[if (gte IE 9)|!(IE)]><!-->
<script src="/meal/Public/admin/js/jquery.min.js"></script>
<script src="/meal/Public/admin/js/amazeui.min.js"></script>
<script src="/meal/Public/jquery-1.7.2.min.js"></script>
<!--<![endif]-->
<script src="/meal/Public/admin/js/app.js"></script>
  
</head>
<body>

    <header class="am-topbar admin-header">
      <div class="am-topbar-brand">
        <strong>悦娱游戏 /</strong> <small>订餐管理系统</small>
      </div>
      <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

      <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

        <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
          <li></li>
          <li class="am-dropdown" data-am-dropdown>
            <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
              <span class="am-icon-users"></span> 餐费减免 <span class="am-icon-caret-down"></span>
            </a>
            <ul class="am-dropdown-content">
              <li><a href="<?php echo U('Admin/Orders/derate');?>"><span class="am-icon-cog"></span> 减免页 </a></li>
            </ul>
          </li>
          <li class="am-dropdown" data-am-dropdown>
            <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
              <span class="am-icon-users"></span> <?php echo ($_SESSION['homeMealInfo']['username']); ?> <span class="am-icon-caret-down"></span>
            </a>
            <ul class="am-dropdown-content">
              <li><a href="<?php echo U('Home/Index/index');?>"><span class="am-icon-cog"></span> 前台点餐 </a></li>
              <li><a href="<?php echo U('Home/Login/logout');?>"><span class="am-icon-power-off"></span> 退出</a></li>
            </ul>
          </li>
          <li><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
        </ul>
      </div>
    </header>


<!--这个div包含整体,勿修改!!!!!!!!!!!!!!!!!-->
<div class="am-cf admin-main">
  <!-- sidebar start -->
  
         <div class="admin-sidebar">
         
          <!--导航栏块-->
         
              <ul class="am-list admin-sidebar-list">
                <li><a href="<?php echo U('index/index');?>"><span class="am-icon-home"></span> 首页</a></li>
                <li info="admin-User">
                  <a class="am-cf am-collapsed" data-am-collapse="{target: '#list-User'}"><span class="am-icon-bars"></span> 用户管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
                  <ul class="am-list am-collapse admin-sidebar-sub" id="list-User" style="">
                    <li id="uselist"><a href="<?php echo U('Admin/User/index');?>" class="am-cf"><span class="am-icon-table"></span>用户列表<span class="am-badge am-badge-secondary am-margin-right am-fr"></span></a></li>
                  </ul>
                </li>

                <li info="admin-Orders">
                  <a class="am-cf am-collapsed" data-am-collapse="{target: '#list-Orders'}"><span class="am-icon-comments-o"></span> 食物订单管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
                  <ul class="am-list am-collapse admin-sidebar-sub" id="list-Orders" style="">
                    <li id="uselist"><a href="<?php echo U('Admin/Orders/index');?>" class="am-cf"><span class="am-icon-table"></span> 食物订单列表<span class="am-badge am-badge-secondary am-margin-right am-fr"></span></a></li>
                    <!-- <li><a href="admin-gallery.html"><span class="am-icon-th"></span> 相册页面</a></li>
                    <li><a href="admin-log.html"><span class="am-icon-calendar"></span> 系统日志</a></li>
                    <li><a href="admin-404.html"><span class="am-icon-bug"></span> 404</a></li> -->
                  </ul>
                </li>           
 
                <li><a href="<?php echo U('Home/Login/logout');?>"><span class="am-icon-sign-out"></span> 注销</a></li>

              </ul>
          
            
              <!--公告栏块-1-->
            
                    <div class="am-panel am-panel-default admin-sidebar-panel">
                      <div class="am-panel-bd">
                        <p><span class="am-icon-bookmark"></span> 公告1</p>
                        <p>这里写公告之类的信息</p>
                      </div>
                    </div>
            

              <!--公告栏块-2-->
            
                  <div class="am-panel am-panel-default admin-sidebar-panel">
                    <div class="am-panel-bd">
                      <p><span class="am-icon-tag"></span> 公告2</p>
                      <p>这里写公告之类的信息</p>
                    </div>
                  </div>
            
  
        </div>
  
  <!-- sidebar end -->
  <script>
      // 控制器： 不同模块展开不同list
      var str = "/meal/index.php/Admin/User";
                    var newstr = str.split('/').pop();
                    $('li[info=admin-'+newstr+']').children().eq(0).removeClass('am-collapsed');
                    $('li[info=admin-'+newstr+']').children().eq(1).addClass('am-in');
  </script>
  <!-- 内容模块-->
  
	 <div class="admin-content">
    <div class="am-cf am-padding">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">充值</strong></div>
    </div>

    <hr/>

    <div class="am-g">
      <div class="am-u-sm-12 am-u-md-4 am-u-md-push-8"></div>
      <div class="am-u-sm-12 am-u-md-8 am-u-md-pull-4">
        <form class="am-form am-form-horizontal" action="<?php echo U('Admin/User/pay');?>" method='post'>
          <input type='hidden' name='id' value="<?php echo ($row['id']); ?>">
          <div class="am-form-group">
            <label for="user-name" class="am-u-sm-3 am-form-label">用户名</label>
            <div class="am-u-sm-9">
              <input type="text" id="user-name" value="<?php echo ($row['username']); ?>" readonly>
            </div>
          </div>

          <div class="am-form-group">
            <label for="user-name" class="am-u-sm-3 am-form-label">剩余金额</label>
            <div class="am-u-sm-9">
              <input type="text" id="user-name"  value="<?php echo ($row['money']); ?>" readonly>
            </div>
          </div>

          <div class="am-form-group">
            <label for="user-name" class="am-u-sm-3 am-form-label">充值金额</label>
            <div class="am-u-sm-9">
              <input type="number" id="user-name" name='money' placeholder="充值金额">
            </div>
          </div>

          <div class="am-form-group">
            <label for="user-name" class="am-u-sm-3 am-form-label"></label>
            <div class="am-u-sm-9" style='color:red'>输入负数可以进行金额减少</div>
          </div>

          <div class="am-form-group">
            <div class="am-u-sm-9 am-u-sm-push-3">
              <a href="<?php echo U('Admin/User/index');?>" type="button" class="am-btn am-btn-primary">返回</a>
              <input type="submit" class="am-btn am-btn-primary" value='保存修改'>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

</div>

<footer>
  <hr>
  <p class="am-padding-left">© 悦娱游戏<a href="http://www.mycodes.net/" target="_blank"></a></p>
</footer>
    
<!--[if lt IE 9]>
<script src="/meal/Public/admin/js/jquery1.11.1.min.js"></script>
<script src="/meal/Public/admin/js/modernizr.js"></script>
<script src="/meal/Public/admin/js/polyfill/rem.min.js"></script>
<script src="/meal/Public/admin/js/polyfill/respond.min.js"></script>
<script src="/meal/Public/admin/js/amazeui.legacy.js"></script>
<![endif]-->


</body>
</html>