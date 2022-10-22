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
					<a class="breadcrumb__link" href="projects" itemprop="item"><span itemprop="name">事業案内</span></a>
					<meta content="2" itemprop="position">
				</li>
				<li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<span itemprop="item"><span itemprop="name">環境・再生エネルギー</span></span>
					<meta content="3" itemprop="position">
				</li>
			</ol>
		</div>
	</div>
	<div class="contents" id="contents">
		<section class="l-section projects">
			<p class="projects__logo"><img alt="環境・再生エネルギー" src="img/projects/icon_environment-renewableenergy.svg"></p>
			<h3 class="heading-h3"><span>環境・<br class="u-sp-only">
			再生エネルギー</span></h3>
			<div class="l-inner l-inner--xl">
				<div class="projects__list" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-offset="100">
					<div class="projects__text">
						<h4 class="heading-h4">再生可能エネルギー・脱炭素計画</h4>
						<p>2050 年カーボンニュートラル、脱炭素社会の実現に向けた取組が日本各地で始まっています。<br>
						太陽光、バイオマス、洋上・陸上風力等、再エネ導入に向けた調査や環境アセスメントの実施、地域の資源や産業を活かした脱炭素計画の検討により、新しい未来の社会づくりに貢献します。</p>
						<ul>
							<li>◆再生可能エネルギー導入可能性調査・環境アセスメント</li>
							<li>◆地域脱炭素計画策定検討</li>
						</ul>
					</div>
					<div class="projects__image"><img alt="再生可能エネルギー・脱炭素計画" src="img/projects/environment-renewableenergy_image1.jpg"></div>
				</div>
				<div class="projects__list" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-offset="100">
					<div class="projects__text">
						<h4 class="heading-h4">開発に伴う環境アセスメント</h4>
						<p>環境アセスメントは、事業者が環境保全の観点でよりよい事業計画を作り上げていくための仕組みです。<br>
						土地区画整理事業、高層建築物、港湾整備等、様々な開発で必要となる環境アセスメントについて、企画から評価書作成までの一連の流れをサポートし、地域との合意形成や適切な環境保全に貢献します。</p>
						<ul>
							<li>◆法・条例に基づく環境アセスメント</li>
							<li>◆合意形成のための自主アセスメント</li>
						</ul>
					</div>
					<div class="projects__image"><img alt="開発に伴う環境アセスメント" src="img/projects/environment-renewableenergy_image2.jpg"></div>
				</div>
				<div class="projects__list" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-offset="100">
					<div class="projects__text">
						<h4 class="heading-h4">グリーンインフラ</h4>
						<p>グリーンインフラは、自然環境が有する多様な機能を活用し、持続可能な地域づくりを進める取組です。<br>
						自然再生計画、多自然川づくり、藻場・干潟創出による漁場回復、都市域の緑化、環境学習等、自然環境の機能に着目した調査や計画検討により、質の高い社会資本整備に貢献します。</p>
						<ul>
							<li>◆自然再生計画・多自然川づくりに係わる調査・計画検討</li>
							<li>◆干潟・藻場の創出計画検討</li>
						</ul>
					</div>
					<div class="projects__image"><img alt="グリーンインフラ" src="img/projects/environment-renewableenergy_image3.jpg"></div>
				</div>
				<div class="projects__list" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-offset="100">
					<div class="projects__text">
						<h4 class="heading-h4">環境調査・解析</h4>
						<p>環境の現状把握や対策検討を進めるには、対象や目的に応じたデータ収集と解析が必要です。<br>
						陸域から海域まで、自然環境・生活環境などの様々な側面に対し、IoT などの最新技術も活用した的確な調査計画の提案・実施・解析により、環境課題の解決に貢献します。</p>
						<ul>
							<li>◆自然環境調査・解析（動植物、生態系など）</li>
							<li>◆生活環境調査・解析（大気、騒音振動など）</li>
						</ul>
					</div>
					<div class="projects__image"><img alt="環境調査・解析" src="img/projects/environment-renewableenergy_image4.jpg"></div>
				</div>
				<div class="mt-1 u-center">
					<a class="btn" href="https://www.mccnet.co.jp/info/archives/category/environmentrenewableenergy">実績一覧</a>
				</div>
			</div>
		</section>
		<section class="company-list l-section service" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-offset="100">
			<div class="l-inner l-inner--xl">
				<div class="company-list">
					<div class="company-list__heading">
						<h3 class="heading-secondary">事業案内</h3>
					</div>
					<div class="company-list__body">
						<div class="company-list__text">
							<ul class="company-list__btn">
								<li>
									<a href="projects_rivers-sabo">河川・砂防</a>
								</li>
								<li>
									<a href="projects_roads-bridges">道路・橋梁</a>
								</li>
								<li>
									<a href="projects_ports-airport-coasts">港湾・空港・海岸</a>
								</li>
								<li>
									<a href="projects_town-planning">まちづくり</a>
								</li>
								<li>
									<a href="projects_sewer">下水道</a>
								</li>
								<li>
									<a href="projects_ground-analysis">地盤解析</a>
								</li>
								<li>
									<a href="projects_environment-renewableenergy">環境・再生エネルギー</a>
								</li>
								<li>
									<a href="projects_telecommunications">電気通信</a>
								</li>
								<li>
									<a href="projects_informationsystem">情報システム</a>
								</li>
								<li>
									<a href="projects_maintenance">保全</a>
								</li>
								<li>
									<a href="projects_cm-ppppfl">マネジメント</a>
								</li>
								<li>
									<a href="projects_overseas">海外</a>
								</li>
							</ul>
						</div>
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