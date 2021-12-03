<?php 
get_header(); 
$thisID = get_the_ID();
?>
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
              <li>
                <a href="<?php echo esc_url(home_url('bestemming')); ?>">
                  <span><?php _e('Bestemming', 'canoetrip'); ?></span>
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
  
<?php 
$imgID = get_post_thumbnail_id($thisID);
$imgsrc = !empty($imgID)? cbv_get_image_src($imgID): bestemming_placeholder();
$imgtag = !empty($imgID)? cbv_get_image_tag($imgID): bestemming_placeholder('tag');
$overview = get_field('overview', $thisID);

?>
  <section class="info-page-intro-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="page-entry-hdr">
            <h1 class="fl-h2 page-entry-hdr-title">Praktische info</h1>
          </div>
        </div>
        <div class="col-md-12">
          <div class="info-page-lft-img-rgt-des-cntlr">
            <div class="info-page-lft-img-rgt-des-lft">
              <div class="info-page-feature-img-ctlr has-inline-bg">
                <div class="info-page-feature-img inline-bg" style="background-image: url(<?php echo $imgsrc; ?>);">
                  <?php echo $imgtag; ?>
                </div>
                <div class="info-pagine-fea-img">
                  <?php echo $imgtag; ?>
                </div>
              </div>
            </div>
            <div class="info-page-lft-img-rgt-des-rgt">
              <div class="info-page-lft-img-rgt-des-rgt-inr">
                <h2 class="fl-h2 iplm-title"><?php the_title(); ?></h2>
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
                <?php if( !empty($overview['beschrijving']) ) echo wpautop($overview['beschrijving']); ?>
                <?php if( $overview['plans'] ): ?>
                <div class="info-pagine-fea">
                  <ul class="reset-list">
                    <?php foreach( $overview['plans'] as $plan ): ?>
                    <li>
                      <div class="info-pagine-fea-item">
                        <div class="info-pagine-fea-img">
                          <i><?php echo !empty($plan['icon'])?cbv_get_image_tag($plan['icon']):''; ?></i>
                        </div>
                        <div class="info-pagine-fea-des">
                          <?php 
                            if( !empty($plan['label']) ) printf('<span>%s</span>', $plan['label']);
                            if( !empty($plan['text']) ) printf('<span>%s</span>', $plan['text']);
                          ?>
                        </div>
                      </div>
                    </li>
                    <?php endforeach; ?>
                  </ul>
                </div>
                <?php endif; ?>
                <div class="info-pagine-rgt-des-btn">
                  <a class="fl-tc-btn" href="#"><?php _e('Book Now', 'canoetrip'); ?></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
$showhideusps = get_field('showhideusps', $thisID);
if($showhideusps): 
  $uspssec = get_field('uspssec', $thisID);
  if($uspssec):
?>
  <section class="phasellus-sec">
    <div class="container-lg">
      <div class="row">
        <div class="col-md-12">
          <div class="phasellus-sec-inr">
            <div class="sec-entry-hdr">
              <?php 
                if( !empty($uspssec['titel']) ) printf( '<h2 class="fl-h3 sec-entry-hdr-title info-pagina-entry-hdr-title">%s</h2>', $uspssec['titel'] ); 
                if( !empty($uspssec['beschrijving']) ) echo wpautop($uspssec['beschrijving']); 
              ?>
            </div>
            <?php if( $uspssec['usps'] ): ?>
            <div class="phasellus-grds phasellusSlider">
              <?php 
              foreach( $uspssec['usps'] as $usp ): 
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
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
<?php endif; ?>
<?php
$showhide_inclusief = get_field('showhide_inclusief', $thisID);
if($showhide_inclusief): 
  $inclus = get_field('inclusiefsec', $thisID);
  if($inclus):
?>
  <section class="included-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="included-sec-inr">
            <div class="sec-entry-hdr">
            <?php if( !empty($inclus['titel']) ) printf( '<h2 class="fl-h2 sec-entry-hdr-title">%s</h2>', $inclus['titel'] ); ?>
            </div>
            <?php if( $inclus['inclusief'] ): ?>
            <div class="included-grds">
              <ul class="reset-list">
                <?php 
                foreach( $inclus['inclusief'] as $inc_row ): 
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
  </section>
<?php endif; ?>
<?php endif; ?>
<?php
$showhide_weeklypl = get_field('showhide_weeklypl', $thisID);
if($showhide_weeklypl): 
  $weekly = get_field('weeklyplansec', $thisID);
  if($weekly):
?>
  <section class="blog-sec info-pagine-blog">
    <div class="info-pagine-blog-rgt-img hide-md">
      <img src="<?php echo THEME_URI; ?>/assets/images/hm-over-ons-pos-img.png">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="blog-sec-inr">
            <div class="sec-entry-hdr">
              <?php 
              if( !empty($weekly['titel']) ) printf( '<h2 class="fl-h3 sec-entry-hdr-title">%s</h2>', $weekly['titel'] ); 
              if( !empty($weekly['beschrijving']) ) echo wpautop($weekly['beschrijving']); 
              ?>
            </div>
            <?php if( $weekly['weekly_plans'] ): ?>
            <div class="blog-grds blogGrdSlider">
              <?php 
              foreach( $weekly['weekly_plans'] as $week_row ): 
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
                  <div class="blog-grd-des mHc">
                    <h3 class="blog-grd-des-title fl-h4 mHc1">
                      <?php 
                        if( !empty($weekknop) ) printf('<a href="%s">', $weekknop);
                        if( !empty($week_row['titel']) ) printf('%s', $week_row['titel']);
                        if( !empty($weekknop) ) printf('</a>');
                      ?>
                    </h3>
                    <?php if( !empty($week_row['beschrijving']) ) echo wpautop($week_row['beschrijving']); ?>
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
  </section>
<?php endif; ?>
<?php endif; ?>
<?php
$showhide_cta = get_field('showhide_cta', $thisID);
if($showhide_cta): 
  $cta_type = get_field('cta_type', $thisID);
  if($cta_type[0] == '1'){
    $ctasec = get_field('ctasec', $thisID);
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
    $ctasec_2 = get_field('ctasec_2', $thisID);
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
$showhide_faq = get_field('showhide_faq', $thisID);
if($showhide_faq): 
  $faq = get_field('faqsec', $thisID);
  if($faq):
    $faqobj = $faq['select_faq'];
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
  <section class="info-faq-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="info-faq-sec-inr">
            <div class="sec-entry-hdr">
              <?php if( !empty($faq['titel']) ) printf('<h2 class="fl-h3 sec-entry-hdr-title info-pagina-entry-hdr-title">%s</h2>', $faq['titel']); ?>
            </div>
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
<?php get_template_part('templates/ft', 'cta'); ?>
<?php get_footer(); ?>