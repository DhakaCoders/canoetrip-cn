<?php 
get_header(); 
$desc = get_field('page_404', 'options'); 
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
                <li class="active">
                  <span>404</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
  </section>

  <section class="page-bedankt-cntent-cntlr page-404-cntent-wrap">
    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="page-404-content-cntlr">
              <div class="page-bedankt-cntent-cntlr-innr">
                  <div class="page-bedankt-con-img">
                      <i>
                      <?php if( !empty($desc['afbeelding']) ) echo cbv_get_image_tag($desc['afbeelding']); ?>
                      </i>
                    </div>
                    <?php if( !empty($desc['titel']) ) printf('<h1 class="fl-h2 page-bedankt-con-title">%s</h1>', $desc['titel']); ?>
                   <div class="page-bedankt-con-desc">
                    <?php if( !empty($desc['beschrijving']) ) echo wpautop($desc['beschrijving']); ?>
                   </div>
                   <?php if( !empty($desc['knops']) ): ?>
                   <div class="page-bedankt-con-menu-cntlr">
                      <ul class="reset-list">
                        <?php 
                          foreach( $desc['knops'] as $knop ):  
                          $knopp = $knop['knop'];
                          if( is_array( $knopp ) &&  !empty( $knopp['url'] ) ){
                              printf('<li><a href="%s" target="%s" class="fl-text-btn">%s<i>
                              <svg class="right-arrow-svg" width="14" height="14" viewBox="0 0 14 14" fill="#46C691">
                                <use xlink:href="#right-arrow-svg"></use>
                              </svg>
                            </i></a></li>', $knopp['url'], $knopp['target'], $knopp['title']); 
                          }
                          endforeach; 
                        ?>
                      </ul>
                   </div>
                   <?php endif; ?>
                   <div class="page-bedankt-con-btn">
                     <a class="fl-tc-btn" href="<?php echo esc_url(home_url('/')); ?>"><?php _e('Home', 'canoetrip'); ?></a>
                   </div>
              </div>
            </div>
          </div>
        </div>
    </div>    
  </section>
<?php get_footer(); ?>