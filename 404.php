<?php require_once 'header.php';?>
	<div class="container-fluid content">
		<div class="header">
			<nav>
				<div class="navbar-header">
					<!-- <h3 class="text-muted"><a href="index.html">Btlike</a></h3> -->
					<a href="<?php echo DOMAIN_PATH;?>"><img src="<?php echo DOMAIN_PATH;?>assets/img/header.jpg" /></a>
				</div>
				<div class="collapse navbar-collapse">
					<div class="navbar-form  search-title">
						<input type="text" class="form-control input-md input-search square search-title-input" id="search" placeholder="搜索电影，音乐，番号，软件 . . .">
						<button class="btn btn-md btn-success search-btn square" onclick="onSearch(search,1,'')">搜索</button>
						<div class="navbar-right trend-list">
							<a href="<?php echo DOMAIN_PATH.'ranking.php';?>">热门排行</a>
						</div>
					</div>
				</div>
			</nav>
		</div>
		<div class="row  custom-panel">
			<div class="col-xs-6 col-md-1"></div>
			<div class="col-xs-6 col-md-7">
				<div class="panel panel-default">
					<div class="panel-body middle">
						<!-- <h3>从前有座山，山上有座庙</h3> -->
						<!-- <h3>庙里有个资源，现在找不到</h3> -->
						<a href="<?php echo DOMAIN_PATH;?>"><h3>您搜索的资源暂未收录</h3></a>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-4"></div>
		</div>
	</div>
<?php require_once 'footer.php';?>