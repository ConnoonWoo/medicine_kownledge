<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:97:"/Library/WebServer/Documents/medicine_kownledge/public/../application/index/view/Login/login.html";i:1554306365;s:88:"/Library/WebServer/Documents/medicine_kownledge/application/index/view/Common/_head.html";i:1554307097;s:90:"/Library/WebServer/Documents/medicine_kownledge/application/index/view/Common/_footer.html";i:1554303203;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<title>中药材知识系统</title>
<link href="/medicine_kownledge/public/static/css/bootstrap.css" rel='stylesheet' type='text/css' />
<script type='text/javascript' src="/medicine_kownledge/public/static/js/jquery-1.11.1.min.js"></script>
<link href="/medicine_kownledge/public/static/css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" href="/medicine_kownledge/public/static/images/favicon.ico" type="image/x-icon">
<link href="/medicine_kownledge/public/static/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="/medicine_kownledge/public/static/js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
  <script src="/medicine_kownledge/public/static/js/responsiveslides.min.js"></script>
<script>
    $(function () {
      $("#slider1").responsiveSlides({
         auto: true,
		 nav: true,
		 speed: 500,
		 namespace: "callbacks",
      });
    });
  </script>

  <!-- 引用百度地图API文件 -->
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=Fmw0Nn2iPgfKKVkdaNVBKqWWcO3P0uyK"></script>
<script type="text/javascript" src="http://api.map.baidu.com/library/SearchInfoWindow/1.5/src/SearchInfoWindow_min.js"></script>
<link rel="stylesheet" href="http://api.map.baidu.com/library/SearchInfoWindow/1.5/src/SearchInfoWindow_min.css" />
<link href="/medicine_kownledge/public/static/css/form.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="/medicine_kownledge/public/static/css/etalage.css">
<script src="/medicine_kownledge/public/static/js/jquery.etalage.min.js"></script>
<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 900,
					source_image_height: 1200,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>
</head>
<body>

<div class="header_top">
	 <div class="container">
		 <div class="logo">
		 	<a href="index.html"><img src="/medicine_kownledge/public/static/images/logo1.png" alt=""/></a></div>
		 <div class="header_right">中药材知识CHINESE MEDICINE</div>
	 </div>
</div>
<div class="mega_nav">
	 <div class="container">
		<div class="menu_sec">
			<!-- start header menu -->
			<ul class="megamenu skyblue">
				 <li class="active grid"><a class="color1" href="<?php echo url('Index/index'); ?>">主页</a></li>
				 <li class="grid"><a class="color2" href="<?php echo url('Map/index'); ?>">中药材资源地图</a></li>
				<li><a class="color4" href="#">中药材百科</a>
					<div class="megapanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									<h4>道地药材</h4>
									<ul>
										<li><a href="<?php echo url('Medicine/index'); ?>">维药</a></li>
										<li><a href="<?php echo url('Medicine/index'); ?>">秦药</a></li>
										<li><a href="<?php echo url('Medicine/index'); ?>">藏药</a></li>
										<li><a href="<?php echo url('Medicine/index'); ?>">川药</a></li>
										<li><a href="<?php echo url('Medicine/index'); ?>">云药</a></li>
										<li><a href="<?php echo url('Medicine/index'); ?>">贵药</a></li>
										<li><a href="<?php echo url('Medicine/index'); ?>">广药</a></li>
										<li><a href="<?php echo url('Medicine/index'); ?>">海药</a></li>
										<li><a href="<?php echo url('Medicine/index'); ?>">云药</a></li>
										<li><a href="<?php echo url('Medicine/index'); ?>">南药</a></li>
										<li><a href="<?php echo url('Medicine/index'); ?>">浙药</a></li>
										<li><a href="<?php echo url('Medicine/index'); ?>">淮药</a></li>
										<li><a href="<?php echo url('Medicine/index'); ?>">怀药</a></li>
										<li><a href="<?php echo url('Medicine/index'); ?>">北药</a></li>
										<li><a href="<?php echo url('Medicine/index'); ?>">蒙药</a></li>
										<li><a href="<?php echo url('Medicine/index'); ?>">关药</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<h4>中药材库</h4>
									<ul>
										<li><a href="<?php echo url('Medicine/index'); ?>">解表药</a></li>
										<li><a href="<?php echo url('Medicine/index'); ?>">清热药</a></li>
										<li><a href="<?php echo url('Medicine/index'); ?>">泻下药</a></li>
										<li><a href="<?php echo url('Medicine/index'); ?>">祛风湿药</a></li>
										<li><a href="<?php echo url('Medicine/index'); ?>">化湿药</a></li>
										<li><a href="<?php echo url('Medicine/index'); ?>">利水渗湿药</a></li>
										<li><a href="<?php echo url('Medicine/index'); ?>">温里药</a></li>
										<li><a href="<?php echo url('Medicine/index'); ?>">理气药</a></li>
										<li><a href="<?php echo url('Medicine/index'); ?>">祛湿药</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<h4>中药材库</h4>
									<ul>
										<li><a href="<?php echo url('Medicine/index'); ?>">驱虫药</a></li>
										<li><a href="<?php echo url('Medicine/index'); ?>">止血药</a></li>
										<li><a href="<?php echo url('Medicine/index'); ?>">活血化瘀药</a></li>
										<li><a href="<?php echo url('Medicine/index'); ?>">化痰止咳平喘药</a></li>
										<li><a href="<?php echo url('Medicine/index'); ?>">安神药</a></li>
										<li><a href="<?php echo url('Medicine/index'); ?>">平肝息风药</a></li>
										<li><a href="<?php echo url('Medicine/index'); ?>">开窍药</a></li>
										<li><a href="<?php echo url('Medicine/index'); ?>">补虚药</a></li>
										<li><a href="<?php echo url('Medicine/index'); ?>">收涩药</a></li>
									</ul>
								</div>
							</div>
							<div class="col1">
								<div class="h_nav">
									<h4>药用植物库</h4>
									<ul>
										<li><a href="<?php echo url('Medicine/index'); ?>">木兰科</a></li>
										<li><a href="<?php echo url('Medicine/index'); ?>">八角科</a></li>
										<li><a href="<?php echo url('Medicine/index'); ?>">五味子科</a></li>
										<li><a href="<?php echo url('Medicine/index'); ?>">番荔枝科</a></li>
										<li><a href="<?php echo url('Medicine/index'); ?>">樟科</a></li>
										<li><a href="<?php echo url('Medicine/index'); ?>">莲叶桐科</a></li>
										<li><a href="<?php echo url('Medicine/index'); ?>">毛茛(gen)科</a></li>
										<li><a href="<?php echo url('Medicine/index'); ?>">金鱼藻科</a></li>
										<li><a href="<?php echo url('Medicine/index'); ?>">睡莲科</a></li>
										<li><a href="<?php echo url('Medicine/index'); ?>">小檗(bo)科</a></li>
										<li><a href="<?php echo url('Medicine/index'); ?>">木通科</a></li>
										<li><a href="<?php echo url('Medicine/index'); ?>">防己科</a></li>
										<li><a href="<?php echo url('Medicine/index'); ?>">马兜铃科</a></li>
									</ul>	
								</div>												
							</div>	
	    				</div>
	    			</div>
				</li>				
				<li><a class="color5" href="#">中药材知识库</a>
					<div class="megapanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="<?php echo url('Kown/index'); ?>">中药鉴别</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="<?php echo url('Kown/index'); ?>">中药养生</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="<?php echo url('Kown/index'); ?>">中药炮制</a></li>
									</ul>	
								</div>												
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="<?php echo url('Kown/index'); ?>">中药种植</a></li>
									</ul>	
								</div>						
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="<?php echo url('Kown/index'); ?>">中药美容</a></li>
									</ul>	
								</div>
							</div>

						</div>
	    			</div>
				</li>
				<?php if(\think\Session::get('name') != ""): ?>
				<li><a class="color7" href="#">登录后功能</a>
					<div class="megapanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="<?php echo url('After/index'); ?>">个人信息</a></li>
									</ul>	
								</div>												
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="products.html">发布资源GPS</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="products.html">发布中药</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="products.html">发布经验</a></li>
									</ul>	
								</div>							
							</div>
						</div>
	    			</div>
				</li>
				<li><a class="color6" href="<?php echo url('Login/login_out'); ?>"><?php echo \think\Session::get('name'); ?></a></li>
				<?php else: ?>
				<li><a class="color6" href="<?php echo url('Login/index'); ?>">登录/注册</a></li>
				<?php endif; ?>

			</ul> 
		    <div class="search">
			 <form>
				<input type="text" value="" placeholder="Search...">
				<input type="submit" value="">
				</form>
		    </div>
	    	<div class="clearfix"></div>
		</div>
	</div>
</div>
<!---->
<div class="login_sec">
	 <div class="container">
		 <ol class="breadcrumb">
		  <li><a href="<?php echo url('Index/index'); ?>">主页</a></li>
		  <li class="active">登录</li>
		 </ol>
		 <h2>登录</h2>
		 <div class="col-md-6 log">			 
				 <p>欢迎,请填写账户信息登录</p>
				 <p>如果您没有账户, <a href="<?php echo url('Login/account'); ?>">请点击这里</a></p>
				 <form action="<?php echo url('Login/login_in'); ?>" method="post">
					 <h5>用户名：</h5>	
					 <input type="text" placeholder="email:" name="user_name" value="">
					 <h5>密码：</h5>
					 <input type="password" placeholder="password" name="password" value="">
					 <input type="submit" value="登录">
				 </form>				 
		 </div>
		  <div class="col-md-6 login-right">
			  	<h3>注册新账户</h3>
				<p>一个账户，便是与世界的距离。</p>
				<p>登录网站，发布新的药材，发布新的生产经验。与开发者进行深入的交流。在等什么，加入我们。</p>
				<a class="acount-btn" href="<?php echo url('Login/account'); ?>">创建新账户</a>
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>
<!---->
<div class="footer-content">
	 <div class="container">
		 <div class="ftr-grids">
			 <div class="col-md-3 ftr-grid">
				 <h4>中药材百科</h4>
				 <ul>
					 <li><a href="#">道地药材</a></li>
					 <li><a href="contact.html">中药材库</a></li>
					 <li><a href="#">药用植物库</a></li>				 
				 </ul>
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h4>中药材知识库</h4>
				 <ul>
					 <li><a href="#">中药鉴别</a></li>
					 <li><a href="#">中药养生</a></li>
					 <li><a href="#">中药炮制</a></li>
					 <li><a href="#">中药种植</a></li>
					 <li><a href="#">中药美容</a></li>
					 <li><a href="#">中药传说</a></li>					 
				 </ul>
			 </div>
			 <div class="col-md-6 ftr-grid">
				 <h4>中药传说</h4>
				 <ul>
				 	<li><a href=""><p>山一程，水一程，身向榆关那畔行，夜深千帐灯。</p>风一更，雪一更，聒碎乡心梦不成，故园无此声</a></li>
				 </ul>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->
<div class="footer">
	<div class="container">
		<div class="copywrite" style="margin-top:20px">
			<p>Copyright &copy; 2019.湖北中医药大学信息工程学院Connoon</p>
		</div>			 
	</div>
</div>

<script type="text/javascript"> 
var map = new BMap.Map("baidu_map");
// 创建地图实例  
var point = new BMap.Point(107.3, 35.5);
// 创建点坐标  
map.centerAndZoom(point, 5);
// 初始化地图，设置中心点坐标和地图级别
//var opts = {anchor: BMAP_ANCHOR_BOTTOM_RIGHT,
//			type: BMAP_NAVIGATION_CONTROL_LARGE
//		};
//map.addControl(new BMap.NavigationControl(opts));
//添加控件
map.enableScrollWheelZoom(true); 
//var marker = new BMap.Marker(point);        // 创建标注    
//map.addOverlay(marker);
//var mes = {    
//    width : 250,     // 信息窗口宽度    
//    height: 100,     // 信息窗口高度    
//    title : "Hello"  // 信息窗口标题   
//}    
//var infoWindow = new BMap.InfoWindow("World", mes);  // 创建信息窗口对象
// marker.addEventListener("click", function(){    
// 	map.openInfoWindow(infoWindow, map.getCenter());
//     alert("您点击了标注");    
 //});
var customLayer=new BMap.CustomLayer({  
    geotableId: 198385,   
    q: '', //检索关键字  
    tags: '', //空格分隔的多字符串  
    filter: '' //过滤条件,参考http://lbsyun.baidu.com/index.php?title=lbscloud/api/geosearch  
});
map.addTileLayer(customLayer);
customLayer.addEventListener('hotspotclick',callback);
function callback(e)//单击热点图层
	{
			var customPoi = e.customPoi;//poi的默认字段
			//var contentPoi=e.content;//poi的自定义字段
			var content = '<p style="width:280px;margin:0;line-height:20px;">地址：' + customPoi.address + '<br/>价格:元'+'</p>';
			var searchInfoWindow = new BMapLib.SearchInfoWindow(map, content, {
				title: customPoi.title, //标题
				width: 290, //宽度
				height: 40, //高度
				panel : "panel", //检索结果面板
				enableAutoPan : true, //自动平移
				enableSendToPhone: false, //是否显示发送到手机按钮
				searchTypes :[
					BMAPLIB_TAB_SEARCH,   //周边检索
					BMAPLIB_TAB_TO_HERE,  //到这里去
					BMAPLIB_TAB_FROM_HERE //从这里出发
				]
			});
			var point = new BMap.Point(customPoi.point.lng, customPoi.point.lat);
			searchInfoWindow.open(point);
		}
</script>  
</body>
</html>