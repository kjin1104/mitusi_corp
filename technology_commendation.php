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
					<span itemprop="item"><span itemprop="name">表彰業務</span></span>
					<meta content="3" itemprop="position">
				</li>
			</ol>
		</div>
	</div>
	<div class="contents" id="contents">
		<section class="technical l-section">
			<h3 class="heading-h3"><span>表彰業務</span></h3>
			<div class="l-inner">
				<div class="technicals__list" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-offset="100">
					<h3>弊社が納品した成果品及び従事した技術者が高く評価され、多くの表彰をいただきました。<br>
					今後も研鑽を重ね、質の高い業務・サービスを提供して参ります。<br>
					これらの業務概要を整理したテクノロジーレポート「優良表彰プロジェクト特集号」を作成しています。</h3>
					<div class="technical__text mt-3">
						<ul class="accordion-area">
							<li>
								<section>
									<h5 class="heading-h5__acd">2022年度(令和4年度)</h5>
									<div class="box">
										<p>現在、記事はございません</p><!--
                                        <table class="technical__tbl">
                                            <tbody>
                                                <tr>
                                                    <th class="technical__name">業務名称</th>
                                                    <td>
                                                        <h4>業務名称はここに記入してください</h4>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>表彰者</th>
                                                    <td>表彰者の名前をここに記入してください</td>
                                                </tr>
                                                <tr>
                                                    <th>発注者</th>
                                                    <td>発注者の名前をここに記入してください</td>
                                                </tr>
                                            </tbody>
                                        -->
										<!--記事を追加する場合は<tbody class="mt-2">を</tbody>タグの次に記入してください -->
										<!--</table>-->
									</div>
								</section>
							</li>
							<li>
								<section>
									<h5 class="heading-h5__acd">2021年度(令和3年度)</h5>
									<div class="box">
										<table class="technical__tbl">
											<tbody>
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>R1荒川第二・三調節池池内水路等概略設計業務</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>関東地方整備局長</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>関東地方整備局荒川上流河川事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>R1・2久慈川堅磐地区鳥類等調査業務</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>関東地方整備局長</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>関東地方整備局常陸河川国道事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>R1年度国道6号千代田石岡バイパス橋梁詳細設計業務</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>関東地方整備局長</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>関東地方整備局常陸河川国道事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>令和元年度国道357号有明橋詳細設計業務</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>関東地方整備局長</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>関東地方整備局川崎国道事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>令和元年度緑川水系築堤護岸設計測量業務</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>九州地方整備局長</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>九州地方整備局熊本河川国道事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>令和2年度大分空港滑走路改良実施設計外1件</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>九州地方整備局長</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>九州地方整備局別府港湾・空港整備事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>内川等構造物調査設計(その2)業務</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>東北地方整備局宮城南部復興事務所長</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>東北地方整備局宮城南部復興事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>吉田川中流河道掘削詳細設計業務</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>東北地方整備局北上川下流河川事務所長</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>東北地方整備局北上川下流河川事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>国道357号湾岸蘇我地区設計業務1G14</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>関東地方整備局千葉国道事務所長</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>関東地方整備局千葉国道事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>R1長野国道管内橋梁補修設計他業務</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>関東地方整備局長野国道事務所長</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>関東地方整備局長野国道事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>R2中部横断道(富沢六郷)実施設計他</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>関東地方整備局甲府河川国道事務所長</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>関東地方整備局甲府河川国道事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>令和元年度尾張地区橋梁補強補修設計業務</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>中部地方整備局名古屋国道事務所長</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>中部地方整備局名古屋国道事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>本庄川外堤防基本設計及び地質調査業務</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>九州地方整備局宮崎河川国道事務所長</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>九州地方整備局宮崎河川国道事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>令和2年度肝属川水系シラス堤対策設計業務</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>九州地方整備局大隅河川国道事務所長</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>九州地方整備局大隅河川国道事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>彦山川大任・田川地区災害復旧設計業務</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>九州地方整備局遠賀川河川事務所長</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>九州地方整備局遠賀川河川事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>令和2年度博多港整備効果調査</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>九州地方整備局博多港湾・空港整備事務所長</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>九州地方整備局博多港湾・空港整備事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>補助公共 社会資本総合整備（活力・重点）<br>
														一般構造物詳細設計業務委託国道122号館林バイパス館林市成島町外地内</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>群馬県県土整備部長</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>群馬県館林土木事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>国道307号単独道路修繕設計業務委託</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>滋賀県土木交通部長</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>滋賀県湖東土木事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>主要地方道箕面池田線外自転車通行空間詳細設計委託</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>大阪府都市整備部長</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>大阪府池田土木事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>東日本大震災で被災した松川浦漁港の復旧</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>(一社)全日本建設技術協会</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>福島県相馬港湾建設事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>旭川放水路(百間川)河川改修事業</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>(一社)全日本建設技術協会</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>国土交通省中国地方整備局岡山河川事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>船場川水系船場川洪水調節施設整備事業</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>(一社)全日本建設技術協会</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>兵庫県中播磨県民センター姫路土木事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>本宮市のまちづくりと一体になった治水対策の取り組み(阿武隈川・河川都市基盤整備事業)</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>(一社)全日本建設技術協会</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>国土交通省東北地方整備局福島河川国道事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>地域高規格道路上信越自動車道(金井IC～箱島IC)建設事業</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>(一社)全日本建設技術協会</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>群馬県北群馬渋川振興局渋川土木事務所、群馬県上信自動車道建設事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>群馬県北群馬渋川振興局渋川土木事務所、群馬県上信自動車道建設事務所</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>(一社)全日本建設技術協会</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>宮城県南三陸町、(独)都市再生機構岩手・宮城震災復興支援本部</td>
												</tr>
											</tbody>
										</table>
									</div>
								</section>
							</li>
							<li>
								<section>
									<h5 class="heading-h5__acd">2020年度(令和2年度)</h5>
									<div class="box">
										<table class="technical__tbl">
											<tbody>
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>鳴子ダム下流域浸水想定図等検討業務</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>東北地方整備局長</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>東北地方整備局鳴子ダム管理所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>H30本新地先波浪対策施設設計業務</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>関東地方整備局長</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>関東地方整備局霞ヶ浦河川事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>H30圏央道小貝川高架橋橋梁詳細設計(その2)業務</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>関東地方整備局長</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>関東地方整備局北首都国道事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>平成30年度多摩川水系築堤護岸等詳細設計業務</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>関東地方整備局長</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>関東地方整備局京浜河川事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>平成30・31年度管内橋梁点検・補修設計業務委託</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>関東地方整備局長</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>関東地方整備局大宮国道事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>平成30年度 多治見国道管内施設点検業務</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>中部地方整備局長</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>中部地方整備局多治見砂防国道事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>令和元年度 大川佐賀道路(川副地区)予備修正外設計業務</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>九州地方整備局長</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>九州地方整備局有明海沿岸国道事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>川内川管内堤防強化対策詳細設計等業務務</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>九州地方整備局長</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>九州地方整備局川内川河川事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>最上川中流畑地区揚水施設等詳細設計業務</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>東北地方整備局新庄河川事務所長</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>東北地方整備局新庄河川事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>阿武隈川上流伊達地区緊急調査業務</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>東北地方整備局福島河川国道事務所長</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>東北地方整備局福島河川国道事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>H30高田排水樋管詳細設計業務所</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>関東地方整備局利根川下流河川事務所長</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>関東地方整備局利根川下流河川事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>平成30年度 多治見国道管内施設点検業務</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>中部地方整備局多治見砂防国道事務所長</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>中部地方整備局多治見砂防国道事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>宇陀川黒田橋架替他１橋予備設計業務</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>近畿地方整備局木津川上流河川事務所長</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>近畿地方整備局木津川上流河川事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>令和元年度 大川佐賀道路(川副地区)予備修正外設計業務</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>九州地方整備局長有明海沿岸国道事務所長</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>九州地方整備局長有明海沿岸国道事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>牛津川右岸堤防外設計</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>九州地方整備局武雄河川事務所長</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>九州地方整備局武雄河川事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>平成30年度東九州道渓流対策検討設計業務</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>九州地方整備局宮崎河川国道事務所長</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>九州地方整備局宮崎河川国道事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>東北中央自動車道 深沼地区揚水施設詳細設計</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>東日本高速道路(株)東北支社長</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>東日本高速道路(株)北支社山形工事事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>東日本大震災で被災した小泉海水浴場の再開<br>
														～地元合意形成とともに復旧した中島地区海岸復旧工事～</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>(一社)全日本建設技術協会</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>宮城県気仙沼土木事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>社会資本総合整備(広域・新潟長野)(仮称)碓氷川橋橋梁詳細設計業務委託</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>群馬県知事</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>群馬県安中土木事務所</td>
												</tr>
											</tbody>
										</table>
									</div>
								</section>
							</li>
							<li>
								<section>
									<h5 class="heading-h5__acd">2019年度(令和元年度)</h5>
									<div class="box">
										<table class="technical__tbl">
											<tbody>
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>善川遊水地等詳細設計業務</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>国土交通省 東北地方整備局長</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>国土交通省 東北地方整備局北上川下流河川事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>三陸沿岸道路事業監理業務(吉浜釜石工区)</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>国土交通省 東北地方整備局長</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>国土交通省 東北地方整備局南三陸国道事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>H29松本波田道路他橋梁等設計業務</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>国土交通省 関東地方整備局長</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>国土交通省 関東地方整備局長野国道事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>名張川黒田地区築堤予備設計他業務</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>国土交通省 近畿地方整備局長</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>国土交通省 近畿地方整備局木津川上流河川事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>さみだれ大堰ゲート更新詳細設計等業務</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>国土交通省 東北地方整備局酒田河川国道事務所長</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>国土交通省 東北地方整備局酒田河川国道事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>H29新山梨環状道路橋梁予備設計業務(その3)</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>国土交通省 関東地方整備局甲府河川国道事務所長</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>国土交通省 関東地方整備局甲府河川国道事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>H29御鉾橋橋梁補修設計業務</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>国土交通省 関東地方整備局高崎河川国道事務所長</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>国土交通省 関東地方整備局高崎河川国道事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>H30根小屋地区樋管詳細設計他業務</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>国土交通省 関東地方整備局高崎河川国道事務所長</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>国土交通省 関東地方整備局高崎河川国道事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>H29中部横断道施工検討業務</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>国土交通省 関東地方整備局長野国道事務所長</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>国土交通省 関東地方整備局長野国道事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>平成30年度 名古屋国道橋梁補修設計業務</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>国土交通省 中部地方整備局名古屋国道事務所長</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>国土交通省 中部地方整備局名古屋国道事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>奈良国道管内防災点検及び対策業務</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>国土交通省 近畿地方整備局奈良国道事務所長</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>国土交通省 近畿地方整備局奈良国道事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>加古川下滝野地区樋門詳細設計業務</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>国土交通省 近畿地方整備局姫路河川国道事務所長</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>国土交通省 近畿地方整備局姫路河川国道事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>川内川管内堤防質的対策詳細設計業務</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>国土交通省 九州地方整備局川内川河川事務所長</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>国土交通省 九州地方整備局川内川河川事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>平成30年度 花月川西有田地区外川づくり設計検討業務</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>群馬県知事</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>群馬県安中土木事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>補助公共 社会資本総合整備(広域・新潟長野)道路詳細設計及び橋梁予備設計等業務委託</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>群馬県知事</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>群馬県安中土木事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>補助公共社会資本総合整備(広域・埼玉)(仮称)成島駅東跨線橋予備・詳細設計業務委託</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>群馬県県土整備部長</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>群馬県館林土木事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>大和川水系 石川右第8支渓 砂防事業全体計画策定委託(H30)</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>大阪府富田林土木事務所長</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>大阪府富田林土木事務所</td>
												</tr>
											</tbody>
											<tbody class="mt-2">
												<tr>
													<th class="technical__name">業務名称</th>
													<td>
														<h4>平成29年度 第S201-12号 大津能登川長浜線 補助道路整備設計委託</h4>
													</td>
												</tr>
												<tr>
													<th>表彰者</th>
													<td>滋賀県</td>
												</tr>
												<tr>
													<th>発注者</th>
													<td>滋賀県南部土木事務所</td>
												</tr>
											</tbody>
										</table>
									</div>
								</section>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section class="service technical-list l-section" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-offset="100">
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
		<a class="page-top__link" href="#"><i aria-hidden="true" class="fas fa-arrow-up"></i></a>
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