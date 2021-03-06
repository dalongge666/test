﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/favicon.ico" >
<link rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5shiv.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>H-ui.admin v3.1</title>
<meta name="keywords" content="">
<meta name="description" content="">
</head>
<body>
<!--头部-->
<header class="navbar-wrapper">
	<div class="navbar navbar-fixed-top">
		<div class="container-fluid cl"> <a class="logo navbar-logo f-l mr-10 hidden-xs" href="{{route('bg')}}">admin</a> <a class="logo navbar-logo-m f-l mr-10 visible-xs" href="/aboutHui.shtml">H-ui</a>
			<span class="logo navbar-slogan f-l mr-10 hidden-xs"></span>
			<a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
			<nav class="nav navbar-nav">
		</nav>
		<nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
			<ul class="cl">
				<li>（管理员账号级别）</li>
				<li class="dropDown dropDown_hover">
					<a href="#" class="dropDown_A">（管理员账号名称）<i class="Hui-iconfont">&#xe6d5;</i></a>
					<ul class="dropDown-menu menu radius box-shadow">
						<li><a href="javascript:;" onClick="myselfinfo()">个人信息</a></li>
						<li><a href="#">切换账户</a></li>
						<li><a href="#">退出</a></li>
				</ul>
			</li>

{{--				提示消息--}}
				<li id="Hui-msg">
					<a href="#" title="消息">
						<span class="badge badge-danger">1</span>
						<i class="Hui-iconfont" style="font-size:18px">&#xe68a;</i>
					</a>
				</li>


				<li id="Hui-skin" class="dropDown right dropDown_hover"> <a href="javascript:;" class="dropDown_A" title="换肤"><i class="Hui-iconfont" style="font-size:18px">&#xe62a;</i></a>
					<ul class="dropDown-menu menu radius box-shadow">
						<li><a href="javascript:;" data-val="default" title="默认（黑色）">默认（黑色）</a></li>
						<li><a href="javascript:;" data-val="blue" title="蓝色">蓝色</a></li>
						<li><a href="javascript:;" data-val="green" title="绿色">绿色</a></li>
						<li><a href="javascript:;" data-val="red" title="红色">红色</a></li>
						<li><a href="javascript:;" data-val="yellow" title="黄色">黄色</a></li>
						<li><a href="javascript:;" data-val="orange" title="橙色">橙色</a></li>
					</ul>
				</li>


			</ul>
		</nav>
	</div>
</div>
</header>

<!--左侧菜单-->
<aside class="Hui-aside">
	<div class="menu_dropdown bk_2">

{{--		管理员管理--}}
		<dl id="menu-admin">
			<dt><i class="Hui-iconfont">&#xe62d;</i> 管理员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="{{route('bg.admin.rbac')}}" data-title="权限管理" href="javascript:void(0)">权限管理</a></li>
					<li><a data-href="{{route('bg.admin.list')}}" data-title="管理员列表" href="javascript:void(0)">管理员列表</a></li>
			</ul>
		</dd>
	</dl>
{{--        标签管理--}}
        <dl id="menu-admin">
            <dt><i class="Hui-iconfont">&#xe62d;</i> 标签管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="{{route('bg.label.list')}}" data-title="标签列表" href="javascript:void(0)">标签列表</a></li>
                    <li><a data-href="{{route('bg.label.add')}}" data-title="添加标签" href="javascript:void(0)">添加标签</a></li>
                </ul>
            </dd>
        </dl>

{{--		财务管理--}}
		<dl id="menu-admin">
			<dt><i class="Hui-iconfont">&#xe62d;</i> 财务管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="{{route('bg.finance.list')}}" data-title="财务列表" href="javascript:void(0)">财务列表</a></li>
					<li><a data-href="{{route('bg.finance.add')}}" data-title="添加财务" href="javascript:void(0)">添加财务</a></li>
				</ul>
			</dd>
		</dl>

{{--		充值管理--}}
		<dl id="menu-admin">
			<dt><i class="Hui-iconfont">&#xe62d;</i> 充值管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="{{route('bg.pay.list')}}" data-title="已充值列表" href="javascript:void(0)">充值列表</a></li>
					<li><a data-href="{{route('bg.pay.add')}}" data-title="充值" href="javascript:void(0)">充值</a></li>
				</ul>
			</dd>
		</dl>

{{--		垫付管理--}}
		<dl id="menu-admin">
			<dt><i class="Hui-iconfont">&#xe62d;</i> 垫付管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="{{route('bg.invest.list')}}" data-title="已申请列表" href="javascript:void(0)">已申请列表</a></li>
					<li><a data-href="{{route('bg.invest.add')}}" data-title="申请垫付" href="javascript:void(0)">申请垫付</a></li>
				</ul>
			</dd>
		</dl>

</div>
</aside>


<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>

<!--主体-->
<section class="Hui-article-box">

<!--主体标签位置-->
	<div id="Hui-tabNav" class="Hui-tabNav hidden-xs">
		<div class="Hui-tabNav-wp">
			<ul id="min_title_list" class="acrossTab cl">

				<li class="active">
					<span title="我的桌面" data-href="{{route('bg.welcome')}}">我的桌面</span>
					<em></em>
				</li>
		</ul>
	</div>
		<div class="Hui-tabNav-more btn-group"><a id="js-tabNav-prev" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d4;</i></a><a id="js-tabNav-next" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d7;</i></a></div>
</div>

<!--主体内容-->
	<div id="iframe_box" class="Hui-article">
		<div class="show_iframe">
			<div style="display:none" class="loading"></div>
			<iframe scrolling="yes" frameborder="0" src="{{route('bg.welcome')}}"></iframe>
	</div>
</div>

</section>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->


<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="lib/jquery.contextmenu/jquery.contextmenu.r2.js"></script>
<script type="text/javascript">

/*个人信息*/
function myselfinfo(){
	layer.open({
		type: 1,
		area: ['300px','200px'],
		fix: false, //不固定
		maxmin: true,
		shade:0.4,
		title: '查看信息',
		content: '<div>管理员信息</div>'
	});
}




</script> 


</body>
</html>