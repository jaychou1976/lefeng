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

	// .carousel star
	var  Box = $('.con-carousel'),
		 Imgli = $('.carousel-img li'),
		 Numli = $('.carousel-num li'),
		 num = 0,
		 Len = Imgli.length,
		 timer;
		timer = setInterval(function(){
			play(num+1);
		},2000);
		Box.mouseover(function(){
			clearInterval(timer);
		}).mouseout(function(){
			timer = setInterval(function(){
				play(num+1);
			},2000);
		})
		Numli.mouseover(function(){
			
			play($(this).index());
		})
	//play;
		function play(n){
			//if
			if(n>Len-1){
				n=0
			}else if(n<0){
				n=Len-1
			}
			num=n;
			Imgli.eq(num).fadeIn(500).siblings().fadeOut(500);
			Numli.eq(num).addClass('num-style').siblings().removeClass('num-style');
		}
	// .carousel end

	//scrolltop
	
	$('.backtop').click(function(){
		$('body,html').animate({
			scrollTop:0
		},400)
	})
	$('.backtop').hover(function(){
			$(this).css('backgroundColor','#eee');
		},function(){
			$(this).css({backgroundColor:'#fff'});
	});

	
	$('.sidebar-list li').click(function(){
		var index = $(this).index();
		var m = $('.main-list li').eq(index).offset().top;
		$('body,html').animate({
			scrollTop:m
		},500);
		$(this).eq($('.main-list li').index()).children('span').addClass('aaaaa').parent().siblings().children('span').removeClass('aaaaa');
	})

	$(window).scroll(function(){
		var scrolltop=$(document).scrollTop();
		$('.main-list li').each(function(){	
			var mlt = $(this).offset().top;
			if(mlt-scrolltop<100){
				$('.sidebar-list li').eq($(this).index()).children('span').addClass('aaaaa').parent().siblings().children('span').removeClass('aaaaa');
			}
	});
			
		if(scrolltop>=150){
			$('.sidebar,.backtop').fadeIn(500);
		}else{
			$('.sidebar,.backtop').fadeOut(500);
		}
	})
	//点击one隐藏父级盒子
	// $('.one').click(function{
	// 			$(this).parent().parent().hide();
	// 	})

	//滑过mainnav隐藏a标记
	$('.mainnav').hover(function(){
		$('.mainnav>a').hide();
	},function(){
		$('.mainnav>a').show();
	})
	// $('.mainnav-list').mouseenter(function(){
	// 	$(this).children('.li').slideDown();
	// }).mouseleave(function(){
	// 	$(this).children('.li').slideUp();
	// })

	 
	$('.mainnav-list').mouseenter(function(){
		var timer;
		var that = $(this);
		timer = setTimeout(function(){
			that.children('.li').slideDown();
		},200)
	}).mouseleave(function(){
 			$(this).children('.li').slideUp();
 			clearTimeout(timer);
		});


	$('.mainnav-list>li').mouseenter(function(){
		$(this).children('div').show();
	}).mouseleave(function(){
		$(this).children('div').hide();
	})


});