$(function(){

	(function(){
		//收藏乐峰
		$('.alert a').click(function(){
			alert('请使用Ctrl+D加入收藏');
		})

		var	bool = false;
		var frm = $('form');
		$(':input[name="user"]').focus(function(){
			$(this).next().html('请输入账号');
			$(':input[name="pass"]').next()[0].innerHTML='';
			$('.yzm-msg')[0].innerHTML='';
		})
		$(':input[name="user"]').blur(function(){
			var text = $(this).next();
			if($(this).val().length==0){
				text.html('请输入账号');
				bool = false;
			}else{
				text.html('');
			}
		 });
			
		$(':input[type="password"]').focus(function(){
			$(this).next()[0].innerHTML='请输入密码';
			$(':input[name="user"]').next()[0].innerHTML='';
			$('.yzm-msg').html('');
		})
		$(':input[name="pass"]').blur(function(){
			var text = $(this).next();
			if($(this).val().length==0){
				text.html('请输入密码');
				bool = false;
			}else{
				text.html('');
			}
		});

		$(':input[name="yzm"]').focus(function(){
			$('.yzm-msg')[0].innerHTML='请输入验证码';
			$(':input[name="user"]').next()[0].innerHTML='';
			$(':input[name="pass"]').next()[0].innerHTML='';
		})
		$(':input[name="yzm"]').blur(function(){
			var text = $(this);
		 	if($(this).val().length==0){
		 		text.html('请输入验证码');
		 		bool = false;
		 	}else{
		 		text.html('');		
		 	}
		});

		$(frm).submit(function(){
			if(!bool){
				return false;
			}
		})

		
		$('.btn').mouseover(function(){
			$(this).css('opacity','0.8')
		}).mouseout(function(){
			$(this).css('opacity','1');
		})

		$('.wx').click(function(){
			$('.bg').fadeIn(300);
		})
		$('.remove').click(function(){
			del();
		})


		//关闭弹窗函数
		function del(){
			$('.bg').fadeOut(300);
		}


	})();

})
