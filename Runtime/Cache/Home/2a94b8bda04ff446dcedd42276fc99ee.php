<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-COMPATIBLE">
    <meta name="viewport" content="width=device-width,initial-scale=1">
	<title>frameset</title>

	<link rel="stylesheet" href="/HyAdmin-master/Public/assets/global/plugins/bootstrap/css/bootstrap.min.css" type="text/css">
	<style>
	 	@font-face{
		    font-family: 'Pacifico';
		   src: url(/HyAdmin-master/Public/assets/global/fonts/Pacifico.ttf)format('truetype');
		 }
		body{
			font-family: "微软雅黑";
		}
	
		#nav_top{
			position: fixed;
			width:100%;
			z-index:100;
			background-color:transparent;
			padding:8px 0;
			height:90px;
			transition:all .28s cubic-bezier(0.4,0,0.2,1);
			border-bottom:1.5px solid #fff;
			font-family: "幼圆";
		}
		.navbar,#collapse,#collapse ul,#collapse ul li{
			height: 100% !important;
			position: relative;
		}
		
		a.navbar-brand{
			font-family:'Pacifico';
			font-size:2em;
			transform: translateY(8px);
			color:#FF9966!important;
		}

		#nav_form{
			position: relative;
			top:10px;
		}

		#main{
			
			width:100%;
			min-height:600px;
			
			box-sizing: border-box;
		}
		#footer{
			height:130px;
			color:#fffff0;
			background-color:rgba(55,63,72,1);
			
		}
		#footer table{
			margin:0 auto;
		}
		#footer tr td{
			text-align: center;
			padding-top:5px;
		}
		.navbar{
			border:transparent;
			background-color:transparent;
		}

		.nav li a{
			font-size: 20px;
			top:10px;
			color:#666666!important;
			font-weight: bold;
			transition: all .5s;
		}
		.nav li:hover a{
			color:#3399FF!important;
		}

		.change_size{
			background-color: rgba(255,255,255,1)!important;
			padding:3px 0!important;
			height: 70px!important;
			border-bottom:1.5px solid transparent;

		}
		#collapse .pull-right li{
			margin:0 10px;
			transition:all .5s;
		}

		#collapse .pull-right a{
			display: block;
		}

		#collapse .pull-right li:hover a{
			color:#FF9933!important;
		}

		



		@media screen and (max-width: 800px) {
		    #nav_top{
		    	background-color:rgba(255,255,255,1) ;
		    }
		    #collapse{
		    	min-height: 150px;
		    	background-color: #fff;
		    }
		}

		
		
	</style>

	
	<link rel="stylesheet" type="text/css" href="/HyAdmin-master/Public/assets/global/styles/index/index.css"/>
	<link rel="stylesheet" type="text/css" href="/HyAdmin-master/Public/assets/global/styles/index/animate.min.css">
	<style>
		.pre_meal,.pre_household,.pre_clean,.pre_reason{
			width:100%;
			height:180px;
			position: relative;
		}

		.pre_meal h2,.pre_household h2,.pre_clean h2,.pre_reason h2{
			position: relative;
			top:44%;
			font-size:30px;
			text-align: center;
		}
		.pre_meal{
			background-color:rgba(247,249,250,1);
			padding-top:30px;
		}
		.pre_meal h2{
			top:20%;
			color:#3399FF;
		}

		.pre_household{
			background-color: #FF9933;
			color:#fff;
			height: 200px;
			margin:-23px 0;
		}


		.pre_reason{
			background-color: #66CCFF;
			color:#fff;
			height: 200px;
			margin:-23px 0;
		}

		.pre_clean{
			margin-top:-20px;
		}
	</style>

</head>
<body>
	<div id="nav_top">
		<div class="navbar navbar-default" role="navigation">
			<div class="navbar-header">

			    <a href="##" class="navbar-brand">    
			    Coming<i style="color:#3399FF;">H</i>ome
                </a>

				<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-responsive-collapse">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="##" class="navbar-brand"></a>
			</div>

			<div id="collapse" class="collapse navbar-collapse navbar-responsive-collapse">
				<ul class="nav navbar-nav">
					<li class=""><a href="##">菜谱大全</a></li>
		      		<li><a href="##">清洁技巧</a></li>
		      		<li><a href="##">居家用具</a></li>
				</ul>

				<ul class="nav navbar-nav pull-right">
					<li><a href="##">登录</a></li>
					<li class="slip_register"><a href="##">注册</a></li>
				</ul>
			</div>
		</div>
	</div>
	
	<div id="main">
		
	
	<section id="theme">
		<div class="ad">
			<h2 ><span>Comming <i>H</i>ome</span> 让你居家生活没烦恼</h2>
			<h3>为你提供各类实用居家小贴士，让你生活更美好。</h3>
		</div>
		
		
		<div class="mask"></div>
		
		
		
		<div class="search">
			<form action="" class="form-inline" method="get">
					<input type="text" class="form-control" id="searchBox" placeholder="搜索你想要了解的内容。">
					<div class="searchBtn">
				    	<button type="submit">Search</button>
				    </div>
			</form>
		</div>
	</section>
	
	<section class="pre_meal">
		<h2>你还在为做菜感到烦恼吗？</h2>
	</section>
	
	<section id="meal">
		<div class="section_title">
			<h2 class="title">
				我们为你提供各色菜系做法。
			</h2>
			<div class="section_more">
				<a id="more" class="pull-right" href="javascript:;">更多</a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<img class="meal_img" src="/HyAdmin-master/Public/assets/global/img/index/meal/china.png" alt="">
			</div>
			<div class="col-md-4 meal_content">
				<div class="sub_meal_content">
					<h3>西餐</h3>
					<ul class="meal_thing">
						<li><a href="#">黑椒牛扒</a></li>
						<li><a href="#">黑椒牛扒</a></li>
						<li><a href="#">黑椒牛扒</a></li>
						<li><a href="#">黑椒牛扒</a></li>
						<li><a href="#">黑椒牛扒</a></li>
									
					</ul>
				</div>
			</div>

			<div class="col-md-4">
				<img class="meal_img" src="/HyAdmin-master/Public/assets/global/img/index/meal/japan.png" alt="">
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 meal_content">
				<div class="sub_meal_content">
				<h3>中餐</h3>
					<ul class="meal_thing">
						<li><a href="#">黑椒牛扒</a></li>
						<li><a href="#">黑椒牛扒</a></li>
						<li><a href="#">黑椒牛扒</a></li>
						<li><a href="#">黑椒牛扒</a></li>
						<li><a href="#">黑椒牛扒</a></li>
						
					</ul>
				</div>
			</div>
			<div class="col-md-4">
				<img class="meal_img" src="/HyAdmin-master/Public/assets/global/img/index/meal/western.png" alt="">
			</div>
			<div class="col-md-4 meal_content">
				<div class="sub_meal_content">
				<h3>日料</h3>
					<ul class="meal_thing">
						<li><a href="#">黑椒牛扒</a></li>
						<li><a href="#">黑椒牛扒</a></li>
						<li><a href="#">黑椒牛扒</a></li>
						<li><a href="#">黑椒牛扒</a></li>
						<li><a href="#">黑椒牛扒</a></li>
						
					</ul>
				</div>
			</div>
		</div>
	</section>
	
	<section class="pre_household">
		<h2>想找省钱实用不占地的小家具？</h2>
	</section>

	<section id="household">
			<div class="house_mask"></div>
			<div class="section_title">
				<h2 class="title">
					为你提供精心挑选的实用家居指南
				</h2>
				<div class="section_more">
					<a id="more" class="pull-right" href="javascript:;">更多</a>
				</div>
			</div>
			<div class="house_content">
				<div class="house_prev">
					<a href="javascript:;">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
				</div>
				<div class="house_next">
					<a href="javascript:;">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div>
				<div class="house_carousel">
					<ul id="houseTool">
						
					</ul>
				</div>
			</div>
	</section>

	<section class="pre_clean">
		<h2>被脏兮兮的厕所死角折腾到崩溃？没事，我们来解救</h2>
	</section>
	
	<section id="clean">
		
		<div class="section_title">
			<h2 class="title">
				最实用清洁小窍门，让室内清洁无死角！
			</h2>
			<div class="section_more">
				<a id="more" class="pull-right" href="javascript:;">更多</a>
			</div>
		</div>
	
		<div class="clean_example row">
			<div class="clean_content col-md-10">
				<ul class="all_clean">
					<li class="row show_clean" data-index="0">
						<div class="col-md-5">
							<a href="javascript:;">
								<img class="clean_img" src="/HyAdmin-master/Public/assets/global/img/index/clean/1.jpg" alt="墙面清洁">
							</a>
						</div>
						<div class="col-md-7">
							<h2>墙面清洁</h2>
							<p>卫生间一般采用瓷砖或地板砖，由于洗澡等频繁地用水，墙面会溅有各种水渍，在擦拭中可用洗洁精或去污兑清水，用干净抹布蘸少擦拭，擦拭干后再用温水擦洗，最后用干净的布擦干。卫生间的墙面要经常清洁，一般一周清洁一次为好。</p>
						</div>
					</li>

					<li class="row" data-index="1">
						<div class="col-md-5">
							<a href="javascript:;">
								<img class="clean_img" src="/HyAdmin-master/Public/assets/global/img/index/clean/2.jpg" alt="抽水马桶清洁">
							</a>
						</div>
						<div class="col-md-7">
							<h2>抽水马桶清洁</h2>
							<p>抽水马桶的盖可用抹布由里向外擦干净，抹布不能太湿，以免留下水渍。抽水马桶边缘所形成的黄色污垢，可用塑料刷子蘸发泡性清洁剂刷或专用的洁厕精洗刷。15天后清洗一次即可保持马桶洁净。</p>
						</div>
					</li>

					<li class="row" data-index="2">
						<div class="col-md-5">
							<a href="javascript:;">
								<img class="clean_img" src="/HyAdmin-master/Public/assets/global/img/index/clean/3.jpg" alt="浴缸清洁">
							</a>
						</div>
						<div class="col-md-7">
							<h2>浴缸清洁</h2>
							<p>浴缸可用干净抹不或毛刷蘸点洗衣粉轻轻擦拭，再用清水冲洗。如果有沉积污垢，可用旧报纸擦拭。浴缸应定消毒，然后用来苏打水擦拭，将污水排入的沟后，再用干净抹布将浴缸擦拭干净。</p>
						</div>
					</li>

					<li class="row" data-index="3">
						<div class="col-md-5">
							<a href="javascript:;">
								<img class="clean_img" src="/HyAdmin-master/Public/assets/global/img/index/clean/4.jpg" alt="地面清洁">
							</a>
						</div>
						<div class="col-md-7">
							<h2>地面清洁</h2>
							<p>卫生间地面一般都是用地板砖铺成。在清洗完卫生间时，用拖布蘸去污粉对成的水反复擦拭。擦拭完后用清水冲洗，再用干净的布擦干。</p><p>成都市小丫清洁服务部提醒在消毒卫生间时，应常使用的消毒液是来打水。来苏水是一种消毒防腐药，对人体的皮肤有腐蚀作用，使用时戴上口罩或橡胶手套，以保护人体不受伤害。</p>
						</div>
					</li>
				</ul>
			</div>

			<div class="clean_menu col-md-2">
				<ul class="clean_menu_bar">
					<li class="clean_title" data-index="0">墙面清洁</li>
					<li class="clean_title" data-index="1">抽水马桶清洁</li>
					<li class="clean_title" data-index="2">浴缸清洁</li>
					<li class="clean_title" data-index="3">地面清洁</li>
				</ul>
			</div>
		</div>
	</section>
	
	<section class="pre_reason">
		<h2>为什么选择我们？</h2>
	</section>

	<section id="reason">	
			<div class="sub_reason newest">
				<div class="row">
					<div class="col-md-4 wow fadeInLeft" data-wow-duration="2.5s">
						<img class="" src="/HyAdmin-master/Public/assets/global/img/index/reason/newest.png"    alt="">
					</div>
					<div class="col-md-8 wow fadeInRight" data-wow-duration="3s">
						<h3>最新资讯</h3>
						<p >
							搜罗最新实用家居小常识，让你第一时间了解做菜、清洁的时的细节与误区，让你立马打造一个不一样的家。
						</p>
					</div>
				</div>
			</div>

			<div class="sub_reason trust">
				<div class="row">
					<div class="col-md-8 wow fadeInUp" data-wow-duration="3s">
						<h3>权威数据</h3>
						<p>
							搜罗最新实用家居小常识，让你第一时间了解做菜、清洁的时的细节与误区，让你立马打造一个不一样的家。
						</p>
					</div>
					
					<div class="col-md-4 wow fadeInUp" data-wow-duration="2.5s">
						<img   src="/HyAdmin-master/Public/assets/global/img/index/reason/trust.png" alt="">
					</div>
				</div>
			</div>

			<div class="sub_reason privilege">
				<div class="row">
					<div class="col-md-4 wow fadeInLeft" data-wow-duration="2.5s">
						<img   src="/HyAdmin-master/Public/assets/global/img/index/reason/privilege.png" alt="">
					</div>

					<div class="col-md-8 wow fadeInRight" data-wow-duration="3s">
						<h3>会员特权</h3>
						<p>
							搜罗最新实用家居小常识，让你第一时间了解做菜、清洁的时的细节与误区，让你立马打造一个不一样的家。
						</p>
					</div>
				</div>
			</div>
	</section>

	<section id="joinUs">
		<div class="join_mask"></div>
		

		<div class="register wow flipInY" data-wow-duration="2s">
			<div class="section_title">
				<h2 class="title">
					加入我们
				</h2>
			</div>
			<form action="#" id="doRegister" class="register_form" method="post">
				<div class="input_wrapper">
					<label for="email" class="input_label">邮箱</label>
					<input id="email" type="text" name="email"/>
					<span class="md-input-bar"></span>
				</div>

				<div class="input_wrapper">
					<label for="username" class="input_label">昵称</label>
					<input id="username" type="text" name="username"/>
					<span class="md-input-bar"></span>
				</div>

				<div class="input_wrapper">
					<label for="password" class="input_label">密码</label>
					<input id="password" type="text" name="password"/>
					<span class="md-input-bar"></span>
				</div>
				
				<button class="btn btn-info" type="submit">提交</button> 
			</form>
		</div>
	</section>

	</div>
	<footer id="footer">
		<table>
			<tbody>
				<tr><td></td></tr>
				<tr>
					<td colspan="3">Copyright© 2016江西师范大学宏奕工作室，工作室地址：江西省南昌市紫阳大道99号 邮政编码：000000</td>
				</tr>
				
				<tr>
					<td colspan="3">联系电话：0791-8120460 赣ICP备11002450号-1   技术支持：江西师范大学计算机信息工程学院宏奕工作室</td>
				</tr>
				
			</tbody>
		</table>
	</footer>
</body>
<script src="/HyAdmin-master/Public/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="/HyAdmin-master/Public/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

<script type="text/javascript">
	$(function(){
		var navTop =(function(){
				var nav = $("#nav_top");
				var scroll_end = 0;
				var isTop = true;
				var slipRegister = $(".slip_register");
				var body = $("html,body");

				return {
					changeSize:function(){
						// console.log(isTop);
		                nav.mouseover(function(){
		                   if(!isTop){
		                        return;
		                   }
		                    nav.addClass('change_size');
		                })

		                nav.mouseout(function(){
		                   if(!isTop){
		                        return;
		                   }
		                    nav.removeClass('change_size');
		                })
		                     
		                $(window).scroll(function(){
		                     scroll_end = $(document).scrollTop();
		                     // console.log(scroll_end);
		                     
		                     if(scroll_end==0){
		                          isTop = true;
		                          nav.removeClass('change_size');
		                     
		                     }else if(scroll_end > 0){
		                          isTop = false;
		                          nav.addClass('change_size');                                      
		                     }
		                })
					},
					slipToRegiste:function(){
						slipRegister.on("click",function(){
							body.animate({scrollTop: $("#joinUs").offset().top}, 500);
						})
					}
				}
			})()
			navTop.changeSize();
			navTop.slipToRegiste();
	})
</script>


	<script src="/HyAdmin-master/Public/assets/global/plugins/bootstrap-carousel.min.js" type="text/javascript"></script>
	<script src="/HyAdmin-master/Public/assets/global/scripts/jquery.validate-1.13.1.js" type="text/javascript"></script>
	<script src="/HyAdmin-master/Public/assets/global/scripts/wow.min.js" type="text/javascript"></script>


	<script type="text/javascript">
		$(function(){
			var house = (function(){
				var houseLi = null;

				houseCarousel = function(houseLi){
					
					var houseTool = $("#houseTool");	
					var prev = $(".house_prev");
					var next = $(".house_next");
					var imgIndex = 0;
					var imgOffset = 400;
					var imgNum = houseLi.length;
					// console.log(imgNum);
					prev.on('click',function(){
						imgIndex--;
						
						if(imgIndex != -1){

							houseTool.css({'transform':'translateX(' + -(imgIndex*imgOffset) + 'px)'});					

						}else{

							imgIndex = imgNum - 1;
							houseTool.css({'transform':'translateX(' + -(imgIndex*imgOffset) + 'px)'})
							
						}

						console.log(imgIndex);
					})

					next.on('click',function(){
						if(imgIndex != imgNum - 1){
							imgIndex++;
							houseTool.css({'transform':'translateX(' + -(imgIndex*imgOffset) + 'px)'})
							

						}else{
							imgIndex = 0;
							houseTool.css({'transform':'translateX(0px)'})
							
						}
						
					})
				};

				return {
					addImg:function() {
						var imgUrl = "/HyAdmin-master/Public/assets/global/json/data.json";

						 $.getJSON(imgUrl,function(data){
								var imgArr = [];
								
								$.each(data,function(k,v) {

									if(k=='img'){
										$.each(v,function(k1,v1){
			                               imgArr.push(v1);
			                            })
									}
								});

								imgArr.sort(function(a,b){
									return b.create_time - a.create_time;
								})
								var imgNum = imgArr.length;
								var houseTool = $("#houseTool");

								

								for(var i=0;i<imgNum;i++){
									
									var li = "<li class='tool'>\
												<div class='tool_box'>\
													<div class='sub_tool_box'>\
														<img src='/HyAdmin-master/Public/assets/global/img/index/house/"+imgArr[i].src+"' alt=''>\
														<div class='img_content'><a href='javascript:;'>"+imgArr[i].content+"</a></div>\
													</div>\
													<div class='img_name'><span>"+imgArr[i].name+"</span></div>\
												</div>\
										  </li>";	

									houseTool.append(li);	

								}
								
								houseLi = houseTool.find("li");	
								houseCarousel(houseLi);
						 })
					}
				};
			})();
			
			house.addImg();

			var clean = (function(){
				var currLi = $(".clean_menu_bar").children();
				var currEle = $(".all_clean").children();
				var currEleNum = currEle.length;
				var clean_example  = $(".clean_example");
				
				var currIndex = 0;

				// console.log(currEleNum);

				var timer = null;			
				
				var autoSlip = function(){
						clearInterval(timer);
						
						timer = setInterval(function(){
							if(currIndex!=currEleNum-1){
								currIndex++;
								$(currLi[currIndex]).trigger("click");
							}else{
								currIndex = 0;
								$(currLi[currIndex]).trigger("click");
							}
							
						},2000)


				};

				return {
					slipToElement:function(){
						autoSlip();
						
						currEle.eq(0).css({"opacity":1,"z-index":10});
						currEle.eq(0).siblings().css({"opacity":0,"z-index":0});

						currLi.eq(0).css({"background-color":"#333333","color":"#eee"});
						currLi.eq(0).siblings().css({"background-color":"transparent","color":"#666666"});
						

						currLi.on("click",function(){
							
							var _self = $(this);
							currIndex = _self.data("index");
						

							for(var i=0;i<currEleNum;i++){
								/*注意，此时的currEle[i]不是JQ对象，我们要将其转化为JQ对象*/

									if($(currEle[i]).data("index") == currIndex){
										
										$(currEle[i]).siblings().css({"opacity":0,"z-index":0});
										$(currEle[i]).css({"opacity":1,"z-index":10});
										
										_self.siblings().css({"background-color":"transparent","color":"#666666"})
										_self.css({"background-color":"#333333","color":"#eee"});
									}
							}

						})
					},
					
					beginSlip:function(){
						clean_example.on("mouseout",function(){
							var currIndex;
							for(var i=0;i<4;i++){
								if($(currEle[i]).css("opacity") == 1){
									currIndex = $(currEle[i]).data("index");
								}
							}
							autoSlip(currIndex);
						})
					},

					stopSlip:function(){
						clean_example.on("mouseover",function(){
							clearInterval(timer);
						})
					}
				}
			})();
			
			clean.slipToElement();
			clean.stopSlip();
			clean.beginSlip();
			
			var joinUs = (function(){
				var input = $(".input_wrapper input");
				var register = $("#doRegister");
				var reg = /\S/;/*\S匹配任意不是空白符的字符*/
				
				return{
					inputEvent:function(){
						input.on("focus",function(){
				
							var _self = $(this);
							var inputVal = _self.val();
							console.log(inputVal);
							
							_self.siblings('.input_label').css({						
										"top":"-6px",
										"font-size":"14px"		
							});

							_self.parent().addClass('input_focus');
						})

						input.on("blur",function(){
					
							var _self = $(this);
							var inputVal = _self.val();
							console.log(inputVal);

							if(reg.test(inputVal)){
								_self.siblings('.input_label').css({
										"top":"-6px",
										"font-size":"14px"
								});
							}else{
								_self.siblings('.input_label').css({
										"top":"16px",
										"font-size":"20px"
								});
							}
							_self.parent().removeClass('input_focus');
						})
					},	
					doRegister:function(){
						register.validate({
					           debug: true,
					           rules:{
					              username:{
					                required:true
					                
					              },
					              password:{
					                required:true
					              },
					              email:{
					                required:true
					              }
					           },
					            
					            messages:{
					              username:{
					                required:'请输入账号！',
					                
					              },
					              password:{
					                required:'请输入密码！'
					              },
					              email:{
					                required:'请输入邮箱！'
					              }
					         
					            },
					           
					           highlight:function(element,errorClass,validClass){
					            $(element).addClass(errorClass).removeClass(validClass);
					            $(element).fadeOut().fadeIn();
					           },
					           unhighlight:function(element,errorClass,validClass){
					              $(element).removeClass(errorClass).addClass(validClass)
					           },
					          
					           submitHandler: function (form){
					                 form.submit();
					            } 
					    });
					}
				}
			})()

			joinUs.inputEvent();
			joinUs.doRegister();
	
			var wow = new WOW();

			wow.init();
		});
	</script>

</html>