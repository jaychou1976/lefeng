$(function(){
	(function(){
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
	});


	})();


	//瀑布流
	(function(){
		var page =1;
		show();
		function show(){
			var ULs = $('.pbl-page ul'),
				Lis = $('.pbl-page li');
			$.get('category.php',{p:page},function(data){
				//获得data二维数组
				//console.log(data);
					for(var i in data){
					//i = 0 1 2 3...
					//每行数据一维数组data[i]
					// console.log(data[i]);
					//复制li元素并显示
					var Li = Lis.eq(0).clone(true);
					Li.css('display','block');
					//给li添加对应的数据,例如循环每行对应的[i]['pic']
					Li.find('img').attr('src',data[i]['pic']);
					Li.children('span').html(data[i]['hied']);
					Li.children('.text').html(data[i]['text']);
					// Li.children('p').eq(0).html(data[i]['fuhao']);
					Li.children('p').eq(1).html(data[i]['money']);
					Li.find('.b').html(data[i]['zhekou']);
					Li.children('p').eq(3).html(data[i]['del']);
					Li.children('div').html(data[i]['shopcar']);

						var index = i % 4;
						ULs.eq(index).append(Li);
					}

			},'json');

		}

		//通过滚动事件分页
	$(window).scroll(function(){
		//判断条件是否触底
		//(瀑布流pbl-page的的坐标+当前ul的高)-滚动条滚动的距离<=100
		var contT = $('.pbl-page').offset().top;
		var contH = $('.pbl-page ul').height();
		var dT = $(document).scrollTop();
		console.log(contT,contH);
		if((contT+contH)-dT<=200){
			page++;
			show();
		}
	});


	})();

		$('.fixed-right').mouseover(function(){
			$('.erweima-hide').show();
		}).mouseout(function(){
			$('.erweima-hide').hide();
	})

		$('.backtop').click(function(){
			$('body,html').animate({
				scrollTop:0
			},400)
	})
		
		$(window).scroll(function(){
		var scrolltop=$(document).scrollTop();
			if(scrolltop>=300){
			$('.backtop').fadeIn(200);
		}else{
			$('.backtop').fadeOut(200);
		}
	});
		$('.backtop').hover(function(){
			$(this).css('backgroundColor','#eee');
		},function(){
			$(this).css({backgroundColor:'#fff'});
	});

		
})