<!DOCTYPE html>
<html lang="ja">
<head>
	<?php $filename='index.php';if(file_exists($filename)){include('elements/hd.php');}else{echo '';} ?>
</head>

<body class="page-message">
	<?php $filename='index.php';if(file_exists($filename)){include('elements/gnav.php');}else{echo '';} ?>
	<div class="sub-hero">
		<div class="sub-hero__inner">
			<h2 class="heading-primary heading-primary--white">SDGs</h2>
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
					<span itemprop="item"><span itemprop="name">SDGsへの取組</span></span>
					<meta content="2" itemprop="position">
				</li>
			</ol>
		</div>
	</div>
	<div class="contents" id="contents">
		<section class="l-section" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-offset="100">
			<h3 class="heading-h3"><span>SDGsへの取組</span></h3>
			<div class="l-inner l-inner--md">
				<article class="sdgs__logo">
					<figure>
						<img alt="SUSTAINABLE DEVELOPMENT GOALS" src="img/sdgs/logo.svg">
					</figure>
					<p class="mt-5">当社は、SDGsの目標達成への貢献として、以下の項目に関連する建設コンサルタント業務に取り組んでいます。</p>
				</article>
				<div class="sdgs__area">
					<article class="sdgs__icon">
						<figure>
							<img alt="エネルギーをみんなに そしてクリーンに" src="img/sdgs/icon1.png">
						</figure>
						<p>再生可能エネルギー関連</p>
					</article>
					<article class="sdgs__icon">
						<figure>
							<img alt="産業と技術革新の基盤をつくろう" src="img/sdgs/icon2.png">
						</figure>
						<p>インフラに関わるDX等</p>
					</article>
					<article class="sdgs__icon">
						<figure>
							<img alt="住み続けられるまちづくりを" src="img/sdgs/icon3.png">
						</figure>
						<p>インフラの計画・設計等</p>
					</article>
					<article class="sdgs__icon">
						<figure>
							<img alt="気候変動に具体的な対策を" src="img/sdgs/icon4.png">
						</figure>
						<p>防災・減災、国土強靭化等</p>
					</article>
					<article class="sdgs__icon">
						<figure>
							<img alt="海の豊かさを守ろう" src="img/sdgs/icon5.png">
						</figure>
						<p>環境保全・再生等</p>
					</article>
					<article class="sdgs__icon">
						<figure>
							<img alt="陸の豊かさを守ろう" src="img/sdgs/icon6.png">
						</figure>
						<p>環境保全・再生等</p>
					</article>
				</div>
			</div>
		</section>
		<section class="company-list l-section service" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-offset="100">
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