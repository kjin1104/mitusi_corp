<!DOCTYPE html>
<html lang="ja">
<head>
	<?php $filename = 'index.php';
	        if (file_exists($filename)) {
	            include('elements/hd.php');
	        } else {
	            echo '';
	        } ?>
	<title></title>
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
			<h2 class="heading-primary heading-primary--white">COMPANY</h2>
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
					<span itemprop="item"><a class="breadcrumb__link" href="company" itemprop="item"><span itemprop="name">企業情報</span></a></span>
					<meta content="2" itemprop="position">
				</li>
				<li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<span itemprop="item"><span itemprop="name">会社概要・会社沿革</span></span>
					<meta content="3" itemprop="position">
				</li>
			</ol>
		</div>
	</div>
	<div class="contents" id="contents">
		<section class="l-section outline aos-animate aos-init" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-offset="100">
			<h3 class="heading-h3"><span>会社概要</span></h3>
			<div class="l-inner">
				<!--<p class="mt-5">当社は、社会資本整備事業に代表される建設業において、中立、独立性を堅持し、事業の企画立案から調査・計画、設計、監理に至るまでの一連の業務を発注者の良きパートナーとして積極的に技術提案を行っております。 この中で、当社は総合建設コンサルタントとして国内外の「河川・水工」、「道路・橋梁」、「港湾・空港」、「都市計画」、「造園」、「環境・防災」、「下水道」、「情報システム」等の部門について数々のプロジェクトを手がけております。-->
				<div class="outline__definition mt-5">
					<div class="outline__mds">
						<h5>事業内容</h5>
					</div>
					<div class="outline__body">
						<h6>総合建設コンサルタント</h6>
						<p>（下記各建設部門の調査、企画、立案、設計、施工管理）<br>
						河川・砂防、道路・橋梁、港湾・空港・海岸、都市計画、下水道、地盤解析、環境・再生エネルギー、電気通信、情報システム、保全、マネジメント、海外 等</p>
					</div>
				</div>
				<div class="outline__definition">
					<div class="outline__mds">
						<h5>創　立</h5>
					</div>
					<div class="outline__body">
						<p>昭和40年12月</p>
					</div>
				</div>
				<div class="outline__definition">
					<div class="outline__mds">
						<h5>資本金</h5>
					</div>
					<div class="outline__body">
						<p>1億円（払込済）</p>
					</div>
				</div>
				<div class="outline__definition">
					<div class="outline__mds">
						<h5>代表者</h5>
					</div>
					<div class="outline__body">
						<p>代表取締役社長 中野 宇助</p>
					</div>
				</div>
				<div class="outline__definition">
					<div class="outline__mds">
						<h5>従業員数</h5>
					</div>
					<div class="outline__body">
						<p>487名(令和4年2月28日 現在)</p>
					</div>
				</div>
				<div class="outline__definition">
					<div class="outline__mds">
						<h5>本社所在地</h5>
					</div>
					<div class="outline__body">
						<p>〒141-0032 東京都品川区大崎一丁目11番1号(ゲートシティ大崎ウエストタワー15階)<br>
						TEL：03-3495-1321（代表）</p>
					</div>
				</div>
				<div class="outline__definition">
					<div class="outline__mds">
						<h5>主要取引先</h5>
					</div>
					<div class="outline__body">
						<p>国土交通省、都道府県、市町村、東日本高速道路(株)、中日本高速道路(株)、西日本高速道路(株)、三井グループ等民間会社</p>
					</div>
				</div>
			</div>
		</section>
		<section class="l-section outline" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-offset="100" id="history">
			<h4 class="outline__heading"><span>会社沿革</span></h4>
			<div class="l-inner">
				<?php
				                                    include(__DIR__ . "/class/his.class.php");
				                                    $tpl = new histpl();
				                                    $tpl->hist  = array(
				                                        '1965年12月', '1966年12月', '1968年3月', '1973年8月', '1980年12月', '1985年7月', '1985年10月', '1988年8月', '1990年12月', '1993年5月', '1995年12月', '1996年4月', '1997年5月', '1997年11月', '1999年8月', '2000年12月', '2001年6月', '2002年11月', '2005年12月', '2011年12月', '2015年8月', '2015年12月', '2020年12月', '2020年3月'
				                                    );
				                                    $tpl->hisp  = array(
				                                        '会社設立', '創立一周年記念式典挙行', '本社事務所移転(三井中三号館)', '本社事務所移転（三井別館）', '創立十五周年記念式典挙行', '建設事務次官賞受賞 第一回都市公園コンクール設計部門', '創立二十周年記念式典挙行', '本社事務所全面移転(三井生命高田馬場ビル)', '創立二十五周年記念式典挙行', '土木学会 田中賞受賞 木場公園大橋 羽田スカイアーチ橋', '創立三十周年記念式典挙行', '北野社長 勲三等瑞宝章を授与される', '土木学会 田中賞受賞 南風原高架橋', '本社 ISO9001品質マネジメントシステムの認証を取得', '関西支社 ISO9001品質マネジメントシステムの認証を取得', '全社ISO14001環境マネジメントシステムの認証を取得', 'MCC研究所を設立', '「ISO9001 2000年版」への全社移行一括登録を達成', '創立四十周年記念式典挙行', '全社ISO/IEC27001情報セキュリティマネジメントシステムの認証を取得', '本社移転(ゲートシティ大崎)', '創立五十周年記念式典挙行', '創立五十五周年', 'ジャカルタ駐在員事務所開設'
				                                    );
				                                    $tpl->show('his.tpl.html');
				                                    ?>
			</div>
		</section>
		<section class="l-section company-list service" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-offset="100">
			<div class="l-inner l-inner--xl">
				<div class="company-list">
					<div class="company-list__heading">
						<h3 class="heading-secondary">企業情報</h3>
					</div>
					<div class="company-list__body">
					<div class="company-list__text">
							<!-- <?php $filename = 'index.php';
                                    if (file_exists($filename)) {
                                        include('elements/com_locnav.php');
                                    } else {
                                        echo '';
                                    } ?> -->
							<?php
							                            function load_mcc_template($file, $attrs)
							                            {
							                                ob_start();
							                                include $file;
							                                $html = ob_get_contents();
							                                ob_end_clean();
							                                echo $html;
							                            }
							                            ?>
							<ul class="company-list__btn">
								<?php
								                                include 'elements/company_list.php';
								                                load_mcc_template("template/com_locnav.php", $attrs_company_list);
								                                ?>
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