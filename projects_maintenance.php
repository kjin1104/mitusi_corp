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
					<span itemprop="item"><span itemprop="name">保全</span></span>
					<meta content="3" itemprop="position">
				</li>
			</ol>
		</div>
	</div>
	<div class="contents" id="contents">
		<section class="l-section projects">
			<p class="projects__logo"><img alt="保 全" src="img/projects/icon_maintenance.svg"></p>
			<h3 class="heading-h3"><span>保 全</span></h3>
			<div class="l-inner l-inner--xl">
				<div class="projects__list" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-offset="100">
					<div class="projects__text">
						<h4 class="heading-h4">道路・橋梁施設保全</h4>
						<p>道路や橋梁は災害時の救援活動や緊急物資の輸送などのライフラインとして重要な役割を果たします。道路・橋梁施設保全部門では、地震などの自然災害に強い道路・橋梁を整備するために、既設橋梁の耐震補強設計などを行っています。</p>
						<p>私たちは、点検・調査・補修のサイクルの適切なマネジメントの一翼を担い、デジタルトランスフォーメーションを駆使して、ライフサイクルコストの削減や維持管理の効率性に配慮した社会資本ストックの長寿命化に貢献しています。</p>
					</div>
					<div class="projects__image"><img alt="道路・橋梁施設保全" src="img/projects/maintenance_image1.jpg"></div>
				</div>
				<div class="projects__list" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-offset="100">
					<div class="projects__text">
						<h4 class="heading-h4">河川・砂防施設保全</h4>
						<p>河川・砂防施設に関する点検・調査や補修・補強設計、アセットマネジメントや施設の適切な運用計画策定を行います。</p>
						<ul>
							<li>・河川巡視・点検</li>
							<li>・堤防・護岸・樋門・堰・ポンプ場等の点検、補修・補強設計</li>
							<li>・維持管理計画策定</li>
							<li>・長寿命化計画策定</li>
							<li>・施設の操作規則・操作要領の策定</li>
						</ul>
					</div>
					<div class="projects__image"><img alt="河川・砂防施設保全" src="img/projects/maintenance_image2.jpg"></div>
				</div>
				<div class="projects__list" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-offset="100">
					<div class="projects__text">
						<h4 class="heading-h4">港湾・空港・海岸・漁港施設保全</h4>
						<p>1960年代の高度経済成長期に港湾や空港は急速に発展し、日本の経済を支えてきました。<br>
						これらの施設は耐用年数を50年程度としており、順次老朽化が顕在化しています。さらに近年では、南海トラフをはじめとする巨大地震や気候変動に伴う外力の巨大化によって既存施設の被災リスクが高まっています。 こうした施設の長寿命化を図るため、点検・詳細調査、劣化度判定、維持管理に関わる計画書策定、その後の補修・補強設計までの一連を担います。</p>
					</div>
					<div class="projects__image"><img alt="港湾・空港・海岸・漁港施設保全" src="img/projects/maintenance_image3.jpg"></div>
				</div>
				<div class="projects__list" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-offset="100">
					<div class="projects__text">
						<h4 class="heading-h4">下水道施設保全</h4>
						<p>下水道施設の長寿命化計画では、長期的視点で施設全体の老朽化進展状況を考慮。リスク評価等による優先順位を設定した上で点検・調査・修繕・改築等を実施し、最適化を図ります。</p>
						<ul>
							<li>・処理場の耐震診断・補強設計</li>
							<li>・下水道管・マンホール更生設計</li>
							<li>・長寿命化計画策定</li>
						</ul>
					</div>
					<div class="projects__image"><img alt="下水道施設保全" src="img/projects/maintenance_image4.jpg"></div>
				</div>
				<div class="mt-1 u-center">
					<a class="btn" href="https://www.mccnet.co.jp/info/archives/category/maintenance">実績一覧</a>
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