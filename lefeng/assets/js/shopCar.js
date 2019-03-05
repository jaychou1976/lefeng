$(function(){
	
	(function(){
		//弹窗
		var condel;
		var jine;
		$('.move').click(function(){
			condel = $(this).parent();
			$('.bg').show();
		})
		$('.no,.cancel').click(function(){
			$('.bg').hide();
		})
		$('.sure').click(function(){
			$('.bg').hide();
			condel.remove();
			total();
		});
		//购物车结算	
		$('.jia').click(function(){
			if($(this).prev('.num').val()>=50){
				$(this).prev('.num').val(50);
				$(this).parent().children('p').html('超出库存啦')
			}else{
				$(this).prev('.num').val(parseInt($(this).prev('.num').val())+1);
				$(this).parent().children('p').html('');
			}
			jine = $(this).prev('.num').val()*($(this).parent().prev().children('p').text().substr(1,));
			$(this).parent().next().text('￥'+jine);
			total();
		})
		
		$('.jian').click(function(){
			if($(this).next('.num').val()<=1){
				$(this).next('.num').val(1);
				$(this).parent().children('p').html('此商品最少购买一件')
			}else{
				$(this).next('.num').val(parseInt($(this).next('.num').val())-1);
			}
			jine = $(this).next('.num').val()*($(this).parent().prev().children('p').text().substr(1,));
			$(this).parent().next().text('￥'+jine);
			total();
			// console.log(jine);
		})

		$('.num').blur(function(){
			var Val = $(this).val()
			if($(this).val()>50){
				$(this).parent().children('p').html('超出库存啦')
			}else{
				$(this).parent().children('p').html('')
			}
			reg =/^\d+$/;
			if(!reg.test(Val)||'0'){
				$(this).val(1);
			}
		})

		//结算函数
		//小计 $('.jine') 单价$('.danjia') 数量$('.num').val()			
		function total(){
			var Num = 0;
			var Zx = 0;
			var Zm = 0;
			$('.num').each(function(){ 	
				Num+=$(this).val()/1;	
			});
			$('.znum').text(Num);

			$('.jine').each(function(){
				Zx+=$(this).text().substr(1,)/1;
			})
			$('.zxiaoji').text('￥'+Zx);
			Zm='￥'+(Zx+$('.yf').text().substr(1,)/1);
			$('.Zmoney').text(Zm);
		}
		

	})();
})