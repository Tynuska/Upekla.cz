<?php
include_once 'inc/config.php';
?>

<!DOCTYPE html>
<html lang="cs" class="no-js">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta charset="utf-8" />
        <title><?= $config->get_title(); ?></title>
        <meta name="description" content="<?= $config->get_description(); ?>" />
        <base href="/">
        <meta name="robots" content="<?= $config->get_nofollow(); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />

        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,700;1,400&family=Montserrat:wght@500;700&display=swap" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/style.css?v1.0.3" />
        <link rel="stylesheet" type="text/css" media="print" href="css/print.min.css?v1.0.1" />

        <link rel="icon" type="image/png" sizes="16x16" href="images/ico/favicon.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="images/ico/favicon@2x.png" />
        <link rel="icon" type="image/png" sizes="192x192" href="images/ico/favicon-192.png" />
        <link rel="icon" type="image/png" sizes="512x512" href="images/ico/favicon-512.png" />

        <meta name="theme-color" content="#F2A3B1" />
        <meta name="msapplication-TileColor" content="#F2A3B1" />

        <meta property="og:title" content="<?= $config->get_title(); ?>" />
        <meta property="og:description" content="<?= $config->get_description(); ?>" />
        <meta property="og:image" content="/images/og-image.jpg" />

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-1D6STED5CN"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'G-1D6STED5CN');
        </script>
    </head>

    <body class="<?= $config->get_body_class(); ?>">
        <div class="container">
            <div class="header">
                <div class="sitelogo">
                    <a href=""><img src="images/logo.svg" alt="Upekla" width="229" /></a>
                </div>

                <div class="hamburger js-hamburger">
                    <a href="#"><span class="lines"></span><span class="txt">Menu</span></a>
                </div>

                <div class="header__main">
                    <div class="nav">
                        <ul class="reset">
                            <li <?= ($config->get_page() == 'default') ? 'class="is-active"' : '' ?>><a href="">Domů</a></li>
                            <li <?= ($config->get_page() == 'produkty') ? 'class="is-active"' : '' ?>><a href="produkty">Produkty</a></li>
                            <li <?= ($config->get_page() == 'cukrarny') ? 'class="is-active"' : '' ?>><a href="cukrarny">Cukrárny</a></li>
                            <li <?= ($config->get_page() == 'o-nas') ? 'class="is-active"' : '' ?>><a href="o-nas">O nás</a></li>
                        </ul>
                    </div><!-- /nav -->

                    <div class="header__sub">
                        <div class="socials">
                            <ul class="reset">
                                <li><a href="https://www.facebook.com/upekla" target="_blank"><span class="icon icon--facebook"></span></a></li>
                                <li><a href="https://www.instagram.com/upekla" target="_blank"><span class="icon icon--instagram"></span></a></li>
                            </ul>
                        </div>

                        <div class="header__btns">
                            <a href="napiste-nam" class="btn">Napište nám</a>
                        </div>
                    </div>
                </div><!-- /header__main -->

                <div class="header__bg"></div>
            </div><!-- /header -->

            <?php include 'templates/' . $config->get_template(); ?>

        </div><!-- /container -->

        <div class="footer <?= $config->get_footer_class(); ?>">
            <div class="section">
                <div class="footer__main">
                    <div class="footer__logo">
                        <a href="">
                            <img src="images/logo-circle.svg" alt="Upekla" width="120" />
                        </a>
                    </div>

                    <div class="footer__items">
                        <div class="footer__item">
                            <p class="xl">Cukrárna Písek</p>
                            <p>Alšovo náměstí 75/13, Písek</p>
                            <a href="https://goo.gl/maps/VBbnsG59C7j7ZcDb8" target="_blank" class="btn btn--pin">Navigovat</a>
                        </div>

                        <div class="footer__item">
                            <p class="xl">Cukrárna Příbram</p>
                            <p>Žižkova 3, Příbram</p>
                            <a href="https://goo.gl/maps/2y4FEggHGgfY2rJy6" target="_blank" class="btn btn--pin">Navigovat</a>
                        </div>
                    </div>

                    <div class="footer__socials">
                        <div class="socials">
                            <ul class="reset">
                                <li><a href="https://www.facebook.com/upekla" target="_blank"><span class="icon icon--facebook"></span></a></li>
                                <li><a href="https://www.instagram.com/upekla" target="_blank"><span class="icon icon--instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- /footer__main -->
                <div class="footer__main">
                    <div class="footer__copy">
                        <span>Copyright © 2024</span> | 
                        <a href="zasady-ochrany-soukromi">Ochrana osobních údajů</a>
                        | Vytvořeno <a href="https://rvlt.digital" target="_blank">RVLT</a>
                    </div>
                </div><!-- /footer__main -->
            </div>		
        </div><!-- /footer -->
        <div class="cookie-info">
            <div class="section">
                <div class="cookie-info__container">
                    <div class="cookie-info__main">
                        <p><b>Stejně jako my, i naše webové stránky používají k poskytování svých služeb různé dobrůtky (soubory Cookies).</b><br/>Více informací o těchto dobrotách naleznete <a href="informace-o-cookies">zde.</a></p>			
                    </div>
                    <div class="cookie-info__aside">
                        <button class="btn">Souhlasím s jejich zpracováním</button>
                    </div>
                </div>
            </div>
        </div><!-- /cookie-info -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="js/compiled.min.js?v1.0.1" async></script>
        <script src="js/jquery.validate.js"></script>
        <script src="js/additional-methods.js"></script>
        <script>
            $(document).ready(function () {
                var validator = $("form#message").validate({
                    errorClass: "form__error",
                    errorClassElement: "is-error",
                    validClass: 'is-filled',
                    rules: {
                        i2: {
                            email: true
                        },
                        i3: {
                            phone: true
                        }
                    },
                    messages: {
                        i1: 'Vyplňte jméno a přijmení',
                        i2: 'Špatný formát e-mailu',
                        i3: 'Špatný formát tel. čisla (+420 123 456 789)',
                        i5: 'Vyberte, datum dodání',
                        i6: 'Vyplňte, o co máte zájem',
                        i7: 'Musíte odsouhlasit zásady ochrany soukromí'
                    },
                    errorPlacement: function (error, element) {
                        if (element.attr("name") == "i7") {
                            error.insertAfter(".checkbox");
                        } else {
                            error.insertAfter(element);
                        }
                    }
                });
            });

            function setCookie(cname, cvalue, exdays) {
                var d = new Date();
                d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
                var expires = 'expires=' + d.toUTCString();
                document.cookie = cname + '=' + cvalue + '; ' + expires + '; path=/';
            }

            function getCookie(cname) {
                var name = cname + '=';
                var ca = document.cookie.split(';');
                for (var i = 0; i < ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) === ' ') {
                        c = c.substring(1);
                    }
                    if (c.indexOf(name) === 0) {
                        return c.substring(name.length, c.length);
                    }
                }
                return '';
            }

            $(document).ready(function () {
                var accepted = getCookie('accept');

                var $cookies = $('.cookie-info');

                if (accepted !== 'true') {
                    $cookies.addClass('is-active');
                    $cookies.find('button, .cookie-info__close').click(function () {
                        $cookies.removeClass('is-active');
                        setCookie('accept', 'true', 30);
                        setTimeout(function () {
                            $cookies.hide();
                        }, 300);
                    });
                } else {
                    $cookies.hide();
                }
            });

            function remove_hash_from_url() {
                var uri = window.location.toString();

                if (uri.indexOf("#") > 0) {
                    var clean_uri = uri.substring(0,
                            uri.indexOf("#"));

                    window.history.replaceState({},
                            document.title, clean_uri);
                }
            }

            $(window).on('load', function () {
                var hash = window.location.hash;
                window.location.hash = "";
                if (hash) {

                    hash = hash.replace('#', ''); // strip the # at the beginning of the string
                    hash = hash.replace(/([^a-z0-9]+)/gi, '-'); // strip all non-alphanumeric characters
                    hash = '#' + hash + '-scroll'; // hash now equals #foo with example 1

                    jQuery('html,body').stop().animate({scrollTop: $(hash).offset().top - 100}, 1000);

                    remove_hash_from_url();
                    // etc...
                }
            });

            $(function () {

                $.datepicker.regional['cs'] = {
                    closeText: 'Zavřít',
                    prevText: '&#x3c;Dříve',
                    nextText: 'Později&#x3e;',
                    currentText: 'Nyní',
                    monthNames: ['leden', 'únor', 'březen', 'duben', 'květen', 'červen', 'červenec', 'srpen',
                        'září', 'říjen', 'listopad', 'prosinec'],
                    monthNamesShort: ['led', 'úno', 'bře', 'dub', 'kvě', 'čer', 'čvc', 'srp', 'zář', 'říj', 'lis', 'pro'],
                    dayNames: ['neděle', 'pondělí', 'úterý', 'středa', 'čtvrtek', 'pátek', 'sobota'],
                    dayNamesShort: ['ne', 'po', 'út', 'st', 'čt', 'pá', 'so'],
                    dayNamesMin: ['ne', 'po', 'út', 'st', 'čt', 'pá', 'so'],
                    weekHeader: 'Týd',
                    dateFormat: 'dd.mm.yy',
                    firstDay: 1,
                    isRTL: false,
                    showMonthAfterYear: false,
                    yearSuffix: ''
                };
                $.datepicker.setDefaults($.datepicker.regional['cs']);
                $("#i5").datepicker({dateFormat: 'dd.mm.yy', minDate: +1, firstDay: 1});
            });
        </script>
    </body>
</html>