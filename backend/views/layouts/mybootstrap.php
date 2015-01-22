<?php

use backend\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);

?>

<?php $this->beginPage() ?>

<!DOCTYPE html>

<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>

<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12" style="background-color:red">header
<!-- 			<div class="navbar"> -->
<!-- 				<div class="navbar-inner"> -->
<!-- 					<div class="container-fluid"> -->
<!-- 						 <a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a> <a href="#" class="brand">网站名</a> -->
<!-- 						<div class="nav-collapse collapse navbar-responsive-collapse"> -->
<!-- 							<ul class="nav"> -->
<!-- 								<li class="active"> -->
<!-- 									<a href="#">主页</a> -->
<!-- 								</li> -->
<!-- 								<li> -->
<!-- 									<a href="#">链接</a> -->
<!-- 								</li> -->
<!-- 								<li> -->
<!-- 									<a href="#">链接</a> -->
<!-- 								</li> -->
<!-- 								<li class="dropdown"> -->
<!-- 									 <a data-toggle="dropdown" class="dropdown-toggle" href="#">下拉菜单<strong class="caret"></strong></a> -->
<!-- 									<ul class="dropdown-menu"> -->
<!-- 										<li> -->
<!-- 											<a href="#">下拉导航1</a> -->
<!-- 										</li> -->
<!-- 										<li> -->
<!-- 											<a href="#">下拉导航2</a> -->
<!-- 										</li> -->
<!-- 										<li> -->
<!-- 											<a href="#">其他</a> -->
<!-- 										</li> -->
<!-- 										<li class="divider"> -->
<!-- 										</li> -->
<!-- 										<li class="nav-header"> -->
<!-- 											标签 -->
<!-- 										</li> -->
<!-- 										<li> -->
<!-- 											<a href="#">链接1</a> -->
<!-- 										</li> -->
<!-- 										<li> -->
<!-- 											<a href="#">链接2</a> -->
<!-- 										</li> -->
<!-- 									</ul> -->
<!-- 								</li> -->
<!-- 							</ul> -->
<!-- 							<ul class="nav pull-right"> -->
<!-- 								<li> -->
<!-- 									<a href="#">右边链接</a> -->
<!-- 								</li> -->
<!-- 								<li class="divider-vertical"> -->
<!-- 								</li> -->
<!-- 								<li class="dropdown"> -->
<!-- 									 <a data-toggle="dropdown" class="dropdown-toggle" href="#">下拉菜单<strong class="caret"></strong></a> -->
<!-- 									<ul class="dropdown-menu"> -->
<!-- 										<li> -->
<!-- 											<a href="#">下拉导航1</a> -->
<!-- 										</li> -->
<!-- 										<li> -->
<!-- 											<a href="#">下拉导航2</a> -->
<!-- 										</li> -->
<!-- 										<li> -->
<!-- 											<a href="#">其他</a> -->
<!-- 										</li> -->
<!-- 										<li class="divider"> -->
<!-- 										</li> -->
<!-- 										<li> -->
<!-- 											<a href="#">链接3</a> -->
<!-- 										</li> -->
<!-- 									</ul> -->
<!-- 								</li> -->
<!-- 							</ul> -->
<!-- 						</div> -->
						
<!-- 					</div> -->
<!-- 				</div> -->
				
			</div>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span2" style="background-color:green">nav
<!-- 			<div class="accordion" id="accordion-697229"> -->
<!-- 				<div class="accordion-group"> -->
<!-- 					<div class="accordion-heading"> -->
<!-- 						 <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-697229" href="#accordion-element-413267">选项卡 #1</a> -->
<!-- 					</div> -->
<!-- 					<div id="accordion-element-413267" class="accordion-body collapse"> -->
<!-- 						<div class="accordion-inner"> -->
<!-- 							功能块... -->
<!-- 						</div> -->
<!-- 					</div> -->
<!-- 				</div> -->
<!-- 				<div class="accordion-group"> -->
<!-- 					<div class="accordion-heading"> -->
<!-- 						 <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-697229" href="#accordion-element-507849">选项卡 #2</a> -->
<!-- 					</div> -->
<!-- 					<div id="accordion-element-507849" class="accordion-body collapse"> -->
<!-- 						<div class="accordion-inner"> -->
<!-- 							功能块... -->
<!-- 						</div> -->
<!-- 					</div> -->
<!-- 				</div> -->
<!-- 			</div> -->
<!-- 			<ul class="nav nav-list"> -->
<!-- 				<li class="nav-header"> -->
<!-- 					列表标题 -->
<!-- 				</li> -->
<!-- 				<li class="active"> -->
<!-- 					<a href="#">首页</a> -->
<!-- 				</li> -->
<!-- 				<li> -->
<!-- 					<a href="#">库</a> -->
<!-- 				</li> -->
<!-- 				<li> -->
<!-- 					<a href="#">应用</a> -->
<!-- 				</li> -->
<!-- 				<li class="nav-header"> -->
<!-- 					功能列表 -->
<!-- 				</li> -->
<!-- 				<li> -->
<!-- 					<a href="#">资料</a> -->
<!-- 				</li> -->
<!-- 				<li> -->
<!-- 					<a href="#">设置</a> -->
<!-- 				</li> -->
<!-- 				<li class="divider"> -->
<!-- 				</li> -->
<!-- 				<li> -->
<!-- 					<a href="#">帮助</a> -->
<!-- 				</li> -->
<!-- 			</ul> -->
		</div>
		<div class="span8" style="background-color:yellow">main
<!-- 			<div class="tabbable" id="tabs-466423"> -->
<!-- 				<ul class="nav nav-tabs"> -->
<!-- 					<li class="active"> -->
<!-- 						<a href="#panel-556784" data-toggle="tab">第一部分</a> -->
<!-- 					</li> -->
<!-- 					<li> -->
<!-- 						<a href="#panel-36055" data-toggle="tab">第二部分</a> -->
<!-- 					</li> -->
<!-- 				</ul> -->
<!-- 				<div class="tab-content"> -->
<!-- 					<div class="tab-pane active" id="panel-556784"> -->
<!-- 						<p> -->
<!-- 							第一部分内容. -->
<!-- 						</p> -->
<!-- 					</div> -->
<!-- 					<div class="tab-pane" id="panel-36055"> -->
<!-- 						<p> -->
<!-- 							第二部分内容. -->
<!-- 						</p> -->
<!-- 					</div> -->
<!-- 				</div> -->
<!-- 			</div> -->
<!-- 			<form class="form-search"> -->
<!-- 				<input class="input-medium search-query" type="text" /> <button type="submit" class="btn">查找</button> -->
<!-- 			</form> -->
<!-- 			<table class="table"> -->
<!-- 				<thead> -->
<!-- 					<tr> -->
<!-- 						<th> -->
<!-- 							编号 -->
<!-- 						</th> -->
<!-- 						<th> -->
<!-- 							产品 -->
<!-- 						</th> -->
<!-- 						<th> -->
<!-- 							交付时间 -->
<!-- 						</th> -->
<!-- 						<th> -->
<!-- 							状态 -->
<!-- 						</th> -->
<!-- 					</tr> -->
<!-- 				</thead> -->
<!-- 				<tbody> -->
<!-- 					<tr> -->
<!-- 						<td> -->
<!-- 							1 -->
<!-- 						</td> -->
<!-- 						<td> -->
<!-- 							TB - Monthly -->
<!-- 						</td> -->
<!-- 						<td> -->
<!-- 							01/04/2012 -->
<!-- 						</td> -->
<!-- 						<td> -->
<!-- 							Default -->
<!-- 						</td> -->
<!-- 					</tr> -->
<!-- 					<tr class="success"> -->
<!-- 						<td> -->
<!-- 							1 -->
<!-- 						</td> -->
<!-- 						<td> -->
<!-- 							TB - Monthly -->
<!-- 						</td> -->
<!-- 						<td> -->
<!-- 							01/04/2012 -->
<!-- 						</td> -->
<!-- 						<td> -->
<!-- 							Approved -->
<!-- 						</td> -->
<!-- 					</tr> -->
<!-- 					<tr class="error"> -->
<!-- 						<td> -->
<!-- 							2 -->
<!-- 						</td> -->
<!-- 						<td> -->
<!-- 							TB - Monthly -->
<!-- 						</td> -->
<!-- 						<td> -->
<!-- 							02/04/2012 -->
<!-- 						</td> -->
<!-- 						<td> -->
<!-- 							Declined -->
<!-- 						</td> -->
<!-- 					</tr> -->
<!-- 					<tr class="warning"> -->
<!-- 						<td> -->
<!-- 							3 -->
<!-- 						</td> -->
<!-- 						<td> -->
<!-- 							TB - Monthly -->
<!-- 						</td> -->
<!-- 						<td> -->
<!-- 							03/04/2012 -->
<!-- 						</td> -->
<!-- 						<td> -->
<!-- 							Pending -->
<!-- 						</td> -->
<!-- 					</tr> -->
<!-- 					<tr class="info"> -->
<!-- 						<td> -->
<!-- 							4 -->
<!-- 						</td> -->
<!-- 						<td> -->
<!-- 							TB - Monthly -->
<!-- 						</td> -->
<!-- 						<td> -->
<!-- 							04/04/2012 -->
<!-- 						</td> -->
<!-- 						<td> -->
<!-- 							Call in to confirm -->
<!-- 						</td> -->
<!-- 					</tr> -->
<!-- 				</tbody> -->
<!-- 			</table> -->
<!-- 			<div class="pagination"> -->
<!-- 				<ul> -->
<!-- 					<li> -->
<!-- 						<a href="#">上一页</a> -->
<!-- 					</li> -->
<!-- 					<li> -->
<!-- 						<a href="#">1</a> -->
<!-- 					</li> -->
<!-- 					<li> -->
<!-- 						<a href="#">2</a> -->
<!-- 					</li> -->
<!-- 					<li> -->
<!-- 						<a href="#">3</a> -->
<!-- 					</li> -->
<!-- 					<li> -->
<!-- 						<a href="#">4</a> -->
<!-- 					</li> -->
<!-- 					<li> -->
<!-- 						<a href="#">5</a> -->
<!-- 					</li> -->
<!-- 					<li> -->
<!-- 						<a href="#">下一页</a> -->
<!-- 					</li> -->
<!-- 				</ul> -->
<!-- 			</div> -->
		</div>
		<div class="span2">
<!-- 			<div class="accordion" id="accordion-82817"> -->
<!-- 				<div class="accordion-group"> -->
<!-- 					<div class="accordion-heading"> -->
<!-- 						 <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-82817" href="#accordion-element-47797">选项卡 #1</a> -->
<!-- 					</div> -->
<!-- 					<div id="accordion-element-47797" class="accordion-body collapse"> -->
<!-- 						<div class="accordion-inner"> -->
<!-- 							功能块... -->
<!-- 						</div> -->
<!-- 					</div> -->
<!-- 				</div> -->
<!-- 				<div class="accordion-group"> -->
<!-- 					<div class="accordion-heading"> -->
<!-- 						 <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-82817" href="#accordion-element-111028">选项卡 #2</a> -->
<!-- 					</div> -->
<!-- 					<div id="accordion-element-111028" class="accordion-body collapse"> -->
<!-- 						<div class="accordion-inner"> -->
<!-- 							功能块... -->
<!-- 						</div> -->
<!-- 					</div> -->
<!-- 				</div> -->
<!-- 			</div> -->
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			 <address> <strong>Twitter, Inc.</strong><br /> 795 Folsom Ave, Suite 600<br /> San Francisco, CA 94107<br /> <abbr title="Phone">P:</abbr> (123) 456-7890</address>
		</div>
	</div>
</div>

<?php $this->endBody() ?>
</body>

</html><?php $this->endPage() ?>

