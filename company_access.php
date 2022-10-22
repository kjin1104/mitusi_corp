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
			<ol class="breadcrumb__list" itemscope itemtype=
			"https://schema.org/BreadcrumbList">
				<li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype=
				"https://schema.org/ListItem">
					<a class="breadcrumb__link" href="." itemprop="item"><span itemprop=
					"name">HOME</span></a>
					<meta content="1" itemprop="position">
				</li>
				<li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype=
				"https://schema.org/ListItem">
					<span itemprop="item"><a class="breadcrumb__link" href="company" itemprop=
					"item"><span itemprop="name">企業情報</span></a></span>
					<meta content="2" itemprop="position">
				</li>
				<li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype=
				"https://schema.org/ListItem">
					<span itemprop="item"><span itemprop="name">事務所・営業所情報</span></span>
					<meta content="3" itemprop="position">
				</li>
			</ol>
		</div>
	</div>
	<div class="contents" id="contents">
		<section class="l-section access-hd aos-animate aos-init" data-aos=
		"fade-zoom-in" data-aos-easing="ease-in" data-aos-offset="100">
			<h3 class="heading-h3"><span>事務所・<br class="u-sp-only">
			営業所情報</span></h3>
			<div class="l-inner">
				<img alt="MCC東京本社写真" class="header-img" src=
				"img/company/company_image2.jpg">
				<div class="access-hd__wrap">
					<div class="access-hd__mds">
						<h4>本 社 <small>- Head Office -</small></h4>
					</div>
					<div class="access-hd__body">
						<ul>
							<li>〒141-0032 東京都品川区大崎一丁目11番1号<br>
							(ゲートシティ大崎ウエストタワー15階)</li>
							<li>TEL 03-3495-1321(代) FAX 03-3495-1330(代)</li>
							<li><small>大崎駅南口改札から徒歩1分</small></li>
						</ul>
						<div class="mt-3 page__link">
							<a class="btn mh" href="https://goo.gl/maps/bRMgtG4TQnrQSY2i7" rel=
							"noopener noreferrer" target="_blank">MAP</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="l-section branch" data-aos="fade-zoom-in" data-aos-easing=
		"ease-in" data-aos-offset="100">
			<h4 class="branch__heading"><span>支 社</span></h4>
			<div class="l-inner">
				<div class="branch__wrap">
					<div class="branch__body">
						<h5>東北支社</h5>
						<ul data-mh="listItem01">
							<li>〒980-0021<br>
							宮城県仙台市青葉区中央四丁目10番3号<br>
							(JMFビル仙台01 3階)</li>
							<li><small>JR東北本線「仙台」駅 西口より徒歩5分<br>
							地下鉄南北線「仙台」駅南2口より徒歩3分</small></li>
							<li>TEL 022-225-0489（代）FAX 022-266-0994</li>
							<li>E-mail:info_touhoku@mccnet.co.jp</li>
						</ul>
						<div class="mt-3 page__link">
							<a class="btn mh" href="https://goo.gl/maps/XbnoG3i36tyUkVzo7" rel=
							"noopener noreferrer" target="_blank">MAP</a>
						</div>
					</div>
					<div class="branch__body">
						<h5>関東支社</h5>
						<ul data-mh="listItem01">
							<li>〒330-0845<br>
							埼玉県さいたま市大宮区仲町二丁目28番3号(Mitsutaka Bldg6階)</li>
							<li><small>大宮駅東口から徒歩5分</small></li>
							<li>TEL 048-647-6009（代）FAX 048-647-7886</li>
							<li>E-mail:info_kanto@mccnet.co.jp</li>
						</ul>
						<div class="mt-3 page__link">
							<a class="btn mh" href="https://goo.gl/maps/VqhxQwXNhY3sh3my7" rel=
							"noopener noreferrer" target="_blank">MAP</a>
						</div>
					</div>
					<div class="branch__body">
						<h5>中部支社</h5>
						<ul data-mh="listItem01">
							<li>〒460-0002<br>
							愛知県名古屋市中区丸の内三丁目20番3号<br>
							（BPRプレイス久屋大通ビル7階）<br>
							<small>地下鉄桜通線・名城線「久屋大通」駅 1番出口より徒歩1分</small></li>
							<li>TEL 052-953-1060（代）FAX 052-953-1067</li>
							<li>E-mail:info_chubu@mccnet.co.jp</li>
						</ul>
						<div class="mt-3 page__link">
							<a class="btn mh" href="https://goo.gl/maps/D1NcobE9BVYLj5uW6" rel=
							"noopener noreferrer" target="_blank">MAP</a>
						</div>
					</div>
					<div class="branch__body">
						<h5>関西支社</h5>
						<ul>
							<li>〒552-0007<br>
							大阪府大阪市港区弁天一丁目2番1-900号<br>
							(大阪ベイタワーオフィス9階)</li>
							<li><small>JR大阪環状線「弁天町」駅直結<br>
							地下鉄中央線「弁天町」駅直結分</small></li>
							<li>TEL 06-6599-6011（代）FAX 06-6599-6030</li>
							<li>E-mail:info_kansai@mccnet.co.jp</li>
						</ul>
						<div class="mt-3 page__link">
							<a class="btn mh" href="https://goo.gl/maps/Q1rmS19sKz5Qzmqt6" rel=
							"noopener noreferrer" target="_blank">MAP</a>
						</div>
					</div>
					<div class="branch__body">
						<h5>九州支社</h5>
						<ul>
							<li>〒812-0013<br>
							福岡市博多区博多駅東二丁目14番1号<br>
							(スフィンクスセンター9階)</li>
							<li><small>JR鹿児島本線「博多」駅 筑紫口より徒歩8分<br>
							地下鉄空港線「博多」駅 筑紫口より徒歩8分</small></li>
							<li>TEL 092-441-3872（代）FAX 092-473-7789</li>
							<li>E-mail:info_kyusyu@mccnet.co.jp</li>
						</ul>
						<div class="mt-3 page__link">
							<a class="btn mh" href="https://goo.gl/maps/zSH5JfpFVHieB7A98" rel=
							"noopener noreferrer" target="_blank">MAP</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="l-section branch" data-aos="fade-zoom-in" data-aos-easing=
		"ease-in" data-aos-offset="100">
			<h4 class="branch__heading"><span>事務所</span></h4>
			<div class="l-inner">
				<div class="branch__wrap">
					<div class="branch__body">
						<div class="branch__mds">
							<h5>北関東事務所</h5>
							<ul>
								<li>〒330-0845<br>
								埼玉県さいたま市大宮区仲町二丁目28番3号</li>
								<li><small>大宮駅東口より徒歩5分</small></li>
								<li>TEL 048-647-7890（代）FAX 048-647-7886</li>
								<li>E-mail:info_kitakanto@mccnet.co.jp</li>
							</ul>
							<div class="mt-3 page__link">
								<a class="btn mh" href="https://goo.gl/maps/GScsnML33zyRWMo59" rel=
								"noopener noreferrer" target="_blank">MAP</a>
							</div>
						</div>
					</div>
					<div class="branch__body">
						<h5>東京事務所</h5>
						<ul>
							<li>〒141-0032<br>
							東京都品川区大崎一丁目11番1号</li>
							<li><small>大崎駅南口改札から徒歩1分</small></li>
							<li>TEL 03-6417-3116（代）FAX 03-6417-3117（代）</li>
							<li>E-mail:info_tokyo@mccnet.co.jp</li>
						</ul>
						<div class="mt-3 page__link">
							<a class="btn mh" href="https://goo.gl/maps/c2uxmktnRpKxz8PA8" rel=
							"noopener noreferrer" target="_blank">MAP</a>
						</div>
					</div>
					<div class="branch__body">
						<h5>北陸事務所</h5>
						<ul>
							<li>〒951-8067<br>
							新潟県新潟市中央区本町通7番町1153番地</li>
							<li></li>
							<li>TEL 025-224-1285（代）FAX 025-224-1286</li>
							<li>E-mail:info_hokuriku@mccnet.co.jp</li>
						</ul>
						<div class="mt-3 page__link">
							<a class="btn mh" href="https://goo.gl/maps/8Q9RredGUGdEd47u7" rel=
							"noopener noreferrer" target="_blank">MAP</a>
						</div>
					</div>
					<div class="branch__body">
						<h5>千葉事務所</h5>
						<ul>
							<li>〒260-0013<br>
							千葉県千葉市中央区中央二丁目5番1号</li>
							<li><small>JR「千葉」駅 表口より徒歩10分</small></li>
							<li>TEL 043-221-6445（代）FAX 043-221-1928</li>
							<li>E-mail:info_chiba@mccnet.co.jp</li>
						</ul>
						<div class="mt-3 page__link">
							<a class="btn mh" href="https://goo.gl/maps/mUr6UG12BWPFau6r6" rel=
							"noopener noreferrer" target="_blank">MAP</a>
						</div>
					</div>
					<div class="branch__body">
						<h5>大阪事務所</h5>
						<ul>
							<li>〒552-0007<br>
							大阪府大阪市港区弁天一丁目2番1-900号</li>
							<li><small>JR大阪環状線「弁天町」駅直結 地下鉄中央線「弁天町」駅直結</small></li>
							<li>TEL 06-6599-6011（代）FAX 06-6599-6030</li>
							<li>E-mail:info_kansai@mccnet.co.jp</li>
						</ul>
						<div class="mt-3 page__link">
							<a class="btn mh" href="https://goo.gl/maps/Q1rmS19sKz5Qzmqt6" rel=
							"noopener noreferrer" target="_blank">MAP</a>
						</div>
					</div>
					<div class="branch__body">
						<h5>神戸事務所</h5>
						<ul>
							<li>〒650-0012<br>
							神戸市中央区北長狭通5-2-19</li>
							<li><small>JR元町駅より徒歩3分</small></li>
							<li>TEL 078-351-7501（代）FAX 078-351-7502</li>
							<li>E-mail:info_kansai@mccnet.co.jp</li>
						</ul>
						<div class="mt-3 page__link">
							<a class="btn mh" href="https://goo.gl/maps/gK9QMY2cGiU8sHXE9" rel=
							"noopener noreferrer" target="_blank">MAP</a>
						</div>
					</div>
					<div class="branch__body">
						<h5>ジャカルタ駐在員事務所</h5>
						<ul>
							<li>〒650-0012<br>
							World Trade Centre 5, 6th Floor, Jl. Jend.Sudirman Kav. 29,<br>
							Jakarta Selatan, DKI Jakarta 12920</li>
							<li>+62 21 525 3688</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section class="l-section branch" data-aos="fade-zoom-in" data-aos-easing=
		"ease-in" data-aos-offset="100">
			<h4 class="branch__heading"><span>営業所</span></h4>
			<div class="l-inner">
				<div class="branch__wrap">
					<div class="branch__body">
						<div class="branch__mds">
							<h5>青森営業所</h5>
							<ul>
								<li>〒030-0862<br>
								青森県青森市古川一丁目15番3号</li>
								<li>TEL 017-752-9957<br>
								FAX 017-752-9958</li>
							</ul>
						</div>
					</div>
					<div class="branch__body">
						<div class="branch__mds">
							<h5>岩手営業所</h5>
							<ul>
								<li>〒020-0026<br>
								岩手県盛岡市開運橋通4-28</li>
								<li>TEL 019-654-5180<br>
								FAX 019-654-5181</li>
							</ul>
						</div>
					</div>
					<div class="branch__body">
						<div class="branch__mds">
							<h5>秋田営業所</h5>
							<ul>
								<li>〒010-0001<br>
								秋田県秋田市中通四丁目14-12</li>
								<li>TEL 018-884-4088<br>
								FAX 018-884-4089</li>
							</ul>
						</div>
					</div>
					<div class="branch__body">
						<div class="branch__mds">
							<h5>福島営業所</h5>
							<ul>
								<li>〒963-8041<br>
								福島県郡山市富田町字大十内85番地349</li>
								<li>TEL 024-983-7160<br>
								FAX 024-983-7161</li>
							</ul>
						</div>
					</div>
					<div class="branch__body">
						<div class="branch__mds">
							<h5>茨城営業所</h5>
							<ul>
								<li>〒305-0032<br>
								茨城県つくば市竹園二丁目10-8</li>
								<li>TEL 029-860-6081<br>
								FAX 029-860-6082</li>
							</ul>
						</div>
					</div>
					<div class="branch__body">
						<div class="branch__mds">
							<h5>栃木営業所</h5>
							<ul>
								<li>〒321-0954<br>
								栃木県宇都宮市元今泉四丁目6番6号</li>
								<li>TEL 028-680-7215<br>
								FAX 028-680-7216</li>
							</ul>
						</div>
					</div>
					<div class="branch__body">
						<div class="branch__mds">
							<h5>群馬営業所</h5>
							<ul>
								<li>〒370-0851<br>
								群馬県高崎市上中居町380-3</li>
								<li>TEL 027-395-4537<br>
								FAX 027-395-4538</li>
							</ul>
						</div>
					</div>
					<div class="branch__body">
						<div class="branch__mds">
							<h5>横浜営業所</h5>
							<ul>
								<li>〒244-0801<br>
								神奈川県横浜市戸塚区品濃町557-44-303</li>
								<li>TEL 045-825-9904<br>
								FAX 045-825-9908</li>
							</ul>
						</div>
					</div>
					<div class="branch__body">
						<div class="branch__mds">
							<h5>川崎営業所</h5>
							<ul>
								<li>〒214-0006<br>
								神奈川県川崎市多摩区菅仙谷一丁目10番23号</li>
								<li>TEL 044-946-6641<br>
								FAX 044-946-6642</li>
							</ul>
						</div>
					</div>
					<div class="branch__body">
						<div class="branch__mds">
							<h5>福井営業所</h5>
							<ul>
								<li>〒910-0005<br>
								福井県福井市大手二丁目4-26</li>
								<li>TEL 0776-28-9777<br>
								FAX 0776-28-9877</li>
							</ul>
						</div>
					</div>
					<div class="branch__body">
						<div class="branch__mds">
							<h5>山梨営業所</h5>
							<ul>
								<li>〒400-0031<br>
								山梨県甲府市丸の内一丁目2番9号</li>
								<li>TEL 055-223-0451<br>
								FAX 055-223-0452</li>
							</ul>
						</div>
					</div>
					<div class="branch__body">
						<div class="branch__mds">
							<h5>長野営業所</h5>
							<ul>
								<li>〒395-0084<br>
								長野県飯田市鈴加町1-16</li>
								<li>TEL 0265-49-0927<br>
								FAX 0265-49-0928</li>
							</ul>
						</div>
					</div>
					<div class="branch__body">
						<div class="branch__mds">
							<h5>岐阜営業所</h5>
							<ul>
								<li>〒500-8074<br>
								岐阜県岐阜市七軒町6</li>
								<li>TEL 058-216-2566<br>
								FAX 058-216-2570</li>
							</ul>
						</div>
					</div>
					<div class="branch__body">
						<div class="branch__mds">
							<h5>静岡営業所</h5>
							<ul>
								<li>〒422-8042<br>
								静岡市駿河区石田一丁目20-6</li>
								<li>TEL 054-289-3170<br>
								FAX 054-289-3171</li>
							</ul>
						</div>
					</div>
					<div class="branch__body">
						<div class="branch__mds">
							<h5>三重営業所</h5>
							<ul>
								<li>〒512-0935<br>
								三重県四日市市川島新町141番地1</li>
								<li>TEL 059-327-6393<br>
								FAX 059-327-6397</li>
							</ul>
						</div>
					</div>
					<div class="branch__body">
						<div class="branch__mds">
							<h5>滋賀営業所</h5>
							<ul>
								<li>〒520-0044<br>
								滋賀県大津市京町四丁目5番13号</li>
								<li>TEL 077-510-1702<br>
								FAX 077-510-1703</li>
							</ul>
						</div>
					</div>
					<div class="branch__body">
						<div class="branch__mds">
							<h5>京都営業所</h5>
							<ul>
								<li>〒604-0847<br>
								京都市中京区烏丸通押小路上ル秋野々町535</li>
								<li>TEL 075-253-6471<br>
								FAX 075-253-6472</li>
							</ul>
						</div>
					</div>
					<div class="branch__body">
						<div class="branch__mds">
							<h5>姫路営業所</h5>
							<ul>
								<li>〒670-0955<br>
								兵庫県姫路市安田四丁目17番地</li>
								<li>TEL 079-287-0300<br>
								FAX 079-287-0301</li>
							</ul>
						</div>
					</div>
					<div class="branch__body">
						<div class="branch__mds">
							<h5>奈良営業所</h5>
							<ul>
								<li>〒630-8115<br>
								奈良県奈良市大宮町3-2-50</li>
								<li>TEL 0742-32-1515<br>
								FAX 0742-32-1516</li>
							</ul>
						</div>
					</div>
					<div class="branch__body">
						<div class="branch__mds">
							<h5>和歌山営業所</h5>
							<ul>
								<li>〒640-8269<br>
								和歌山県和歌山市小松原通4-30</li>
								<li>TEL 073-402-2277<br>
								FAX 073-402-2278</li>
							</ul>
						</div>
					</div>
					<div class="branch__body">
						<div class="branch__mds">
							<h5>山陰営業所</h5>
							<ul>
								<li>〒683-0804<br>
								鳥取県米子市米原三丁目4番22号</li>
								<li>TEL 0859-21-8835<br>
								FAX 0859-21-8834</li>
							</ul>
						</div>
					</div>
					<div class="branch__body">
						<div class="branch__mds">
							<h5>広島営業所</h5>
							<ul>
								<li>〒730-0012<br>
								広島県広島市中区上八丁堀8番23号</li>
								<li>TEL 082-502-7202<br>
								FAX 082-502-7203</li>
							</ul>
						</div>
					</div>
					<div class="branch__body">
						<div class="branch__mds">
							<h5>山口営業所</h5>
							<ul>
								<li>〒753-0242<br>
								山口県山口市大内小京都4-3</li>
								<li>TEL 0839-34-3822<br>
								FAX 0839-34-3823</li>
							</ul>
						</div>
					</div>
					<div class="branch__body">
						<div class="branch__mds">
							<h5>四国営業所</h5>
							<ul>
								<li>〒760-0008<br>
								香川県高松市中野町29番地5</li>
								<li>TEL 050-6864-7799<br>
								FAX 050-6864-7496</li>
							</ul>
						</div>
					</div>
					<div class="branch__body">
						<div class="branch__mds">
							<h5>佐賀営業所</h5>
							<ul>
								<li>〒847-0044<br>
								佐賀県唐津市木綿町1986-1</li>
								<li>TEL 0955-70-2510<br>
								FAX 0955-70-2511</li>
							</ul>
						</div>
					</div>
					<div class="branch__body">
						<div class="branch__mds">
							<h5>長崎営業所</h5>
							<ul>
								<li>〒850-0036<br>
								長崎県長崎市五島町3番10号</li>
								<li>TEL 095-816-1050<br>
								FAX 095-816-1051</li>
							</ul>
						</div>
					</div>
					<div class="branch__body">
						<div class="branch__mds">
							<h5>熊本営業所</h5>
							<ul>
								<li>〒862-0959<br>
								熊本県熊本市中央区白山二丁目10番18号</li>
								<li>TEL 096-373-0020<br>
								FAX 096-373-0021</li>
							</ul>
						</div>
					</div>
					<div class="branch__body">
						<div class="branch__mds">
							<h5>大分営業所</h5>
							<ul>
								<li>〒870-0045<br>
								大分県大分市城崎町1-3-21 城崎藤野ビル204号</li>
								<li>TEL 097-540-6224<br>
								FAX 097-540-6225</li>
							</ul>
						</div>
					</div>
					<div class="branch__body">
						<div class="branch__mds">
							<h5>宮崎営業所</h5>
							<ul>
								<li>〒880-0865<br>
								宮崎市松山一丁目11番13号</li>
								<li>TEL 0985-20-2180<br>
								FAX 0985-20-2171</li>
							</ul>
						</div>
					</div>
					<div class="branch__body">
						<div class="branch__mds">
							<h5>鹿児島営業所</h5>
							<ul>
								<li>〒892-0848<br>
								鹿児島県鹿児島市平之町9番33号</li>
								<li>TEL 099-224-6596<br>
								FAX 099-224-6597</li>
							</ul>
						</div>
					</div>
					<div class="branch__body">
						<div class="branch__mds">
							<h5>沖縄営業所</h5>
							<ul>
								<li>〒900-0033<br>
								沖縄県那覇市久米一丁目16番5号</li>
								<li>TEL 098-860-4515<br>
								FAX 098-860-4516</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="l-section company-list service" data-aos="fade-zoom-in"
		data-aos-easing="ease-in" data-aos-offset="100">
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
						<a class="btn mt-3" href="/recruit/" rel="noopener noreferrer" target=
						"_blank">ENTRY</a>
					</div>
				</div>
				<div class="entry__img-box"></div>
			</div>
		</div>
	</div><?php $filename='index.php';if(file_exists($filename)){include('elements/fd.php');}else{echo '';} ?>
	<div class="page-top">
		<a class="page-top__link" href="#"><i aria-hidden="true" class=
		"fa-arrow-up fas"></i></a>
	</div>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js">
	</script>
	<script>
	AOS.init({offset:120,delay:100,duration:500,easing:"false",once:!1,mirror:!0}),$(function(){$(".lazy").lazyload({threshold:-1e3,skip_invisible:!0})})
	</script>
</body>
</html>