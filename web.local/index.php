<?php

$today = date("d.m.Y");
$today_1 = date("l");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/neon_head.css">
    <link rel="stylesheet" href="css/neon_scroll.css">
    <link rel="stylesheet" href="css/gradient_head.css">
    <link rel="stylesheet" href="css/hover_card.css">
    <link rel="stylesheet" href="css/preloader.css">
    <link rel="stylesheet" href="css/contact_box.css">

    <!-- Шрифты -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Turret+Road&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Syne+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Vibur" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">
    <!-- Анимации при скролле -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Icon Theme -->
    <link rel="apple-touch-icon" sizes="57x57" href="img/img_theme/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/img_theme/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/img_theme/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/img_theme/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/img_theme/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/img_theme/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/img_theme/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/img_theme/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/img_theme/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="img/img_theme/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/img_theme/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/img_theme/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/img_theme/favicon-16x16.png">
    <link rel="manifest" href="img/img_theme/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/img_theme/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <meta name="viewport" content="width=1170">
    <title>Home</title>
</head>

<body>
    <div class="preloader">
        <svg class="preloader__image" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path fill="currentColor" d="M304 48c0 26.51-21.49 48-48 48s-48-21.49-48-48 21.49-48 48-48 48 21.49 48 48zm-48 368c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48zm208-208c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48zM96 256c0-26.51-21.49-48-48-48S0 229.49 0 256s21.49 48 48 48 48-21.49 48-48zm12.922 99.078c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48c0-26.509-21.491-48-48-48zm294.156 0c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48c0-26.509-21.49-48-48-48zM108.922 60.922c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.491-48-48-48z">
            </path>
        </svg>
    </div>

    <div class="box_video">
        <video id="video" class="video filter" src="video/video8.mp4" autoplay muted loop></video>
    </div>

    <div id="progressBar"></div>
    <div id="scrollPath"></div>
    <div class="content_full">
        <div class="block_neon_head">
            <div class="neon_head">
                <h2 class="neon_head_title">
                    Welco<span class="flicker1">m</span>e to ho<span class="flicker2">m</span>e!
                </h2>
            </div>
        </div>

        <!--<div class="block_gradient_head">
            <div class="neon_gradient_head">
                <div class="neon_gradient_head1">Web-Programming World</div>
            </div>
        </div>-->

        <div class="wrapper">
            <div class="content">
                <div class="box_title">
                    <div class="title">Web-Programming World</div>
                </div>
                <div class="data">
                    <div class="data_1"> <?php echo $today_1 ?> </div>
                    <div class="data_2"></div>
                    <div class="data_3"></div>
                    <div class="data_4"> <?php echo $today ?> </div>
                </div>
                <div class="exit_box">

                    <div class="neon_button1">
                        <a href="#menu" id="menu_button" class="a-n2">

                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Menu
                        </a>
                    </div>

                    <div class="neon_button2">
                        <a class="a-n2" href="#" onclick="history.back();">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Exit
                        </a>
                    </div>

                </div>
                <div class="links">
                    <a href="https://www.google.com/" target="_blank" class="google" title="Go to website">
                        <span class="google_color">G</span><span class="google_color">o</span><span class="google_color">o</span><span class="google_color">g</span><span class="google_color">l</span><span class="google_color">e</span>
                    </a>

                    <a href="https://mail.google.com/" target="_blank" class="gmail" title="Go to website"><span>G</span><span>m</span><span>ail</span>
                    </a>

                    <a href="https://www.youtube.com/" target="_blank" class="youtube" title="Go to website">
                        <span id="youtube_hover_1">You</span><span id="youtube_anim"><span id="youtube_hover_2">Tube</span></span>
                    </a>
                </div>
            </div>
            <video src="video/2200 hrs (Free VJ Loop) 4K.mp4" autoplay muted loop></video>
        </div>




        <!-- style="display: none;" -->
        <div id="menu" class="box_menu" style="display: none;">
            <div class="video_selector" id="video_selector">
                <div class="video_item" data-video="video/video2.webm">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Style 1</div>
                <div class="video_item" data-video="video/video8.mp4">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>Style 2</div>
                <div class="video_item" data-video="video/video4.mp4">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>Style 3</div>
                <div class="video_item" data-video="video/video5.mp4">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>Style 4</div>
                <div id="addblur" class="video_item">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>Filter On</div>
                <div id="removeblur" class="video_item">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>Filter Off
                </div>
            </div>
            <div class="close_menu" id="close_menu">

            </div>
        </div>
        <div class="cards_container">
            <div class="container">
                <!-- TODO card 1 -->
                <div class="card" data-aos="fade-up-left">
                    <div class="title_box">
                        <img src="img/icons/img1.png" alt="">
                    </div>
                    <div class="contentbox">
                        <h2>Guides</h2>
                        <a href="#box_blocks_1" id="open_1" title="Go to links">Open</a>
                    </div>
                </div>
                <!-- TODO card 2 -->
                <div class="card_2" data-aos="fade-up-left" data-aos-delay="100">
                    <div class="title_box">
                        <img src="img/icons/img2.png" alt="">
                    </div>
                    <div class="contentbox">
                        <h2>Web cheat sheets</h2>
                        <a href="#box_blocks_2" id="open_2" title="Go to links">Open</a>
                    </div>
                </div>
                <!-- TODO card 3 -->
                <div class="card_3" data-aos="fade-up-left" data-aos-delay="200">
                    <div class="title_box">
                        <img src="img/icons/img3.png" alt="">
                    </div>
                    <div class="contentbox">
                        <h2>Web-assistants</h2>
                        <a href="#box_blocks_3" id="open_3" title="Go to links">Open</a>
                    </div>
                </div>
                <!-- TODO card 4 -->
                <div class="card_4" data-aos="fade-up-left" data-aos-delay="300">
                    <div class="title_box">
                        <img src="img/icons/img4.png" alt="">
                    </div>
                    <div class="contentbox">
                        <h2>Web-colors</h2>
                        <a href="#box_blocks_4" id="open_4" title="Go to links">Open</a>
                    </div>
                </div>
                <!-- TODO card 5 -->
                <div class="card_5" data-aos="fade-up-left" data-aos-delay="200">
                    <div class="title_box">
                        <img src="img/icons/img5.png" alt="">
                    </div>
                    <div class="contentbox">
                        <h2>Domains</h2>
                        <a href="#box_blocks_5" id="open_5" title="Go to links">Open</a>
                    </div>
                </div>
                <!-- TODO card 6 -->
                <div class="card_6" data-aos="fade-up-left" data-aos-delay="300">
                    <div class="title_box">
                        <img src="img/icons/img6.png" alt="">
                    </div>
                    <div class="contentbox">
                        <h2>Hosting</h2>
                        <a href="#box_blocks_6" id="open_6" title="Go to links">Open</a>
                    </div>
                </div>

            </div>
        </div>
        <div class="container_blocks_box">
            <div class="container_blocks">

                <div id="box_blocks_1" class="box_blocks" style="display: none;">
                    <div class="box_title">
                        <h2>Guides</h2>
                        <div id="close_1" class="end" title="Close"></div>
                    </div>
                    <div class="box_content">

                        <div class="box_neon_button n1-100">
                            <h3>Guide for HTML</h3>
                            <a class="a-n1" href="http://htmlbook.ru/html" target="_blank">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                htmlbook.ru
                            </a>
                        </div>

                        <div class="box_neon_button">
                            <h3>Guide for CSS</h3>
                            <a class="a-n1" href="https://webref.ru/css" target="_blank">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                webref.ru
                            </a>
                        </div>

                        <div class="box_neon_button ">
                            <h3>Guide for JavaScript</h3>
                            <a class="a-n1" href="https://learn.javascript.ru/" target="_blank">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                learn.javascript.ru
                            </a>
                        </div>

                    </div>
                </div>


                <!-- ! n1-100 -->
                <div id="box_blocks_2" class="box_blocks" style="display: none;">
                    <div class="box_title">
                        <h2>Web cheat sheets</h2>
                        <div id="close_2" class="end" title="Close"></div>
                    </div>
                    <div class="box_content">

                        <div class="box_neon_button n1-100">
                            <h3>Windows hotkeys</h3>
                            <a class="a-n2" href="https://hype.tech/@id123/vse-goryachie-klavishi-v-windows-10-i-windows-7-dre3u587" target="_blank">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                Hype.com
                            </a>
                        </div>

                        <div class="box_neon_button">
                            <h3>Flexbox Cheat Sheet</h3>
                            <a class="a-n2" href="http://fls.guru/flexbox.html" target="_blank">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                FLS.guru
                            </a>
                        </div>

                        <div class="box_neon_button">
                            <h3>Grid CSS Cheat Sheet</h3>
                            <a class="a-n2" href="https://tpverstak.ru/grid/" target="_blank">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                TPverstak.ru
                            </a>
                        </div>

                        <div class="box_neon_button">
                            <h3>PHP</h3>
                            <a class="a-n2" href="https://www.php.net/" target="_blank">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                PHP.net
                            </a>
                        </div>

                        <div class="box_neon_button">
                            <h3>CodePen</h3>
                            <a class="a-n2" href="https://codepen.io/" target="_blank">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                codepen.io
                            </a>
                        </div>

                    </div>
                </div>


                <div id="box_blocks_3" class="box_blocks" style="display: none;">
                    <div class="box_title">
                        <h2>Web-assistants</h2>
                        <div id="close_3" class="end" title="Close"></div>
                    </div>

                    <div class="box_content">

                        <div class="box_neon_button">
                            <h3>Google Fonts</h3>
                            <a class="a-n3" href="https://fonts.google.com//" target="_blank">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                fontsgoogle.com
                            </a>
                        </div>

                        <div class="box_neon_button">
                            <h3>Favicon & App Icon</h3>
                            <a class="a-n3" href="https://www.favicon-generator.org/" target="_blank">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                favicon-generator.org
                            </a>
                        </div>

                        <div class="box_neon_button">
                            <h3>Animation</h3>
                            <a class="a-n3" href="https://easings.net/" target="_blank">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                easings.net
                            </a>
                        </div>

                        <div class="box_neon_button">
                            <h3>Animation AOP</h3>
                            <a class="a-n3" href="https://michalsnik.github.io/aos/" target="_blank">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                michalsnik.io
                            </a>
                        </div>

                        <div class="box_neon_button">
                            <h3>GitHub</h3>
                            <a class="a-n3" href="https://github.com/" target="_blank">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                github.com
                            </a>
                        </div>

                        <div class="box_neon_button">
                            <h3>Klipartz</h3>
                            <a class="a-n3" href="https://www.klipartz.com/" target="_blank">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                klipartz.com
                            </a>
                        </div>

                        <div class="box_neon_button n1-100">
                            <h3>Logo Generator</h3>
                            <a class="a-n3" href="https://hipsterlogogenerator.com/" target="_blank">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                hipsterlogogenerator.com
                            </a>
                        </div>

                    </div>

                </div>
                <div id="box_blocks_4" class="box_blocks" style="display: none;">
                    <div class="box_title">
                        <h2>
                            <span>W</span><span>e</span><span>b</span><span>-</span><span>c</span><span>o</span><span>l</span><span>o</span><span>r</span><span>s</span>
                        </h2>
                        <div id="close_4" class="end" title="Close"></div>
                    </div>

                    <div class="box_content">

                        <div class="box_neon_button n1-100">
                            <h3>Color-Picker</h3>
                            <a class="a-n4" href="https://htmlcolorcodes.com/color-picker/" target="_blank">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                htmlcolorcodes.com
                            </a>
                        </div>

                        <div class="box_neon_button">
                            <h3>All Colors</h3>
                            <a class="a-n4" href="https://colours.neilorangepeel.com/" target="_blank">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                colours.com
                            </a>
                        </div>

                        <div class="box_neon_button">
                            <h3>Gradient Generator</h3>
                            <a class="a-n4" href="https://www.colorzilla.com/gradient-editor/" target="_blank">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                colorzilla.com
                            </a>
                        </div>
                    </div>

                </div>
                <div id="box_blocks_5" class="box_blocks" style="display: none;">
                    <div class="box_title">
                        <h2>Domains</h2>
                        <div id="close_5" class="end" title="Close"></div>
                    </div>

                    <div class="box_content">

                        <div class="box_neon_button">
                            <h3>Cheap Domains</h3>
                            <a class="a-n5" href="https://2domains.ru/" target="_blank">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                2domains.ru
                            </a>
                        </div>

                        <div class="box_neon_button">
                            <h3>Free Domains</h3>
                            <a class="a-n5" href="https://www.freenom.com/ru/index.html" target="_blank">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                freenom.com
                            </a>
                        </div>
                    </div>

                </div>

                <div id="box_blocks_6" class="box_blocks" style="display: none;">
                    <div class="box_title">
                        <h2>Hosting</h2>
                        <div id="close_6" class="end" title="Close"></div>
                    </div>

                    <div class="box_content">

                        <div class="box_neon_button">
                            <h3>Hostiq</h3>
                            <a class="a-n6" href="https://hostiq.ua/" target="_blank">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                hostiq.ua
                            </a>
                        </div>
                        <div class="box_neon_button">
                            <h3>Hostia</h3>
                            <a class="a-n6" href="https://hostia.ru/" target="_blank">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                Hostia.ru
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="content_footer">

            <div class="block_contact">
                <p>Do you need website development? Contact me!</p>
                <div class="telegram_button" title="Contact me!">
                    <a href="https://t.me/web057" target="_blank"></a>
                    <img src="img/icons/telegram_icon.svg" alt="Telegram SVG">
                </div>
                <div class="viber_button">
                    <a href="mailto:d.zzzhuk@gmail.com"></a>
                    <img src="img/icons/gmail_icon.png" alt="Gmail PNG">
                </div>
                <!--
                    <div class="viber_button">
                    <a href="#"></a>
                    <img src="img/icons/viber_icon.png" alt="Viber PNG">
                </div>
                -->
            </div>
        </div>
    </footer>

    <script src="js/jquery.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/script.js"></script>
</body>

</html>