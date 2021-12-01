<?php
/*Template Name: Bestemming*/
get_header();
$thisID = get_the_ID();
$customtitle = get_field('titel', $thisID);
$beschrijving = get_field('beschrijving', $thisID);
?>
  <section class="breadcrumb-sec hide-sm">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="breadcrumb-cntlr">
            <ul class="reset-list clearfix">
              <li class="">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                  <span class="item"><?php _e('Home', 'canoetrip'); ?></span>
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

  <div class="destination-ctlr">
    <section class="destination-sec">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="destination-sec-inr">
              <div class="page-entry-hdr">
                <h2 class="fl-h2 page-entry-hdr-title">
                  <?php echo !empty($customtitle)?$customtitle:get_the_title(); ?>
                </h2>
                <?php if( !empty($beschrijving) ) echo wpautop( $beschrijving ); ?>
              </div>
              <div class="destination-grds destinationSlider">
                <div class="destination-grd" data-id="immeln">
                  <div class="destination-grd-inr">
                    <a href="#immeln" class="overlay-link"></a>
                    <div class="destination-grd-img-ctlr has-inline-bg">
                      <div class="destination-grd-img inline-bg" style="background-image:url('<?php echo THEME_URI; ?>/assets/images/destination-img-01.jpg');">
                        <img src="<?php echo THEME_URI; ?>/assets/images/destination-img-01.jpg">
                      </div>
                      <div class="destination-grd-item-img">
                        <img src="<?php echo THEME_URI; ?>/assets/images/destination-img-01.jpg">
                      </div>
                    </div>
                    <div class="destination-grd-des">
                      <div class="destination-grd-des-inr">
                        <h3 class="destination-grd-des-title fl-h3 mHc"><a href="#">Immeln</a></h3>
                        <div class="destination-date-price">
                          <div class="destination-date">
                            <strong>May - Jul</strong>
                          </div>
                          <div class="destination-from">
                            <i>
                              <svg class="plan-svg" width="18" height="18" viewBox="0 0 18 18" fill="#DEEDE6">
                                <use xlink:href="#plan-svg"></use> </svg>
                            </i>
                            <strong>from</strong>
                          </div>
                          <div class="destination-price">
                            <strong>€799</strong>
                          </div>
                        </div>
                        <div class="destination-btn">
                          <a class="fl-text-btn scrollto" href="#" data-to="#destination-fea-sec">
                            Find out more
                            <i><svg class="btm-arrow-svg" width="14" height="14" viewBox="0 0 14 14" fill="#46C691">
                              <use xlink:href="#btm-arrow-svg"></use> 
                            </svg></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="destination-grd active" data-id="värmland">
                  <div class="destination-grd-inr">
                    <a href="#värmland" class="overlay-link"></a>
                    <div class="destination-grd-img-ctlr has-inline-bg">
                      <div class="destination-grd-img inline-bg" style="background-image:url('<?php echo THEME_URI; ?>/assets/images/destination-img-02.jpg');">
                        <img src="<?php echo THEME_URI; ?>/assets/images/destination-img-02.jpg">
                      </div>
                      <div class="destination-grd-item-img">
                        <img src="<?php echo THEME_URI; ?>/assets/images/destination-img-01.jpg">
                      </div>
                    </div>
                    <div class="destination-grd-des">
                      <div class="destination-grd-des-inr">
                        <h3 class="destination-grd-des-title fl-h3 mHc"><a href="#">Värmland</a></h3>
                        <div class="destination-date-price">
                          <div class="destination-date">
                            <strong>May - Jul</strong>
                          </div>
                          <div class="destination-from">
                            <i>
                              <svg class="plan-svg" width="18" height="18" viewBox="0 0 18 18" fill="#DEEDE6">
                                <use xlink:href="#plan-svg"></use> </svg>
                            </i>
                            <strong>from</strong>
                          </div>
                          <div class="destination-price">
                            <strong>€799</strong>
                          </div>
                        </div>
                        <div class="destination-btn">
                          <a class="fl-text-btn scrollto" href="#" data-to="#destination-fea-sec">
                            Find out more
                            <i><svg class="btm-arrow-svg" width="14" height="14" viewBox="0 0 14 14" fill="#46C691">
                              <use xlink:href="#btm-arrow-svg"></use> 
                            </svg></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="destination-grd" data-id="glaskogen">
                  <div class="destination-grd-inr">
                    <div class="destination-grd-img-ctlr has-inline-bg">
                      <a href="#glaskogen" class="overlay-link"></a>
                      <div class="destination-grd-img inline-bg" style="background-image:url('<?php echo THEME_URI; ?>/assets/images/destination-img-03.jpg');">
                        <img src="<?php echo THEME_URI; ?>/assets/images/destination-img-03.jpg">
                      </div>
                      <div class="destination-grd-item-img">
                        <img src="<?php echo THEME_URI; ?>/assets/images/destination-img-03.jpg">
                      </div>
                    </div>
                    <div class="destination-grd-des">
                      <div class="destination-grd-des-inr">
                        <h3 class="destination-grd-des-title fl-h3 mHc"><a href="#">Glaskogen</a></h3>
                        <div class="destination-date-price">
                          <div class="destination-date">
                            <strong>May - Jul</strong>
                          </div>
                          <div class="destination-from">
                            <i>
                              <svg class="plan-svg" width="18" height="18" viewBox="0 0 18 18" fill="#DEEDE6">
                                <use xlink:href="#plan-svg"></use> </svg>
                            </i>
                            <strong>from</strong>
                          </div>
                          <div class="destination-price">
                            <strong>€799</strong>
                          </div>
                        </div>
                        <div class="destination-btn">
                          <a class="fl-text-btn scrollto" href="#" data-to="#destination-fea-sec">
                            Find out more
                            <i><svg class="btm-arrow-svg" width="14" height="14" viewBox="0 0 14 14" fill="#46C691">
                              <use xlink:href="#btm-arrow-svg"></use> 
                            </svg></i>
                          </a>
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
  </div>


  <section class="destination-fea-sec" id="destination-fea-sec">
    <div class="destination-fea-rgt-img hide-md">
      <img src="<?php echo THEME_URI; ?>/assets/images/destination-rgt-img.png">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="destination-items">
          <div class="destination-fea-sec-inr destination-item" id="immeln">
            <div class="destination-fea-lft">
              <div class="destination-fea-img-ctlr">
                <div class="destination-fea-img inline-bg" style="background-image:url('<?php echo THEME_URI; ?>/assets/images/destination-fea-img-01.jpg');">
                  <img src="<?php echo THEME_URI; ?>/assets/images/destination-fea-img-01.jpg">
                </div>
                <div class="destination-fea-img-des">
                  <h3 class="destination-fea-img-des-title fl-h3"><a href="#">IMMELN</a></h3>
                  <div class="destination-date-price">
                    <div class="destination-date">
                      <strong>May - Jul</strong>
                    </div>
                    <div class="destination-from">
                      <i>
                        <svg class="plan-svg" width="18" height="18" viewBox="0 0 18 18" fill="#DEEDE6">
                          <use xlink:href="#plan-svg"></use> </svg>
                      </i>
                      <strong>from</strong>
                    </div>
                    <div class="destination-price">
                      <strong>€799</strong>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="destination-fea-rgt">
              <div class="destination-fea-des">
                <h2 class="destination-fea-des-title fl-h2">IMMELN</h2>
                <p>Enim et etiam facilisis sit viverra euismod scelerisque magna. Quam dictum vel faucibus elementum nulla nulla nisi, porta vitae. Facilisis nunc, dui imperdiet ut aliquam. Lectus volutpat sed tristique a.</p>
                <p>Tristique enim, faucibus in tempus, sagittis ut. Scelerisque vitae tellus varius facilisis faucibus viverra vitae. In eget ac in vitae ultrices.</p>
                <div class="destination-fea-accordion">
                  <div class="cntrp-fag">
                    <ul class="reset-list">
                      <li>
                        <div class="cntrp-faq-accordion">
                          <div class="cntrp-faq-accordion-hdr">
                            <h3 class="cntrp-faq-accordion-title fl-h5">How to get there</h3>
                          </div>
                          <div class="cntrp-faq-accordion-desc">
                            <p>Enim et etiam facilisis sit viverra euismod scelerisque magna. Quam dictum vel faucibus elementum nulla nulla nisi, porta vitae. Facilisis nunc, dui imperdiet ut aliquam. Lectus volutpat sed tristique a.</p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="cntrp-faq-accordion">
                          <div class="cntrp-faq-accordion-hdr">
                            <h3 class="cntrp-faq-accordion-title fl-h5">The different routes</h3>
                          </div>
                          <div class="cntrp-faq-accordion-desc">
                            <p>Enim et etiam facilisis sit viverra euismod scelerisque magna. Quam dictum vel faucibus elementum nulla nulla nisi, porta vitae. Facilisis nunc, dui imperdiet ut aliquam. Lectus volutpat sed tristique a.</p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="cntrp-faq-accordion">
                          <div class="cntrp-faq-accordion-hdr">
                            <h3 class="cntrp-faq-accordion-title fl-h5">Highlights</h3>
                          </div>
                          <div class="cntrp-faq-accordion-desc">
                            <p>Enim et etiam facilisis sit viverra euismod scelerisque magna. Quam dictum vel faucibus elementum nulla nulla nisi, porta vitae. Facilisis nunc, dui imperdiet ut aliquam. Lectus volutpat sed tristique a.</p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="cntrp-faq-accordion">
                          <div class="cntrp-faq-accordion-hdr">
                            <h3 class="cntrp-faq-accordion-title fl-h5">Pricing</h3>
                          </div>
                          <div class="cntrp-faq-accordion-desc">
                            <p>Enim et etiam facilisis sit viverra euismod scelerisque magna. Quam dictum vel faucibus elementum nulla nulla nisi, porta vitae. Facilisis nunc, dui imperdiet ut aliquam. Lectus volutpat sed tristique a.</p>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="destination-fea-btn">
                  <a class="fl-tc-btn" href="#">Book Now</a>
                </div>
              </div>
            </div>
          </div>
          <div class="destination-fea-sec-inr destination-item active" id="värmland">
            <div class="destination-fea-lft">
              <div class="destination-fea-img-ctlr">
                <div class="destination-fea-img inline-bg" style="background-image:url('<?php echo THEME_URI; ?>/assets/images/destination-fea-img-01.jpg');">
                  <img src="<?php echo THEME_URI; ?>/assets/images/destination-fea-img-01.jpg">
                </div>
                <div class="destination-fea-img-des">
                  <h3 class="destination-fea-img-des-title fl-h3"><a href="#">Värmland</a></h3>
                  <div class="destination-date-price">
                    <div class="destination-date">
                      <strong>May - Jul</strong>
                    </div>
                    <div class="destination-from">
                      <i>
                        <svg class="plan-svg" width="18" height="18" viewBox="0 0 18 18" fill="#DEEDE6">
                          <use xlink:href="#plan-svg"></use> </svg>
                      </i>
                      <strong>from</strong>
                    </div>
                    <div class="destination-price">
                      <strong>€799</strong>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="destination-fea-rgt">
              <div class="destination-fea-des">
                <h2 class="destination-fea-des-title fl-h2">Värmland</h2>
                <p>Enim et etiam facilisis sit viverra euismod scelerisque magna. Quam dictum vel faucibus elementum nulla nulla nisi, porta vitae. Facilisis nunc, dui imperdiet ut aliquam. Lectus volutpat sed tristique a.</p>
                <p>Tristique enim, faucibus in tempus, sagittis ut. Scelerisque vitae tellus varius facilisis faucibus viverra vitae. In eget ac in vitae ultrices.</p>
                <div class="destination-fea-accordion">
                  <div class="cntrp-fag">
                    <ul class="reset-list">
                      <li>
                        <div class="cntrp-faq-accordion">
                          <div class="cntrp-faq-accordion-hdr">
                            <h3 class="cntrp-faq-accordion-title fl-h5">How to get there</h3>
                          </div>
                          <div class="cntrp-faq-accordion-desc">
                            <p>Enim et etiam facilisis sit viverra euismod scelerisque magna. Quam dictum vel faucibus elementum nulla nulla nisi, porta vitae. Facilisis nunc, dui imperdiet ut aliquam. Lectus volutpat sed tristique a.</p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="cntrp-faq-accordion">
                          <div class="cntrp-faq-accordion-hdr">
                            <h3 class="cntrp-faq-accordion-title fl-h5">The different routes</h3>
                          </div>
                          <div class="cntrp-faq-accordion-desc">
                            <p>Enim et etiam facilisis sit viverra euismod scelerisque magna. Quam dictum vel faucibus elementum nulla nulla nisi, porta vitae. Facilisis nunc, dui imperdiet ut aliquam. Lectus volutpat sed tristique a.</p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="cntrp-faq-accordion">
                          <div class="cntrp-faq-accordion-hdr">
                            <h3 class="cntrp-faq-accordion-title fl-h5">Highlights</h3>
                          </div>
                          <div class="cntrp-faq-accordion-desc">
                            <p>Enim et etiam facilisis sit viverra euismod scelerisque magna. Quam dictum vel faucibus elementum nulla nulla nisi, porta vitae. Facilisis nunc, dui imperdiet ut aliquam. Lectus volutpat sed tristique a.</p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="cntrp-faq-accordion">
                          <div class="cntrp-faq-accordion-hdr">
                            <h3 class="cntrp-faq-accordion-title fl-h5">Pricing</h3>
                          </div>
                          <div class="cntrp-faq-accordion-desc">
                            <p>Enim et etiam facilisis sit viverra euismod scelerisque magna. Quam dictum vel faucibus elementum nulla nulla nisi, porta vitae. Facilisis nunc, dui imperdiet ut aliquam. Lectus volutpat sed tristique a.</p>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="destination-fea-btn">
                  <a class="fl-tc-btn" href="#">Book Now</a>
                </div>
              </div>
            </div>
          </div>
          <div class="destination-fea-sec-inr destination-item" id="glaskogen">
            <div class="destination-fea-lft">
              <div class="destination-fea-img-ctlr">
                <div class="destination-fea-img inline-bg" style="background-image:url('<?php echo THEME_URI; ?>/assets/images/destination-fea-img-01.jpg');">
                  <img src="<?php echo THEME_URI; ?>/assets/images/destination-fea-img-01.jpg">
                </div>
                <div class="destination-fea-img-des">
                  <h3 class="destination-fea-img-des-title fl-h3"><a href="#">Glaskogen</a></h3>
                  <div class="destination-date-price">
                    <div class="destination-date">
                      <strong>May - Jul</strong>
                    </div>
                    <div class="destination-from">
                      <i>
                        <svg class="plan-svg" width="18" height="18" viewBox="0 0 18 18" fill="#DEEDE6">
                          <use xlink:href="#plan-svg"></use> </svg>
                      </i>
                      <strong>from</strong>
                    </div>
                    <div class="destination-price">
                      <strong>€799</strong>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="destination-fea-rgt">
              <div class="destination-fea-des">
                <h2 class="destination-fea-des-title fl-h2">Glaskogen</h2>
                <p>Enim et etiam facilisis sit viverra euismod scelerisque magna. Quam dictum vel faucibus elementum nulla nulla nisi, porta vitae. Facilisis nunc, dui imperdiet ut aliquam. Lectus volutpat sed tristique a.</p>
                <p>Tristique enim, faucibus in tempus, sagittis ut. Scelerisque vitae tellus varius facilisis faucibus viverra vitae. In eget ac in vitae ultrices.</p>
                <div class="destination-fea-accordion">
                  <div class="cntrp-fag">
                    <ul class="reset-list">
                      <li>
                        <div class="cntrp-faq-accordion">
                          <div class="cntrp-faq-accordion-hdr">
                            <h3 class="cntrp-faq-accordion-title fl-h5">How to get there</h3>
                          </div>
                          <div class="cntrp-faq-accordion-desc">
                            <p>Enim et etiam facilisis sit viverra euismod scelerisque magna. Quam dictum vel faucibus elementum nulla nulla nisi, porta vitae. Facilisis nunc, dui imperdiet ut aliquam. Lectus volutpat sed tristique a.</p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="cntrp-faq-accordion">
                          <div class="cntrp-faq-accordion-hdr">
                            <h3 class="cntrp-faq-accordion-title fl-h5">The different routes</h3>
                          </div>
                          <div class="cntrp-faq-accordion-desc">
                            <p>Enim et etiam facilisis sit viverra euismod scelerisque magna. Quam dictum vel faucibus elementum nulla nulla nisi, porta vitae. Facilisis nunc, dui imperdiet ut aliquam. Lectus volutpat sed tristique a.</p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="cntrp-faq-accordion">
                          <div class="cntrp-faq-accordion-hdr">
                            <h3 class="cntrp-faq-accordion-title fl-h5">Highlights</h3>
                          </div>
                          <div class="cntrp-faq-accordion-desc">
                            <p>Enim et etiam facilisis sit viverra euismod scelerisque magna. Quam dictum vel faucibus elementum nulla nulla nisi, porta vitae. Facilisis nunc, dui imperdiet ut aliquam. Lectus volutpat sed tristique a.</p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="cntrp-faq-accordion">
                          <div class="cntrp-faq-accordion-hdr">
                            <h3 class="cntrp-faq-accordion-title fl-h5">Pricing</h3>
                          </div>
                          <div class="cntrp-faq-accordion-desc">
                            <p>Enim et etiam facilisis sit viverra euismod scelerisque magna. Quam dictum vel faucibus elementum nulla nulla nisi, porta vitae. Facilisis nunc, dui imperdiet ut aliquam. Lectus volutpat sed tristique a.</p>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="destination-fea-btn">
                  <a class="fl-tc-btn" href="#">Book Now</a>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php
$showhideblog = get_field('showhideblog', $thisID);
if($showhideblog): 
  $blogsec = get_field('blogsec', $thisID);
  if($blogsec):
    $blogobj = $blogsec['select_blog'];
    if( empty($blogobj) ){
        $blogobj = get_posts( array(
          'post_type' => 'post',
          'posts_per_page'=> 3,
          'orderby' => 'date',
          'order'=> 'DESC',
          'suppress_filters' => false
        ) );  
    }
?>
  <section class="blog-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="blog-sec-inr">
            <div class="sec-entry-hdr">
              <?php if( !empty($blogsec['titel']) ) printf('<h2 class="fl-h2 sec-entry-hdr-title">%s</h2>', $blogsec['titel']); ?>
            </div>
            <?php if($blogobj): ?>
            <div class="blog-grds blogGrdSlider">
              <?php 
                foreach( $blogobj as $blog ) :
                $imgID = get_post_thumbnail_id($blog->ID);
                $blogimg = !empty($imgID)? cbv_get_image_src($imgID): news_placeholder(); 
                $blogimgtag = !empty($imgID)? cbv_get_image_tag($imgID): news_placeholder('tag'); 
                $knop = !empty( get_field('knop', $blog->ID) )?get_field('knop', $blog->ID):'#';
              ?>
              <div class="blog-grd">
                <div class="blog-grd-inr">
                  <div class="blog-grd-img-ctlr">
                    <a href="<?php echo $knop; ?>" class="overlay-link"></a>
                    <div class="blog-grd-img inline-bg" style="background-image:url('<?php echo $blogimg; ?>');">
                      <?php echo $blogimgtag; ?>
                    </div>
                    <div class="blog-grd-img-des">
                      <div class="blog-grd-img-des-inr">
                        <span><?php echo get_the_date('d M', $blog->ID); ?></span>
                      </div>
                    </div>
                  </div>
                  <div class="blog-grd-des">
                    <h3 class="blog-grd-des-title fl-h4 mHc"><a href="<?php echo $knop; ?>"><?php echo get_the_title($blog->ID); ?></a></h3>
                    <div class="blog-grd-des-inr mHc1">
                      <?php echo wpautop(get_the_excerpt($blog->ID)); ?>
                    </div>
                    <a class="fl-text-btn" href="<?php echo $knop; ?>">
                      <?php _e('Lees Meer', 'canoetrip'); ?>
                      <i>
                        <svg class="blog-btn-arrow-svg" width="18" height="18" viewBox="0 0 18 18" fill="#46C691">
                          <use xlink:href="#blog-btn-arrow-svg"></use> 
                        </svg>
                      </i>
                    </a>
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

  <section class="cta-module-sec">
    <div class="cta-module-bg inline-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/cta-module-bg.png');"></div>
    <div class="cta-module-overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="cta-module-cntlr">
            <div class="cta-module-desc">
              <h2 class="cta-module-title fl-h2">Join The Canoe Trip</h2>
              <p>Preregister for The Canoe Trip 2022! You will receive an invitation to subscribe first if you are preregistered. The official registrations will open on Tuesday November 16th at 12h00. </p>
              <div class="cta-module-btn">
                <a class="fl-tc-btn" href="#">Book Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>