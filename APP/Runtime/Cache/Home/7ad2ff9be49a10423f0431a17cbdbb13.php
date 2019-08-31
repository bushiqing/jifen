<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title></title>
    <script src="/Public/home/wap/js/mui.min.js"></script>
    <link href="/Public/home/wap/css/mui.min.css" rel="stylesheet">
    <script type="text/javascript" charset="utf-8">
      	mui.init();
    </script>
	<style>
		.body{
			line-height: px;
		}
		.mui-table-view-cell:after{
			left: 0px;
			background-color:#292828;
		}
		.mui-table-view:before{
			background-color:#292828;
		}
		.mui-table-view:after{
			background-color:#292828;
		}
		.mui-input-group:before{
			height:0px
		}
		.mui-input-group:after{
			height:0px;
		}
		.header{
			background:#1f253d;
			top:0;
			box-shadow:0 0px 0px #ccc;
			-webkit-box-shadow:0 0px 0px #ccc;
		}
		.h1{
			font-family:'微软雅黑';
			color:#fff;
		}
		.ul{
			margin-top:50px;
			background:#1a1d2e;
			line-height:2em;
		}
		.p{
			margin-left:10%;
			font-family:'微软雅黑';
			color:aquamarine;
		}
		.p1{
			position:absolute;
			left:35%;
			bottom:12px;
			font-family:'微软雅黑';
			font-size:1em;
			color:#fff;
		}
		.form{
			top:20px;
			height:0px;
			width:80%;
			left:0px;
			right:0px;
			margin:auto;
		}
		.divc{
			border-radius:30px;
			background-color:#fff;
			margin-bottom:30px;
		}
		.img{
			position:absolute;
			width:35px;
			margin-left:15px;
			margin-top:4px;
		}
		.int{
			color:#0062CC;
			margin-top:10px;
			margin-left:22%;
			font-size:0.9em;
			font-family:'微软雅黑';
		}
		.button{
			line-height:2em;
			font-size:0.9em;
			width:80%;
			font-family:'微软雅黑';
			border-radius:30px;
			border:0px solid;
			background:linear-gradient(45deg,BLUE,purple);
		}
	</style>
</head>
<body style="background:#1a1d2e;">
	<header class="mui-bar mui-bar-nav header">
			<a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
			<h1 class="mui-title h1">银行卡充值</h1>
	</header>	
		<ul class="mui-table-view ul">
			<li class="mui-table-view-cell mui-collapse-content"><p class="p">所属银行</p><p class="p1"><?php echo ($conf["cz_yh"]); ?></p> </li>
			<li class="mui-table-view-cell mui-collapse-content"><p class="p">充值姓名</p><p class="p1"><?php echo ($conf["cz_xm"]); ?></p> </li>
			<li class="mui-table-view-cell mui-collapse-content"><p class="p">银行卡号</p><p class="p1"><?php echo ($conf["cz_kh"]); ?></p> </li>
		</ul>
		
	<!--	<div class="mui-card-content" style="position: absolute; bottom: -300px; background:#1f253d;height: 200px; width: 110%; border-radius: 10px;box-shadow:2px 0px 20px 0px #007AFF;">
				<span style="top: 160px; color: #ccc;font-family: '微软雅黑';font-size: 0.8em;left: 23px;">
				充值注意事项<br>

				1.全天24小时可以转账充值；<br>

				2.禁止向上级递交保证金，否则出现资金问题，平台概不负责；<br>

				3.平台禁止代充，充值失败可以选择其他通道；<br>

				4.转账成功后，1-10分钟内可以到账，如遇充值高峰期，10-30分钟才能到账，可以联系导师处理。	
				</span>
			</div>
		 -->
		
			<form class="mui-input-group form"  name="AddUser" action="<?php echo U('Recharge/bank_rc');?>" id="registerForm"  >
				<div class="mui-input-row divc">
					<img src="../Public/home/wap/images/nubmer.png"  class="img" />
					<input type="text" class="int"  name="uname" value=""   placeholder="充值姓名">
				</div>
				<div class="mui-input-row divc">
					<img src="../Public/home/wap/images/nubmer.png"  class="img" />
					<input type="number" class="int"  name="account" value="" placeholder="注册帐户手机号">
				</div>
				<div class="mui-input-row divc">
					<img src="../Public/home/wap/images/nubmer.png"  class="img" />
					<input type="number" class="int"  name="price" value=""  placeholder="充值金额">
				</div>
				<div class="mui-input-row divc">
					<img src="../Public/home/wap/images/nubmer.png"  class="img" />
					<input type="text" class="int"  name="marker" value="" placeholder="选填备注">
				</div>
				<br>
				<div class="mui-button-row">
					<button type="button" class="mui-btn mui-btn-danger button"  id="submit"  onclick="alipaynow()"  >提交</button>
				</div>
			</form>
			<div class="mui-card-content" style="position: absolute; bottom: -220px; background:#1f253d;height: 200px; width: 110%; border-radius: 10px;box-shadow:2px 0px 20px 0px #007AFF;">
				<span style="top: 160px; color: #ccc;font-family: '微软雅黑';font-size: 0.8em;left: 23px;">
				充值注意事项<br>

				1.全天24小时可以转账充值；<br>

				2.请用户先转账到平台银行账号后再点击提交订单；<br>

				3.禁止向上级递交保证金，否则出现资金问题，平台概不负责；<br>

				4.平台禁止代充，充值失败可以选择其他通道;	<br>
				
				5.转账成功后，1-10分钟内可以到账，如遇充值高峰期，10-30分钟才能到账，可以联系导师处理；
				</span>
			</div>
	
</body>

 <script type="text/javascript" src="/Public/home/common/js/jquery-1.9.1.min.js" ></script>
 <script type="text/javascript" src="/Public/home/common/layer/layer.js" ></script>
 <script type="text/javascript">

    function alipaynow(){
        var thisform=document.forms['AddUser'];
		var   uname=thisform.uname.value;
        var   account=thisform.account.value;       
        var   price=thisform.price.value;
        var   marker=thisform.marker.value;

        if(uname=='' || uname==null){
            layer.msg('充值人姓名');
            return false;
        }
		if(account=='' || account==null){
            layer.msg('充值账号');
            return false;
        }
		if(price=='' || price==null){
            layer.msg('充值金额');
            return false;
        }
		
        var post_url = $("form[name='AddUser']").attr('action');
        var post_data= $("form[name='AddUser']").serialize();
		$("#submit").attr('disabled',true)
        $.ajax({
            type: "POST",
            url: post_url,
            data:post_data,
            dataType: "json",
            success: function(data){
                if(data.status==1){
                    layer.msg(data.msg);  //,data.url);
					setTimeout(function (args) {
						window.location.href = "<?php echo U('Recharge/chongzhijilu');?>";
					}, 3000); 
                }else{
                    layer.msg(data.msg);
                }
            }
        });
    }

</script>	
</html>