<?php require './info/wp-blog-header.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<?php $filename='index.php';if(file_exists($filename)){include('elements/hd.php');}else{echo '';} ?>
</head>

<body>
	<div class="splashbg"></div>
	<div class="wrapper">
		<?php $filename='index.php';if(file_exists($filename)){include('elements/gnav.php');}else{echo '';} ?>
		<div class="hero">
			<div class="hero__inner">
				<div class="hero__inner">
					<div class="hero__heading">
						<div class="hero__title">
							<span class="pcview"><video autoplay="" src="img/main_pc_txt.mp4"><span class="pcview"></span></video></span>
						</div>
					</div>
				</div>
			</div><span class="hero__scroll"></span>
		</div>
		<div class="contents" id="contents">
			<section class="catch">
				<div class="l-inner">
					<div class="catch__heading">
						<h2 class="heading-h1" data-aos="fade-in" data-aos-easing="ease-in" data-aos-offset="100"><span>TOWARD 100 YEARS</span></h2><small class="catch__sub">ESTD 1965</small>
					</div>
				</div>
			</section>
		</div>
		<section class="l-section news">
			<div class="l-inner l-inner--sm">
				<div class="news__heading">
					<h2 class="heading-h2">news<span class="heading-h2__sub">お知らせ</span></h2>
				</div>
				<div class="news__body">
					<div class="news-list">
                    <ul class="news-list__list">
                            <?php
                            $posts = get_posts(array(
                                'posts_per_page' => 5,
                                'category' => '3'
                            ));
                            ?>
                            <?php if ($posts) : foreach ($posts as $post) : setup_postdata($post); ?>
                            <li class="news-list__item">
                                <div class="news-list__heading">
                                    <time datetime="<?php the_time('Y-m-d'); ?>"
                                        class="news-list__date"><?php echo get_post_time('Y/m/d'); ?></time>
                                    <div class="news-list__label">
                                        <span class="label-category">お知らせ</span>
                                    </div>
                                </div>
                                <div class="news-list__body">
                                    <a href="<?php the_permalink(); ?>"
                                        class="news-list__link"><?php the_title(); ?><span
                                            class="news-list__new"><?php
                                                                                                                                                            $days = 7;
                                                                                                                                                            $last = time() - ($days * 24 * 60 * 60);
                                                                                                                                                            $post_time = get_the_time('U');
                                                                                                                                                            if ($post_time > $last) {
                                                                                                                                                                echo '<span class="new-txt">NEW</span>';
                                                                                                                                                            }
                                                                                                                                                            ?></span></a>
                                </div>
                            </li>
                            <?php endforeach;
                            endif; ?>
                        </ul>
						<p class="news-list__detail mt-2"><a class="news-list__link" href="/info/archives/category/news">Read More</a></p>
					</div>
				</div>
			</div>
		</section>
	</div>
	<section class="l-section service">
		<div class="l-inner">
			<div class="service__heading">
				<h3 class="heading-h3"><span>事業案内</span></h3>
			</div>
			<div class="l-inner">
				<div class="service__text">
					<h4>業務領域は、構想、計画、設計、調査、運営。</h4>
					<p>あらゆるフィールドで事業実現に向けて充実した建設マネジメント力を発揮します。</p>
					<ul class="mt-3">
						<li>・時代に先駆けた最新技術で対応します。</li>
						<li>・安全・安心が基本。人を守る高度な技術で対応します。</li>
						<li>・人に優しい生涯学習の時代にふさわしい技術で対応します。</li>
						<li>・低コストでかつ具体性のある質の高い技術で対応します。</li>
						<li>・時代に先駆けた最新技術で対応します。</li>
						<li>・三井グループのちからを結集し、総合的な技術で対応します。</li>
					</ul>
				</div>
			</div>
			<div class="navi__container" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-offset="100">
				<?php
				                include(__DIR__ . "/class/tpl.class.php");
				                $tpl = new datatpl();
				                $tpl->urlon  = array('projects_rivers-sabo', 'projects_roads-bridges', 'projects_ports-airport-coasts', 'projects_town-planning', 'projects_sewer', 'projects_ground-analysis', 'projects_environment-renewableenergy', 'projects_telecommunications', 'projects_informationsystem', 'projects_maintenance', 'projects_cm-ppppfl', 'projects_overseas');
				                $tpl->imgon  = array('work01.svg', 'work02.svg', 'work03.svg', 'work04.svg', 'work05.svg', 'work06.svg', 'work07.svg', 'work08.svg', 'work09.svg', 'work10.svg', 'work11.svg', 'work12.svg');
				                $tpl->alton = array('河川・砂防', '道路・橋梁', '港湾・空港・海岸', 'まちづくり', '下水道', '地盤解析', '環境・再生エネルギー', '電気通信', '情報システム', '保全', 'マネジメント', '海外');
				                $tpl->show('data.tpl.html');
				            ?>
			</div>
		</div>
	</section>
	<section class="l-section top-company">
		<div class="l-inner">
			<div class="top-company__contents" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-offset="100">
				<div class="top-company__text">
					<h4 class="heading-h4">企業情報</h4>
					<p>三井共同建設コンサルタントは、総合建設コンサルタントとして国内外の数多くのインフラ整備事業を手掛けております。<br>
					社員一人ひとりの高い志と高い技術力によって、皆様に信頼される企業として半世紀以上の実績を積んできました。<br>
					これからも豊かな社会を創造し、皆様の地域のインフラを支えていきます。</p>
					<div class="mt-3 page__link">
						<a class="btn" href="company">more</a>
					</div>
				</div>
				<div class="top-company__image"><img alt="企業情報" src="img/top-company01.jpg"></div>
			</div>
		</div>
	</section>
	<section class="l-section top-technical">
		<div class="l-inner">
			<div class="top-technical__contents" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-offset="100">
				<div class="top-technical__text">
					<h4 class="heading-h4">技術情報</h4>
					<p>三井共同建設コンサルタントでは、新たな技術開発にも力を入れています。<br>
					まだ見ぬ新技術開発を目的として「MCC 研究所」を立上げ、日々技術進歩のために取り組んでいます。</p>
					<p>また、MCC 研究所は産官学で連携をし、国内外において災害対策のための様々な研究・調査を実施し、震災・土砂災害・河川の氾濫などから、皆様の大切な 資産と命を守るという使命のもと、調査・研究に力を注いでいます。</p>
					<div class="mt-3 page__link">
						<a class="btn" href="technical">more</a>
					</div>
				</div>
				<div class="top-technical__image"><img alt="技術情報" src="img/top-technical01.jpg"></div>
			</div>
		</div>
	</section>
	<section class="l-section top-sdgs">
		<div class="l-inner" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-offset="100">
			<div class="top-sdgs__contents">
				<div class="top-sdgs__image">
					<a href="sdgs"><img alt="SDGs" src="assets/img/sdgs.jpg"></a>
				</div>
			</div>
		</div>
	</section>
	<section class="l-section mcc-members">
		<div class="l-inner" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-offset="100">
			<div class="mcc-members__contents">
				<div class="mcc-members__image">
					<a href="https://www.mccnet.co.jp/mcc_syk_member/member_index.html" rel="noopener noreferrer" target="_blank"><img alt="MCC社友会" src="img/mcc-members.jpg"></a>
				</div>
			</div>
		</div>
	</section>
	<div class="entry">
		<div class="l-inner-xl">
			<div class="entry__area">
				<div class="entry__text-area">
					<h3 class="entry__entry-ttl">RECRUIT</h3><small>採用情報</small>
					<p>キミの熱意が、未来を創る</p>
					<div class="entry__link">
						<a class="mt-3 btn" href="/recruit/" rel="noopener noreferrer" target="_blank">ENTRY</a>
					</div>
				</div>
				<div class="entry__img-box"></div>
			</div>
		</div>
	</div><?php
	        include(__DIR__ . "/class/sld.class.php");
	        $tpl = new sldtpl();
	        $tpl->imgon  = array('slide01.jpg', 'slide02.jpg', 'slide03.jpg', 'slide04.jpg', 'slide05.jpg', 'slide06.jpg');
	        $tpl->show('sld.tpl.html');
	    ?><?php $filename='index.php';if(file_exists($filename)){include('elements/fd.php');}else{echo '';} ?>
	<div class="page-top">
		<a class="page-top__link" href="#"><i aria-hidden="true" class="fa-arrow-up fas"></i></a>
	</div>
	<div id="forIE">
		<h1>このサイトはお使いのブラウザに対応しておりません。</h1>
		<p>サイトをご利用いただくには、サポートされているブラウザに切り替えてください。<br>
		閲覧・動作推奨するブラウザは下記になります。</p>
		<ul>
			<li>
				<a href="https://www.microsoft.com/ja-jp/edge">Microsoft Edgeをダウンロード</a>
			</li>
			<li>
				<a href="https://www.google.co.jp/chrome/">Google Chromeをダウンロード</a>
			</li>
		</ul>
	</div>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js">
	</script>
	<script>
	AOS.init({offset:120,delay:100,duration:500,easing:"false",once:!1,mirror:!0}),$(function(){$(".lazy").lazyload({threshold:-1e3,skip_invisible:!0})})
	</script>
	<script>
	document.addEventListener("DOMContentLoaded",function(){var e=window.navigator.userAgent.toLocaleLowerCase();-1===e.indexOf("msie")&&-1===e.indexOf("trident")||(document.getElementById("forIE").style.display="block",document.getElementById("root").style.display="none")})
	</script>
</body>
</html>