<!DOCTYPE html>
<html lang="ja">
<head>
	<?php $filename='index.php';if(file_exists($filename)){include('elements/hd.php');}else{echo '';} ?>
</head>

<body class="page-message">
	<?php $filename='index.php';if(file_exists($filename)){include('elements/gnav.php');}else{echo '';} ?>
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
					<span itemprop="item"><span itemprop="name">MCC研究所</span></span>
					<meta content="3" itemprop="position">
				</li>
			</ol>
		</div>
	</div>
	<div class="contents" id="contents">
		<section class="l-section technical">
			<h3 class="heading-h3"><span>MCC研究所</span></h3>
			<div class="l-inner">
				<p>三井共同建設コンサルタントでは、MCC研究所を立上げ豊かな未来を創造するために、様々な技術研究を行っています。<br>
				MCC研究所ではテーマ別に研究グループを組織して優れた新技術の開発に取組とともに、MCCテクノロジーレポートを発行して技術情報の提供を行っています。<br>
				現在、取組んでいる研究テーマを以下に示します。</p>
				<div class="technicals__list" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-offset="100">
					<div class="card-wrapper mt-5 card-wrapper--col2">
						<div class="card">
							<h4>融雪出水予測モデルの高度化研究グループ</h4>
							<p>分布型モデル高度化利用研究グループで開発済の融雪洪水予測可能モデルでは、限られた小流域に対応したモデルです。このことから、大流域にも通用でき高精度な融雪モデルの開発を行っています。</p>
						</div>
						<div class="card">
							<h4>マルチモデル・アンサンブル研究グループ</h4>
							<p>現在の降雨予測は、初期値のわずかなバラツキが影響し、時空間的な降雨予測精度に課題があります。また、水文モデルについても様々な現象を完全に再現できるモデルがないのが現状です。そこで、本研究グループでは、領域気象モデルによるアンサンブル予測とRRIモデル等の水文モデルをカップリングし、不確実性を考慮した洪水予測手法の開発を行っています。</p>
						</div>
						<div class="card">
							<h4>気候変動研究グループ</h4>
							<p>気候変動を考慮した河川計画策定を可能にするため、大規模アンサンブル気候データを活用した数千年単位の河川流量及び浸水リスク推計を行う方法を開拓するための研究を行っています。</p>
						</div>
						<div class="card">
							<h4>HPCを用いた演算処理高速化研究グループ</h4>
							<p>本研究では、RRI（降雨流出氾濫モデル）を事例として東北大学滝沢研究室及びNECが有するHPCのベクトル化技術、並列化技術を用いて、演算処理高速化のプログラム開発手法に関する研究を行っています。本研究成果を用いて、CADMAS(数値波動水路プログラム)やETC2.0等のビッグデータの解析、ディープラーニング等の高速演算処理への適用を目指します。</p>
						</div>
						<div class="card">
							<h4>まちづくり・環境保全業務開発研究グループ</h4>
							<p>気候変動が地域の環境・経済社会に与える影響を、気候予測データセットを用いて評価する手法を研究開発しています。さらに、影響評価を踏まえた緩和策/適応策を検討することにより、地域（まちづくり）における課題を環境面から解決する方法を研究しています。</p>
						</div>
						<div class="card">
							<h4>性能照査型道路計画設計に関する調査研究グループ</h4>
							<p>(一社)交通工学研究会の「道路の交通容量とサービスの質に関する研究（以降、委員会）」において提唱されている「性能照査型道路計画設計」については、研究の熟度も高まり、国土交通省の事務所発注業務においても、関連する業務が散見されるようになってきました。そこで、産学連携のもと、道路計画・設計分野の新たな計画設計手法である「性能照査型道路計画設計」および関連する事項について調査、研究を行っています。</p>
						</div>
						<div class="card">
							<h4>BIM/CIMの港湾関係業務への活用拡大の可能性研究グループ</h4>
							<p>本研究グループでは、ICT技術であるドローンやBIM/CIM技術について、港湾設計及び港湾計画分野への活用方策を様々な視点から研究を行っています。また、活用方策の一つとして、近年事例の多い既存改良設計に関するICT技術を活かした効率的なツール開発についても研究しています。</p>
						</div>
						<div class="card">
							<h4>流木災害防止・被害軽減技術研究グループ</h4>
							<p>近年、豪雨等に伴う流木による多大な被害を受け、全国的に流木対策強化の推進や、更なる効果的な流木対策に関する技術知見が求められています。そこで、本研究グループでは水路実験や数値解析等により、流木対策に関する技術開発を目指しています。</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="l-section research">
			<div class="l-inner">
				<h4 class="research__heading"><strong class="aos-animate aos-init" data-aos="fade-in" data-aos-easing="ease-in" data-aos-offset="100">研究内容・研究成果</strong></h4>
				<div class="research__container">
					<ul class="card-wrapper mt-5 card-wrapper--col3 research__list">
						<li class="card">
							<a href="img/technology/result01.pdf" rel="noopener noreferrer" target="_blank">氾濫モデル用空間データ研究 <span class="material-icons-outlined">picture_as_pdf</span></a>
						</li>
						<li class="card">
							<a href="img/technology/result02.pdf" rel="noopener noreferrer" target="_blank">水域流動モデル高度化研究 <span class="material-icons-outlined">picture_as_pdf</span></a>
						</li>
						<li class="card">
							<a href="img/technology/result03.pdf" rel="noopener noreferrer" target="_blank">市民合意形成の仕事 <span class="material-icons-outlined">picture_as_pdf</span></a>
						</li>
						<li class="card">
							<a href="img/technology/result04.pdf" rel="noopener noreferrer" target="_blank">FLIP高度化研究 <span class="material-icons-outlined">picture_as_pdf</span></a>
						</li>
						<li class="card">
							<a href="img/technology/result05.pdf" rel="noopener noreferrer" target="_blank">数値波動水槽研究（PDF） <span class="material-icons-outlined">picture_as_pdf</span></a>
						</li>
						<li class="card">
							<a href="img/technology/result06.pdf" rel="noopener noreferrer" target="_blank">ダム湖の三次元モデル共同開発 <span class="material-icons-outlined">picture_as_pdf</span></a>
						</li>
						<li class="card">
							<a href="img/technology/result07.pdf" rel="noopener noreferrer" target="_blank">CIM活用方法の研究 <span class="material-icons-outlined">picture_as_pdf</span></a>
						</li>
					</ul>
				</div>
			</div>
		</section>
		<section class="l-section web-service">
			<div class="l-inner">
				<h4 class="web-service__heading"><strong class="aos-animate aos-init" data-aos="fade-in" data-aos-easing="ease-in" data-aos-offset="100">自社開発WEBサービス</strong></h4>
				<div class="web-service__container">
					<div class="service__clm">
						<h5>【あめみずマップ】</h5>
						<p>あめみずマップは、クラウド技術とWeb地図サービス技術を利用して、だれもが使いやすく、分かりやすいレーダ雨量情報を提供するWebサービスです。<br>
						アマゾンウエブサービスジャパン社が提供するクラウドサービスAWSを利用して運用しています。Google Maps APIを採用して地図と連動（地図の移動、拡大、縮小が可能）した正確な位置情報と共にレーダ雨量情報を提供しています。</p>
						<div class="service__link">
							<a class="btn mt-3" href="https://rain.mcclabo.jp/" rel="noopener noreferrer" target="_blank">あめみずMAP</a>
						</div>
					</div>
					<div class="service__clm">
						<h5>【fieldcheker】</h5>
						<p>FieldCheckerは、農業、工業、防災分野など幅広い分野に対応できるIoT基盤です。 センサーから収集した情報を外部サービスに提供したり、外部サービスからクラウド間連携により情報を収集することが可能です。グラフ表示やアラート通知、解析機能などが標準。水位観測、水質観測、温度管理、浸水検知等様々な用途にご利用いただけます。</p>
						<div class="service__link">
							<a class="btn_sl mt-3" href="https://support-fc.amebaownd.com/" rel="noopener noreferrer" target="_blank">fieldcheker</a>
						</div>
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
	</div><?php $filename='index.php';if(file_exists($filename)){include('elements/fd.php');}else{echo '';} ?>
	<div class="page-top">
		<a class="page-top__link" href="#"><i aria-hidden="true" class="fa-arrow-up fas"></i></a>
	</div>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js">
	</script>
	<script>
	AOS.init({offset:120,delay:100,duration:500,easing:"false",once:!1,mirror:!0}),$(function(){$(".lazy").lazyload({threshold:-1e3,skip_invisible:!0})}),$(".heading-h5__acd").on("click",function(){$(".box").slideUp(500);var s=$(this).next(".box");$(this).hasClass("close")?$(this).removeClass("close"):($(".close").removeClass("close"),$(this).addClass("close"),$(s).slideDown(500))}),$(window).on("load",function(){$(".accordion-area li:first-of-type section").addClass("open"),$(".open").each(function(s,o){var e=$(o).children(".heading-h5__acd");$(e).addClass("close");var i=$(o).children(".box");$(i).slideDown(500)})})
	</script>
</body>
</html>