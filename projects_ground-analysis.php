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
					<span itemprop="item"><span itemprop="name">地盤解析</span></span>
					<meta content="3" itemprop="position">
				</li>
			</ol>
		</div>
	</div>
	<div class="contents" id="contents">
		<section class="l-section projects">
			<p class="projects__logo"><img alt="地盤解析" src="img/projects/icon_ground-analysis.svg"></p>
			<h3 class="heading-h3"><span>地盤解析</span></h3>
			<div class="l-inner l-inner--xl">
				<div class="projects__list" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-offset="100">
					<div class="projects__text">
						<h4 class="heading-h4">軟弱地盤に起因する影響評価と対策設計</h4>
						<p>建築物や鉄道・高速道路施設への近接施工の問題が増えております。<br>
						弊社では、盛土や掘削による短期的・長期的な近接構造物への影響について、影響評価の必要性の判断、必要な追加調査の提案・実施、調査結果等を踏まえた詳細な変形予測（ＦＥＭ解析等）による対策の必要性の評価を行います。また、変形挙動のメカニズムを考察した上で、新工法を含めた最適な対策工の設計を行います。</p>
					</div>
					<div class="projects__image"><img alt="軟弱地盤に起因する影響評価と対策設計" src="img/projects/ground-analysis_image1.jpg"></div>
				</div>
				<div class="projects__list" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-offset="100">
					<div class="projects__text">
						<h4 class="heading-h4">河川堤防の洪水時の「浸透」対策</h4>
						<p>近年増加した集中豪雨や大規模洪水による堤防の被災が増えており、河川堤防の洪水時の安定性確保が課題となっています。<br>
						洪水時の河川堤防では、河川水位の上昇等により堤体内を通過する”浸透水”の影響が問題となります。</p>
						<p>河川堤防の洪水時の浸透に対する安定性を評価するための、調査・解析を行うとともに、安定性が不足するケースでは、そのメカニズムを予測検討した上で、必要な堤防強化対策の設計を行っております。</p>
					</div>
					<div class="projects__image"><img alt="河川堤防の洪水時の「浸透」対策" src="img/projects/ground-analysis_image2.jpg"></div>
				</div>
				<div class="projects__list" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-offset="100">
					<div class="projects__text">
						<h4 class="heading-h4">地震時の挙動評価と対策設計</h4>
						<p>東日本大震災を経て、南海トラフや首都直下地震等大規模地震に対する土木施設の安全性の確保が課題となっています。</p>
						<p>弊社では、対象施設に応じた、地震時の液状化をはじめとする、地盤の地震時挙動、地盤と構造物の相互作用の検討を行い、耐震性能照査・耐震対策設計を、最新の解析技術と豊富な実績・経験に基づき行っています。（写真：都市河川における新工法による液状化対策地盤改良工事）</p>
					</div>
					<div class="projects__image"><img alt="地震時の挙動評価と対策設計" src="img/projects/ground-analysis_image3.jpg"></div>
				</div>
				<div class="mt-1 u-center">
					<a class="btn" href="https://www.mccnet.co.jp/info/archives/category/groundanalysis">実績一覧</a>
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