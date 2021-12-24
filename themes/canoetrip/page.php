<?php get_header(); ?>
  <section class="breadcrumb-sec hide-sm">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="breadcrumb-cntlr">
            <ul class="reset-list clearfix">
              <li>
                <a href="<?php echo esc_url(home_url('/')); ?>">
                  <span><?php _e('Home', 'canoetrip'); ?></span>
                </a>
              </li>
              <li class="active">
                <span><?php the_title(); ?></span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</section>

  <section class="innerpage-con-wrap">
    <?php if( have_rows('inhoud') ){ ?>
    <article class="default-page-con"> 
      <?php while ( have_rows('inhoud') ) : the_row(); ?>
      <?php 
        if( get_row_layout() == 'introductietekst' ){ 
        $fc_titel = get_sub_field('fc_titel');
        $fc_afbeelding = get_sub_field('fc_afbeelding');
      ?>
      <div class="block">
        <div class="dfp-promo-module">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="block-800">
                  <div class="dfp-promo-module-des">
                    <?php if( !empty($fc_titel) ) printf('<strong class="dfp-promo-module-title fl-h2">%s</strong>', $fc_titel); ?>
                  </div>
                  <?php if( !empty($fc_afbeelding) ): ?>
                  <div class="dfp-plate-one-img-bx">
                    <?php echo cbv_get_image_tag($fc_afbeelding); ?>
                  </div>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php 
    }elseif( get_row_layout() == 'teksteditor' ){ 
    $fc_tekst = get_sub_field('fc_teksteditor');
    ?>
      <div class="block">
        <div class="dfp-text-module">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="block-800">
                  <?php echo wpautop($fc_tekst); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php 
        }elseif( get_row_layout() == 'full_afbeelding' ){ 
        $fcafbeelding = get_sub_field('fc_afbeelding');
        $affbeelding_tag = !empty($fcafbeelding)?cbv_get_image_tag($fcafbeelding):'';
      ?>

      <div class="block">
        <div class="dfp-full-width-img-module">
            <div class="full-img">
              <img src="<?php echo THEME_URI; ?>/assets/images/dfp-img-04.jpg" alt="">
              <div class="inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/dfp-img-04.jpg);"></div>
            </div>
        </div>
      </div>
      <?php 
        }elseif( get_row_layout() == 'blok_afbeelding' ){ 
        $fcafbeelding = get_sub_field('fc_afbeelding');
        $affbeelding_src = !empty($fcafbeelding)?cbv_get_image_src($fcafbeelding):'';
        $affbeelding_tag = !empty($fcafbeelding)?cbv_get_image_tag($fcafbeelding):'';
      ?>
      <div class="block">
        <div class="dfp-full-img-module">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="full-img">
                  <?php echo $affbeelding_tag; ?>
                  <div class="inline-bg" style="background-image: url(<?php echo $affbeelding_src; ?>);"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php }elseif( get_row_layout() == 'afbeelding_afbeelding' ){ 
        $afbeelding_1 = get_sub_field('fc_afbeelding_1');
        $afbeelding_2 = get_sub_field('fc_afbeelding_2');
      ?>
      <div class="block">
        <div class="dfp-gallery-module">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="block-800">
                  <div class="gallery-wrap has-inline-bg clearfix">                    
                    <div class="gallery gallery-columns-2 gallerySlider">
                      <?php if( !empty($afbeelding_1) ): ?>
                      <figure class="gallery-item">
                        <div class="gallery-icon portrait">
                          <div class="gallery-icon-img inline-bg" style="background: url('<?php echo cbv_get_image_src($afbeelding_1); ?>');"></div>
                          <?php echo cbv_get_image_tag($afbeelding_1); ?>
                        </div>
                      </figure>
                      <?php endif; ?>
                      <?php if( !empty($afbeelding_2) ): ?>
                      <figure class="gallery-item">
                        <div class="gallery-icon portrait">
                          <div class="gallery-icon-img inline-bg" style="background: url('<?php echo cbv_get_image_src($afbeelding_2); ?>');"></div>
                          <?php echo cbv_get_image_tag($afbeelding_2); ?>
                        </div>
                      </figure>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php }elseif( get_row_layout() == 'fc_usps' ){ 
        $fc_usps = get_sub_field('usps');
      ?>
      <div class="block hide-sm">
        <div class="dfp-phasellus-grd-module">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="dfp-phasellus-grd-cntlr">
                  <div class="phasellus-grds phasellusSlider">
                    <?php 
                    foreach( $fc_usps as $usp ): 
                    $uspknop = $usp['knop'];
                    ?>
                    <div class="phasellus-grd">
                      <div class="phasellus-grd-inr">
                        <div class="phasellus-grd-img-ctlr has-inline-bg">
                          <?php if( !empty($uspknop) ) printf('<a href="%s" class="overlay-link"></a>', $uspknop); ?>
                          <div class="phasellus-grd-img inline-bg" style="background-image:url('<?php echo !empty($usp['afbeelding'])?cbv_get_image_src($usp['afbeelding']):''; ?>');">
                            <?php echo !empty($usp['afbeelding'])?cbv_get_image_tag($usp['afbeelding']):''; ?>
                          </div>
                          <div class="phasellus-grd-item-img">
                            <?php echo !empty($usp['afbeelding'])?cbv_get_image_tag($usp['afbeelding']):''; ?>
                          </div>
                        </div>
                        <div class="phasellus-grd-des mHc">
                          <h3 class="phasellus-grd-des-title mHc1">
                            <?php 
                              if( !empty($uspknop) ) printf('<a href="%s">', $uspknop);
                              if( !empty($usp['titel']) ) printf('%s', $usp['titel']);
                              if( !empty($uspknop) ) printf('</a>');
                            ?>
                          </h3>
                        </div>
                      </div>
                    </div>
                    <?php endforeach; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php }elseif( get_row_layout() == 'fc_features' ){ 
        $fc_features = get_sub_field('features');
      ?>
      <div class="block hide-sm">
        <div class="dfp-info-pagine-fea-module">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="block-800">
                  <div class="dfp-info-pagine-fea-cntlr">
                    <div class="info-pagine-fea">
                      <ul class="reset-list">
                        <?php foreach( $fc_features as $plan ): ?>
                        <li>
                          <div class="info-pagine-fea-item">
                            <div class="info-pagine-fea-img">
                              <i><?php echo !empty($plan['icon'])?cbv_get_image_tag($plan['icon']):''; ?></i>
                            </div>
                            <div class="info-pagine-fea-des">
                              <?php 
                                if( !empty($plan['label']) ) printf('<span>%s:</span>', $plan['label']);
                                if( !empty($plan['text']) ) printf('<strong>%s</strong>', $plan['text']);
                              ?>
                            </div>
                          </div>
                        </li>
                        <?php endforeach; ?>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php 
      }elseif( get_row_layout() == 'afbeelding_tekst' ){ 
      $fc_afbeelding = get_sub_field('fc_afbeelding');
      $imgsrc = cbv_get_image_src($fc_afbeelding);
      $imgtag = cbv_get_image_tag($fc_afbeelding);
      $fc_tekst = get_sub_field('fc_tekst');
      $fc_video_url = get_sub_field('video_url');
      $is_show_mb_tekst = get_sub_field('show_mobiel');
      $mfc_toptekst = get_sub_field('fc_top_tekst');
      $mfc_btmtekst = get_sub_field('fc_btm_tekst');
      $positie_afbeelding = get_sub_field('positie_afbeelding');
      $imgposcls = ( $positie_afbeelding == 'right' ) ? ' fl-dft-rgtimg-lftdes' : '';
      ?>
      <div class="block">
        <div class="fl-dft-overflow-module">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="fl-dft-lftimg-rgtdes clearfix<?php echo $imgposcls; ?>">
                  <?php if( !empty($mfc_btmtekst) && ( $is_show_mb_tekst == 'yes') ){ ?>
                  <div class="fl-dft-desktop-des-1 show-sm">
                    <?php echo wpautop($mfc_btmtekst); ?>
                  </div>
                  <?php } ?>
                  <div class="fl-dft-lftimg-rgtdes-lft">
                    <div class="fl-fancy-module" >
                      <div class="fl-fancy-img inline-bg" style="background-image: url(<?php echo $imgsrc; ?>);"></div>
                      <?php echo $imgtag; ?>
                      <?php if( !empty($fc_video_url) ){ ?>
                      <a class="overlay-link" data-fancybox href="<?php echo $fc_video_url; ?>"></a>
                      <span class="fl-video-play-cntlr">
                        <i>
                          <svg class="play-icon" width="70" height="70" viewBox="0 0 70 70" fill="#fff">
                            <use xlink:href="#play-icon"></use> 
                          </svg>
                        </i>
                      </span>
                      <?php } ?>
                    </div>
                  </div>
                  <div class="fl-dft-lftimg-rgtdes-rgt">
                    <div class="fl-dft-desktop-des-2 hide-sm">
                      <?php echo wpautop($fc_tekst); ?>
                    </div>
                    <div class="fl-dft-desktop-des-3 show-sm">
                      <?php
                        if( !empty($mfc_btmtekst) && ( $is_show_mb_tekst == 'yes') ){
                            echo wpautop($mfc_btmtekst); 
                        }else{
                          echo wpautop($fc_tekst); 
                        }
                      ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php }elseif( get_row_layout() == 'fc_estemming' ){ 
        $bestemmobj = get_sub_field('select_bestemming');
        if( empty($bestemmobj) ){
            $bestemmobj = get_posts( array(
              'post_type' => 'bestemming',
              'posts_per_page'=> 3,
              'orderby' => 'date',
              'order'=> 'desc',
              'suppress_filters' => false
            ) );  
        } 
      ?>
      <div class="block">
        <div class="dfp-destination-grid-module">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="dfp-destination-grid-module-cntlr">
                  <?php if( $bestemmobj ): ?>
                  <div class="destination-grds destinationSlider">
                    <?php 
                    foreach( $bestemmobj as $bestem_row ): 
                      $imgID = get_post_thumbnail_id($bestem_row->ID);
                      $imgsrc = !empty($imgID)? cbv_get_image_src($imgID): bestemming_placeholder();
                      $imgtag = !empty($imgID)? cbv_get_image_tag($imgID): bestemming_placeholder('tag');
                      $overview = get_field('overview', $bestem_row->ID);
                    ?>
                    <div class="destination-grd">
                      <div class="destination-grd-inr">
                        <div class="destination-grd-img-ctlr has-inline-bg">
                          <a href="<?php echo get_the_permalink($bestem_row->ID); ?>" class="overlay-link"></a>
                          <div class="destination-grd-img inline-bg" style="background-image:url('<?php echo $imgsrc; ?>');">
                            <?php echo $imgtag; ?>
                          </div>
                          <div class="destination-grd-item-img">
                            <?php echo $imgtag; ?>
                          </div>
                        </div>
                        <div class="destination-grd-des">
                          <div class="destination-grd-des-inr">
                            <h4 class="destination-grd-des-sub-title fl-h6 show-sm">Leo ac quam</h4>
                            <h3 class="destination-grd-des-title fl-h3 mHc"><a href="<?php echo get_the_permalink($bestem_row->ID); ?>"><?php echo get_the_title($bestem_row->ID); ?></a></h3>
                            <div class="destination-date-price">
                              <?php if( !empty($overview['datum']) ) printf('<div class="destination-date"><strong>%s</strong></div>', $overview['datum']); ?>
                              <?php if( !empty($overview['prijs']) ): ?>
                              <div class="destination-from">
                                <i>
                                  <svg class="plan-svg" width="18" height="18" viewBox="0 0 18 18" fill="#DEEDE6">
                                    <use xlink:href="#plan-svg"></use> </svg>
                                </i>
                                <strong><?php _e('from', 'canoetrip'); ?></strong>
                              </div>
                              <?php printf('<div class="destination-price"><strong>€%s</strong></div>', $overview['prijs']); ?>
                              <?php endif; ?>
                            </div>
                            <div class="destination-btn">
                              <a class="fl-text-btn" href="<?php echo get_the_permalink($bestem_row->ID); ?>">
                                <?php _e('Find out more', 'canoetrip'); ?>
                                <i><svg class="right-arrow-svg" width="14" height="14" viewBox="0 0 14 14" fill="#46C691">
                                  <use xlink:href="#right-arrow-svg"></use> 
                                </svg></i>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php endforeach; ?>
                  </div>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php }elseif( get_row_layout() == 'fc_weekly' ){ 
        $fc_titel = get_sub_field('fc_titel');
        $fc_tekst = get_sub_field('fc_tekst');
        $weeklyp = get_sub_field('weekly_plans');
      ?>
      <div class="block hide-sm">
        <div class="dfp-blog-sec-module">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="dfp-blog-sec-cntlr">
                  <div class="sec-entry-hdr">
                  <?php 
                    if( !empty($fc_titel) ) printf( '<h2 class="fl-h3 sec-entry-hdr-title">%s</h2>', $fc_titel ); 
                    if( !empty($fc_tekst) ) echo wpautop($fc_tekst); 
                  ?>
                  </div>
                  <?php if( $weeklyp ): ?>
                  <div class="dfp-blog-grid-cntlr">
                    <div class="blog-grds blogGrdSlider">
                      <?php 
                      foreach( $weeklyp as $week_row ): 
                        $weekknop = $week_row['knop'];
                      ?>
                      <div class="blog-grd">
                        <div class="blog-grd-inr">
                          <div class="blog-grd-img-ctlr">
                            <?php if( !empty($weekknop) ) printf('<a href="%s" class="overlay-link"></a>', $weekknop); ?>
                            <div class="blog-grd-img inline-bg" style="background-image:url('<?php echo !empty($week_row['afbeelding'])?cbv_get_image_src($week_row['afbeelding']):''; ?>');">
                              <?php echo !empty($week_row['afbeelding'])?cbv_get_image_tag($week_row['afbeelding']):''; ?>
                            </div>
                            <div class="blog-grd-img-des">
                              <div class="blog-grd-img-des-inr">
                                <span>
                                  <?php 
                                    if( !empty($week_row['dag_label']) ) printf('%s', $week_row['dag_label']); 
                                    if( !empty($week_row['aantal_dag']) ) printf(' %s', $week_row['aantal_dag']); 
                                  ?>
                                </span>
                              </div>
                            </div>
                          </div>
                          <div class="blog-grd-des">
                            <h3 class="blog-grd-des-title fl-h4 mHc">
                            <?php 
                              if( !empty($weekknop) ) printf('<a href="%s">', $weekknop);
                              if( !empty($week_row['titel']) ) printf('%s', $week_row['titel']);
                              if( !empty($weekknop) ) printf('</a>');
                            ?> 
                            </h3>
                            <p class="mHc1">
                              <?php if( !empty($week_row['beschrijving']) ) echo $week_row['beschrijving']; ?>
                            </p>
                          </div>
                        </div>
                      </div>
                      <?php endforeach; ?>
                    </div>
                  </div>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php }elseif( get_row_layout() == 'fc_inclusief' ){ 
        $fc_titel = get_sub_field('fc_titel');
        $inclus = get_sub_field('inclusief');
      ?>
      <div class="block hide-sm">
        <div class="dfp-included-sec-module">
          <div class="included-sec">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="included-sec-inr">
                    <div class="sec-entry-hdr">
                    <?php if( !empty($fc_titel) ) printf( '<h2 class="fl-h2 sec-entry-hdr-title">%s</h2>', $fc_titel ); ?>
                    </div>
                    <?php if( $inclus ): ?>
                    <div class="included-grds">
                      <ul class="reset-list">
                        <?php 
                        foreach( $inclus as $inc_row ): 
                        ?>
                        <li>
                          <div class="included-grd-item">
                            <div class="included-grd-item-des">
                              <i>
                              <?php echo !empty( $inc_row['icon'] )?cbv_get_image_tag($inc_row['icon']):''; ?>
                              </i>
                              <?php if( !empty($inc_row['titel']) ) printf( '<h5 class="included-des-title fl-h5">%s</h5>', $inc_row['titel'] ); ?>
                            </div>
                          </div>
                        </li>
                          <?php endforeach; ?>
                      </ul>
                    </div>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php }elseif( get_row_layout() == 'fc_team' ){ 
        $fc_titel = get_sub_field('titel');
        $fc_tekst = get_sub_field('fc_tekst');
        $memberobj = get_sub_field('select_team');
        if( empty($memberobj) ){
            $memberobj = get_posts( array(
              'post_type' => 'team',
              'posts_per_page'=> -1,
              'orderby' => 'date',
              'order'=> 'asc',
              'suppress_filters' => false
            ) );  
        }
      ?>
      <div class="block hide-sm">
        <div class="dfp-team-grid-module">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="sec-entry-hdr">
                  <?php 
                    if( !empty($fc_titel) ) printf( '<h2 class="fl-h2 sec-entry-hdr-title">%s</h2>', $fc_titel );
                    if( !empty($fc_tekst) ) echo wpautop( $fc_tekst ); 
                  ?>
                </div>
              </div>
              <?php if($memberobj): ?>
              <div class="col-md-12">
                <div class="dfp-team-grid-wrap">
                  <div class="team-grid-sec-cntlr">
                    <div class="team-grid-items teamGridSlider">
                      <?php 
                        foreach( $memberobj as $member ) :
                        $imgID = get_post_thumbnail_id($member->ID);
                        $teamimg = !empty($imgID)? cbv_get_image_src($imgID): ''; 
                        $positie = get_field('positie', $member->ID);
                        $flag = get_field('flag', $member->ID);
                        $flagimg = !empty($flag)? cbv_get_image_tag($flag): ''; 
                        $link = get_field('link', $member->ID);
                      ?>
                      <div class="team-grid-col">
                        <div class="team-grid-col-innr">
                          <div class="team-grd-img-cntlr">
                            <div class="inline-bg team-grd-img" style="background-image: url('<?php echo $teamimg; ?>');"></div>
                             <div class="team-grd-sml-img"><i><?php echo $flagimg; ?></i></div>
                             <div class="team-grd-bg">
                               <div class="team-grd-bg-inr">
                                 <?php echo wpautop(get_the_excerpt($member->ID)); ?>
                               </div>
                             </div>
                          </div>
                          <div class="team-grd-desc">
                            <h3 class="fl-h4 tgd-title mHc"><?php echo get_the_title($member->ID); ?></h3>  
                            <?php if( !empty($positie) ) printf('<span class="team-grd-designation">%s</span>', $positie); ?>
                            <div class="team-grd-desc-xs">
                              <?php echo wpautop(get_the_excerpt($member->ID)); ?>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php endforeach; ?>
                    </div>
                  </div>
                </div>
              </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div> 
      <?php }elseif( get_row_layout() == 'fc_review' ){ 
        $fc_shortcode = get_sub_field('fc_shortcode');
      ?>
      <div class="block">
        <div class="dfp-testimonial-grid-module">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="dfp-testimonial-grid-cntlr">
                  <div class="testimonial-grds testimonialSlider">

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php }elseif( get_row_layout() == 'fc_faq' ){ 
        $fc_titel = get_sub_field('fc_titel');
        $faqobj = get_sub_field('select_faq');
        if( empty($faqobj) ){
            $faqobj = get_posts( array(
              'post_type' => 'faq',
              'posts_per_page'=> 10,
              'orderby' => 'date',
              'order'=> 'asc',
              'suppress_filters' => false
            ) );  
        }
      ?>
      <div class="block">
        <div class="dfp-faq-module">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="dfp-canoetrip-fag-wrap">
                  <div class="canoetrip-fag-cntlr">
                    <?php if( !empty($fc_titel) ) printf( '<h2 class="cntrp-fag-title fl-h3 hide-sm">%s</h2>', $fc_titel ); ?>

                    <?php if($faqobj): ?>
                    <div class="cntrp-fag">
                      <ul class="reset-list">
                        <?php 
                          foreach( $faqobj as $faq_row ) :
                        ?>
                        <li>
                          <div class="cntrp-faq-accordion">
                            <div class="cntrp-faq-accordion-hdr">
                              <h3 class="cntrp-faq-accordion-title fl-h5"><?php echo get_the_title($faq_row->ID); ?></h3>
                            </div>
                            <div class="cntrp-faq-accordion-desc">
                              <?php echo wpautop(get_the_excerpt($faq_row->ID)); ?>
                            </div>
                          </div>
                        </li>
                        <?php endforeach; ?>
                      </ul>
                    </div>
                    <div class="cntrp-fag-btn hide-sm">
                      <a href="<?php echo get_link_by_page_template('page-faq.php'); ?>">
                        <span><?php _e('Bekijk alle FAQ \'s', 'canoetrip'); ?></span>
                        <i>
                          <svg class="right-arrow-icon" width="14" height="14" viewBox="0 0 14 14" fill="#46C691">
                            <use xlink:href="#right-arrow-icon"></use> 
                          </svg>
                        </i>
                      </a>
                    </div>
                    <?php endif; ?>
                  </div>
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php }elseif( get_row_layout() == 'galerij' ){ 
        $galleries = get_sub_field('fc_afbeeldingen');
        $lightbox = get_sub_field('lightbox');
        $kolom = get_sub_field('kolom');
        if($galleries): 
      ?>
      <div class="block">
        <div class="dfp-gallery-module btm-gallery">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="gallery-wrap has-inline-bg glslider2 clearfix">
                  <div class="gallery gallery-columns-3 gallerySlider2">
                    <?php foreach( $galleries as $image ): ?>
                    <figure class="gallery-item">
                      <div class="gallery-icon portrait">
                          <?php 
                            $imgsrc = cbv_get_image_src( $image);
                            if( $lightbox ){
                              echo "<a data-fancybox='gallery' href='{$imgsrc}'>";
                              echo '<div class="gallery-icon-img inline-bg" style="background: url('.$imgsrc.');"></div>';
                              echo cbv_get_image_tag( $image);
                              echo "</a>";
                            }else{
                              echo '<div class="gallery-icon-img inline-bg" style="background: url('.$imgsrc.');"></div>';
                              echo cbv_get_image_tag( $image);
                            }
                          ?>
                      </div>
                    </figure>
                    <?php endforeach; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>
      <?php }elseif( get_row_layout() == 'table' ){
      $fc_table = get_sub_field('fc_tafel');
      $fc_titel = !empty(get_sub_field('fc_titel'))?get_sub_field('fc_titel'):'';
      ?>
      <div class="block">
        <div class="dfp-table-module">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="block-800">
                  <?php cbv_table($fc_table, $fc_titel); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php }elseif( get_row_layout() == 'fcknop' ){
      $fc_knop = get_sub_field('knop');
      $bg_kleur = get_sub_field('background_kleur');
      $tekst_kleur = get_sub_field('tekst_kleur');
      $border_kleur = get_sub_field('border_kleur');
      ?> 
      <div class="block">
        <div class="dfp-btn-module">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="block-800">
                  <div class="dfp-btn-module-ctlr">
                    <ul class="reset-list">
                      <li>
                        <?php
                          if( is_array( $fc_knop ) &&  !empty( $fc_knop['url'] ) ){
                            printf('<a class="dft-fl-btn" href="%s" target="%s" data-color="%s" data-bg="%s" data-border="%s">%s</a>', $fc_knop['url'], $fc_knop['target'], $tekst_kleur, $bg_kleur, $border_kleur, $fc_knop['title']); 
                          }
                        ?>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php }elseif( get_row_layout() == 'gap' ){
      $fc_gap = get_sub_field('fc_gap');
      $hide_mobile = get_sub_field('hide_mobile');
      $hide_class = $hide_mobile?' hide-sm':'';
    ?>
      <div class="gap-<?php echo $fc_gap; echo $hide_class; ?>"></div>
    <?php 
      }elseif( get_row_layout() == 'horizontal_line' ){ 
        ?>
        <div class="block">
          <div class="dfp-hr-module">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="block-800">
                    <div class="dfp-hr-module-cntlr">
                      <hr>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
      <?php endwhile; ?>
    </article>
    <?php } ?>
  </section>
  <?php get_template_part('templates/ft', 'cta'); ?>
  <?php get_footer(); ?>