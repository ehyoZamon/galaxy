<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Боулинг-клуб Галактика</title>
    <meta name="description" content="Боулинг-клуб Галактика - это стандарт качества и ярких впечатлений">
    <meta property="og:title" content="Боулинг-клуб Галактика">
    <meta property="og:description" content="Боулинг-клуб Галактика - это стандарт качества и ярких впечатлений">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_EN">
    
    <!-- Favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="/images/apple-touch-icon.png">
    
    <!-- CSS -->
    <link rel="stylesheet" href="./css/index.css?v=<?= time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Cormorant+Garamond:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

</head>

<body>
    <section class="main-block">
        <div class="main-content">
            <section class="content-block">
                <div class="tastes-block">
                    <div class="tastes-content-text">
                        <h2>Дополните игру яркими вкусами</h2>
                        <p>
                            Боулинг-клуб «Галактика» — это не только игра, но и вкусное дополнение к вашему отдыху. В нашем меню вы найдёте всё: от аппетитного фаст-фуда до изысканных десертов, освежающих коктейлей и подборки вин. Независимо от ваших предпочтений, у нас всегда найдётся идеальное гастрономическое сопровождение к вашей партии в боулинг.
                        </p>
                    </div>
                </div>
            </section>
            
            <div class="foods-main-block">
                <div class="foods-content-block">
                    <div class="foods-slider-block">
                        <div class="arrow-left-block">
                            <div class="arrow-left-container btn-prev">
                                <img src="./images/icons/arrow-left.svg" alt="arrow-left" class="arrow-left-icon"/>
                            </div>
                        </div>
                        
                        <div class="swiper foods-swiper foods">
                            <div class="swiper-wrapper">
                                <figure class="swiper-slide food">
                                    <div class="img-container">
                                        <img src="./images/cocktail.webp" alt="cocktail"/>
                                    </div>
                                </figure>
                                <figure class="swiper-slide food">
                                    <div class="img-container">
                                        <img src="./images/desert.webp" alt="desert"/>
                                    </div>
                                </figure>
                                <figure class="swiper-slide food">
                                    <div class="img-container">
                                        <img src="./images/wine.webp" alt="wine"/>
                                    </div>
                                </figure>
                                <figure class="swiper-slide food">
                                    <div class="img-container">
                                        <img src="./images/cocktail.webp" alt="cocktail"/>
                                    </div>
                                </figure>
                                <figure class="swiper-slide food">
                                    <div class="img-container">
                                        <img src="./images/desert.webp" alt="desert"/>
                                    </div>
                                </figure>
                                <figure class="swiper-slide food">
                                    <div class="img-container">
                                        <img src="./images/wine.webp" alt="wine"/>
                                    </div>
                                </figure>
                            </div>
                        </div>
                        
                        <div class="arrow-right-block">
                            <div class="arrow-right-container btn-next">
                                <img src="./images/icons/arrow-right.svg" alt="arrow-right" class="arrow-right-icon"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
  
            <section class="content-block">                  
                <div class="tastes-block">
                    <div class="restaurant-menu-block">
                        <a class="restaurant-menu-href" href="#">
                            Меню ресторана 
                        </a>
                    </div>
                </div>
                <div class="our-equipment-block">
                    <div class="our-equipment-content-text">
                        <h2>Наше Оборудование</h2>
                        <p>Боулинг-клуб «Галактика»– это космический интерьер,  светящаяся мебель, профессиональное оборудование фирмы  «BRUNSWICK» с призовой системой выигрыша!  Даже самые требовательные игроки по достоинству оценят  качество оборудования!</p>
                    </div>
                    
                    <div class="our-equipment-container">
                        <div class="left-sided-img-block">
                            <div class="equipment-img-container">
                                <img src="./images/prolane.webp" alt="prolane" class="prolane-img"/>
                            </div> 
                            <div class="equipment-content-container">
                                <div class="equipment-name">Дорожки <span class="orange-text">Prolane</span></div>
                                <div class="equipment-description">
                                    <p>Покрытие PRO LANE имеет уникальную разметку, облегчающую прицеливание и позволяющую рассчитать оптимальную траекторию шара.</p>
                                    <p>14 разделительных линий, чередование светло- и темно-бежевых полос, а также уникальная система маркировки для профессиональных игроков.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="right-sided-img-block">  
                            <div class="equipment-content-container">
                                <div class="equipment-name">Автоматические бортики <span class="orange-text">Pinball&nbsp;Wizard</span></div>
                                <div class="equipment-description">
                                    <p>Наличие на дорожках автоматических направляющих бортиков PINBALL&nbsp;Wizard помогает играть даже самым маленьким.</p>
                                    <ul>
                                        <li>Не позволяют шару скатиться в желоб;</li>
                                        <li>Автоматически поднимаются, когда на дорожке играет ребенок и опускаются — когда взрослый;</li>
                                        <li>Не требуют дополнительного оборудования</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="equipment-img-container">
                                <img src="./images/pinball-wizard.webp" alt="pinball wizard" class="pinball-wizard-img"/>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="comfortability-block">
                    <h2>В боулинг-клубе «Галактика» предусмотрено все для приятного времяпрепровождения</h2>
                    <p> 
                        Удобные столики и диваны, где можно отдохнуть между партиями и заказать себе все, что душе угодно: от кофе и расслабляющего коктейля до полноценного ужина из ресторана.<br>
                        Наш персонал обслужит Вас на самом высоком уровне, и об этом отдыхе у Вас останутся самые теплые воспоминания!<br>
                        Наши менеджеры помогут организовать как детский праздник, так и корпоратив учитывая все Ваши пожелания.<br>
                        Дорожки оснащены детскими бортиками, которые позволяют приобщиться к игре всем членам семьи, даже самым маленьким.
                    </p>
                </div>
            </section>
            
            <div class="photogallery">
                <h2>ФОТОГАЛЕРЕЯ</h2>
                <div class="photogallery-container">
                    <img src="./images/eclipse.svg" alt="eclipse" class="eclipse-top"/>
                    <div class="swiper gallery-swiper gallery">
                        <div class="swiper-wrapper">
                            <figure class="swiper-slide gallery-photo">
                                <div class="img-container">
                                    <img src="./images/gallery/img1.webp" alt="img1"/>
                                </div>
                            </figure>
                            <figure class="swiper-slide gallery-photo">
                                <div class="img-container">
                                    <img src="./images/gallery/img2.webp" alt="img2"/>
                                </div>
                            </figure>
                            <figure class="swiper-slide gallery-photo">
                                <div class="img-container">
                                    <img src="./images/gallery/img3.webp" alt="img3"/>
                                </div>
                            </figure>
                            <figure class="swiper-slide gallery-photo">
                                <div class="img-container">
                                    <img src="./images/gallery/img4.webp" alt="img4"/>
                                </div>
                            </figure>
                            <figure class="swiper-slide gallery-photo">
                                <div class="img-container">
                                    <img src="./images/gallery/img5.webp" alt="img5"/>
                                </div>
                            </figure>
                        </div>
                    </div>
                    <img src="./images/eclipse.svg" alt="eclipse" class="eclipse-bottom"/>
                </div>
            </div>
            
            <section class="content-block">
                <div class="details-block">
                    <div class="details-container">
                        <div class="details">
                            Оборудование <br><span class="highlighted-text">Brunswick</span>
                        </div>
                        
                        <div class="details">
                           <span class="highlighted-text">14</span> профессиональных<br></span> <span class="highlighted-text">дорожек</span>
                        </div>
                        
                        <div class="details">
                            Покрытие <br><span class="highlighted-text">PRO LANE</span>
                        </div>
                        
                        <div class="details">
                            <span class="highlighted-text">Детские дорожки</span><br> с облегчёнными шарами
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
</body>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="./js/index.js?v=<?= time(); ?>"></script>
</html>
