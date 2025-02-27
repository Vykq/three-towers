<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
<?php
$button = array();
$button['title'] = __('Let\'s Collaborate', 'tt');
$button['url'] = '#';
?>
<header class="header">
    <div class="header__container">
        <div class="header__grid">
            <div class="header__logo">
                <a href="<?php echo get_home_url(); ?>" class="logo-link">
                    <svg width="136" height="40" viewBox="0 0 136 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.829 1.41057V12.4896L14.9957 12.9246H19.772V1.39338L17.4683 0L17.3501 0.00371238L17.2319 0.00756228L14.829 1.41057ZM0 9.91273V30.0607L0.892488 30.5144L6.79664 33.8666L7.75778 34.4806L10.3666 35.9804L12.2889 37.0247L12.7008 37.3705L17.2319 39.9043L17.3935 40L18.6172 39.2502L22.3122 37.1338L24.0972 36.1241L27.9417 33.8581L31.2371 32.0023L31.649 31.6614L33.7713 30.5147L34.5993 30.0428L34.6011 9.91317L29.864 7.2441L29.7267 27.0872L27.3925 28.5045L24.7837 29.9741L24.713 12.7808L19.8407 12.8559L19.7034 32.949H19.7105L17.5065 34.2266L17.0883 34.2365V34.2266L14.829 32.949V12.7808L9.95467 12.8559L9.88396 29.8366H9.6607L5.56088 27.4657L4.94658 27.1554L4.87436 7.2441L0 9.91273Z" fill="#F1F4FE"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M49.0761 10.1581H53.7445V22.5413L56.9712 22.4639L57.0427 10.1581H61.7082V6.99565H49.0761V10.1581ZM67.5437 22.4639H70.8391L70.9129 16.3454H77.2238V22.5413L80.4505 22.4639L80.5215 6.99565H77.229L77.1551 13.1142L70.9077 13.1882V6.99565H67.4727L67.5437 22.4639ZM87.3844 22.5412L90.7484 22.4639L90.8232 17.4453L93.3572 17.4526L96.7219 22.5327H100.412L100.59 22.2452L99.1013 20.264L98.7738 19.6501L96.9958 17.1347V16.9506L98.0205 16.5795L99.3987 15.1608L100.02 13.9021L100.316 12.3007L100.126 10.7816L99.6024 9.37997L98.6454 8.26034L97.4088 7.53463L95.3042 6.99565H87.3844V22.5412ZM106.401 22.4639H118.072L118.15 19.5078H109.765V16.2079H117.042V13.183H109.765V10.0206H118.004V6.99565H106.33L106.401 22.4639ZM124.32 22.5357L135.922 22.4639L136 19.5078H127.615V16.2079H134.892V13.183H127.615V10.0206H135.991V6.99565H124.32V22.5357ZM95.6303 10.3105L96.5805 11.146L96.8941 12.194L96.6984 13.2381L95.6852 14.2527L94.593 14.5564L90.8171 14.5579V10.0206L94.593 10.0221L95.6303 10.3105ZM67.1773 28.9789L67.2716 29.4762L68.5735 29.5601V32.9824H69.5347V29.5601L70.8391 29.4762V28.6512L67.3323 28.5742L67.1773 28.9789ZM77.0178 28.7592L76.2565 29.2931L75.6831 30.4185L75.8071 31.7097L76.4229 32.5758L77.3946 32.9824H78.7654L79.7887 32.4064L80.3022 31.5386L80.3034 30.1526L79.7487 29.2014L78.6655 28.587L77.4297 28.6042L77.0178 28.7592ZM85.18 28.9262L86.6101 32.9824H87.4779L88.426 30.2185L89.3753 32.9136L90.1694 33.0044L90.4047 32.6386L91.6409 28.8745V28.565L90.7484 28.6512L89.7577 31.5378L88.9986 29.0637L88.7962 28.6512H88.0405L87.3889 30.4387L87.3844 30.7645L87.0904 31.5386L86.8503 31.109L86.268 28.9327L85.9777 28.5825H85.1875L85.18 28.9262ZM96.9958 32.9824H100.291V32.1681L97.8883 32.0886V31.2637L99.8792 31.1828V30.5195L97.8883 30.4387V29.6137L100.17 29.5335L100.085 28.6512L96.9958 28.5734V32.9824ZM105.738 28.6742L105.646 28.7658V32.9824H106.607V31.6074L107.362 31.6129L108.174 32.9824H109.216V32.8256L108.362 31.5828L109.216 30.7006V29.6061L108.768 28.966L107.852 28.5825H105.829L105.738 28.6742ZM114.571 29.2944V30.4934L115.463 31.1488L116.645 31.4853L116.804 31.9008L116.506 32.1996L115.648 32.1751L114.96 31.7233L114.434 32.2V32.5662L115.428 32.9824H116.884L117.729 32.2704V31.3936L117.31 30.7947L115.674 30.1972L115.352 29.8083L115.657 29.5028L116.476 29.5261L117.093 29.8565L117.592 29.2394V29.0248L116.488 28.5825H115.416L114.571 29.2944ZM79.2736 30.2602L79.4406 30.7867L79.1322 31.7223L78.4691 32.1574H77.5595L76.9871 31.7559L76.6353 30.9056L76.9474 29.8627L77.567 29.5635L78.5594 29.545L79.2736 30.2602ZM108.317 29.9306L108.044 30.7137L106.607 30.7969V29.545H107.791L108.317 29.9306ZM49.2134 31.3324H61.7082V30.3699H49.2134V31.3324ZM123.221 31.3324H135.853V30.3699H123.221V31.3324Z" fill="#F1F4FE"/>
                    </svg>
                </a>
            </div>
            <div class="header__menu">
                <nav class="menu-items-header">
                    <a href="#services"><?php _e('Services','tt'); ?></a>
                    <a href="#incubations"><?php _e('Incubations','tt'); ?></a>
                    <a href="#investors"><?php _e('Investors','tt'); ?></a>
                    <a href="#contact-us"><?php _e('Contact us','tt'); ?></a>
                </nav>
            </div>
            <div class="header__button-area">
                <?php echo get_template_part('components/button','',['button' => $button]); ?>
            </div>
            <div class="header__mobile-menu-button">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path class="mid-line" d="M5 12H20" stroke="#ffffff" stroke-width="2" stroke-linecap="round"></path>
                        <path class="last-line" d="M5 17H20" stroke="#ffffff" stroke-width="2" stroke-linecap="round"></path>
                        <path class="top-line" d="M5 7H20" stroke="#ffffff" stroke-width="2" stroke-linecap="round"></path>
                    </g>
                </svg>
            </div>
        </div>
    </div>
    <div class="header__mobile-modal ">
        <div class="header__mobile-modal__wrapper">

            <nav class="menu-items-header">
                <a class="menu-item" href="#services"><?php _e('Services','tt'); ?></a>
                <a class="menu-item" href="#incubations"><?php _e('Incubations','tt'); ?></a>
                <a class="menu-item" href="#investors"><?php _e('Investors','tt'); ?></a>
                <a class="menu-item" href="#contact-us"><?php _e('Contact us','tt'); ?></a>
                <a class="menu-item--custom" href="#collaborate"><?php _e('Let\'s Collaborate','tt'); ?></a>
            </nav>

        </div>
    </div>

</header>
<main>
