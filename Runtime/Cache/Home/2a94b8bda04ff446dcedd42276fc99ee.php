<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-COMPATIBLE">
    <meta name="viewport" content="width=device-width,initial-scale=1">
	<title>frameset</title>

	<link rel="stylesheet" href="/HyAdmin-master/Public/assets/global/plugins/bootstrap/css/bootstrap.min.css" type="text/css">
	<style>
		body{
			font-family: "微软雅黑";
		}
	
		#nav_top{
			position: fixed;
			width:100%;
			height:80px;
			z-index:100;
			background-color:rgba(34,34,34,0);
			transition:all .35s;
		}
		.navbar,#collapse,#collapse ul,#collapse ul li{
			height: 100% !important;
			position: relative;
		}

		.nav a{
			font-size: 20px;
			top:10px;
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
			color:#fff!important;
		}
		.show_color{
			background-color: rgba(34,34,34,1)!important;
		}
		
	</style>

	
	<style>
	/* ---------------top_carousel begin-------------------- */
		#top_carousel{
			width: 100%;
			height:600px;
		}
		#slidershow{
			width: 100%;
			height: 100%;
		}
		#slidershow a img{
			width:100%;
			height:600px;
		}
		
		#meal{
			margin-bottom: 100px;
		}

		#meal .row{
			margin:0 auto;
			width:70%;
			height:260px;
			
		}
		#meal .row .col-md-4{
			height: 100%;
		}
		#meal .row:nth-child(odd) .col-md-4:nth-child(even) {
			background-color: #555;
		}

		#meal .row:nth-child(even) .col-md-4:nth-child(odd){
			background-color: #555;
		}
		.title{
			text-align: center;
			padding:40px 0;
			font-size:40px;
		}
		#more{
			display: block;
			text-decoration: none;
			color:#222;
			font-size:16px;
			padding-right:30px;

			transform: translateY(20px);
		}
	/* ---------------top_carousel end-------------------- */

	/* ---------------household begin-------------------- */
		#household{
			position: relative;
			width:100%;
			min-height:600px;
			background-color:#FFCC99;
		}
		#houseTool{
			width:4800px;
			padding:0;
			margin:0;
			height: 100%;
			transition:all .5s;
		}
		.house_content{
			position: relative;
			height:600px;
		}
		
		.house_prev,.house_next{
			position:absolute;	
			font-size:40px;
			width: 8%;
			height: 100%;
		}
		.house_prev{
			left:0;
		}
		.house_next{		
			right:0;
		}

		.house_prev a,.house_next a{
			display: block;
			height:100%;
			text-decoration: none;
			
		}
		.house_prev span,.house_next span{
			display: block;
			top:50%;
			color:rgba(188,208,195,1);
			text-align: center;
		}

		.house_carousel{
			position: absolute;
			width:84%;
			height:100%;
			left:8%;
			background-color: #ddd;
			overflow: hidden;
			
		}
	
		.tool{
			position: relative;
			display: inline-block;
			list-style:none;
			width:400px;
			height:100%;
			background-color: #FFCC33;
		}

		.tool img{
			width:80%;
			height: 350px;
			margin:0 auto;
			display: block;
			vertical-align: middle;
		}
		.img_name{
		
			text-align: center;
		}

		.tool_box{
			position: relative;
			top:18%;
		}
	/* ---------------household end-------------------- */	

	/*---------------clean begin--------------------*/
		#clean{
			position: relative;
			width:100%;
			background-color:rgba(247,249,250,1);
			height: 550px;
			margin-top:-20px;
		}

		.clean_example{
			width:84%;
			margin:0 auto;
		}
		.all_clean{
			position: relative;
			
			padding:0;
			margin:0;
		} 
		.all_clean li{
			list-style:none;
			position: absolute;
			display: block;
			float: left;
		}

		.clean_menu_bar{
			padding:0;
			margin: 0;
			height: 100%;
		}
		.clean_title{
			list-style:none;
			display: block;
			font-size: 22px;
			height:50px;
			line-height: 50px;
			color:#666666;
			transition:all .5s;
			cursor: pointer;
			text-align: center;
		}
		
		.clean_img{
			width: 530px;
			height: 320px;
		}
		.all_clean li{
			transition: all .5s;
		}
		
	/*---------------clean end----------------------*/
	</style>

</head>
<body>
	<div id="nav_top">
		<div class="navbar navbar-default" role="navigation">
			<div class="navbar-header">
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

				<form action="##" id="nav_form" class="navbar-form navbar-right" rol="search">
			   	    <div class="form-group">
				   	    <div class="input-group">
				   		   <input type="text" class="form-control" placeholder="请输入关键词" />
				   		   <span class="input-group-btn">
				   		   		<button type="button" class="btn btn-default">搜索</button>
				   		   </span>
				   	    </div>
			   		</div>
 				</form>
			</div>
		</div>
	</div>
	
	<div id="main">
		
	<section id="top_carousel">
		<div id="slidershow" class="carousel slide">
			<!-- 设置图片轮播顺序 -->
			<ol class="carousel-indicators">
				<li class="active" data-target="#slidershow" data-slide-to="0"></li>
				<li data-target="#slidershow" data-slide-to="1"></li>
				<li data-target="#slidershow" data-slide-to="2"></li>
			</ol>
			<!-- 设置轮播图片 -->
			<div class="carousel-inner">
				<div class="item active">
					<a href="##">
						<img src="/HyAdmin-master/Public/assets/global/img/index/1.jpg" alt="">
					</a>
					<div class="carousel-caption">
						<h3>标题</h3>
						<p>内容</p>
					</div>
				</div>
				
				<div class="item">
					<a href="##">
						<img src="/HyAdmin-master/Public/assets/global/img/index/2.jpg" alt="">
					</a>
					<div class="carousel-caption">
							<h3>标题</h3>
							<p>内容</p>
					</div>
				</div>
				
				<div class="item">
					<a href="##">
						<img src="/HyAdmin-master/Public/assets/global/img/index/3.jpg" alt="">
					</a>
					<div class="carousel-caption">
							<h3>标题</h3>
							<p>内容</p>
					</div>
				</div>
			</div>

			<a href="#slidershow" class="left carousel-control">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a href="#slidershow" class="right carousel-control">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div>
	</section>

	<section id="meal">
		<h2 class="title">
			菜谱大全
			<a id="more" class="pull-right" href="javascript:;">更多</a>
		</h2>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>
		</div>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>
		</div>
	</section>

	<section id="household">
			<h2 class="title">
				实用家具
				<a id="more" class="pull-right" href="javascript:;">更多</a>
			</h2>
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
	
	<section id="clean">
		<h2 class="title">
			清洁技巧
			<a id="more" class="pull-right" href="javascript:;">更多</a>
		</h2>
	
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
	
	<section id="reason">
		
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


	<script src="/HyAdmin-master/Public/assets/global/plugins/bootstrap-carousel.min.js" type="text/javascript"></script>


	<script type="text/javascript">
		$(function(){
			$("#slidershow").carousel({
				interval:2000
			});

			$("#slidershow a.left").click(function(){
				$(".carousel").carousel("prev");
			});

			$("#slidershow a.right").click(function(){
				$(".carousel").carousel("next");
			});
			changeColor();
			
			
			function changeColor(){
				var nav = $("#nav_top");
				var scroll_end = 0;
				var isTop = true;
	    
                // console.log(isTop);
                nav.mouseover(function(){
                   if(!isTop){
                        return;
                   }
                    nav.addClass('show_color');
                })

                nav.mouseout(function(){
                   if(!isTop){
                        return;
                   }
                    nav.removeClass('show_color');
                })
                     
                $(window).scroll(function(){
                     scroll_end = $(document).scrollTop();
                     // console.log(scroll_end);
                     
                     if(scroll_end==0){
                          isTop = true;
                          nav.removeClass('show_color');
                     
                     }else if(scroll_end > 0){
                          isTop = false;
                          nav.addClass('show_color');                                      
                     }
                })
			}

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
												<img src='/HyAdmin-master/Public/assets/global/img/index/house/"+imgArr[i].src+"' alt=''>\
												<div class='img_name'>"+imgArr[i].name+"</div>\
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
			
			

		});
	</script>

</html>