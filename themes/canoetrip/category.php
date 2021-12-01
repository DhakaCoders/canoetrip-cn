<?php 
get_header(); 
$blogID = get_option( 'page_for_posts' );
$term_obj = get_queried_object();
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
              <li>
                <a href="<?php echo esc_url(home_url($blogID)); ?>">
                  <span><?php echo get_the_title($blogID); ?></span>
                </a>
              </li>
              <li class="active">
                <span><?php echo $term_obj->name; ?></span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php 
  $terms = get_terms( 'category', array(
      'hide_empty' => false,
  ) );
  ?>
  <section class="blog-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="blog-sec-inr">
            <div class="sec-entry-hdr">
              <h2 class="fl-h2 sec-entry-hdr-title"><?php echo $term_obj->name; ?></h2>
            </div>
            <?php if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){ ?>
            <div class="xs-page-entry-menu show-sm">
              <ul class="reset-list">
                <li>
                  <a href="#"><?php _e('Categorie', 'canoetrip'); ?></a>
                  <ul class="reset-list page-entry-sub-menu">
                    <?php foreach($terms as $term){ ?>
                      <li<?php echo $term_obj->term_id == $term->term_id?' class="active"':''; ?>><a href="<?php echo esc_url( get_term_link( $term ) ); ?>"><?php echo $term->name; ?></a></li>
                    <?php } ?>
                  </ul>
                </li>
              </ul>
            </div>
            <?php } ?>
            <div class="blog-grds">
              <?php  
                if(have_posts()):
                while(have_posts()): the_post(); 
                global $post;
                $imgID = get_post_thumbnail_id(get_the_ID());
                $imgsrc = !empty($imgID)? cbv_get_image_src($imgID): news_placeholder();
                $imgtag = !empty($imgID)? cbv_get_image_tag($imgID): news_placeholder('tag');
                $knop = !empty( get_field('knop') )?get_field('knop'):'#';
              ?>
              <div class="blog-grd">
                <div class="blog-grd-inr">
                  <div class="blog-grd-img-ctlr">
                    <a href="<?php echo $knop; ?>" class="overlay-link"></a>
                    <div class="blog-grd-img inline-bg" style="background-image:url('<?php echo $imgsrc; ?>');">
                      <?php echo $imgtag; ?>
                    </div>
                    <div class="blog-grd-img-des">
                      <div class="blog-grd-img-des-inr">
                        <span><?php echo get_the_date('d M'); ?></span>
                      </div>
                    </div>
                  </div>
                  <div class="blog-grd-des">
                    <h3 class="blog-grd-des-title fl-h4 mHc"><a href="<?php echo $knop; ?>"><?php the_title(); ?></a></h3>
                    <p class="mHc1"><?php the_excerpt(); ?></p>
                    <a class="fl-text-btn" href="<?php echo $knop; ?>">
                      <?php _e('Lees Meer', 'canoetrip'); ?>
                      <i><svg class="right-arrow-svg" width="14" height="14" viewBox="0 0 14 14" fill="#46C691">
                          <use xlink:href="#right-arrow-svg"></use> 
                        </svg>
                      </i>
                    </a>
                  </div>
                </div>
              </div>
              <?php endwhile; ?>
              <?php else: ?>
                <div class="notfound"><?php echo no_result_text(); ?></div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
      <?php 
      global $wp_query ;
      if( $wp_query ->max_num_pages > 1 ): ?>
      <div class="row">
        <div class="col-md-12">
          <div class="fl-pagination-cntlr">
            <?php
              $big = 999999999; // need an unlikely integer
              $wp_query ->query_vars['paged'] > 1 ? $current = $wp_query ->query_vars['paged'] : $current = 1;

              echo paginate_links( array(
                'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'type'      => 'list',
                'prev_next' => true,
                'prev_text' => __('', 'canoetrip'),
                'next_text' => __('', 'canoetrip'),
                'format'    => '?paged=%#%',
                'current'   => $current,
                'total'     => $wp_query ->max_num_pages
              ) );
            ?>
          </div>
        </div>
      </div>
      <?php endif; ?>
    </div>
  </section>
<?php get_footer(); ?>