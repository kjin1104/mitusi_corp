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
					<span itemprop="item"><span itemprop="name">一般事業主行動計画</span></span>
					<meta content="3" itemprop="position">
				</li>
			</ol>
		</div>
	</div>
	<div class="contents" id="contents">
		<section class="l-section actionplan l-section aos-init aos-animate" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-offset="100">
			<h3 class="heading-h3"><span>一般事業主行動計画</span></h3>
			<div class="l-inner">
            <h4 class="actionplan__heading"><span>一般事業主行動計画（次世代法）<br class="u-sp-only">について</span></h4>
				<h5>1.計画期間</h5>
				<p>2020年7月1日から2022年6月30日（2年間：事業年度に合わせています）</p>
				<h5>2.計画変更日</h5>
				<p>2021年4月1日</p>
				<h5>3.変更後の目標と取組み内容</h5>
				<h6>【目標1】 子どもの出生時に父親が取得できる休暇制度の利用促進を図る</h6>
				<?php
							 include 'elements/target_list.php';
							 load_mcc_template("template/tar_locnav.php", $attrs_target_list_se);
				?>

				<h6>【目標2】 女性従業員の育児休業等取得率を75%以上とする</h6>
				<?php
							 include 'elements/target_list.php';
							 load_mcc_template("template/tar_locnav.php", $attrs_target_list_se_s);
				?>

				<h6>【目標3】 女計画期間の終了日の属する事業年度におけるフルタイムの労働者等の法定時間外・法定休日労働時間の平均が各月45 時間未満とする</h6>
				<h6>【目標4】 計画期間の終了日の属する事業年度における月平均の法定時間外労働60時間以上の労働者を0名とする</h6>
				<h6>【目標5】 ワークライフバランスや、仕事と子育てが両立しやすい職場とするための制度の拡充と利用促進をはかる</h6>
				<?php
							 include 'elements/target_list.php';
							 load_mcc_template("template/tar_locnav.php", $attrs_target_list_se_th);
				?>
			</div>
		</section>
		<section class="actionplan-outline l-section" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-offset="100" id="actionplan-sec">
			<h4 class="actionplan-outline__heading"><span>一般事業主行動計画（女性活躍推進法）<br class="u-sp-only">について</span></h4>
			<div class="l-inner">
				<div class="actionplan__wrap">
					<h5>1.計画期間</h5>
					<p>2020年7月1日から2022年6月30日（2年間：事業年度に合わせています）</p>
					<h5>2.計画変更日</h5>
					<p>2021年4月1日</p
					>
					<h5>3.当社の課題</h5>
					<ul>
						<li>(1)女性技術職の平均勤続年数が男性技術職に比較し低い</li>
						<li>(2)管理職に占める女性労働者の割合が低い</li>
						<li>(3)子育て中の女性が働きやすい風土・職場環境になっていない</li>
					</ul>
					<h5>4.変更後の目標と取組み内容</h5>
					<h6>【目標1】女性社員の平均勤続年数を男性社員の70%以上とする</h6>
					<?php
							 include 'elements/target_list.php';
							 load_mcc_template("template/tar_locnav.php", $attrs_target_list);
					?>

					<h6>【目標2】管理職に占める女性の割合を3%以上とする</h6>
					<?php
							 include 'elements/target_list.php';
							 load_mcc_template("template/tar_locnav.php", $attrs_target_list_s);
					?>

					<h6>【目標3】子育て中の女性が働きやすい風土・職場環境の構築（所定外労働の削減等）</h6>
					<?php
							 include 'elements/target_list.php';
							 load_mcc_template("template/tar_locnav.php", $attrs_target_list_th);
					?>
				</div>
			</div>
		</section>
		<section class="service company-list l-section" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-offset="100">
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
				<div class="entry__img-box">
					&nbsp;
				</div>
			</div>
		</div>
	</div><?php $filename = 'index.php';
	    if (file_exists($filename)) {
	        include('elements/fd.php');
	    } else {
	        echo '';
	    } ?>
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

	       $(function() {
	           $('.lazy').lazyload({
	               threshold: -1000,
	               skip_invisible: true
	           });
	       });
	</script>
</body>
</html>