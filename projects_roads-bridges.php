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
					<span itemprop="item"><span itemprop="name">道路・橋梁</span></span>
					<meta content="3" itemprop="position">
				</li>
			</ol>
		</div>
	</div>
	<div class="contents" id="contents">
		<section class="l-section projects">
			<p class="projects__logo"><img alt="道路・橋梁" src="img/projects/icon_roads-bridges.svg"></p>
			<h3 class="heading-h3"><span>道路・橋梁</span></h3>
			<div class="l-inner l-inner--xl">
				<div class="projects__list" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-offset="100">
					<div class="projects__text">
						<h4 class="heading-h4">道路計画</h4>
						<p>これまでの量的拡大によって道路ストックが充足されつつある中、情報通信技術（ICT）の発展に伴いビッグデータやAIを活用した交通状態分析が可能となり、既存ストックの有効活用や道路マネジメントに対する需要が高まっています。さらにはカーボンニュートラルや防災、物流面においても道路・交通計画に対しての期待が高まっています。<br>
						私たちは、常に時代の変化や社会の要請に応える技術力の向上に研鑽し、豊かで安心できる道路基盤整備の推進に貢献しています。</p>
					</div>
					<div class="projects__image"><img alt="道路計画" src="img/projects/roads-bridges_image1.jpg"></div>
				</div>
				<div class="projects__list" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-offset="100">
					<div class="projects__text">
						<h4 class="heading-h4">道路設計</h4>
						<p>道路は、生活や経済活動に不可欠な基本的な社会資本として大きな役割を果たし、交通機能や空間機能などの多様な機能を有しています。<br>
						また、災害時には人命救助や被災地への支援物資輸送のため、円滑な交通の確保が求められます。<br>
						道路設計部門では、経済・生活を支える重要インフラの機能強化として、高速道路や一般国道をはじめ様々の道路の設計を行っており，国土強靭化に貢献しています。</p>
					</div>
					<div class="projects__image"><img alt="道路設計" src="img/projects/roads-bridges_image2.jpg"></div>
				</div>
				<div class="projects__list" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-offset="100">
					<div class="projects__text">
						<h4 class="heading-h4">橋梁設計</h4>
						<p>国土交通省では、３次元データやデジタル技術を活用し、建設現場の生産性向上を図るi-Constructionの取組み及び非接触・リモート型の働き方への転換と抜本的な生産性や安全性向上を図るため、インフラ分野のDXを推進しています。</p>
						<p>私たちは、供用交通や既設構造物から厳しい制約を受ける都市部等の橋梁設計において、現地状況を仮想の３次元空間に再現可能なBIM/CIMや点群データを活用し、施工計画の妥当性確認による施工リスクの回避や将来の維持管理に向けた既存資料の一元管理ツールの構築等、DXを効果的に活用して設計の品質確保や施工・維持管理段階の生産性向上・高度化を推進しています。</p>
					</div>
					<div class="projects__image"><img alt="橋梁設計" src="img/projects/roads-bridges_image3.jpg"></div>
				</div>
				<div class="projects__list" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-offset="100">
					<div class="projects__text">
						<h4 class="heading-h4">道路施設等の調査・分析</h4>
						<p>国や自治体が管理する道路に設置される標識や支柱等の道路附属物は、個別に点検や修繕を繰り返していますが、点検や修繕すべき対象数が非常に多く、管理が容易ではありません。</p>
						<p>私たちは現地で取得した3 次元測量データや画像により附属物を自動抽出、整理し、点検計画修繕計画を立案する等の効率的な管理が可能となるシステムを研究開発する等、DXを効果的に活用し、維持管理段階の生産性向上・高度化を推進しています。</p>
					</div>
					<div class="projects__image"><img alt="道路施設等の調査・分析" src="img/projects/roads-bridges_image4.jpg"></div>
				</div>
			</div>
			<div class="mt-1 u-center">
				<a class="btn" href="https://www.mccnet.co.jp/info/archives/category/roads-and-bridges">実績一覧</a>
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