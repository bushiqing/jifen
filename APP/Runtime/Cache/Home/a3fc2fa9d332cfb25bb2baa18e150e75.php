<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title></title>
  
      <link href="/Public/home/wap/css/mui.min.css" rel="stylesheet"/>

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
		.img{
			position:absolute;
			width:90%;
			margin-top:8%;
			left:5%;
			border-radius:15px;
			top:3%;
		}
		.span{
			position:absolute;
			z-index:999;
			color:#fff;
			font-family:'微软雅黑';
			font-size:0.9em;
			top:10%;
			left:10%;
		}
		.span1{
			position:absolute;
			z-index:999;
			color:#fff;
			font-family:'微软雅黑';
			font-size:1.5em;
			top:16%;
			left:10%;
		}
		.divc{
			background:#1f253d;
			height:60px;
			width:88%;
			margin-top:215px;
			left:6%;
			border-radius:10px;
			box-shadow:2px 0px 20px 0px #007AFF;
		}
		.button{
			line-height:1.5em;
			left:15px;
			font-size:0.9em;
			width:40%;
			font-family:'微软雅黑';
			border-radius:30px;
			border:0px solid;
			background:linear-gradient(45deg,BLUE,purple);
			top:15px;
			position:absolute;
		}
		.button1{
			line-height:1.5em;
			right:15px;
			font-size:0.9em; 
			width:40%;
			font-family:'微软雅黑';
			border-radius:30px;
			border:0px solid;
			background:linear-gradient(45deg,BLUE,purple);
			top:9px;
			position:absolute;
		}
		.ul1{
			top:10px;
			background:#1a1d2e;
			line-height:3.5em;
		}
		.imgg{
			position:absolute;
			width:40px;
			margin-left:10px;
			margin-top:10px;
		}
		.p3{
			margin-left:18%;
			font-family:'微软雅黑';
			color:#fff;
		}
		.p4{
			position:absolute;
			margin-left:70%;
			top: 11px;
			font-family:'微软雅黑';
			font-size:1em;
			color:#2AC845;
		}
	</style>
</head>
<body style="background:#1a1d2e;">
	<header class="mui-bar mui-bar-nav header">
			<a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left" href="javascript:history.go(-1)"></a>
			<h1 class="mui-title h1">我的钱包</h1>
	</header>
			<img src="../Public/home/wap/images/ziliaobg.png" class="img"/>
			<span class="span">保证金</span>
			<span class="span1"><?php echo ($info["money"]); ?>CNY</span>
			<div class="mui-card-content divc">
			<a href="<?php echo U('Recharge/chongzhi');?>">
			<div class="mui-button-row">
				<button type="button" class="mui-btn mui-btn-danger button">充值</button>
			</div>
			</a>
			<a href="<?php echo U('Withdraw/tixian');?>">
			<div class="mui-button-row">
				<button type="button" class="mui-btn mui-btn-danger button1">提现</button>
			</div>
			</a>
			</div>
		<ul class="mui-table-view ul1">
			
				<li class="mui-table-view-cell mui-media  mui-collapse mui-collapse-content">
					<img src="../Public/home/wap/images/jiangli.png" class="imgg" />
					<p class="p3">奖励金额</p>
					<p class="p4"><?php echo ($sum_jj); ?></p>
				</li>
				<li class="mui-table-view-cell mui-media  mui-collapse mui-collapse-content">
					<img src="../Public/home/wap/images/yongjin.png" class="imgg" />
					<p class="p3">佣金费率</p>
					<p class="p4">
						<?php echo ($clist['qd_wxyj']+1) .','.($clist['qd_zfbyj']+1).','.($clist['qd_bkyj']+1);?>
					</p>
				</li>
				<li class="mui-table-view-cell mui-collapse-content">
					<img src="../Public/home/wap/images/shou.png" class="imgg" style="width: 50px; margin-left: 5px; bottom: 20px;"/>
					<p class="p3">已收款金额</p>
					<p class="p4"><?php echo ($sum_ysk); ?></p>
				</li>
				<li class="mui-table-view-cell mui-collapse-content">
					<img src="../Public/home/wap/images/dai.png" class="imgg"/>
					<p class="p3">待收款金额</p>
					<p class="p4"><?php if($sum_dsk>0){echo $sum_dsk;}else{echo '0.00';}?></p>
				</li>
			</ul>
</body>
</html>