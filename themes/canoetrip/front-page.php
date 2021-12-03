<?php get_header(); ?>
<?php  
  $hbanner = get_field('home_banner', HOMEID);
  if($hbanner):
  $banner = !empty($hbanner['afbeelding'])? cbv_get_image_src( $hbanner['afbeelding'] ): '';
?>
  <section class="hm-banner ">
    <div class="hm-banner-bg-black"></div>
    <?php if( !empty($hbanner['upload_video']) ): ?>
    <div class="hm-video-cntlr">
      <video id="bnr-vdo" autoplay muted loop>
        <source src="<?php echo $hbanner['upload_video']; ?>" type="video/mp4">
      </video>
    </div>
    <?php endif; ?>
    <?php if( empty($hbanner['upload_video']) ): ?>
    <div class="hm-banner-bg inline-bg" style="background-image:url(<?php echo $banner; ?>);"></div>
    <?php endif; ?>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="hm-banner-des-cntlr">
            <div class="hm-banner-des">
              <?php if( !empty($hbanner['titel']) ) printf( '<h1 class="hm-bnr-title fl-h1">%s</h1>', $hbanner['titel'] ); ?>
              <div class="hm-bnr-btn">
                <ul class="reset-list">
                <?php 
                  $hknop_1 = $hbanner['knop_1'];
                  $hknop_2 = $hbanner['knop_2'];
                  if( is_array( $hknop_1 ) &&  !empty( $hknop_1['url'] ) ){
                      printf('<li><a class="fl-tc-btn" href="%s" target="%s">%s</a></li>', $hknop_1['url'], $hknop_1['target'], $hknop_1['title']); 
                  }
                  if( is_array( $hknop_2 ) &&  !empty( $hknop_2['url'] ) ){
                      printf('<li><a class="fl-tc-btn tc-transparent-btn" href="%s" target="%s">%s</a></li>', $hknop_2['url'], $hknop_2['target'], $hknop_2['title']); 
                  }
                ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
<?php
$showhide_overons = get_field('showhide_overons', HOMEID);
if($showhide_overons): 
  $hoverons = get_field('hoverons', HOMEID);
  if($hoverons):
?>
  <section class="over-ons-intro-sec hm-over-ons-sec">
    <div class="hm-over-ons-pos-img">
      <img src="<?php echo THEME_URI; ?>/assets/images/hm-over-ons-pos-img.png">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="over-ons-intro-sec-cntlr">
            <div class="overons-intro-featured-img">
              <div class="overons-intro-featured-img-inr hide-sm">
                <?php if(!empty($hoverons['afbeelding_1'])): ?>
               <div class="ov-intro-featured-top-rgt-img-inr">
                 <div class="ov-intro-featured-top-rgt-img inline-bg" style="background-image: url('<?php echo cbv_get_image_src( $hoverons['afbeelding_1'] ); ?>');"></div>
               </div>
               <?php endif; ?>
               <?php if(!empty($hoverons['afbeelding_2'])): ?>
                <div class="ov-intro-featured-btm-lft-img-inr">
                  <div class="ov-intro-featured-top-lft-img inline-bg" style="background-image: url('<?php echo cbv_get_image_src( $hoverons['afbeelding_2'] ); ?>');"></div>
                </div>
                <?php endif; ?>
              </div>
              <div class="over-ons-line-img-ctlr hide-sm">
               <div class="over-ons-line-img1"><img src="<?php echo THEME_URI; ?>/assets/images/over-ons-line-img1.png"></div>
               <div class="over-ons-line-img2"><img src="<?php echo THEME_URI; ?>/assets/images/over-ons-line-img2.png"></div>
               <div class="over-ons-line-img3"><img src="<?php echo THEME_URI; ?>/assets/images/over-ons-line-img3.png"></div>
              </div>
              <?php if(!empty($hoverons['mobiel_afbeelding_1'])): ?>
              <div class="inline-bg over-ons-intro-xs-img show-sm" style="background-image: url('<?php echo cbv_get_image_src( $hoverons['mobiel_afbeelding_1'] ); ?>');"></div>
              <?php endif; ?>
            </div>
            <div class="overons-intro-desc-cntlr">
              <div class="dft-text-module">
                <?php
                  if( !empty($hoverons['titel']) ) printf( '<h2 class="fl-h2 overons-intro-desc-title">%s</h2>', $hoverons['titel'] );
                  if( !empty($hoverons['beschrijving']) ) echo wpautop( $hoverons['beschrijving'] );
                  $onsknop = $hoverons['knop'];
                  if( is_array( $onsknop ) &&  !empty( $onsknop['url'] ) ){
                      printf('<a class="fl-text-btn" href="%s" target="%s">%s<i><svg class="right-arrow-svg" width="14" height="14" viewBox="0 0 14 14" fill="#46C691">
                    <use xlink:href="#right-arrow-svg"></use></svg></i></a>', $onsknop['url'], $onsknop['target'], $onsknop['title']); 
                  }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
<?php endif; ?>
<?php
$showhidectas = get_field('showhidectas', HOMEID);
if($showhidectas): 
  $hctas = get_field('ctas', HOMEID);
  if($hctas):
?>
  <section class="hm-grd-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="hm-grd-sec-inr">
            <div class="hm-grds hmGrdsSlider">
              <?php 
              foreach( $hctas as $hcta ): 
              $hctaknop = $hcta['knop'];
              ?>
              <div class="hm-grd">
                <div class="hm-grd-inr">
                  <div class="hm-grd-img-ctlr has-inline-bg">
                  <?php if( !empty($hctaknop) ) printf('<a href="%s" class="overlay-link"></a>',$hctaknop); ?>
                    <div class="hm-grd-img inline-bg" style="background-image:url('<?php echo !empty($hcta['afbeelding'])?cbv_get_image_src( $hcta['afbeelding'] ):''; ?>');">
                      <?php echo !empty($hcta['afbeelding'])?cbv_get_image_tag( $hcta['afbeelding'] ):''; ?>
                    </div>
                    <div class="hm-grd-item-img">
                      <?php echo !empty($hcta['afbeelding'])?cbv_get_image_tag( $hcta['afbeelding'] ):''; ?>
                    </div>
                  </div>
                  <div class="hm-grd-des">
                    <?php if( !empty($hcta['toptitel']) ) printf('<span>%s</span>', $hcta['toptitel']); ?>
                    <h2 class="hm-grd-des-title fl-h4">
                      <?php 
                        if( !empty($hctaknop) ) printf('<a href="%s">', $hctaknop); 
                        if( !empty($hcta['titel']) ) printf('%s', $hcta['titel']); 
                        if( !empty($hctaknop) ) printf('</a>'); 
                      ?>
                    </h2>
                  </div>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
<?php endif; ?>
<?php
$showhide_bestemming = get_field('showhide_bestemming', HOMEID);
if($showhide_bestemming): 
  $bestem = get_field('bestemmingen', HOMEID);
  if($bestem):
  $bestemmobj = $bestem['select_bestemming'];
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
  <section class="destination-sec">
    <div class="destination-rgt-img hide-md">
      <img src="<?php echo THEME_URI; ?>/assets/images/destination-rgt-img.png">
    </div>
    <div class="destination-btm-img hide-md">
      <img src="<?php echo THEME_URI; ?>/assets/images/detination-btm-img.png">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="destination-sec-inr">
            <div class="sec-entry-hdr">
              <?php 
              if( !empty($bestem['titel']) ) printf('<h2 class="fl-h2 sec-entry-hdr-title">%s</h2>', $bestem['titel']); 
              if( !empty($bestem['beschrijving']) ) echo wpautop($bestem['beschrijving']); 
              ?>
            </div>
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
            <div class="destination-btm-btn">
              <a class="fl-tc-btn" href="<?php echo get_link_by_page_template('page-bestemming.php'); ?>"><?php _e('Bestemmingen', 'canoetrip'); ?></a>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
<?php endif; ?>
<?php
$showhide_review = get_field('showhide_review', HOMEID);
if($showhide_review): 
  $review = get_field('reviewsec', HOMEID);
  if($review):
?>
  <section class="testimonial-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="testimonial-sec-inr">
            <div class="sec-entry-hdr">
              <?php if( !empty($review['titel']) ) printf('<h2 class="fl-h2 sec-entry-hdr-title">%s</h2>', $review['titel']); ?>
            </div>
            <div class="testimonial-grds testimonialSlider">
              <div class="testimonial-grd-ctlr">
                <div class="testimonial-grd">
                  <div class="testimonial-icon">
                    <i><img src="<?php echo THEME_URI; ?>/assets/images/google-icon.svg"></i>
                  </div>
                  <div class="testimonial-grd-inr">
                    <div class="testimonial-grd-img-ctlr">
                      <div class="testimonial-grd-img">
                        <img src="<?php echo THEME_URI; ?>/assets/images/hm-testimonial-img-01.jpg">
                      </div>
                    </div>
                    <div class="testimonial-grd-des">
                      <div class="testimonial-grd-des-inr">
                        <h3 class="testimonial-grd-des-title fl-h6 mHc">Enim mauris amet.</h3>
                        <div class="testimonial-grd-rating">
                          <div class="testimonial-grd-rating-num">
                            <span>5/5</span>
                          </div>
                          <div class="testimonial-grd-rating-star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                          </div>
                        </div>
                        <p>Based on 1211 reviews.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="testimonial-grd-ctlr">
                <div class="testimonial-grd">
                  <div class="testimonial-icon">
                    <i><img src="<?php echo THEME_URI; ?>/assets/images/google-icon.svg"></i>
                  </div>
                  <div class="testimonial-grd-inr">
                    <div class="testimonial-grd-img-ctlr">
                      <div class="testimonial-grd-img">
                        <img src="<?php echo THEME_URI; ?>/assets/images/hm-testimonial-img-01.jpg">
                      </div>
                    </div>
                    <div class="testimonial-grd-des">
                      <div class="testimonial-grd-des-inr">
                        <h3 class="testimonial-grd-des-title fl-h6 mHc">Enim mauris amet.</h3>
                        <div class="testimonial-grd-rating">
                          <div class="testimonial-grd-rating-num">
                            <span>5/5</span>
                          </div>
                          <div class="testimonial-grd-rating-star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                          </div>
                        </div>
                        <p>Based on 1211 reviews.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="testimonial-grd-ctlr">
                <div class="testimonial-grd">
                  <div class="testimonial-icon">
                    <i><img src="<?php echo THEME_URI; ?>/assets/images/google-icon.svg"></i>
                  </div>
                  <div class="testimonial-grd-inr">
                    <div class="testimonial-grd-img-ctlr">
                      <div class="testimonial-grd-img">
                        <img src="<?php echo THEME_URI; ?>/assets/images/hm-testimonial-img-01.jpg">
                      </div>
                    </div>
                    <div class="testimonial-grd-des">
                      <div class="testimonial-grd-des-inr">
                        <h3 class="testimonial-grd-des-title fl-h6 mHc">Enim mauris amet.</h3>
                        <div class="testimonial-grd-rating">
                          <div class="testimonial-grd-rating-num">
                            <span>5/5</span>
                          </div>
                          <div class="testimonial-grd-rating-star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                          </div>
                        </div>
                        <p>Based on 1211 reviews.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
<?php endif; ?>
<?php
$showhide_partners = get_field('showhide_partners', HOMEID);
if($showhide_partners): 
  $partners = get_field('partners', HOMEID);
  if($partners):
    $logos = $partners['logos'];
?>
  <section class="client-sec hide-sm">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="client-sec-inr">
            <div class="sec-entry-hdr">
              <?php if( !empty($partners['titel']) ) printf('<h2 class="fl-h5 sec-entry-hdr-title">%s</h2>', $partners['titel']); ?>
            </div>
            <?php if( $logos ): ?>
            <div class="client-grds-ctlr">
              <div class="client-grds">
                <?php foreach( $logos as $logo ): ?>
                <div class="client-grd">
                  <div class="client-grd-inr">
                  <?php
                    if( !empty($logo['knop']) ) printf('<a href="%s">', $logo['knop']);  
                      if( !empty($logo['logo']) ) echo cbv_get_image_tag($logo['logo']);
                    if( !empty($logo['knop']) ) printf('</a>'); 
                  ?>
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
  </section>
<?php endif; ?>
<?php endif; ?>
<?php
$showhide_cta = get_field('showhide_cta', HOMEID);
if($showhide_cta): 
  $cta_type = get_field('cta_type', HOMEID);
  if($cta_type[0] == '1'){
    $ctasec = get_field('ctasec', HOMEID);
    if($ctasec):
?>
  <section class="cta-module-sec">
    <?php if( !empty($ctasec['upload_video']) ): ?>
    <div class="cta-video-cntlr">
        <video id="cta-vdo" autoplay muted loop>
          <source src="<?php echo $ctasec['upload_video']; ?>" type="video/mp4">
        </video>
      </div>
      <?php endif; ?>
      <?php if( empty($ctasec['upload_video']) ): ?>
    <div class="cta-module-bg inline-bg" style="background-image: url('<?php echo !empty($ctasec['afbeelding'])? cbv_get_image_src( $ctasec['afbeelding'] ): ''; ?>');"></div>
    <?php endif; ?>
    <div class="cta-module-overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="cta-module-cntlr">
            <div class="cta-module-desc">
              <?php 
                if( !empty($ctasec['titel']) ) printf('<h2 class="cta-module-title fl-h2">%s</h2>', $ctasec['titel']); 
                if( !empty($ctasec['beschrijving']) ) echo wpautop($ctasec['beschrijving']);
                $ctaknop1 = $ctasec['knop'];
                if( is_array( $ctaknop1 ) &&  !empty( $ctaknop1['url'] ) ){
                    printf('<div class="cta-module-btn"><a class="fl-tc-btn" href="%s" target="%s">%s</a></div>', $ctaknop1['url'], $ctaknop1['target'], $ctaknop1['title']); 
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>
<?php }else{ 
    $ctasec_2 = get_field('ctasec_2', HOMEID);
    if($ctasec_2):
?>
  <section class="cta-module-grid-sec">
    <?php if( !empty($ctasec_2['upload_video']) ): ?>
    <div class="cta-video-cntlr">
        <video id="cta-vdo" autoplay muted loop>
          <source src="<?php echo $ctasec_2['upload_video']; ?>" type="video/mp4">
        </video>
    </div>
    <?php endif; ?>
    <?php if( empty($ctasec_2['upload_video']) ): ?>
    <div class="cta-module-bg inline-bg" style="background-image: url('<?php echo !empty($ctasec_2['poster_afbeelding'])? cbv_get_image_src( $ctasec_2['poster_afbeelding'] ): ''; ?>');"></div>
    <?php endif; ?>
    <div class="cta-module-overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="cta-module-grid-cntlr">
            <div class="cta-module-grid-lft-img">
              <?php echo !empty($ctasec_2['dnd_afbeelding'])? cbv_get_image_tag( $ctasec_2['dnd_afbeelding'] ): ''; ?>
            </div>
            <div class="cta-module-grid-rgt-desc">
              <?php if( !empty($ctasec_2['titel']) ) printf( '<h2 class="cta-module-grd-title fl-h2">%s</h2>', $ctasec_2['titel'] ); ?>
              <?php if( !empty($ctasec_2['upload_file']) ): ?>
              <div class="cta-module-grd-btn">
                <a class="fl-tc-btn" href="<?php echo $ctasec_2['upload_file']; ?>" download><?php _e('Download hier de brochure', 'canoetrip'); ?></a>
              </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>
<?php } ?>
<?php endif; ?>
<?php
$showhide_faq = get_field('showhide_faq', HOMEID);
if($showhide_faq): 
  $faq = get_field('faqsec', HOMEID);
  if($faq):
    $faqobj = $faq['select_faq'];
    if( empty($faqobj) ){
        $faqobj = get_posts( array(
          'post_type' => 'faq',
          'posts_per_page'=> 4,
          'orderby' => 'date',
          'order'=> 'asc',
          'suppress_filters' => false
        ) );  
    }
?>
  <section class="canoetrip-fag-sec home-fag-sec">
    <span class="tekening-img hide-md" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/tekening-img.png');"></span>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="canoetrip-fag-cntlr">
            <?php if( !empty($faq['titel']) ) printf('<h2 class="cntrp-fag-title fl-h2">%s</h2>', $faq['titel']); ?>
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
            <div class="cntrp-fag-btn">
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
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
<?php endif; ?>
  <section class="hm-socials-gallery-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="hm-socials-gallery-desc">
            <strong class="hm-socials-glry-sub-title">Volg ons op Instagram</strong>
            <h2 class="fl-h2 hm-socials-glry-title">@TheCanoetrip</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="hm-socials-gallery">
      <div class="hm-socials-gallery-item">
        <img src="<?php echo THEME_URI; ?>/assets/images/hm-socials-gallery-img.jpg" alt="">
      </div>
    </div>
  </section>
  <?php get_footer(); ?>