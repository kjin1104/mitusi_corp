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
					<span itemprop="item"><span itemprop="name">情報システム</span></span>
					<meta content="3" itemprop="position">
				</li>
			</ol>
		</div>
	</div>
	<div class="contents" id="contents">
		<section class="projects l-section">
			<p class="projects__logo"><img alt="情報システム" src="img/projects/icon_informationsystem.svg"></p>
			<h3 class="heading-h3"><span>情報システム</span></h3>
			<div class="l-inner l-inner--xl">
				<div class="projects__list" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-offset="100">
					<div class="projects__text">
						<h4 class="heading-h4">テクノロジーの進化と生活様式の変化を踏まえた防災情報伝達の最適化</h4>
						<p>防災行政無線設備が全国的に整備されたのは昭和50年代です。当時は、自治体から直接住民に防災情報を伝達する手段が限られており、屋外拡声子局による音声での防災情報伝達は有効な手段でした。</p>
						<p>しかし、現在はデジタルの活用が進み、個人の持つ情報ツールに対して防災情報を直接伝達することが可能な環境が整ってきています。<br>
						私たちは自治体の皆様と共に、前例にとらわれることなく、これからの日本において最適な防災情報伝達の姿を構築していきます。</p>
					</div>
					<div class="projects__image"><img alt="テクノロジーの進化と生活様式の変化を踏まえた防災情報伝達の最適化" src="img/projects/informationsystem_image1.jpg"></div>
				</div>
				<div class="projects__list" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-offset="100">
					<div class="projects__text">
						<h4 class="heading-h4">水防テレメータシステムのコスト低減</h4>
						<p>近年の大規模な水害被害を受けて、日本国内の河川では、水位観測局が増設されています。<br>
						住民が避難判断をするために水位情報は重要な情報です。<br>
						そのため、豪雨時に停止しない信頼性の高い水防システムを構築することが必要です。</p>
						<p>しかし都道府県では、数百か所に及ぶ水位観測地点を有しており、これらを維持更新していくためには多くの費用が発生します。<br>
						私たちは河川管理者と共に、システムの信頼性を維持しつつ、コスト低減を可能とする次世代の水防テレメータシステムの構築を推進していきます。</p>
					</div>
					<div class="projects__image"><img alt="水防テレメータシステムのコスト低減" src="img/projects/informationsystem_image2.jpg"></div>
				</div>
				<div class="projects__list" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-offset="100">
					<div class="projects__text">
						<h4 class="heading-h4">HPCを用いた大規模データ解析技術の開発</h4>
						<p>災害対策やインフラ整備においては、物理現象を可視化するために様々な解析やシミュレーションを行っています。<br>
						PCサーバでは負荷が高く処理しきれない高度な解析処理もHPC（high-performancecomputing）を利用することで高速に処理することが可能となります。<br>
						私たちは、NEC 社のベクトル型スパコン（SX-Aurora TSUBASA）を活用し、洪水予測（RRI モデル）や数値波動水路（CADMAS-SURF3D）等の解析処理の高速化に取組んでいます。</p>
						<p>この技術を用いることで、例えば関東地域のすべての河川を一括で演算することが可能なリアルタイムの洪水予測システムを構築することができます。</p>
					</div>
					<div class="projects__image"><img alt="HPC を用いた大規模データ解析技術の開発" src="img/projects/informationsystem_image3.jpg"></div>
				</div>
				<div class="u-center mt-1">
					<a class="btn" href="https://www.mccnet.co.jp/info/archives/category/informationsystem">実績一覧</a>
				</div>
			</div>
		</section>
		<section class="service company-list l-section" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-offset="100">
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
									<a href="projects_roads-bridges">道路・橋</a>
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
				<div class="entry__img-box">
					&nbsp;
				</div>
			</div>
		</div>
	</div><?php $filename='index.php';if(file_exists($filename)){include('elements/fd.php');}else{echo '';} ?>
	<div class="page-top">
		<a class="page-top__link" href="#"><i aria-hidden="true" class="fas fa-arrow-up"></i></a>
	</div>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js">
	</script> 
	<script>
	       AOS.init({
	           offset: 120,
	           delay: 100,
	           duration: 500,
	           easing: 'false',
	           once: false,
	           mirror: true,
	       });

	       $(function () {
	           $('.lazy').lazyload({
	               threshold: -1000,
	               skip_invisible: true
	           });
	       });
	</script>
</body>
</html>