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
					<span itemprop="item"><span itemprop="name">テクノロジーレポート</span></span>
					<meta content="3" itemprop="position">
				</li>
			</ol>
		</div>
	</div>
	<div class="contents" id="contents">
		<section class="l-section technical">
			<h3 class="heading-h3"><span>テクノロジー<br class="u-sp-only">
			レポート</span></h3>
			<div class="l-inner">
				<div class="technicals__list" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-offset="100">
					<small>※掲載しているファイルは解像度を落としております。<br>
					※冊子をご要望の場合はお近くの営業所までご連絡下さい。</small>
					<div class="technical__text">
						<ul class="accordion-area">
							<li>
								<!--▼ 2022年度 のテクノロジーレポート ▼-->
								<section>
									<h5 class="heading-h5__acd">2022年度(令和4年度)</h5>
									<div class="box">
										<table class="technical __tbl">
											<tbody class="technical__tbl">
												<tr>
													<th class="technical__rep-header">発行号</th>
													<th class="technical__rep-header">レポートタイトル</th>
													<th class="technical__rep-header">ダウンロード <!--追加する場合はこの下の<tr> ～ レポートEND  の直前の行までコピーして レポートENDの下に貼り付けて編集してください --></th>
												</tr>
												<tr>
													<td class="technical__rep-num">4月号</td>
													<td class="technical__rep-num">
														<ol>
															<li>01：景観および維持管理に配慮した河川橋梁の計画</li>
															<li>02：鉄道駅利用者推計の新たな分析手法について</li>
														</ol>
													</td>
													<td class="technical__rep-num"><span class="material-icons-outlined"><a href="img/technology/technology_report16.pdf">save_alt</a></span> <!-- レポートEND -->
													 <!-- PDFファイルは、img/technology/に、ファイル名にスペースやドットを含まないようにしてアップしてください--></td>
												</tr>
												<tr>
													<td class="technical__rep-num">5月号</td>
													<td class="technical__rep-num">
														<ol>
															<li>03：地域の実情を踏まえた内水被害対策の事例</li>
															<li>04：取水堰における施設配置計画の検討</li>
														</ol>
													</td>
													<td class="technical__rep-num"><span class="material-icons-outlined"><a href="img/technology/03_MCC_Technology_Report2022_No44.pdf">save_alt</a></span><br>
													<span class="material-icons-outlined"><a href="img/technology/04_MCC_Technology_Report2022_No44.pdf">save_alt</a></span></td>
												</tr>
											</tbody>
										</table>
									</div>
								</section><!--▲ 2022年度 のテクノロジーレポート ▲-->
							</li>
							<li>
								<section>
									<h5 class="heading-h5__acd">2021年度(令和3年度)</h5>
									<div class="box">
										<table class="technical__tbl">
											<tr>
												<th class="technical__rep-header">発行号</th>
												<th class="technical__rep-header">レポートタイトル</th>
												<th class="technical__rep-header">ダウンロード</th>
											</tr>
											<tr>
												<td class="technical__rep-num">春季号</td>
												<td class="technical__rep-num">
													<ol>
														<li>01：整備の実現性を考慮した都市計画道路の見直しについての取組み</li>
														<li>02：樋管詳細設計におけるBIM/CIM活用</li>
														<li>03：景観形成モデル事業における橋梁部・アプローチ部構造の最適化</li>
														<li>04：堤防の浸透対策における他分野技術を活用した事例</li>
													</ol>
												</td>
												<td class="technical__rep-num"><span class="material-icons-outlined"><a href="img/technology/technology_report1.pdf">save_alt</a></span></td>
											</tr>
											<tr>
												<td class="technical__rep-num">夏季号</td>
												<td class="technical__rep-num">
													<ol>
														<li>05：都心部での大規模開発計画に関する円滑な事業実施に向けた取組み</li>
														<li>06：RRIを用いた洪水ハザードマップの作成/CIM活用</li>
														<li>07：国内自動車工場の生産能力変化やモーダルシフトによる自動車部品の海上物流への影響分析</li>
														<li>08：土砂・洪水氾濫対策における遊砂地の施設計画に関する技術</li>
													</ol>
												</td>
												<td class="technical__rep-num"><span class="material-icons-outlined"><a href="img/technology/technology_report2.pdf">save_alt</a></span></td>
											</tr>
											<tr>
												<td class="technical__rep-num">特集号</td>
												<td class="technical__rep-num">
													<ol>
														<li>優良業務表彰プロジェクト紹介</li>
													</ol>
												</td>
												<td class="technical__rep-num"><span class="material-icons-outlined"><a href="img/technology/technology_report3.pdf">save_alt</a></span></td>
											</tr>
											<tr>
												<td class="technical__rep-num">10月号</td>
												<td class="technical__rep-num">
													<ol>
														<li>09：厳しい制約を受ける橋梁設計の創意工夫とDXの効果的活用</li>
														<li>10：中小河川における洪水予測モデル検討（集中型と分布型の比較事例）</li>
													</ol>
												</td>
												<td class="technical__rep-num"><span class="material-icons-outlined"><a href="img/technology/technology_report4.pdf">save_alt</a></span><br>
												<span class="material-icons-outlined"><a href="img/technology/technology_report5.pdf">save_alt</a></span></td>
											</tr>
											<tr>
												<td class="technical__rep-num">11月号</td>
												<td class="technical__rep-num">
													<ol>
														<li>11：家屋近接箇所での堤防強化工法について</li>
														<li>12：数値波動解析を用いた浜崖後退抑止工（サンドパック）の効果検証</li>
													</ol>
												</td>
												<td class="technical__rep-num"><span class="material-icons-outlined"><a href="img/technology/technology_report6.pdf">save_alt</a></span><br>
												<span class="material-icons-outlined"><a href="img/technology/technology_report7.pdf">save_alt</a></span></td>
											</tr>
											<tr>
												<td class="technical__rep-num">12月号</td>
												<td class="technical__rep-num">
													<ol>
														<li>13：高速道路の長寿命化計画における成果品の品質向上への取り組み</li>
														<li>14：地方小規模自治体におけるスマートシティ実行計画の立案</li>
													</ol>
												</td>
												<td class="technical__rep-num"><span class="material-icons-outlined"><a href="img/technology/technology_report8.pdf">save_alt</a></span><br>
												<span class="material-icons-outlined"><a href="img/technology/technology_report9.pdf">save_alt</a></span></td>
											</tr>
											<tr>
												<td class="technical__rep-num">1月号</td>
												<td class="technical__rep-num">
													<ol>
														<li>15：既存ストックを活用した大規模自転車道の計画（SDGs持続可能なまちづくりの取組）</li>
														<li>16：HPCを用いた演算処理高速化研究</li>
													</ol>
												</td>
												<td class="technical__rep-num"><span class="material-icons-outlined"><a href="img/technology/technology_report10.pdf">save_alt</a></span><br>
												<span class="material-icons-outlined"><a href="img/technology/technology_report11.pdf">save_alt</a></span></td>
											</tr>
											<tr>
												<td class="technical__rep-num">2月号</td>
												<td class="technical__rep-num">
													<ol>
														<li>17：流域治水から完全治水に向けた治水計画の検討事例</li>
														<li>18：河道掘削における環境配慮事例と新たな展開に向けたとりまとめ</li>
													</ol>
												</td>
												<td class="technical__rep-num"><span class="material-icons-outlined"><a href="img/technology/technology_report12.pdf">save_alt</a></span><br>
												<span class="material-icons-outlined"><a href="img/technology/technology_report13.pdf">save_alt</a></span></td>
											</tr>
											<tr>
												<td class="technical__rep-num">3月号</td>
												<td class="technical__rep-num">
													<ol>
														<li>19：計画的な河床低下対策の立案事例</li>
														<li>20：現地状況を考慮した既存岸壁改良工法の提案</li>
													</ol>
												</td>
												<td class="technical__rep-num"><span class="material-icons-outlined"><a class="mh" href="img/technology/19_MCC%20Technology%20Report2021_No.43.pdf">save_alt</a></span><br>
												<span class="material-icons-outlined"><a class="mh" href="img/technology/20_MCC%20Technology%20Report2021_No.43.pdf">save_alt</a></span></td>
											</tr>
										</table>
									</div>
								</section>
							</li>
							<li>
								<section>
									<h5 class="heading-h5__acd">2020年度(令和2年度)</h5>
									<div class="box">
										<table class="technical__tbl">
											<tr>
												<th class="technical__rep-header">発行号</th>
												<th class="technical__rep-header">レポートタイトル</th>
												<th class="technical__rep-header">ダウンロード</th>
											</tr>
											<tr>
												<td class="technical__rep-num">春季号</td>
												<td class="technical__rep-num">
													<ol>
														<li>01：河川堤防の盤ぶくれ対策として用いる川表遮水工法の浸透挙動に関する考察</li>
														<li>02：軟弱地盤上で鉄道と交差する橋梁計画の最適化</li>
														<li>03：道路土工構造物点検における精度向上と効率化に関する提案</li>
														<li>04：シミュレーションモデルを用いた風環境改善対策の検討</li>
													</ol>
												</td>
												<td class="technical__rep-num"><span class="material-icons-outlined">save_alt</span></td>
											</tr>
											<tr>
												<td class="technical__rep-num">夏季号</td>
												<td class="technical__rep-num">
													<ol>
														<li>05：都市部における橋梁の最適化とBIM/CIM の効果的な活用</li>
														<li>06：中山間地域における地域主体の自立的活性化の支援</li>
														<li>07：橋脚における伝統的な流木対策技術</li>
														<li>08：低塑性細粒土の液状化挙動研究について</li>
													</ol>
												</td>
												<td class="technical__rep-num"><span class="material-icons-outlined">save_alt</span></td>
											</tr>
											<tr>
												<td class="technical__rep-num">秋季号</td>
												<td class="technical__rep-num">
													<ol>
														<li>09：洪水予測モデルの全国的普及に向けた検討</li>
														<li>10：歴史的な鉄筋コンクリートアーチ橋における維持管理の合理化</li>
														<li>11：河道内に設置する揚水機場のポンプ形式について</li>
														<li>12：FWD による空港の舗装調査について</li>
													</ol>
												</td>
												<td class="technical__rep-num"><span class="material-icons-outlined">save_alt</span></td>
											</tr>
											<tr>
												<td class="technical__rep-num">冬季号</td>
												<td class="technical__rep-num">
													<ol>
														<li>13：下水道管渠更生工法の選定による新技術(自立管製管工法)の採用検討</li>
														<li>14：河口閉塞と海岸侵食が併起する発生メカニズムの解明</li>
														<li>15：舗装点検の合理化と修繕工事への提案</li>
														<li>16：道路情報提供システムの刷新における検討事例</li>
													</ol>
												</td>
												<td class="technical__rep-num"><span class="material-icons-outlined">save_alt</span></td>
											</tr>
											<tr>
												<td class="technical__rep-num">特集号</td>
												<td class="technical__rep-num">
													<ol>
														<li>優良業務表彰プロジェクト紹介</li>
													</ol>
												</td>
												<td class="technical__rep-num"><span class="material-icons-outlined">save_alt</span></td>
											</tr>
										</table>
									</div>
								</section>
							</li>
							<li>
								<section>
									<h5 class="heading-h5__acd">2019年度(令和元年度)</h5>
									<div class="box">
										<table class="technical__tbl">
											<tr>
												<th class="technical__rep-header">発行号</th>
												<th class="technical__rep-header">レポートタイトル</th>
												<th class="technical__rep-header">ダウンロード</th>
											</tr>
											<tr>
												<td class="technical__rep-num">春季号</td>
												<td class="technical__rep-num">
													<ol>
														<li>01：水循環再生に向けた取り組みに対する普及・啓発策の検討事例</li>
														<li>02：大規模河川を渡河する橋梁計画の最適化</li>
														<li>03：「道の駅」整備における管理運営手法の検討</li>
														<li>04：液状化現象に伴う既設マンホール浮上防止対策について</li>
													</ol>
												</td>
												<td class="technical__rep-num"><span class="material-icons-outlined">save_alt</span></td>
											</tr>
											<tr>
												<td class="technical__rep-num">夏季号</td>
												<td class="technical__rep-num">
													<ol>
														<li>05：温度応力解析を活用したコンクリート構造物の温度ひび割れ対策</li>
														<li>06：伏越ボックスの耐震性能照査</li>
														<li>07：ＲＲＩモデルによる全国版洪水・氾濫予測システムの構築</li>
														<li>08：アンサンブル予測による洪水予測精度向上へ向けた検討</li>
													</ol>
												</td>
												<td class="technical__rep-num"><span class="material-icons-outlined">save_alt</span></td>
											</tr>
											<tr>
												<td class="technical__rep-num">秋季号</td>
												<td class="technical__rep-num">
													<ol>
														<li>09：大規模出水が頻発する河川における多自然川づくり</li>
														<li>10：高速道路の改築における4車線化計画について</li>
														<li>11：「水害ハザードマップ作成の手引き」への対応事例</li>
														<li>12：港湾における交流機能の強化を核とした埠頭再編計画の考え方</li>
													</ol>
												</td>
												<td class="technical__rep-num"><span class="material-icons-outlined">save_alt</span></td>
											</tr>
											<tr>
												<td class="technical__rep-num">冬季号</td>
												<td class="technical__rep-num">
													<ol>
														<li>13：革新的河川技術プロジェクトにおける簡易型河川監視カメラ技術開発について</li>
														<li>14：既設樋管の無動力化更新設計について</li>
														<li>15：国道事務所管内橋梁の損傷傾向分析と予防保全計画</li>
														<li>16：供用中の下水処理場における耐震補強設計について</li>
													</ol>
												</td>
												<td class="technical__rep-num"><span class="material-icons-outlined">save_alt</span></td>
											</tr>
											<tr>
												<td class="technical__rep-num">特集号</td>
												<td class="technical__rep-num">
													<ol>
														<li>優良業務表彰プロジェクト紹介</li>
													</ol>
												</td>
												<td class="technical__rep-num"><span class="material-icons-outlined">save_alt</span></td>
											</tr>
										</table>
									</div>
								</section>
							</li>
						</ul>
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