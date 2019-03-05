$(function(){
	$('.nav-left').mouseover(function(){
		$('.nav-menu').show().css({border:'1px solid #ccc',borderTop:'none',backgroundColor:'#fff'});
	}).mouseout(function(){
		$('.nav-menu').hide();
	});
	$('.shopcar1').hover(function(){
		$('.shopcar2').show()},function(){
			$('.shopcar2').hide();
	});
	$('.nav-right').children().eq(6).click(function(){
		alert('请使用Ctrl+D加入收藏');
	})
	var timer;
	$('.columnh').mouseenter(function(){	
		var that = $(this);
		timer = setTimeout(function(){
			that.children('.mainnav').slideDown();
		},200)
		}).mouseleave(function(){
 			$(this).children('.mainnav').slideUp();
 			clearTimeout(timer);
	});


	$('.mainnav-list>li').mouseenter(function(){
		$(this).children('div').show();
	}).mouseleave(function(){
		$(this).children('div').hide();
	})

	$('.mainnav').hover(function(){
		$('.mainnav>a').hide();
	},function(){
		$('.mainnav>a').show();
	})

	$(document).scroll(function(){
		var scrolltop=$(document).scrollTop()
		if(scrolltop>=100){
			$('.backtop').fadeIn(300)
		}else{
			$('.backtop').fadeOut(300)
		}	

	})
	
	$('.backtop').click(function(){
		$('body,html').animate({
			scrollTop:0
		},200)
	})

	$('.backtop').mouseover(function(){
		$(this).css('backgroundColor','#eee')
	}).mouseout(function(){
		$(this).css('backgroundColor','#fff')
	})

	
	$('.imgwrap').mouseover(function(){
		$('.square,.imgwrap-big').show();
		$('.imgwrap').mousemove(function(e){
			//色块坐标=鼠标移动坐标-小盒子的坐标-色块的宽和高的一半
			var l = e.pageX-$('.imgwrap').offset().left-$('.square').width()/2;
			var t = e.pageY-$('.imgwrap').offset().top-$('.square').height()/2;
			var disX=$('.imgwrap').width()-$('.square').width();
			var disY=$('.imgwrap').height()-$('.square').height();
			if(l<0){
				l=0
			}else if(l>disX){
				l=disX
			}
			if(t<0){
				t=0
			}else if(t>disY){
				t=disY;
			}

			//1.设置色块坐标
			$('.square').css({left:l,top:t})
			//大图的坐标
			//色块的坐标/大图的坐标=小盒子的宽/大盒子的宽
			$('.imgwrap-big img').css({left:-l*1.5,top:-t*1.5});
			//色块的坐标位置
					
		})
	}).mouseout(function(){
		$('.square,.imgwrap-big').hide();
	})

	$('.joincar').mouseover(function(){
		$(this).css('opacity','0.8')
	}).mouseout(function(){
		$(this).css('opacity','1');
	})


})
	