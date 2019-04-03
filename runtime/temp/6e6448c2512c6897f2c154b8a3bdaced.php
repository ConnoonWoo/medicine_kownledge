<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:108:"/Library/WebServer/Documents/medicine_kownledge/public/../application/index/view/Medicine/medicine_more.html";i:1554219607;s:88:"/Library/WebServer/Documents/medicine_kownledge/application/index/view/Common/_head.html";i:1554219607;s:90:"/Library/WebServer/Documents/medicine_kownledge/application/index/view/Common/_footer.html";i:1554219607;}*/ ?>
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
				<li><a class="color6" href="<?php echo url('Login/index'); ?>">登录/注册</a></li>
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
<div class="single-sec">
	 <div class="container">
		 <ol class="breadcrumb">
			 <li><a href="<?php echo url('Index/index'); ?>">主页</a></li>
			 <li class="active">中药材百科</li>
			 <li class="active">芦荟</li>
		 </ol>
		 <!-- start content -->	
			<div class="col-md-9 det">
				  <div class="single_left">
					 <div class="grid images_3_of_2">
						 <ul id="etalage">
							<li>
								<a href="#">
									<img class="etalage_thumb_image" src="/medicine_kownledge/public/static/images/ts2.jpg" class="img-responsive" />
									<img class="etalage_source_image" src="/medicine_kownledge/public/static/images/ts2.jpg" class="img-responsive" title="" />
								</a>
							</li>
							<li>
								<img class="etalage_thumb_image" src="/medicine_kownledge/public/static/images/ts2.jpg" class="img-responsive" />
								<img class="etalage_source_image" src="/medicine_kownledge/public/static/images/ts2.jpg" class="img-responsive" title="" />
							</li>							
						    <li>
								<img class="etalage_thumb_image" src="/medicine_kownledge/public/static/images/ts2.jpg" class="img-responsive"  />
								<img class="etalage_source_image" src="/medicine_kownledge/public/static/images/ts2.jpg"class="img-responsive"  />
							</li>
						 </ul>
						 <div class="clearfix"></div>		
				      </div>
				  </div>
				  <div class="single-right">
					 <h3>芦荟<span>(中药材)</span></h3>
					 <div class="id"><h4>中药学名: ALOE</h4></div>
					  <div style="height:20px"></div>
					  <div class="item-list col-md-6">
						 <ul>
							 <li><span style="color:red">中药名称</span>: 芦荟</li>
							 <li>别名: 卢会、象胆</li>
							 <li>科: 百合科</li>
							 <li>所属功效区: 泻下药</li>
							 <li>分布区域: 南美洲及西印度群</li>
						 </ul>
					  </div>
					  <div class="item-list col-md-6">
						 <ul>
							 <li><span style="color:red">中药名称</span>: 芦荟</li>
							 <li>别名: 卢会、象胆</li>
							 <li>科: 百合科</li>
							 <li>所属功效区: 泻下药</li>
							 <li>分布区域: 南美洲及西印度群</li>
						 </ul>
					  </div>
					  <div class="clearfix"></div>
					  <div class="single-bottom1">
						<h6>简介</h6>
						<p class="prod-desc">　　芦荟为百合科植物。种植2-3年后即可收获。于8-9月将中下部生长良好的叶片分批采收。</p>
					 </div>					 
				  </div>
				  <div class="clearfix"></div>
				  <div class="sofaset-info">
						 <h3>来源</h3>
						 <div>本品为百合科植物。种植2-3年后即可收获。于8-9月将中下部生长良好的叶片分批采收本品为百合科植物。种植2-3年后即可收获。于8-9月将中下部生长良好的叶片分批采收</div>
						 <h3>分布产地</h3>
						 <div>本品为百合科植物。种植2-3年后即可收获。于8-9月将中下部生长良好的叶片分批采收</div>
				  </div>				  					
		    </div>
			<div class="rsidebar span_1_of_left">
				<section  class="sky-form">
					 <div class="product_right">
						 <h4 class="m_2"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>每日推荐</h4>
						 <div class="tab1">
							 <ul class="place">								
								 <li class="sort">道地药材-维药</li>
								 <li class="by"><img src="/medicine_kownledge/public/static/images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">						
									<a href="#"><p>天山雪莲</p></a>
									<a href="#"><p>灵芝</p></a>
									<a href="#"><p>冰雪</p></a>
									<a href="#"><p>高山</p></a>
									<a href="#"><p>冰川</p></a>
						     </div>
					      </div>						  
						  <div class="tab2">
							 <ul class="place">								
								 <li class="sort">中药材库-清热药</li>
								 <li class="by"><img src="/medicine_kownledge/public/static/images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">						
									<a href="#"><p>板蓝根</p></a>
									<a href="#"><p>金银花</p></a>
									<a href="#"><p>颗粒</p></a>
									<a href="#"><p>圣水</p></a>
									<a href="#"><p>圣水</p></a>
						     </div>
					      </div>
						  <div class="tab3">
							 <ul class="place">								
								 <li class="sort">药用植物库-木兰科</li>
								 <li class="by"><img src="/medicine_kownledge/public/static/images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">						
									<a href="#"><p>花</p></a>
									<a href="#"><p>木兰花</p></a>
									<a href="#"><p>好看的木兰花</p></a>
									<a href="#"><p>洁白的木兰花</p></a>
									<a href="#"><p>洁白的木兰花</p></a>
						     </div>
					      </div>
					      <!--
						  <div class="tab4">
							 <ul class="place">								
								 <li class="sort">Bed & Bath</li>
								 <li class="by"><img src="images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">						
									<a href="#"><p>Towels</p></a>
									<a href="#"><p>Bath Roles</p></a>
									<a href="#"><p>Mirrors</p></a>
									<a href="#"><p>Soap Stands</p></a>
						     </div>
					      </div>
						  <div class="tab5">
							 <ul class="place">								
								 <li class="sort">Fabric</li>
								 <li class="by"><img src="images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">						
									<a href="#"><p>Sofas</p></a>
									<a href="#"><p>Fabric Sofas</p></a>
									<a href="#"><p>Beds</p></a>
									<a href="#"><p>Relax Chairs</p></a>
						     </div>
					      </div>
						  -->
						<script>
							$(document).ready(function(){
								$(".tab1 .single-bottom").hide();
								$(".tab2 .single-bottom").hide();
								$(".tab3 .single-bottom").hide();
								$(".tab4 .single-bottom").hide();
								$(".tab5 .single-bottom").hide();
								
								$(".tab1 ul").click(function(){
									$(".tab1 .single-bottom").slideToggle(300);
								})
								$(".tab2 ul").click(function(){
									$(".tab2 .single-bottom").slideToggle(300);
								})
								$(".tab3 ul").click(function(){
									$(".tab3 .single-bottom").slideToggle(300);
								})
								$(".tab4 ul").click(function(){
									$(".tab4 .single-bottom").slideToggle(300);
								})	
								$(".tab5 ul").click(function(){
									$(".tab5 .single-bottom").slideToggle(300);
								})	
							});
						</script>
						<!-- script -->					 
				 </section>
				 <section  class="sky-form">
					 <h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>相关中药</h4>
					 <div class="xiangguan">
					 	<div class="col-md-4">
				 			<a href="<?php echo url('Medicine/index_more'); ?>"><img src="/medicine_kownledge/public/static/images/banner2.jpg" width="100%" height="50px" alt=""/></a>
				 			<a href="<?php echo url('Medicine/index_more'); ?>">犀牛角</a>
					 	</div>
					 	<div class="col-md-4">
					 		<a href="<?php echo url('Medicine/index_more'); ?>"><img src="/medicine_kownledge/public/static/images/banner2.jpg" width="100%" height="50px" alt=""/></a>
				 			<a href="<?php echo url('Medicine/index_more'); ?>">犀牛角</a>
					 	</div>
					 	<div class="col-md-4">
					 		<a href="<?php echo url('Medicine/index_more'); ?>"><img src="/medicine_kownledge/public/static/images/banner2.jpg" width="100%" height="50px" alt=""/></a>
				 			<a href="<?php echo url('Medicine/index_more'); ?>">犀牛角</a>
					 	</div>

					 	<div class="col-md-4">
				 			<a href="<?php echo url('Medicine/index_more'); ?>"><img src="/medicine_kownledge/public/static/images/banner2.jpg" width="100%" height="50px" alt=""/></a>
				 			<a href="<?php echo url('Medicine/index_more'); ?>">犀牛角</a>
					 	</div>
					 	<div class="col-md-4">
					 		<a href="<?php echo url('Medicine/index_more'); ?>"><img src="/medicine_kownledge/public/static/images/banner2.jpg" width="100%" height="50px" alt=""/></a>
				 			<a href="<?php echo url('Medicine/index_more'); ?>">犀牛角</a>
					 	</div>
					 	<div class="col-md-4">
					 		<a href="<?php echo url('Medicine/index_more'); ?>"><img src="/medicine_kownledge/public/static/images/banner2.jpg" width="100%" height="50px" alt=""/></a>
				 			<a href="<?php echo url('Medicine/index_more'); ?>">犀牛角</a>
					 	</div>

					 	<div class="col-md-4">
				 			<a href="<?php echo url('Medicine/index_more'); ?>"><img src="/medicine_kownledge/public/static/images/banner2.jpg" width="100%" height="50px" alt=""/></a>
				 			<a href="<?php echo url('Medicine/index_more'); ?>">犀牛角</a>
					 	</div>
					 	<div class="col-md-4">
					 		<a href="<?php echo url('Medicine/index_more'); ?>"><img src="/medicine_kownledge/public/static/images/banner2.jpg" width="100%" height="50px" alt=""/></a>
				 			<a href="<?php echo url('Medicine/index_more'); ?>">犀牛角</a>
					 	</div>
					 	<div class="col-md-4">
					 		<a href="<?php echo url('Medicine/index_more'); ?>"><img src="/medicine_kownledge/public/static/images/banner2.jpg" width="100%" height="50px" alt=""/></a>
				 			<a href="<?php echo url('Medicine/index_more'); ?>">犀牛角</a>
					 	</div>
						<!--
						<label class="checkbox"><a href="index.html"><input type="checkbox" name="checkbox"><i></i>人参</a></label>
						<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>鹿茸</label>
						<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>10% - 5% (2)</label>
						<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other(50)</label>
						<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>鹿茸</label>
						<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>10% - 5% (2)</label>
						<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other(50)</label>
						-->
						 
					 </div>
				 </section> 									 			 
			   </div>
		</div>	     				
		     <div class="clearfix"></div>
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