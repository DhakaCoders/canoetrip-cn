<?php
get_header();
$pageID = get_id_by_page_template('page-faq.php');
$term_obj = get_queried_object();
$customtitle = get_field('titel', $pageID);
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
              <a href="<?php echo esc_url(home_url('faq')); ?>">
                <span><?php _e('FAQ', 'canoetrip'); ?></span>
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
$terms = get_terms( 'faq_cat', array(
    'hide_empty' => false,
) );

?>
<section class="canoetrip-fag-sec overzicht-fag-sec">
  <span class="tekening-img hide-md" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/tekening-img.png');"></span>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="canoetrip-fag-cntlr">
          <div class="fag-overzicht-entry-hdr">
            <?php if( !empty($customtitle) ) printf('<h1 class="fag-overzicht-title cntrp-fag-title fl-h2">%s</h1>', $customtitle); ?>
            <div class="fag-overzicht-btn hide-sm">
              <ul class="reset-list">
                <li><a href="<?php echo esc_url(home_url('faq')); ?>"><?php _e('Alle', 'canoetrip'); ?></a></li>
                <?php 
                if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){ 
                foreach($terms as $term){
                ?>
                <li<?php echo $term_obj->term_id == $term->term_id?' class="active"':''; ?>><a href="<?php echo esc_url( get_term_link( $term ) ); ?>"><?php echo $term->name; ?></a></li>
              <?php 
                }
                } 
              ?>
              </ul>
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
          </div>
          <?php 
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $query = new WP_Query(array(
              'post_type' => 'faq',
              'posts_per_page'=> 14,
              'orderby' => 'date',
              'order'=> 'DESC',
              'paged'=>$paged,
              'tax_query' => array(
                array(
                  'taxonomy' => 'faq_cat',
                  'field' => 'term_id',
                  'terms' => array($term_obj->term_id)
                )
              )
            ));
          ?>  
          <div class="cntrp-fag">
            <?php if($query->have_posts()):?>
            <ul class="reset-list">
            <?php  
              while($query->have_posts()): $query->the_post(); 
              global $post;
            ?>
              <li>
                <div class="cntrp-faq-accordion">
                  <div class="cntrp-faq-accordion-hdr">
                    <h3 class="cntrp-faq-accordion-title fl-h5"><?php the_title(); ?></h3>
                  </div>
                  <div class="cntrp-faq-accordion-desc">
                    <?php the_content(); ?>
                  </div>
                </div>
              </li>
              <?php endwhile; ?>
            </ul>
          <?php else: ?>
          <div class="col-md-12">
            <div class="notfound"><?php echo no_result_text(); ?></div>
          </div>
          <?php endif; ?>
          </div>
        </div>
      </div>
      <?php if( $query->max_num_pages > 1 ): ?>
      <div class="col-md-12">
        <div class="fl-pagination-cntlr">
          <?php
            $big = 999999999; // need an unlikely integer
            $query->query_vars['paged'] > 1 ? $current = $query->query_vars['paged'] : $current = 1;

            echo paginate_links( array(
              'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
              'type'      => 'list',
              'prev_next' => true,
              'prev_text' => __('', 'canoetrip'),
              'next_text' => __('', 'canoetrip'),
              'format'    => '?paged=%#%',
              'current'   => $current,
              'total'     => $query->max_num_pages
            ) );
          ?>
        </div>
      </div>
      <?php endif; ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>