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
            <ol itemscope itemtype="https://schema.org/BreadcrumbList" class="breadcrumb__list">
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"
                    class="breadcrumb__item">
                    <a itemprop="item" href="." class="breadcrumb__link">
                        <span itemprop="name">HOME</span>
                    </a>
                    <meta itemprop="position" content="1" />
                </li>
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"
                    class="breadcrumb__item">
                    <span itemprop="item" href="company">
                        <span itemprop="name">企業情報</span>
                    </span>
                    <meta itemprop="position" content="2" />
                </li>
            </ol>
        </div>
    </div>

    <div class="contents" id="contents">
        <section class="service company-list l-section" data-aos="fade-zoom-in" data-aos-offset="100"
            data-aos-easing="ease-in">
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
    </div>

    <div class="entry">
        <div class="l-inner-xl">
            <div class="entry__area">
                <div class="entry__text-area">
                    <h3 class="entry__entry-ttl">RECRUIT</h3>
                    <small>採用情報</small>
                    <p>キミの熱意が、未来を創る</p>
                    <div class="entry__link">
                        <a href="/recruit/" target="_blank" rel="noopener noreferrer"
                            class="btn mt-3">ENTRY</a>
                    </div>
                </div>
                <div class="entry__img-box">
                    &nbsp;
                </div>
            </div>
        </div>
    </div>
    <?php $filename='index.php';if(file_exists($filename)){include('elements/fd.php');}else{echo '';} ?>
    <div class="page-top">
        <a href="#" class="page-top__link"><i class="fas fa-arrow-up" aria-hidden="true"></i></a>
    </div>
    </div>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 120,
            delay: 100,
            duration: 500,
            easing: 'false',
            once: false,
            mirror: true,
        });

        $(function () {
            $('.lazy').lazyload({
                threshold: -1000,
                skip_invisible: true
            });
        });
    </script>
</body>