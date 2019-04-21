<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:97:"/Library/WebServer/Documents/medicine_kownledge/public/../application/index/view/Index/index.html";i:1554639821;s:88:"/Library/WebServer/Documents/medicine_kownledge/application/index/view/Common/_head.html";i:1555758462;s:90:"/Library/WebServer/Documents/medicine_kownledge/application/index/view/Common/_footer.html";i:1554638676;}*/ ?>
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
										<li><a href="<?php echo url('Medicine/index',array('id'=> 1)); ?>">维药</a></li>
										<li><a href="<?php echo url('Medicine/index',array('id'=> 2)); ?>">秦药</a></li>
										<li><a href="<?php echo url('Medicine/index',array('id'=> 3)); ?>">藏药</a></li>
										<li><a href="<?php echo url('Medicine/index',array('id'=> 4)); ?>">川药</a></li>
										<li><a href="<?php echo url('Medicine/index',array('id'=> 5)); ?>">云药</a></li>
										<li><a href="<?php echo url('Medicine/index',array('id'=> 6)); ?>">贵药</a></li>
										<li><a href="<?php echo url('Medicine/index',array('id'=> 7)); ?>">广药</a></li>
										<li><a href="<?php echo url('Medicine/index',array('id'=> 8)); ?>">海药</a></li>
										<li><a href="<?php echo url('Medicine/index',array('id'=> 9)); ?>">云药</a></li>
										<li><a href="<?php echo url('Medicine/index',array('id'=> 10)); ?>">浙药</a></li>
										<li><a href="<?php echo url('Medicine/index',array('id'=> 11)); ?>">淮药</a></li>
										<li><a href="<?php echo url('Medicine/index',array('id'=> 12)); ?>">怀药</a></li>
										<li><a href="<?php echo url('Medicine/index',array('id'=> 13)); ?>">北药</a></li>
										<li><a href="<?php echo url('Medicine/index',array('id'=> 14)); ?>">蒙药</a></li>
										<li><a href="<?php echo url('Medicine/index',array('id'=> 15)); ?>">关药</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<h4>中药材库</h4>
									<ul>
										<li><a href="<?php echo url('Medicine/index',array('id'=> 16)); ?>">解表药</a></li>
										<li><a href="<?php echo url('Medicine/index',array('id'=> 17)); ?>">清热药</a></li>
										<li><a href="<?php echo url('Medicine/index',array('id'=> 18)); ?>">泻下药</a></li>
										<li><a href="<?php echo url('Medicine/index',array('id'=> 19)); ?>">祛风湿药</a></li>
										<li><a href="<?php echo url('Medicine/index',array('id'=> 20)); ?>">化湿药</a></li>
										<li><a href="<?php echo url('Medicine/index',array('id'=> 21)); ?>">利水渗湿药</a></li>
										<li><a href="<?php echo url('Medicine/index',array('id'=> 22)); ?>">温里药</a></li>
										<li><a href="<?php echo url('Medicine/index',array('id'=> 23)); ?>">理气药</a></li>
										<li><a href="<?php echo url('Medicine/index',array('id'=> 24)); ?>">祛湿药</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<h4>中药材库</h4>
									<ul>
										<li><a href="<?php echo url('Medicine/index',array('id'=> 25)); ?>">驱虫药</a></li>
										<li><a href="<?php echo url('Medicine/index',array('id'=> 26)); ?>">止血药</a></li>
										<li><a href="<?php echo url('Medicine/index',array('id'=> 27)); ?>">活血化瘀药</a></li>
										<li><a href="<?php echo url('Medicine/index',array('id'=> 28)); ?>">化痰止咳平喘药</a></li>
										<!--<li><a href="<?php echo url('Medicine/index',array('id'=> 1)); ?>">安神药</a></li>
										<li><a href="<?php echo url('Medicine/index',array('id'=> 1)); ?>">平肝息风药</a></li>
										<li><a href="<?php echo url('Medicine/index',array('id'=> 1)); ?>">开窍药</a></li>
										<li><a href="<?php echo url('Medicine/index',array('id'=> 1)); ?>">补虚药</a></li>
										<li><a href="<?php echo url('Medicine/index',array('id'=> 1)); ?>">收涩药</a></li>-->
									</ul>
								</div>
							</div>
							<div class="col1">
								<div class="h_nav">
									<h4>药用植物库</h4>
									<ul>
										<li><a href="<?php echo url('Medicine/index',array('id'=> 29)); ?>">木兰科</a></li>
										<li><a href="<?php echo url('Medicine/index',array('id'=> 30)); ?>">八角科</a></li>
										<li><a href="<?php echo url('Medicine/index',array('id'=> 31)); ?>">五味子科</a></li>
										<li><a href="<?php echo url('Medicine/index',array('id'=> 32)); ?>">番荔枝科</a></li>
										<li><a href="<?php echo url('Medicine/index',array('id'=> 33)); ?>">樟科</a></li>
										<li><a href="<?php echo url('Medicine/index',array('id'=> 34)); ?>">莲叶桐科</a></li>
										<li><a href="<?php echo url('Medicine/index',array('id'=> 35)); ?>">毛茛(gen)科</a></li>
										<li><a href="<?php echo url('Medicine/index',array('id'=> 36)); ?>">金鱼藻科</a></li>
										<li><a href="<?php echo url('Medicine/index',array('id'=> 37)); ?>">睡莲科</a></li>
										<li><a href="<?php echo url('Medicine/index',array('id'=> 38)); ?>">小檗(bo)科</a></li>
										<li><a href="<?php echo url('Medicine/index',array('id'=> 39)); ?>">木通科</a></li>
										<li><a href="<?php echo url('Medicine/index',array('id'=> 40)); ?>">防己科</a></li>
										<li><a href="<?php echo url('Medicine/index',array('id'=> 41)); ?>">马兜铃科</a></li>
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
										<li><a href="<?php echo url('Kown/index',array('id'=>2)); ?>">中药鉴别</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="<?php echo url('Kown/index',array('id'=>3)); ?>">中药美容</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="<?php echo url('Kown/index',array('id'=>4)); ?>">中药炮制</a></li>
									</ul>	
								</div>												
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="<?php echo url('Kown/index',array('id'=>5)); ?>">中药养生</a></li>
									</ul>	
								</div>						
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="<?php echo url('Kown/index',array('id'=>6)); ?>">中药种植</a></li>
									</ul>	
								</div>
							</div>

						</div>
	    			</div>
				</li>
				<?php if(\think\Session::get('name') != ""): ?>
				<li><a class="color7" href="#">发布</a>
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
										<li><a href="<?php echo url('After/create_gps'); ?>">发布资源GPS</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="<?php echo url('After/create_medicine'); ?>">发布中药</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="<?php echo url('After/create_suffer'); ?>">发布经验</a></li>
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
<div class="content">
	 <div class="container">
		 <div class="slider">
				<ul class="rslides" id="slider1">
				  <li><img src="/medicine_kownledge/public/static/images/banner2.jpg" alt=""></li>
				  <li><img src="/medicine_kownledge/public/static/images/banner1.jpg" alt=""></li>
				  <li><img src="/medicine_kownledge/public/static/images/banner3.jpg" alt=""></li>
				</ul>
		 </div>
	 </div>
</div>

<div class="content_center">
	 <div class="container">
		 <div class="sofas">
			 <div class="col-md-7 sofas">
			 	<div style="height:300px">
				 	<a href="#">最新版</a>
					<div class="h_nav" style="margin-left:20px">
						<ul>
							<?php if(is_array($new) || $new instanceof \think\Collection || $new instanceof \think\Paginator): if( count($new)==0 ) : echo "" ;else: foreach($new as $key=>$list): ?>
							<li><a href="<?php echo url('Kown/index_more',array('type_id'=>$list['type'],'id'=>$list['id'])); ?>"><?php echo $list['name']; ?></a></li>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>	
					</div>			
			 	</div>
			 	<div style="height:300px">
				 	<a href="#">最热版</a>
				 	<div class="h_nav" style="margin-left:20px">
						<ul>
							<?php if(is_array($new) || $new instanceof \think\Collection || $new instanceof \think\Paginator): if( count($new)==0 ) : echo "" ;else: foreach($new as $key=>$list): ?>
							<li><a href="<?php echo url('Kown/index_more',array('type_id'=>$list['type'],'id'=>$list['id'])); ?>"><?php echo $list['name']; ?></a></li>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>	
					</div>	
			 	</div>
			 </div>
			 <div class="col-md-5"  style="height:600px">
				 <a href="products.html">资源地图</a>
				 <div id="baidu_map" style="height:570px;"></div>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>

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
					 <li><a href="<?php echo url('Kown/index',array('id'=>2)); ?>">中药鉴别</a></li>
					 <li><a href="<?php echo url('Kown/index',array('id'=>3)); ?>">中药养生</a></li>
					 <li><a href="<?php echo url('Kown/index',array('id'=>4)); ?>">中药炮制</a></li>
					 <li><a href="<?php echo url('Kown/index',array('id'=>5)); ?>">中药种植</a></li>
					 <li><a href="<?php echo url('Kown/index',array('id'=>6)); ?>">中药美容</a></li>
					 <li><a href="<?php echo url('Kown/index',array('id'=>1)); ?>">中药传说</a></li>
				 </ul>
			 </div>
			 <div class="col-md-6 ftr-grid">
				 <h4>中药传说</h4>
				 <ul>
				 	<li><a href="<?php echo url('Kown/index_more',array('type_id'=>1,'id'=>2)); ?>">
						<p>中药材:大枣</p>荆棘赤心百益红，山东茌县史作贡。<br>
						维生素丸是美誉，大枣汤将燥脏冲。<br>
						略亚菖蒲通九窍，可和百药甘草同。<br>
						保健药膳是良方，粥饼久食乐融融。</a></li>
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