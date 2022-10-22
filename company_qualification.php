<!DOCTYPE html>
<html lang="ja">
<head>
	<?php $filename='index.php';if(file_exists($filename)){include('elements/hd.php');}else{echo '';} ?>
</head>

<body class="page-message">
	<?php $filename='index.php';if(file_exists($filename)){include('elements/gnav.php');}else{echo '';} ?>
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
					<span itemprop="item"><span itemprop="name">有資格者・組織図</span></span>
					<meta content="3" itemprop="position">
				</li>
			</ol>
		</div>
	</div>
	<div class="contents" id="contents">
		<section class="l-section l-section aos-animate aos-init qualification" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-offset="100">
			<h3 class="heading-h3"><span>有資格者</span></h3>
			<div class="l-inner">
				<div class="qualification__wrap">
					<div class="qualification__definition">
						<dl class="qualification__text">
							<dt>博士</dt>
							<dd>8人</dd>
						</dl>
						<dl class="qualification__text">
							<dt>技術士（総合技術管理部門）</dt>
							<dd>26人</dd>
						</dl>
						<dl class="qualification__text">
							<dt>土木学会認定技術者（上級）</dt>
							<dd>5人</dd>
						</dl>
						<dl class="qualification__text">
							<dt>測量士</dt>
							<dd>48人</dd>
						</dl>
						<dl class="qualification__text">
							<dt>地質調査技士</dt>
							<dd>8人</dd>
						</dl>
						<dl class="qualification__text">
							<dt>VEリーダー</dt>
							<dd>25人</dd>
						</dl>
						<dl class="qualification__text">
							<dt>コンクリート診断士</dt>
							<dd>4人</dd>
						</dl>
						<dl class="qualification__text">
							<dt>土木鋼構造診断士</dt>
							<dd>1人</dd>
						</dl>
						<dl class="qualification__text">
							<dt>道路橋点検士</dt>
							<dd>17人</dd>
						</dl>
						<dl class="qualification__text">
							<dt>河川維持管理技術者</dt>
							<dd>3人</dd>
						</dl>
						<dl class="qualification__text">
							<dt>海洋・港湾構造物設計士</dt>
							<dd>1人</dd>
						</dl>
					</div>
					<div class="qualification__definition">
						<dl class="qualification__text">
							<dt>技術士</dt>
							<dd>140人</dd>
						</dl>
						<dl class="qualification__text">
							<dt>RCCM</dt>
							<dd>85人</dd>
						</dl>
						<dl class="qualification__text">
							<dt>土木学会認定技術者（1級）</dt>
							<dd>23人</dd>
						</dl>
						<dl class="qualification__text">
							<dt>測量士補</dt>
							<dd>72人</dd>
						</dl>
						<dl class="qualification__text">
							<dt>一級建築士</dt>
							<dd>5人</dd>
						</dl>
						<dl class="qualification__text">
							<dt>砂防・急傾斜管理技術者</dt>
							<dd>2人</dd>
						</dl>
						<dl class="qualification__text">
							<dt>コンクリート技士</dt>
							<dd>8人</dd>
						</dl>
						<dl class="qualification__text">
							<dt>プレストレストコンクリート技士</dt>
							<dd>2人</dd>
						</dl>
						<dl class="qualification__text">
							<dt>河川点検士</dt>
							<dd>20人</dd>
						</dl>
						<dl class="qualification__text">
							<dt>海洋・港湾構造物維持管理士</dt>
							<dd>2人</dd>
						</dl>
					</div>
				</div><small class="u-right">2021年6月末現在</small>
			</div>
		</section>
		<section class="l-section outline" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-offset="100" id="organization-chart">
			<h4 class="outline__heading"><span>組織図</span></h4>
			<div class="l-inner l-inner--xs">
				<figure class="u-center">
					<img alt="組織図" src="img/company/company_organization-chart.png">
				</figure>
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