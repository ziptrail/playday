<?php
session_start();

include "db_conn.php";
include "utils.php";

?>

<!DOCTYPE html>
<html data-wf-domain="playday-a06ea0.webflow.io" data-wf-page="670c91daa4b9a20627e5f16b" data-wf-site="670c91daa4b9a20627e5f12a" data-wf-status="1" lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta content="Styleguide" property="og:title"/>
        <meta content="Styleguide" property="twitter:title"/>
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="Webflow" name="generator"/>
        <title>Доставка</title>
        <link href="https://cdn.prod.website-files.com/670c91daa4b9a20627e5f12a/css/playday-a06ea0.webflow.5d6287019.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com" rel="preconnect"/>
        <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous"/>
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
        <script type="text/javascript">WebFont.load({  google: {    families: [
            "Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"
            ]  }});</script>
        <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",
            ("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
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
                        <a href="/PlayDayFrontend/delivery.php" aria-current="page" class="navigation-item w-nav-link w--current">Доставка</a>
                        <a href="/PlayDayFrontend/contact.php" class="navigation-item w-nav-link">Контакты</a>
                        <a href="/PlayDayFrontend/reviews.php" class="navigation-item w-nav-link">Отзывы</a>
                    </nav>
                    <div class="menu-button w-nav-button">
                        <img 
                            src="https://cdn.prod.website-files.com/670c91daa4b9a20627e5f12a/670c91daa4b9a20627e5f1af_menu-icon.png" 
                            width="22" 
                            alt="" 
                            class="menu-icon"
                        />
                    </div>
                </div>
            </div>
        </div>
        <section>
            <section class="pricing-overview">
                <div class="container-2">
                    <h2 class="centered-heading"><strong class="bold-text-3">Доставка консолей, игр и прочих аксессуаров в Барнауле</strong></h2>
                    <h2 class="heading-5"><strong>Доставка по Барнаулу с 10:00 до 20:00!</strong></h2>
                    <div class="w-form">
                        <form 
                            id="email-form" 
                            name="email-form" 
                            data-name="Email Form" 
                            method="get" 
                            data-wf-page-id="670c91daa4b9a20627e5f16b" 
                            data-wf-element-id="84645b8d-e352-d3d0-2565-a192ed5dd9a5">
                                
                            <label for="name-2">ваш адрес (обязательно)</label>
                            <input class="w-input" maxlength="256" name="name-2" data-name="Name 2" placeholder="" type="text" id="name-2"/>
                            <input type="submit" data-wait="" class="submit-button w-button" value="Проверить условия доставки"/>
                        </form>
                        <div class="w-form-done">
                            <div>Thank you! Your submission has been received!</div>
                        </div>
                        <div class="w-form-fail">
                            <div>Oops! Something went wrong while submitting the form.</div>
                        </div>
                    </div>
                    <div class="map"></div>
                </div>
            </section>
        </section>
        <div class="section">
            <div class="container2">
                <div class="w-layout-grid footer">
                    <div id="w-node-_88a386dd-8f07-0c34-70f0-2d9f87e2971d-87e29718" class="label">Сайт магазина PlayDay</div>
                    <div id="w-node-_88a386dd-8f07-0c34-70f0-2d9f87e2971f-87e29718" class="links-section-footer">
                        <a href="https://vk.com/playday22" class="footer-link">VK</a>
                        <a href="https://t.me/PlayDay22Barnaul" class="footer-link">Telegram</a>
                    </div>
                </div>
            </div>
        </div>
        <script 
            src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=670c91daa4b9a20627e5f12a" 
            type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" 
            crossorigin="anonymous">
        </script>
    </body>
</html>
