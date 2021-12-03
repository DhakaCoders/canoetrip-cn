<?php
/*Template Name: Overons*/
get_header();
$thisID = get_the_ID();
?>
<section class="breadcrumb-sec hide-md">
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

<div class="over-ons-con-cntlr">
  <section class="over-ons-intro-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="page-entry-hdr">
            <h1 class="fl-h2 page-entry-hdr-title"><?php the_title(); ?></h1>
          </div>
        </div>
        <?php
        $showhide_intro = get_field('showhide_intro', $thisID );
        if($showhide_intro): 
          $introsec = get_field('introsec', $thisID );
          if($introsec):
        ?>
        <div class="col-md-12">
          <div class="over-ons-intro-sec-cntlr">
              <div class="overons-intro-featured-img">
                 <div class="overons-intro-featured-img-inr hide-sm">
                    <?php if(!empty($introsec['afbeelding_1'])): ?>
                   <div class="ov-intro-featured-top-rgt-img-inr">
                     <div class="ov-intro-featured-top-rgt-img inline-bg UpdownAnimate" style="background-image: url('<?php echo cbv_get_image_src( $introsec['afbeelding_1'] ); ?>');"></div>
                   </div>
                    <?php endif; ?>
                    <?php if(!empty($introsec['afbeelding_2'])): ?>
                    <div class="ov-intro-featured-btm-lft-img-inr">
                      <div class="ov-intro-featured-top-lft-img inline-bg UpdownAnimate2" style="background-image: url('<?php echo cbv_get_image_src( $introsec['afbeelding_2'] ); ?>');"></div>
                    </div>
                    <?php endif; ?>
                 </div>
                 <div class="over-ons-line-img-ctlr hide-sm">
                   <div class="over-ons-line-img1"><img src="<?php echo THEME_URI; ?>/assets/images/over-ons-line-img1.png"></div>
                   <div class="over-ons-line-img2"><img src="<?php echo THEME_URI; ?>/assets/images/over-ons-line-img2.png"></div>
                   <div class="over-ons-line-img3"><img src="<?php echo THEME_URI; ?>/assets/images/over-ons-line-img3.png"></div>
                 </div>
                 <?php if(!empty($introsec['mobiel_afbeelding_1'])): ?>
                 <div class="inline-bg over-ons-intro-xs-img show-sm" style="background-image: url('<?php echo cbv_get_image_src( $introsec['mobiel_afbeelding_1'] ); ?>');"></div>
                 <?php endif; ?>
              </div>
            <div class="overons-intro-desc-cntlr">
              <div class="dft-text-module">
                <h2 class="fl-h2 overons-intro-desc-title">
                <?php 
                  if( !empty($introsec['titel']) ) printf( '<span>%s</span>', $introsec['titel'] ); 
                  if( !empty($introsec['subtitel']) ) printf( '<strong>%s</strong>', $introsec['subtitel'] ); 
                ?>
                </h2>
                <?php if( !empty($introsec['beschrijving']) ) echo wpautop( $introsec['beschrijving'] ); ?>
              </div>
            </div>
          </div>
        </div>
        <?php endif; ?>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <?php
  $showhide_team = get_field('showhide_team', $thisID );
  if($showhide_team): 
    $team = get_field('teamsec', $thisID );
    if($team):
    $memberobj = $team['select_team'];
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
  <section class="team-grid-sec"> 
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="sec-entry-hdr">
            <?php 
              if( !empty($team['titel']) ) printf( '<h2 class="fl-h2 sec-entry-hdr-title">%s</h2>', $team['titel'] );
              if( !empty($team['beschrijving']) ) echo wpautop( $team['beschrijving'] ); 
            ?>
          </div>
        </div>
        <?php if($memberobj): ?>
        <div class="col-md-12">
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
                    <h3 class="fl-h4 tgd-title mHc"><?php echo get_the_title($member->ID); ?></h4>
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
         <?php endif; ?>
          </div>
      </div>
    </div>
  </section>
  <?php endif; ?>
  <?php endif; ?>
  <?php
  $showhide_intro2 = get_field('showhide_intro2', $thisID );
  if($showhide_intro2): 
    $intro2 = get_field('intro2_sec', $thisID );
    if($intro2):
  ?>
  <section class="over-ons-bears-sec fl-dft-overflow-module">
    <div class="team-grid-rgt-btm-img hide-md"><img src="<?php echo THEME_URI; ?>/assets/images/team-sec-rgt-img.png"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="fl-dft-lftimg-rgtdes fl-dft-rgtimg-lftdes clearfix">
            <div class="fl-dft-lftimg-rgtdes-lft">
              <div class="inline-bg" style="background-image: url(<?php echo !empty($intro2['afbeelding'])? cbv_get_image_src( $intro2['afbeelding'] ): ''; ?>);"></div>
              <?php echo !empty($intro2['afbeelding'])? cbv_get_image_tag( $intro2['afbeelding'] ): ''; ?>
            </div>
            <div class="fl-dft-lftimg-rgtdes-rgt">
              <?php 
                if( !empty($intro2['titel']) ) printf( '<h3 class="fl-h3 over-ons-bears-desc-title">%s</h3>', $intro2['titel'] );
                if( !empty($intro2['beschrijving']) ) echo wpautop( $intro2['beschrijving'] );
                $introknop = $intro2['knop'];
                if( is_array( $introknop ) &&  !empty( $introknop['url'] ) ){
                    printf('<div class="ov-ons-des-btn"><a class="fl-tc-btn" href="%s" target="%s">%s</a></div>', $introknop['url'], $introknop['target'], $introknop['title']); 
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>
  <?php endif; ?>
  <?php
  $showhide_trip = get_field('showhide_trip', $thisID );
  if($showhide_trip): 
    $trip = get_field('tripsec', $thisID );
    if($trip):
  ?>
  <section class="cta-module-grid-sec">
    <?php if( !empty($trip['upload_video']) ): ?>
    <div class="cta-video-cntlr">
        <video id="cta-vdo" autoplay muted loop>
          <source src="<?php echo $trip['upload_video']; ?>" type="video/mp4">
        </video>
    </div>
    <?php endif; ?>
    <?php if( empty($trip['upload_video']) ): ?>
    <div class="cta-module-bg inline-bg" style="background-image: url('<?php echo !empty($trip['bg_afbeelding'])? cbv_get_image_src( $trip['bg_afbeelding'] ): ''; ?>');"></div>
    <?php endif; ?>
    <div class="cta-module-overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="cta-module-grid-cntlr">
            <div class="cta-module-grid-lft-img">
              <?php echo !empty($trip['poster_afbeelding'])? cbv_get_image_tag( $trip['poster_afbeelding'] ): ''; ?>
            </div>
            <div class="cta-module-grid-rgt-desc">
              <?php if( !empty($trip['titel']) ) printf( '<h2 class="cta-module-grd-title fl-h2">%s</h2>', $trip['titel'] ); ?>
              <?php if( !empty($trip['upload_file']) ): ?>
              <div class="cta-module-grd-btn">
                <a class="fl-tc-btn" href="<?php echo $trip['upload_file']; ?>" download><?php _e('Download hier de brochure', 'canoetrip'); ?></a>
              </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>
  <?php endif; ?>
  <?php
  $showhide_vacancies = get_field('showhide_vacancies', $thisID );
  if($showhide_vacancies): 
    $vacancies = get_field('vacancies_sec', $thisID );
    if($vacancies):
    $vacancobj = $vacancies['select_vacancies'];
    if( empty($vacancobj) ){
        $vacancobj = get_posts( array(
          'post_type' => 'vacature',
          'posts_per_page'=> 2,
          'orderby' => 'date',
          'order'=> 'asc',
          'suppress_filters' => false
        ) );  
    }
  ?>
  <section class="working-grid-sec">
    <div class="working-grd-sec-lft-ab-img hide-md" style="background-image:url('<?php echo THEME_URI; ?>/assets/images/work-grid-sec-lft-img.png');"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="sec-entry-hdr text-left">
            <?php 
              if( !empty($vacancies['titel']) ) printf( '<h2 class="fl-h2 sec-entry-hdr-title">%s</h2>', $vacancies['titel'] );
              if( !empty($vacancies['beschrijving']) ) echo wpautop( $vacancies['beschrijving'] );
            ?>
          </div>
        </div>
        <div class="col-md-12">
          <div class="working-sec-cntlr">
            <div class="working-grids-cntlr">
              <ul class="reset-list">
               <?php 
                foreach( $vacancobj as $vacanc ) :
                $vacancimgID = get_post_thumbnail_id($vacanc->ID);
                $vacancimg = !empty($vacancimgID)? cbv_get_image_src($vacancimgID): ''; 
                $link = get_field('link', $vacanc->ID);
              ?>
                <li>
                  <div class="working-grid-item">
                    <h3 class="fl-h3 xs-wgd-title mHc1"><a href="#"><?php echo get_the_title($vacanc->ID); ?></a></h3>
                     <div class="working-grid-img-ctlr">
                        <a class="overlay-link" href="#"></a>
                        <div class="inline-bg working-grd-img" style="background-image: url('<?php echo $vacancimg; ?>');"></div>
                      </div>
                      <div class="working-grid-desc">
                        <h3 class="fl-h3 wgd-title mHc1"><a href="#"><?php echo get_the_title($vacanc->ID); ?></a></h3>
                        <div class="wgd-desc mHc2">
                          <?php echo wpautop(get_the_excerpt($vacanc->ID)); ?>
                        </div>
                        <div class="work-grd-btn">
                          <a class="fl-tc-btn" href="#">Travelbase Vacatures</a>
                        </div>
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
  </section>
  <?php endif; ?>
  <?php endif; ?>
</div>
<?php get_footer(); ?>