<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title>Home</title>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="theme-color" content="#46C691">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php $favicon = get_theme_mod('favicon'); if(!empty($favicon)) { ?> 
  <link rel="shortcut icon" href="<?php echo $favicon; ?>" />
  <?php } ?>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->	


  <svg style="display: none;">

    <!-- <svg class="id-name" width="16" height="16" viewBox="0 0 16 16" fill="#FF5C26">
      <use xlink:href="#id-name"></use> </svg> -->


    <!-- start of Noyon -->
    <symbol id="facebook-icon" width="32" height="32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
      <path d="M18 11V7C18 5.896 18.896 5 20 5H22V0H18C14.686 0 12 2.686 12 6V11H8V16H12V32H18V16H22L24 11H18Z"/>
    </symbol>

    <symbol id="instagram-icon" width="32" height="32" viewBox="0 0 32 32"  xmlns="http://www.w3.org/2000/svg">
      <path d="M22 0H10C4.478 0 0 4.478 0 10V22C0 27.522 4.478 32 10 32H22C27.522 32 32 27.522 32 22V10C32 4.478 27.522 0 22 0ZM29 22C29 25.86 25.86 29 22 29H10C6.14 29 3 25.86 3 22V10C3 6.14 6.14 3 10 3H22C25.86 3 29 6.14 29 10V22Z"/>
      <path d="M16 8C11.582 8 8 11.582 8 16C8 20.418 11.582 24 16 24C20.418 24 24 20.418 24 16C24 11.582 20.418 8 16 8ZM16 21C13.244 21 11 18.756 11 16C11 13.242 13.244 11 16 11C18.756 11 21 13.242 21 16C21 18.756 18.756 21 16 21Z"/>
      <path d="M24.6002 8.46598C25.1889 8.46598 25.6662 7.98872 25.6662 7.39998C25.6662 6.81125 25.1889 6.33398 24.6002 6.33398C24.0114 6.33398 23.5342 6.81125 23.5342 7.39998C23.5342 7.98872 24.0114 8.46598 24.6002 8.46598Z"/>
    </symbol>

    <symbol id="messenger-icon" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <g clip-path="url(#clip0_1582_924)">
        <path d="M4.61079 24C4.26105 24 3.91279 23.9037 3.60261 23.7118C3.0326 23.3597 2.69257 22.7494 2.69257 22.0793V19.2668C0.685548 16.724 -0.181824 13.5485 0.248292 10.29C0.937868 5.06196 5.23481 0.776915 10.4647 0.101804C14.1484 -0.374088 17.7644 0.833311 20.3894 3.41254C23.0146 5.99177 24.2848 9.58339 23.875 13.2669C23.2812 18.6015 18.9734 22.9902 13.6328 23.7027C11.5036 23.985 9.3503 23.6902 7.37477 22.8441L5.47028 23.7957C5.19746 23.9319 4.90339 24 4.61079 24ZM10.6822 1.78912C6.20381 2.36719 2.52466 6.0359 1.93378 10.5125C1.5531 13.3999 2.35657 16.2091 4.19678 18.4214C4.32368 18.5741 4.39307 18.7667 4.39307 18.9652V22.0793C4.39307 22.1796 4.44965 22.2353 4.49653 22.2653C4.54468 22.2942 4.62067 22.3191 4.71003 22.2743L6.97523 21.1425C7.20704 21.0262 7.48097 21.0222 7.71681 21.1333C9.49898 21.9696 11.4661 22.2752 13.4076 22.017C17.9848 21.4065 21.6759 17.6474 22.1849 13.0792C22.5367 9.91792 21.4475 6.83625 19.1972 4.6258C16.9472 2.41443 13.8437 1.3797 10.6822 1.78912ZM10.5734 0.945372H10.5817H10.5734Z" />
        <path d="M6.13603 14.5942L10.0395 9.03861C10.2021 8.75406 10.5771 8.67661 10.8391 8.87308L13.454 10.8341C13.6313 10.9671 13.8711 10.9793 14.061 10.8655L17.2452 8.61472C17.7125 8.33438 18.2561 8.83792 18.0126 9.32535L14.8603 14.7795C14.7184 15.0633 14.365 15.1662 14.0929 15.0029L10.602 12.9084C10.4423 12.8126 10.2447 12.8049 10.0781 12.8882L6.85233 15.3514C6.37058 15.5925 5.86869 15.0621 6.13603 14.5942Z" />
      </g>
      <defs>
        <clipPath id="clip0_1582_924">
          <rect width="24" height="24" />
        </clipPath>
      </defs>
    </symbol>

    <symbol id="ftr-mail-icon" width="24" height="20" viewBox="0 0 24 20" xmlns="http://www.w3.org/2000/svg">
      <path d="M21.0488 0H2.9512C2.16875 0.000847043 1.4186 0.312051 0.865322 0.865331C0.312048 1.41861 0.000847034 2.16878 0 2.95123V16.249C0.000847034 17.0314 0.312048 17.7816 0.865322 18.3349C1.4186 18.8881 2.16875 19.1993 2.9512 19.2002H21.0488C21.8312 19.1993 22.5814 18.8881 23.1347 18.3349C23.688 17.7816 23.9992 17.0314 24 16.249V2.95123C23.9992 2.16878 23.688 1.41861 23.1347 0.865331C22.5814 0.312051 21.8312 0.000847043 21.0488 0ZM2.9512 1.60002H21.0488C21.407 1.60044 21.7505 1.74294 22.0038 1.99625C22.2571 2.24956 22.3996 2.593 22.4 2.95123V3.56324L12 10.2489L1.6 3.56324V2.95123C1.60042 2.593 1.74292 2.24956 1.99622 1.99625C2.24953 1.74294 2.59297 1.60044 2.9512 1.60002ZM21.0488 17.6002H2.9512C2.59297 17.5998 2.24953 17.4573 1.99622 17.2039C1.74292 16.9506 1.60042 16.6072 1.6 16.249V5.46566L11.5672 11.8729C11.6963 11.956 11.8465 12.0001 12 12.0001C12.1535 12.0001 12.3037 11.956 12.4328 11.8729L22.4 5.46566V16.249C22.3996 16.6072 22.2571 16.9506 22.0038 17.2039C21.7505 17.4573 21.407 17.5998 21.0488 17.6002Z"/>
    </symbol>

    <symbol id="right-arrow-icon" width="14" height="14" viewBox="0 0 14 14"  xmlns="http://www.w3.org/2000/svg">
      <path d="M0.841476 6.01717C0.898761 6.00787 0.956734 6.00358 1.01474 6.00434H10.8915L10.6761 5.90417C10.4656 5.80453 10.2741 5.66893 10.1101 5.50349L7.34046 2.73381C6.97569 2.3856 6.91439 1.82543 7.19521 1.40657C7.52205 0.96022 8.14882 0.863306 8.5952 1.19014C8.63126 1.21656 8.66554 1.24536 8.69775 1.27635L13.7062 6.28481C14.0976 6.67578 14.098 7.31001 13.707 7.70142C13.7067 7.70167 13.7065 7.70195 13.7062 7.7022L8.69775 12.7107C8.30603 13.1013 7.6718 13.1004 7.28114 12.7087C7.2504 12.6779 7.22169 12.6451 7.19521 12.6105C6.91439 12.1916 6.97569 11.6315 7.34046 11.2833L10.1051 8.50857C10.2521 8.36144 10.4211 8.23808 10.606 8.14295L10.9065 8.00772H1.06986C0.558153 8.02672 0.109207 7.66927 0.0130758 7.1663C-0.0754805 6.62022 0.295397 6.10576 0.841476 6.01717Z" />
    </symbol>


    <!-- start of Kashob -->
    <symbol id="play-icon" width="70" height="70" viewBox="0 0 70 70" xmlns="http://www.w3.org/2000/svg">
      <path d="M35 0C15.6702 0 0 15.6702 0 35C0 54.3298 15.6702 70 35 70C54.3312 70 70 54.3298 70 35C70 15.6702 54.3312 0 35 0ZM35 63C19.5608 63 7 50.4392 7 35C7 19.5608 19.5608 7 35 7C50.4392 7 63 19.5608 63 35C63 50.4392 50.4392 63 35 63Z" fill="white"/>
      <path d="M47.7302 32.5496L30.7565 22.7496C28.4227 21.4028 26.5132 22.5046 26.5132 25.1996V44.7996C26.5132 47.4946 28.4227 48.5978 30.7565 47.2496L47.7302 37.4496C50.064 36.1028 50.064 33.8964 47.7302 32.5496Z"/>
    </symbol>


    <!-- start of Momin -->


    <!-- Shariful -->

    <symbol id="right-arrow-svg" width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
      <path d="M0.841476 6.01729C0.898761 6.008 0.956734 6.00371 1.01474 6.00446H10.8915L10.6761 5.90429C10.4656 5.80465 10.2741 5.66905 10.1101 5.50361L7.34046 2.73393C6.97569 2.38572 6.91439 1.82555 7.19521 1.40669C7.52205 0.960342 8.14882 0.863428 8.5952 1.19026C8.63126 1.21668 8.66554 1.24548 8.69775 1.27647L13.7062 6.28493C14.0976 6.6759 14.098 7.31013 13.707 7.70154C13.7067 7.70179 13.7065 7.70208 13.7062 7.70233L8.69775 12.7108C8.30603 13.1014 7.6718 13.1005 7.28114 12.7088C7.2504 12.678 7.22169 12.6452 7.19521 12.6106C6.91439 12.1918 6.97569 11.6316 7.34046 11.2834L10.1051 8.50869C10.2521 8.36157 10.4211 8.2382 10.606 8.14307L10.9065 8.00784H1.06986C0.558153 8.02684 0.109207 7.6694 0.0130758 7.16642C-0.0754805 6.62034 0.295397 6.10588 0.841476 6.01729Z"/>
    </symbol>

    <symbol id="plan-svg" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
      <path d="M18 2.16911C18 1.58446 17.7739 1.03725 17.3628 0.626129C16.542 -0.19611 15.0991 -0.193965 14.2775 0.626129L10.6819 4.22112L1.96259 2.84447C1.84883 2.82502 1.73362 2.86317 1.65156 2.94526L0.62053 3.97629C0.535557 4.06127 0.498115 4.18294 0.522619 4.30103C0.546385 4.41912 0.627034 4.51774 0.737917 4.56383L7.53981 7.36393L4.48556 10.4182C4.43659 10.4664 4.39197 10.5175 4.34947 10.5701H1.39091C1.29515 10.5701 1.20371 10.6082 1.13603 10.6752L0.104996 11.7063C0.0149952 11.7963 -0.0202668 11.9266 0.0114092 12.0497C0.0430852 12.1728 0.135969 12.2701 0.258383 12.3061L4.45097 13.5394L5.68362 17.7313C5.71888 17.853 5.81609 17.9473 5.93921 17.9783C5.96874 17.9862 5.99898 17.9898 6.02847 17.9898C6.1228 17.9898 6.21494 17.9524 6.28336 17.8839L7.31369 16.8536C7.38136 16.7859 7.41954 16.6945 7.41954 16.5987V13.6402C7.4721 13.5978 7.52322 13.5524 7.57219 13.5034L10.6257 10.4499L13.4258 17.2511C13.4719 17.3626 13.5706 17.4433 13.6886 17.4671C13.8067 17.4901 13.9291 17.4541 14.0134 17.3684L15.0444 16.3381C15.1258 16.256 15.1632 16.1408 15.1452 16.027L13.7678 7.30709L17.3628 3.71209C17.7739 3.30168 18 2.75376 18 2.16911Z"/>
    </symbol>

    <symbol id="blog-btn-arrow-svg" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
      <path d="M16.1969 8.94422H14.9256C14.6623 8.94422 14.4489 9.15767 14.4489 9.42095V15.2171C14.4489 15.5248 14.1985 15.7751 13.8908 15.7751H2.78253C2.47494 15.7751 2.22475 15.5248 2.22475 15.2171V4.10901C2.22475 3.8013 2.47494 3.55092 2.78253 3.55092H8.87548C9.13876 3.55092 9.35221 3.33747 9.35221 3.07419V1.8029C9.35221 1.53962 9.13876 1.32617 8.87548 1.32617H2.78253C1.24821 1.32617 0 2.57457 0 4.10901V15.2172C0 16.7516 1.24828 17.9999 2.78253 17.9999H13.8908C15.4252 17.9999 16.6735 16.7516 16.6735 15.2172V9.42102C16.6736 9.15767 16.4602 8.94422 16.1969 8.94422Z"/>
      <path d="M17.5229 0H12.4662C12.2029 0 11.9895 0.213449 11.9895 0.476732V1.74802C11.9895 2.0113 12.2029 2.22475 12.4662 2.22475H14.2018L7.67088 8.75553C7.48471 8.94171 7.48471 9.24352 7.67088 9.42976L8.56981 10.3287C8.65924 10.4182 8.78046 10.4684 8.90695 10.4684C9.03338 10.4684 9.15466 10.4182 9.24403 10.3287L15.7749 3.79784V5.53333C15.7749 5.79662 15.9884 6.01006 16.2517 6.01006H17.5229C17.7862 6.01006 17.9997 5.79662 17.9997 5.53333V0.476732C17.9997 0.213449 17.7862 0 17.5229 0Z"/>
    </symbol>

    <symbol id="plan-2-svg" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
      <path d="M18 2.16916C18 1.58451 17.7739 1.0373 17.3628 0.626183C16.542 -0.196056 15.0991 -0.193912 14.2775 0.626183L10.6819 4.22118L1.96259 2.84452C1.84883 2.82508 1.73362 2.86322 1.65156 2.94531L0.62053 3.97635C0.535557 4.06132 0.498115 4.183 0.522619 4.30109C0.546385 4.41918 0.627034 4.51779 0.737917 4.56388L7.53981 7.36399L4.48556 10.4182C4.43659 10.4665 4.39197 10.5176 4.34947 10.5702H1.39091C1.29515 10.5702 1.20371 10.6083 1.13603 10.6753L0.104996 11.7063C0.0149952 11.7963 -0.0202668 11.9267 0.0114092 12.0498C0.0430852 12.1729 0.135969 12.2701 0.258383 12.3061L4.45097 13.5395L5.68362 17.7313C5.71888 17.853 5.81609 17.9473 5.93921 17.9783C5.96874 17.9862 5.99898 17.9899 6.02847 17.9899C6.1228 17.9899 6.21494 17.9524 6.28336 17.884L7.31369 16.8537C7.38136 16.786 7.41954 16.6945 7.41954 16.5988V13.6403C7.4721 13.5978 7.52322 13.5524 7.57219 13.5035L10.6257 10.45L13.4258 17.2511C13.4719 17.3627 13.5706 17.4433 13.6886 17.4671C13.8067 17.4901 13.9291 17.4541 14.0134 17.3685L15.0444 16.3381C15.1258 16.256 15.1632 16.1408 15.1452 16.0271L13.7678 7.30714L17.3628 3.71215C17.7739 3.30173 18 2.75382 18 2.16916Z"/>
    </symbol>

    <symbol id="btm-arrow-svg" width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
      <path d="M7.98234 0.841476C7.99164 0.898761 7.99593 0.956734 7.99518 1.01474L7.99518 10.8915L8.09535 10.6761C8.19498 10.4656 8.33059 10.2741 8.49602 10.1101L11.2657 7.34046C11.6139 6.97569 12.1741 6.91439 12.5929 7.19521C13.0393 7.52205 13.1362 8.14882 12.8094 8.5952C12.783 8.63126 12.7542 8.66554 12.7232 8.69775L7.7147 13.7062C7.32373 14.0976 6.6895 14.098 6.29809 13.707C6.29784 13.7067 6.29756 13.7065 6.29731 13.7062L1.28885 8.69775C0.898218 8.30603 0.899094 7.6718 1.29082 7.28114C1.32165 7.2504 1.35446 7.22169 1.38902 7.19521C1.80788 6.91439 2.36804 6.97568 2.71626 7.34046L5.49095 10.1051C5.63807 10.2521 5.76143 10.4211 5.85656 10.606L5.99179 10.9065L5.99179 1.06986C5.97279 0.558153 6.33024 0.109207 6.83321 0.0130758C7.37929 -0.0754805 7.89375 0.295397 7.98234 0.841476Z"/>
    </symbol>



  </svg>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php 
  $topbartekst = get_field('topbartekst', 'options');
  $logoObj = get_field('hdlogo', 'options');
  if( is_array($logoObj) ){
    $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
  }else{
    $logo_tag = '';
  }
?>  
<div class="page-body-cntlr">
<?php if( is_front_page() && $topbartekst ): ?>
  <section class="home-messege d-none">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="home-messege-inr">
            <?php if( !empty($topbartekst) ) echo wpautop( $topbartekst  ); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
  <div class="hamburgar-cntlr show-md">
    <div class="hamburger-icon">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <div class="bdoverlay"></div>
  <header class="header">
    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="header-inr clearfix">
              <div class="hdr-lft">
                <div class="logo hide-md">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                  <?php echo $logo_tag; ?>
                </a>
                </div>
                <div class="logo xs-logo show-md">
                  <a href="<?php echo esc_url(home_url('/')); ?>">
                    <?php echo $logo_tag; ?>
                  </a>
                </div>
              </div>
              <div class="hdr-menu hide-md">
                <nav class="main-nav">
                <?php 
                  $mmenuOptions = array( 
                      'theme_location' => 'cbv_main_menu', 
                      'menu_class' => 'clearfix reset-list',
                      'container' => '',
                      'container_class' => ''
                    );
                  wp_nav_menu( $mmenuOptions ); 
                ?>
                </nav>
              </div>
              <div class="hdr-rgt-cntlr hide-md">
                <div class="hdr-rgt">
                  <div class="hdr-lang-cntlr">
                    <div class="hdr-language">
                      <div class="fl-lang reset-slect">
                        <div class="fl-lang-cntlr">
                          <ul class="reset-list">
                            <li class="lang-active"><a href="#">Nl</a></li>
                            <li><a href="#">fr</a></li>
                            <li><a href="#">en</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="hdr-btns">
                    <ul class="reset-list">
                      <li><a class="fl-tc-btn" href="#">Nu boeken</a></li>
                      <li><a class="fl-tc-btn tc-transparent-btn" href="#">Mijn boeking</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </header>


  <div class="xs-mobile-menu">
    <div class="xs-pop-up-menu-top">
      <div class="logo">
        <a href="#"><img src="<?php echo THEME_URI; ?>/assets/images/logo.png"></a>
      </div>
    </div>
    <div class="xs-menu">
      <div class="hdr-menu">
        <nav class="main-nav">
          <?php 
            $menuOptions = array( 
                'theme_location' => 'cbv_mobile_main_menu', 
                'menu_class' => 'reset-list clearfix',
                'container' => '',
                'container_class' => ''
              );
            wp_nav_menu( $menuOptions ); 
          ?>
        </nav>
      </div>
      <div class="hdr-rgt-cntlr">
        <div class="hdr-rgt">
          <div class="hdr-lang-cntlr">
            <div class="hdr-language">
              <div class="fl-lang reset-slect">
                <div class="fl-lang-cntlr">
                  <ul class="reset-list">
                    <li class="lang-active"><a href="#">Nl</a></li>
                    <li><a href="#">EN</a></li>
                    <li><a href="#">CN</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="hdr-btns">
            <ul class="reset-list">
              <li><a class="fl-tc-btn" href="#">Nu boeken</a></li>
              <li><a class="fl-tc-btn tc-transparent-btn" href="#">Mijn boeking</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="xs-hdr-social-media">
        <div class="hdr-social-media">
          <ul class="reset-list">
            <li><a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a target="_blank" href="#"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>


  <!-- end of header -->