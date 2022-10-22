    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta property='og:title' content='MCC'>
    <meta property='og:url' content='https://www.mccnet.co.jp/'>
    <meta name="keywords" content="三井共同建設コンサルタント,建設コンサルタント,建設,コンサルタント" />
    <meta name="description"
        content="三井共同建設コンサルタント株式会社｜三井共同建設コンサルタント株式会社では河川・ダムや道路、橋梁・道路構造物、都市・地方計画、公園緑地・景観計画、リゾート計画、上下水道、港湾・空港、環境・防災、施工計画及び施工設備、建築、情報システムなどの各建設部門の調査、企画、立案、設計、施工管理を行っております。" />
    <meta name="theme-color" content="#005fb1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="apple-touch-icon" href="assets/apple-touch-icon.png" sizes="180x180">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="canonical" href="https://www.mccnet.co.jp/" />
    <link rel='shortlink' href='https://www.mccnet.co.jp/' />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;900&display=swap" rel="stylesheet">
    <link
            href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Round|Material+Icons+Sharp|Material+Icons+Two+Tone"
            rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type='text/javascript' src="js/script.js"></script>
    <script type='text/javascript' src="js/mh.js"></script>
    <script type='text/javascript' src="assets/js/lazyload.js"></script>
    <script type='text/javascript' src="assets/js/inv.js"></script>

    <link rel="stylesheet" href="assets/css/set.min.css" media="all" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/css/aos.css" media="all" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="assets/img/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">

    <?php
$path = $_SERVER['SCRIPT_NAME'];
if (strpos($path, 'projects') !== false) : ?>
    <title>事業案内｜三井共同建設コンサルタント株式会社</title>
    <?php elseif (strpos($path, 'projects_rivers-sabo') !== false) : ?>
    <title>河川・砂防｜三井共同建設コンサルタント株式会社</title>
    <?php elseif (strpos($path, 'projects_roads-bridges') !== false) : ?>
    <title>道路・橋梁｜三井共同建設コンサルタント株式会社</title>
    <?php elseif (strpos($path, 'projects_ports-airport-coasts') !== false) : ?>
    <title>港湾・空港・海岸｜三井共同建設コンサルタント株式会社</title>
    <?php elseif (strpos($path, 'projects_town-planning') !== false) : ?>
    <title>まちづくり分野｜三井共同建設コンサルタント株式会社</title>
    <?php elseif (strpos($path, 'projects_sewer') !== false) : ?>
    <title>下水道｜三井共同建設コンサルタント株式会社</title>
    <?php elseif (strpos($path, 'projects_ground-analysis') !== false) : ?>
    <title> 地盤解析｜三井共同建設コンサルタント株式会社</title>
    <?php elseif (strpos($path, 'projects_environment-renewableenergy') !== false) : ?>
    <title>環境・再生エネルギー｜三井共同建設コンサルタント株式会社</title>
    <?php elseif (strpos($path, 'projects_telecommunications') !== false) : ?>
    <title>電気通信｜三井共同建設コンサルタント株式会社</title>
    <?php elseif (strpos($path, 'projects_informationsystem') !== false) : ?>
    <title>情報システム｜三井共同建設コンサルタント株式会社</title>
    <?php elseif (strpos($path, 'projects_maintenance') !== false) : ?>
    <title>保全 ｜三井共同建設コンサルタント株式会社</title>
    <?php elseif (strpos($path, 'projects_cm-ppppfl') !== false) : ?>
    <title>マネジメント(CM・PPP/PFI) ｜三井共同建設コンサルタント株式会社</title>
    <?php elseif (strpos($path, 'projects_overseas') !== false) : ?>
    <title>海外 ｜三井共同建設コンサルタント株式会社</title>
    <?php elseif (strpos($path, 'technical') !== false) : ?>
    <title>MCC研究所｜三井共同建設コンサルタント株式会社</title>
    <?php elseif (strpos($path, 'technical_presentedpaper') !== false) : ?>
    <title>発表論文｜三井共同建設コンサルタント株式会社</title>
    <?php elseif (strpos($path, 'technology_report') !== false) : ?>
    <title>テクノロジーレポート｜三井共同建設コンサルタント株式会社</title>
    <?php elseif (strpos($path, 'technology_commendation') !== false) : ?>
    <title> 表彰業務｜三井共同建設コンサルタント株式会社</title>
    <?php elseif (strpos($path, 'technology_disaster') !== false) : ?>
    <title>災害対応｜三井共同建設コンサルタント株式会社</title>
    <?php elseif (strpos($path, 'company_message') !== false) : ?>
    <title>トップメッセージ・MCC-Vision 100｜三井共同建設コンサルタント株式会社</title>
    <?php elseif (strpos($path, 'company_outline') !== false) : ?>
    <title>会社概要・会社沿革｜三井共同建設コンサルタント株式会社</title>
    <?php elseif (strpos($path, 'company_qualification') !== false) : ?>
    <title>有資格者・組織図｜三井共同建設コンサルタント株式会社</title>
    <?php elseif (strpos($path, 'company_access') !== false) : ?>
    <title>事務所・営業所情報｜三井共同建設コンサルタント株式会社</title>
    <?php elseif (strpos($path, 'company_quality-environment-isms') !== false) : ?>
    <title>品質・環境・ISMS｜三井共同建設コンサルタント株式会社</title>
    <?php elseif (strpos($path, '/company_actionplan') !== false) : ?>
    <title>一般事業主行動計画｜三井共同建設コンサルタント株式会社</title>
    <?php elseif (strpos($path, 'privacypolicy') !== false) : ?>
    <title>個人情報保護方針｜三井共同建設コンサルタント株式会社</title>
    <?php elseif (strpos($path, 'company') !== false) : ?>
    <title>企業情報｜三井共同建設コンサルタント株式会社</title>
    <?php else : ?>
    <title>三井共同建設コンサルタント株式会社</title>
    <?php endif; ?>