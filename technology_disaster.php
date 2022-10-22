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
			<h2 class="heading-primary heading-primary--white">TECHNIQUE</h2>
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
					<a class="breadcrumb__link" href="technical" itemprop="item"><span itemprop="name">技術情報</span></a>
					<meta content="2" itemprop="position">
				</li>
				<li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<span itemprop="item"><span itemprop="name">災害対応</span></span>
					<meta content="3" itemprop="position">
				</li>
			</ol>
		</div>
	</div>
	<div class="contents" id="contents">
		<section class="l-section technical">
			<h3 class="heading-h3"><span>災害対応</span></h3>
			<div class="l-inner">
				<div class="technicals__list" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-offset="100">
					<h3>弊社が継続的に実施している社会貢献活動に対し、感謝状をいただきました。<br>
					今後も「社会への感謝と貢献」を胸に活動して参ります。</h3><small>※令和元年以降の災害対応のみ掲載しております。</small>
					<div class="technical__text">
						<table class="technical-disaster__tbl">
							<!--▼ 災害対応の感謝状を追加する場合はこの下からコピーしてください ▼-->
							<tr>
								<td>
									東北地方整備局北上川下流河川事務所より令和元年東日本台風に際しての被災地域の復旧活動に対して感謝状をいただきました。
									<dl class="aside">
										<dt>年月日:令和2年7月20日</dt>
										<dd>表彰者(表彰機関):東北地方整備局北上川下流河川事務所長</dd>
									</dl>
								</td>
								<td><img alt="感謝状" src="img/technology/technology_disaster-1.jpg"> <!--▲ 災害対応の感謝状を追加する場合はこの上までコピーしてください ▲-->
								 <!--感謝状のスキャンデータを280×200pxで作成し img/technology/ファイル名 へアップしてください　--></td>
							</tr>
							<tr>
								<td>
									東北地方整備局より令和元年東日本台風に際しての被災地域の復旧活動に対して感謝状をいただきました。
									<dl class="aside">
										<dt>年月日:令和2年7月16日</dt>
										<dd>表彰者(表彰機関):東北地方整備局長</dd>
									</dl>
								</td>
								<td><img alt="感謝状" src="img/technology/technology_disaster-2.jpg"></td>
							</tr>
							<tr>
								<td>
									東北地方整備局より令和元年台風19号災害応急対策・応急復旧及び支援活動に対しての感謝状をいただきました。
									<dl class="aside">
										<dt>年月日:令和2年3月16日</dt>
										<dd>表彰者(表彰機関):東北地方整備局長</dd>
									</dl>
								</td>
								<td><img alt="感謝状" src="img/technology/technology_disaster-3.jpg"></td>
							</tr>
							<tr>
								<td>
									関東地方整備局霞ヶ浦河川事務所より令和元年台風15号及び令和元年台風19号並びに令和元年10月の前線による大雨の災害対応業務に対しての感謝状をいただきました。
									<dl class="aside">
										<dt>年月日:令和2年2月26日</dt>
										<dd>表彰者(表彰機関):関東地方整備局霞ヶ浦河川事務所長</dd>
									</dl>
								</td>
								<td><img alt="感謝状" src="img/technology/technology_disaster-4.jpg"></td>
							</tr>
							<tr>
								<td>
									九州地方整備局武雄河川事務所より平成30年7月護岸崩落の災害復旧活動に貢献した功績に対して感謝状をいただきました。
									<dl class="aside">
										<dt>年月日:令和元年8月7日</dt>
										<dd>表彰者(表彰機関):九州地方整備局武雄河川事務所長</dd>
									</dl>
								</td>
								<td><img alt="感謝状" src="img/technology/technology_disaster-5.jpg"></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</section>
		<section class="l-section service technical-list" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-offset="100">
			<div class="l-inner l-inner--xl">
				<div class="technical-list">
					<div class="technical-list__heading">
						<h3 class="heading-secondary">技術情報</h3>
					</div>
					<div class="technical-list__body">
						<div class="technical-list__text">
							<ul class="technical-list__btn">
								<li>
									<a href="technical_presentedpaper">発表論文</a>
								</li>
								<li>
									<a href="technology_report">テクノロジーレポート</a>
								</li>
								<li>
									<a href="technology_commendation">表彰業務</a>
								</li>
								<li>
									<a href="technology_disaster">災害対応</a>
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
	       }), $(".heading-h5__acd").on("click", function() {
	           $(".box").slideUp(500);
	           var s = $(this).next(".box");
	           $(this).hasClass("close") ? $(this).removeClass("close") : ($(".close").removeClass("close"), $(this).addClass("close"), $(s).slideDown(500))
	       }), $(window).on("load", function() {
	           $(".accordion-area li:first-of-type section").addClass("open"), $(".open").each(function(s, o) {
	               var e = $(o).children(".heading-h5__acd");
	               $(e).addClass("close");
	               var i = $(o).children(".box");
	               $(i).slideDown(500)
	           })
	       })
	</script>
</body>
</html>