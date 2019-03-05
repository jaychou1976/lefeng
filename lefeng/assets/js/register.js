$(function(){
	(function(){
		//收藏乐峰
		$('.alert a').click(function(){
			alert('请使用Ctrl+D加入收藏');
		});
		//btn dxyzm opacity
		$('.btn,.dxyzm').mouseover(function(){
			$(this).css('opacity','0.7');
		}).mouseout(function(){
			$(this).css('opacity','1');
		})
	})();	
		//注册验证
	(function(){
		var bool,
			frm = $('form'),
			user = $(':input[name="user"]'),
			yzm = $(':input[name="yzm"]'),
			pass = $(':input[name="pass"]'),
			dxyzm = $(':input[name="dxyzm"]'),
			Spass = $(':input[name="Spass"]');
		//手机号获得焦点
		$(user).focus(function(){
			$(this).next().html('请输入手机号').css('color','#999');
		}).blur(function(){
			$(this).next().html('');
		})
		//短信验证码框被禁用，收到短信时启用readonly(只读)
		$(dxyzm).attr('readonly','ture');
		//密码获得焦点
		$(pass).focus(function(){
			$(this).next().html('8-20位字符，推荐字母、数字和符号组合的密码').css('color','#999');
		}).blur(function(){
			$(this).next().html('');
		})
		//确认密码框获得焦点 Spass
		$(Spass).focus(function(){
			$(this).next().html('请再次输入密码');
		}).blur(function(){
			$(this).next().html('');
		})

		var tel,
			YZM = yzm.val(),
			Dxyzm = dxyzm.val(),
			Pass,
			SPass;
		//点击 $('.dxyzm')判断手机号和验证码输入框是否为空，为空则显示请输入手机号和验证码,输入正确后启动this输入框
		$('.dxyzm').click(function(){
			//判断手机号输入框是否为空
			var	tel = user.val();
			if(tel.length==0){
				$(user).next().html('请输入手机号').css('color','#f00');
				bool = false;
			}else if(YZM.length==0){
				$('.yzm-msg').html('请输入图形验证码').css('color','#f00');
				bool = false;
			}else if(Dxyzm.length==0){
				$(dxyzm).next().html('请输入短信验证码').css('color','#f00');
			}	
		})
		//手机号正则验证
		// $(user).blur(function(){
		// 	var reg =/^1[34578]\d{9}$/;
		// 	var	tel = user.val();
		// 	if(tel.length==0){
		// 		$(user).next().html('手机号不能为空').css('color','#f00');
		// 		// console.log(tel);
		// 		bool=false;
		// 	}else if(!reg.test(tel)){
		// 		$(user).next().html('请输入正确的手机号').css('color','#f00');
		// 		bool=false;
		// 	}else{
		// 		$(user).next().html('');
		// 		bool=true;
		// 	}
		// })
		//密码正则验证							
		// $(pass).blur(function(){
		// 	var reg =/^\w{8,20}$/;
		// 	 Pass = pass.val();
		// 	if(Pass.length==0){
		// 		$(pass).next().html('密码不能为空').css('color','#f00');
		// 		// console.log(tel);
		// 		bool=false;
		// 	}else if(!reg.test(Pass)){
		// 		$(pass).next().html('密码格式错误').css('color','#f00');
		// 		bool=false;
		// 	}else{
		// 		$(pass).next().html('');
		// 		bool=true;
		// 	}
		// })

	//手机号验证
		$(user).blur(function(){
			verify({
  			str:$(user).val(),
  			reg:/^1[34578]\d{9}$/,
  			msg:$('.shouji'),
			txt:'',
			errortext:'请输入正确的手机号',
  			})
  			console.log(verify)
		})
	  	$(pass).blur(function(){
	  		Pass=pass.val();
	  		verify({
	  			str:$(pass).val(),
	  			reg:/^\w{8,20}$/,
	  			msg:$('.mima'),
				txt:'',
				errortext:'密码格式错误',
	  		})
	  	});		

  	//验证确认密码
  		var bool;
		$(Spass).blur(function(){
			var SPass = Spass.val();
			if(SPass===Pass){
				$(Spass).next().html('');
				 bool= true;
			}else{
				$(Spass).next().html('密码错误').css('color','#f00');
				bool =false;
			}								
		})
			
		function verify(opt){
	    	var str = opt.str,
	    		msg = opt.msg,
	            reg = opt.reg;
	        if(str.length==0){
	        	msg.html(opt.txt).css('color','#f00');
	        	return false;
	        }else if(reg.test(str)){
	               //匹配成功
	           msg.html(opt.txt);
	           return true;
	        }else{
	              // 匹配失败  
	            msg.html(opt.errortext).css('color','#f00');
	            return false;
	        }
	    }
		$(frm).submit(function(){
			var userR=verify({
	  			str:$(user).val(),
	  			reg:/^1[34578]\d{9}$/,
	  			msg:$('.shouji'),
				txt:'',
				errortext:'请输入正确的手机号',
	  		});
			var passR=verify({
	  			str:$(pass).val(),
	  			reg:/^\w{8,20}$/,
	  			msg:$('.mima'),
				txt:'',
				errortext:'密码格式错误',
	  		});

	  		if(!userR ||  !passR || !bool){
        		return false;
        	}
		})

		//判断用户被占用
		
		user.blur(function(){
			var	User = user.val();
			var xhr = new XMLHttpRequest();
			xhr.open('post','register.php',true);
			xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xhr.send('username='+User);
			xhr.onreadystatechange = function(){
            	if(xhr.readyState==4 && xhr.status==200){
            		//alert(xhr.responseText);
                     $(user).next().html(xhr.responseText).css('color','#f00');
                     
            	}
            }

         

		})



	
	})();	



	
})

		












