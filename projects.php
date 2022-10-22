<!DOCTYPE html>
<html lang="ja">
<head>
	<?php $filename='index.php';if(file_exists($filename)){include('elements/hd.php');}else{echo '';} ?>
</head>

<body class="page-message">
	<?php $filename='index.php';if(file_exists($filename)){include('elements/gnav.php');}else{echo '';} ?>
	<div class="sub-hero">
		<div class="sub-hero__inner">
			<h2 class="heading-primary heading-primary--white">PROJECTS</h2>
		</div>
	</div>
	<div class="breadcrumb">
		<div class="l-inner">
			<ol class="breadcrumb__list" itemscope itemtype="https://schema.org/BreadcrumbList">
				<li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<a class="breadcrumb__link" href="." itemprop="item"><span itemprop="name">HOME</span></a>
					<meta content="1" itemprop="position">
				</li>
				<li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<span itemprop="item"><span itemprop="name">事業案内</span></span>
					<meta content="2" itemprop="position">
				</li>
			</ol>
		</div>
	</div>
	<div class="contents" id="contents">
		<section class="company-list l-section service" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-offset="100">
			<div class="l-inner l-inner--xl">
				<div class="company-list">
					<div class="company-list__heading">
						<h3 class="heading-secondary">事業案内</h3>
					</div>
					<div class="navi__container" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-offset="100">
						<?php
						include(__DIR__ . "/class/tpl.class.php");
						$tpl = new datatpl();
						$tpl->urlon  = array('projects_rivers-sabo', 'projects_roads-bridges', 'projects_ports-airport-coasts', 'projects_town-planning', 'projects_sewer', 'projects_ground-analysis', 'projects_environment-renewableenergy', 'projects_telecommunications', 'projects_informationsystem', 'projects_maintenance', 'projects_cm-ppppfl', 'projects_overseas');
						$tpl->imgon  = array('work01.svg', 'work02.svg', 'work03.svg', 'work04.svg', 'work05.svg', 'work06.svg', 'work07.svg', 'work08.svg', 'work09.svg', 'work10.svg', 'work11.svg', 'work12.svg');
						$tpl->alton = array('河川・砂防', '道路・橋梁', '港湾・空港・海岸', 'まちづくり', '下水道', '地盤解析', '環境・再生エネルギー', '電気通信', '情報システム', '保全', 'マネジメント', '海外');
						$tpl->show('data.tpl.html');
						?>
					</div>
				</div>
			</div>
		</section>
	</div>
	<div class="entry">
		<div class="l-inner-xl">
			<div class="entry__area">
				<div class="entry__text-area">
					<h3 class="entry__entry-ttl">RECRUIT</h3><small>採用情報</small>
					<p>キミの熱意が、未来を創る</p>
					<div class="entry__link">
						<a class="btn mt-3" href="/recruit/" rel="noopener noreferrer" target="_blank">ENTRY</a>
					</div>
				</div>
				<div class="entry__img-box"></div>
			</div>
		</div>
	</div><?php $filename='index.php';if(file_exists($filename)){include('elements/fd.php');}else{echo '';} ?>
	<div class="page-top">
		<a class="page-top__link" href="#"><i aria-hidden="true" class="fa-arrow-up fas"></i></a>
	</div>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js">
	</script>
	<script>
	AOS.init({offset:120,delay:100,duration:500,easing:"false",once:!1,mirror:!0}),$(function(){$(".lazy").lazyload({threshold:-1e3,skip_invisible:!0})})
	</script>
</body>
</html>