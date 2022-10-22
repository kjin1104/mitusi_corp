<!DOCTYPE html>
<html lang="ja">
<head>
	<?php $filename = 'index.php';
	        if (file_exists($filename)) {
	            include('elements/hd.php');
	        } else {
	            echo '';
	        } ?>
</head>

<body class="page-message">
	<?php $filename = 'index.php';
	                            if (file_exists($filename)) {
	                                include('elements/gnav.php');
	                            } else {
	                                echo '';
	                            } ?>
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
					<span itemprop="item"><span itemprop="name">電気通信</span></span>
					<meta content="3" itemprop="position">
				</li>
			</ol>
		</div>
	</div>
	<div class="contents" id="contents">
		<section class="l-section projects">
			<p class="projects__logo"><img alt="電気通信" src="img/projects/icon_telecommunications.svg"></p>
			<h3 class="heading-h3"><span>電気通信</span></h3>
			<div class="l-inner l-inner--xl">
				<div class="projects__list" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-offset="100">
					<div class="projects__text">
						<h4 class="heading-h4">ダム管理用制御処理設備</h4>
						<p>ダム管理用制御処理設備は、ダム湖の貯水位を基に流入量を演算し、ダム毎の操作規則に従った放流操作を支援するための装置であり、ダム管理における頭脳の役割を果たす重要な設備です。弊社では、設備に必要 な計画（基本設計）から詳細設計、予算に応じた段階的な工事計画を立案しています。また、ダム管理に必要なテレメータ・警報設備、堤体観測装置、CCTV（ITV）設備、気象観測設備、電源設備、遠隔操作設備 などの全ての電気通信設備を含めた全体更新計画立案のほか、ダムへの流入予測システム、貯水位回復予測、ダム放流の弾力的運用などダム管理･運用面でも併せて設計検討を行っています。</p>
					</div>
					<div class="projects__image"><img alt="ダム管理用制御処理設備" src="img/projects/telecommunications_image1.jpg"></div>
				</div>
				<div class="projects__list" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-offset="100">
					<div class="projects__text">
						<h4 class="heading-h4">水門・陸閘等の遠隔管理システム</h4>
						<p>平成23年3月11日に発生した東日本大震災において、水門等の操作に従事した方が多数犠牲となる事態が発生しました。<br>
						この事態を踏まえ、海岸関係省庁より、水門等の操作に従事する者の安全の確保を最優先とした上で、津波・高潮の発生時に水門等の操作を確実に実施できる管理体制の構築を図るよう海岸管理者に対し通知されました。当社では、通 知の内容を踏まえ、現行システムの改善方針の策定から、遠隔化・自動化の方針、および遠隔管理システムの全体に関わる細部の検討までの業務を行っています。</p>
					</div>
					<div class="projects__image"><img alt="水門・陸閘等の遠隔管理システム" src="img/projects/telecommunications_image2.jpg"></div>
				</div>
				<div class="projects__list" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-offset="100">
					<div class="projects__text">
						<h4 class="heading-h4">道路情報表示板管理システム</h4>
						<p>道路情報表示システムは、刻々と変化する道路情報をドライバーに的確に伝達する重要な施設です。特に近年の相次いだ自然災害や巨大地震などに対し、道路利用者の事故を未然に防ぐために、迅速かつ正確な道路 情報の提供が不可欠となっています。当社では、効率的・経済的な更新計画を立案し、操作端末（制御装置）から情報板に至るシステム全体に関わる細部の検討業務を行っています。</p>
					</div>
					<div class="projects__image"><img alt="道路情報表示板管理システム" src="img/projects/telecommunications_image3.jpg"></div>
				</div>
				<div class="projects__list" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-offset="100">
					<div class="projects__text">
						<h4 class="heading-h4">ダム放流警報設備</h4>
						<p>ダム放流警報設備は、人々の命を守るためにも、危険を確実に一般の人々へ通知することが必要不可欠です。<br>
						弊社では、この放流警報設備の整備に必要な計画、調査、設計、工事に必要な発注資料の作成等を行っています。<br>
						近年では、平成30 年の西日本豪雨を受けて、従来は「川の中にいる人（堤外地）」向けであった警報の範囲を、異常洪水時においては「流域周辺の住民（堤内地）」まで広げるよう、国でも検討が進められてい ます。弊社ではこのような背景を踏まえ、堤内地側へ警報の範囲を広げるための放流警報設備の改良設計も実施しております。</p>
					</div>
					<div class="projects__image"><img alt="ダム放流警報設備" src="img/projects/telecommunications_image4.jpg"></div>
				</div>
				<div class="mt-1 u-center">
					<a class="btn" href="https://www.mccnet.co.jp/info/archives/category/telecommunications">実績一覧</a>
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
	</div><?php $filename = 'index.php';
	            if (file_exists($filename)) {
	                include('elements/fd.php');
	            } else {
	                echo '';
	            } ?>
	<div class="page-top">
		<a class="page-top__link" href="#"><i aria-hidden="true" class="fa-arrow-up fas"></i></a>
	</div>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js">
	</script> 
	<script>
	       AOS.init({
	           offset: 120,
	           delay: 100,
	           duration: 500,
	           easing: "false",
	           once: !1,
	           mirror: !0
	       }), $(function() {
	           $(".lazy").lazyload({
	               threshold: -1e3,
	               skip_invisible: !0
	           })
	       })
	</script>
</body>
</html>