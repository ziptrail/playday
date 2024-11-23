<?php
session_start();

include "db_conn.php";
include "utils.php";

?>

<!DOCTYPE html>
<html data-wf-domain="playday-a06ea0.webflow.io" data-wf-page="670c91daa4b9a20627e5f16f" data-wf-site="670c91daa4b9a20627e5f12a" data-wf-status="1" lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta content="About" property="og:title"/>
        <meta content="About" property="twitter:title"/><meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="Webflow" name="generator"/>
        <title>Отзывы</title>
        <link href="https://cdn.prod.website-files.com/670c91daa4b9a20627e5f12a/css/playday-a06ea0.webflow.844c01b93.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com" rel="preconnect"/>
        <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous"/>
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
        <script type="text/javascript">WebFont.load({  google: {    
            families: [
                "Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"
            ]  }});</script>
        <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";
            n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
        <link href="https://cdn.prod.website-files.com/img/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
        <link href="https://cdn.prod.website-files.com/img/webclip.png" rel="apple-touch-icon"/>
    </head>
    <body>
        <div data-collapse="medium" data-animation="default" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navigation w-nav">
            <div class="navigation-items">
                <div class="navigation-wrap">
                    <nav role="navigation" class="navigation-items w-nav-menu">
                        <a href="/PlayDayFrontend/index.php" class="navigation-item w-nav-link">Главная</a>
                        <a href="/PlayDayFrontend/catalog.php" class="navigation-item w-nav-link">Каталог</a>
                        <a href="/PlayDayFrontend/delivery.php" class="navigation-item w-nav-link">Доставка</a>
                        <a href="/PlayDayFrontend/contact.php" class="navigation-item w-nav-link">Контакты</a>
                        <a href="/PlayDayFrontend/reviews.php" aria-current="page" class="navigation-item w-nav-link w--current">Отзывы</a>
                    </nav>
                    <div class="menu-button w-nav-button">
                        <img src="https://cdn.prod.website-files.com/670c91daa4b9a20627e5f12a/670c91daa4b9a20627e5f1af_menu-icon.png" width="22" alt="" class="menu-icon"/>
                    </div>
                </div>
            </div>
        </div>
        <section>
            <section class="pricing-overview">
                <div class="container-2">
                    <h2 class="centered-heading">Отзывы</h2>
                    <div class="pricing-grid">
                        <div id="w-node-_7bde040b-2971-f322-d482-8d187938a348-27e5f16f" class="pricing-card-three">
                            <img 
                                sizes="80px" 
                                srcset="https://cdn.prod.website-files.com/670c91daa4b9a20627e5f12a/6711e814ed7a87cce28914e3_188978-p-500.png 500w, https://cdn.prod.website-files.com/670c91daa4b9a20627e5f12a/6711e814ed7a87cce28914e3_188978.png 512w" 
                                alt="" 
                                src="https://cdn.prod.website-files.com/670c91daa4b9a20627e5f12a/6711e814ed7a87cce28914e3_188978.png" 
                                loading="lazy" 
                                class="pricing-image"
                            />
                            <h3 class="heading-2">Никита</h3>
                            <p class="pricing-card-text">@pyaniikitaec</p>
                            <p class="pricing-card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, 
                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                        <div id="w-node-_7bde040b-2971-f322-d482-8d187938a352-27e5f16f" class="pricing-card-three">
                            <img 
                                sizes="80px" 
                                srcset="https://cdn.prod.website-files.com/670c91daa4b9a20627e5f12a/6711e8429b36abae8307b59d_57c0a3c2519b2d81f8b7f4ec85463e81-p-500.jpg 
                                    500w, https://cdn.prod.website-files.com/670c91daa4b9a20627e5f12a/6711e8429b36abae8307b59d_57c0a3c2519b2d81f8b7f4ec85463e81-p-800.jpg 
                                    800w, https://cdn.prod.website-files.com/670c91daa4b9a20627e5f12a/6711e8429b36abae8307b59d_57c0a3c2519b2d81f8b7f4ec85463e81-p-1080.jpg 
                                    1080w, https://cdn.prod.website-files.com/670c91daa4b9a20627e5f12a/6711e8429b36abae8307b59d_57c0a3c2519b2d81f8b7f4ec85463e81.jpg 1200w" 
                                alt="" 
                                src="https://cdn.prod.website-files.com/670c91daa4b9a20627e5f12a/6711e8429b36abae8307b59d_57c0a3c2519b2d81f8b7f4ec85463e81.jpg" 
                                loading="lazy" 
                                class="pricing-image"
                            />
                            <h3 class="heading-3">Данил</h3>
                            <p class="pricing-card-text">@minecraftismylifeeee</p>
                            <p class="pricing-card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            </p>
                        </div>
                        <div id="w-node-_7bde040b-2971-f322-d482-8d187938a35c-27e5f16f" class="pricing-card-three">
                            <img 
                                sizes="80px" 
                                srcset="https://cdn.prod.website-files.com/670c91daa4b9a20627e5f12a/6711e842d631e738397791c0_unnamed-p-500.jpg 
                                500w, https://cdn.prod.website-files.com/670c91daa4b9a20627e5f12a/6711e842d631e738397791c0_unnamed-p-800.jpg 
                                800w, https://cdn.prod.website-files.com/670c91daa4b9a20627e5f12a/6711e842d631e738397791c0_unnamed.jpg 
                                900w" 
                            alt="" 
                            src="https://cdn.prod.website-files.com/670c91daa4b9a20627e5f12a/6711e842d631e738397791c0_unnamed.jpg" 
                            loading="lazy" 
                            class="pricing-image"/>
                            <h3 class="heading-4">Олег</h3>
                            <p class="pricing-card-text">@superhero555</p>
                            <p class="pricing-card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, 
                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <div class="section">
            <div class="container2">
                <div class="w-layout-grid footer">
                    <div id="w-node-_88a386dd-8f07-0c34-70f0-2d9f87e2971d-87e29718" class="label">Сайт магазина PlayDay</div>
                    <div id="w-node-_88a386dd-8f07-0c34-70f0-2d9f87e2971f-87e29718" class="links-section-footer">
                        <a href="https://vk.com/playday22" class="footer-link">VK</a>
                        <a href="https://t.me/PlayDay22Barnaul" aria-current="page" class="footer-link w--current">Telegram</a>
                    </div>
                </div>
            </div>
        </div>
        <script 
            src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=670c91daa4b9a20627e5f12a" 
            type="text/javascript" 
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" 
            crossorigin="anonymous">
        </script>
    </body>
</html>
