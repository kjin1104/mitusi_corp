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
					<span itemprop="item"><span itemprop="name">河川・砂防</span></span>
					<meta content="3" itemprop="position">
				</li>
			</ol>
		</div>
	</div>
	<div class="contents" id="contents">
		<section class="l-section projects">
			<p class="projects__logo"><img alt="河川・砂防" src="img/projects/icon_rivers-sabou.svg"></p>
			<h3 class="heading-h3"><span>河川・砂防</span></h3>
			<div class="l-inner l-inner--xl">
				<div class="projects__list" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-offset="100">
					<div class="projects__text">
						<h4 class="heading-h4">河川計画</h4>
						<p>河川、ダム、湖沼の治水・利水・環境に関する調査・計画、河川やダム水位の予測、浸水想定区域図やハザードマップの作成、避難対策の提案など、水防災に関する業務を行います。</p>
						<ul>
							<li>◆河道計画</li>
							<li>◆氾濫解析</li>
							<li>◆洪水予測</li>
							<li>◆河床変動解析</li>
							<li>◆ダムの流入 ・放流予測システム構築 など</li>
						</ul>
						<div class="mt-3 page__link">
							<a class="btn" href="/info/archives/category/riversplan">more</a>
						</div>
					</div>
					<div class="projects__image"><img alt="河川計画" src="img/projects/rivers-sabo_image1.jpg"></div>
				</div>
				<div class="projects__list" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-offset="100">
					<div class="projects__text">
						<h4 class="heading-h4">河川構造物設計</h4>
						<p>河川構造物部門では、河川に関わる構造物の調査、計画、設計、維持管理を行っています。代表的な河川構造物である堤防・護岸、樋門・樋管、堰、水門まで多岐にわたる分野を対象としています。近年では、東日本大震災の復興に関わる水門・堤防設計、越流堤やトンネル放水路の模型実験、景観性に優れる門柱レスゲートの大型水門への適用等、緊急性の高い事業から他に類を見ない事業に関わっています。</p>
						<div class="mt-3 page__link">
							<a class="btn" href="/info/archives/category/riverstructure">more</a>
						</div>
					</div>
					<div class="projects__image"><img alt="河川構造物設計" src="img/projects/rivers-sabo_image2.jpg"></div>
				</div>
				<div class="projects__list" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-offset="100">
					<div class="projects__text">
						<h4 class="heading-h4">砂防</h4>
						<p>土石流・流木対策や急傾斜地対策、地すべり対策に関する調査・計画立案・構造物設計や、ソフト対策（土砂災害防止法に基づく基礎調査やハザードマップの作成の警戒避難に関する検討等）、各シミュレーションによるリスク評価等、総合的な土砂災害対策に関する業務を行います。</p>
						<ul>
							<li>◆土石流・流木対策調査、計画、設計</li>
							<li>◆地すべり対策調査、計画、設計</li>
							<li>◆急傾斜地対策調査、計画、設計</li>
							<li>◆土砂災害防止法に基づく基礎調査</li>
							<li>◆土砂・洪水氾濫対策計画</li>
						</ul>
						<div class="mt-3 page__link">
							<a class="btn" href="/info/archives/category/sabo">more</a>
						</div>
					</div>
					<div class="projects__image"><img alt="砂防" src="img/projects/rivers-sabo_image3.jpg"></div>
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