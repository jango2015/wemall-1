<?php if (!defined('THINK_PATH')) exit();?> <script type="text/javascript">
        document.write('<div id="global_loading" style="width: 100%;height: 100%;position: fixed;top: 0;left: 0;background-color: #eee;z-index:999"><div style="width: 100px;height: 75px;margin:auto;top:50%;position:relative"><span style="display:block;float:left;width:32px;height:32px;background:url(/mobile/images/spacer.gif);margin-top:-5px;"></span>&nbsp;&nbsp;加载中...</div></div>');
    </script>
<div class="header_03">
  <div class="back"> <a href="index.php" class="arrow"></a> </div>
  <div style="" class="tit">
    <h3>往期业绩管理</h3>
  </div>
  <div class="nav">
    <ul>
      <li class="cart"> <a href="cart.php">购物车</a> <span style="display:none" id="ShoppingCartNum"></span> </li>
    </ul>
  </div>
</div>
    <section>
<div class="pending-detial">
    <h2>直销业绩</h2>
		<div class="order-info">
			<ul>
				<li class="first clearfix">
					<p class="title">直销基数:</p>
					<p class="sum">￥<?php echo ($baseDirectPrices); ?></p>
				</li>
                                <li class="first clearfix">
					<p class="title">系数:</p>
					<p class="sum"><?php echo ($directCoe); ?></p>
				</li>
                                <li class="first clearfix">
					<p class="title">应得:</p>
					<p class="sum">￥<?php echo ($resultDirectPrices); ?></p>
				</li>
                        </ul>
                </div>
</div>
<div class="pending-detial">
    <h2>线销总业绩</h2>
		<div class="order-info">
                    <foreach name="history" item="value" key="key">
			<ul>
                            <li>
                                <div class="year year_2014">
                                    <h4 class="a" style="float:left"><?php echo ($value["describe"]); ?></h4>
                                    <div class="look1"></div>
                                    <div class="clr"></div>
                                </div><!--查看2014年业绩情况-->
                            </li>
				<li class="first clearfix">
					<p class="title">总线销销售额：</p>
					<p class="sum">￥<?php echo ($value["line"]["base"]); ?></p>
				</li>
                                <li class="first clearfix">
					<p class="title">系数:</p>
					<p class="sum"><?php echo ($value["line"]["coe"]); ?></p>
				</li>
                                <li class="first clearfix">
					<p class="title">应得:</p>
					<p class="sum">￥<?php echo ($value["line"]["result"]); ?></p>
				</li>
                        </ul>
                </div>
</div>
    </section>
<script type="text/javascript">
		var global_loading=document.getElementById("global_loading");
		global_loading.parentNode.removeChild(global_loading);
</script>
<style>
    .a{
  color:#0000CC;
   }
   .look1
 {
 	background-image:url('image/drop-down.png');
	background-repeat:no-repeat;	
	float:right;
	width:60px;
	height:60px;	
	background-position: center center;		
 }
 .clr
 {
 clear:both;
 }
    section{
        margin-top: 6em;
        margin-bottom: 6em;
    }
</style>