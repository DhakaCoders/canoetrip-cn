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
  <?php 
    $query = new WP_Query(array(
      'post_type' => 'bestemming',
      'posts_per_page'=> 3,
      'orderby' => 'date',
      'order'=> 'DESC'
    ));
  ?> 
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
                <?php if($query->have_posts()):?>
                <?php  
                  $i = 1;
                  while($query->have_posts()): $query->the_post(); 
                  global $post;
                  $imgID = get_post_thumbnail_id(get_the_ID());
                  $imgsrc = !empty($imgID)? cbv_get_image_src($imgID): bestemming_placeholder();
                  $imgtag = !empty($imgID)? cbv_get_image_tag($imgID): bestemming_placeholder('tag');
                  $overview = get_field('overview', get_the_ID());

                ?>
                <div class="destination-grd<?php echo $i == 2? ' active':''; ?>" data-id="<?php echo $post->post_name; ?>">
                  <div class="destination-grd-inr">
                    <a href="#<?php echo $post->post_name; ?>" class="overlay-link"></a>
                    <div class="destination-grd-img-ctlr has-inline-bg">
                      <div class="destination-grd-img inline-bg" style="background-image:url('<?php echo $imgsrc; ?>');">
                        <?php echo $imgtag; ?>
                      </div>
                      <div class="destination-grd-item-img">
                        <?php echo $imgtag; ?>
                      </div>
                    </div>
                    <div class="destination-grd-des">
                      <div class="destination-grd-des-inr">
                        <h3 class="destination-grd-des-title fl-h3 mHc"><a href="#"><?php the_title(); ?></a></h3>
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
                          <a class="fl-text-btn scrollto" href="#" data-to="#destination-fea-sec">
                            <?php _e('Find out more', 'canoetrip'); ?>
                            <i><svg class="btm-arrow-svg" width="14" height="14" viewBox="0 0 14 14" fill="#46C691">
                              <use xlink:href="#btm-arrow-svg"></use> 
                            </svg></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php $i++; endwhile; ?>
                <?php else: ?>
                  <div class="notfound"><?php echo no_result_text(); ?></div>
                <?php endif; wp_reset_postdata(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

<?php if($query->have_posts()):?>
  <section class="destination-fea-sec" id="destination-fea-sec">
    <div class="destination-fea-rgt-img hide-md">
      <img src="<?php echo THEME_URI; ?>/assets/images/destination-rgt-img.png">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="destination-items">
          <?php  
            $i = 1;
            while($query->have_posts()): $query->the_post(); 
            global $post;
            $imgID = get_post_thumbnail_id(get_the_ID());
            $imgsrc = !empty($imgID)? cbv_get_image_src($imgID): bestemming_placeholder();
            $imgtag = !empty($imgID)? cbv_get_image_tag($imgID): bestemming_placeholder('tag');
            $overview = get_field('overview', get_the_ID());
            $features = get_field('features', get_the_ID());
          ?>
          <div class="destination-fea-sec-inr destination-item<?php echo $i == 2? ' active':''; ?>" id="<?php echo $post->post_name; ?>">
            <div class="destination-fea-lft">
              <div class="destination-fea-img-ctlr">
                <div class="destination-fea-img inline-bg" style="background-image:url('<?php echo $imgsrc; ?>');">
                  <?php echo $imgtag; ?>
                </div>
                <div class="destination-fea-img-des">
                  <h3 class="destination-fea-img-des-title fl-h3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
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
                </div>
              </div>
            </div>
            
            <div class="destination-fea-rgt">
              <div class="destination-fea-des">
                <h2 class="destination-fea-des-title fl-h2"><?php the_title(); ?></h2>
                <?php if( !empty($overview['beschrijving']) ) echo wpautop($overview['beschrijving']); ?>
                <?php if( $features ): ?>
                <div class="destination-fea-accordion">
                  <div class="cntrp-fag">
                    <ul class="reset-list">
                      <?php foreach( $features as $feature ): ?>
                      <li>
                        <div class="cntrp-faq-accordion">
                          <div class="cntrp-faq-accordion-hdr">
                            <?php if( !empty($feature['titel']) ) printf('<h3 class="cntrp-faq-accordion-title fl-h5">%s</h3>', $feature['titel']); ?>
                          </div>
                          <div class="cntrp-faq-accordion-desc">
                            <?php if( !empty($feature['tekst']) ) echo wpautop($feature['tekst']); ?>
                          </div>
                        </div>
                      </li>
                      <?php endforeach; ?>
                    </ul>
                  </div>
                </div>
                <?php endif; ?>
                <div class="destination-fea-btn">
                  <a class="fl-tc-btn" href="<?php the_permalink(); ?>"><?php _e('Book Now', 'canoetrip'); ?></a>
                </div>
              </div>
            </div>
          </div>
          <?php $i++; endwhile; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; wp_reset_postdata(); ?>
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
<?php get_template_part('templates/ft', 'cta'); ?>
<?php get_footer(); ?>