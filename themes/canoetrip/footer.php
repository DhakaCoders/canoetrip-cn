  <?php 
  $logoObj = get_field('ftlogo', 'options');
  if( is_array($logoObj) ){
    $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
  }else{
    $logo_tag = '';
  }

  $fb_url = get_field('facebook_url', 'options');
  $inst_url = get_field('instagram_url', 'options');
  $email = get_field('emailadres', 'options');
  $ftcont = get_field('footersec', 'options');
  $copyright_text = get_field('copyright_text', 'options');
?>
  <footer class="footer-wrp">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="footer-cntlr">
            <div class="footer-top">
              <div class="ftr-col ftr-col-01">
                <div class="ftr-logo">
                  <a href="<?php echo esc_url(home_url('/')); ?>">
                    <?php echo $logo_tag; ?>
                  </a>
                </div>
                <div class="ftr-col-travel show-md">
                  <p><strong>The Canoe Trip is a <a target="_blank" href="#">Travelbase</a> concept.</strong></p>
                </div>
                <div class="ftr-socials">
                  <ul class="reset-list">
                    <?php if( !empty($fb_url) ): ?>
                    <li>
                      <a target="_blank" href="<?php echo $fb_url; ?>">
                        <i>
                          <svg class="facebook-icon" width="32" height="32" viewBox="0 0 32 32" fill="#444441">
                            <use xlink:href="#facebook-icon"></use> 
                          </svg>
                        </i>
                      </a>
                    </li>
                    <?php endif; ?>
                    <?php if( !empty($inst_url) ): ?>
                    <li>
                      <a target="_blank" href="<?php echo $inst_url; ?>">
                        <i>
                          <svg class="instagram-icon" width="32" height="32" viewBox="0 0 32 32" fill="#444441">
                            <use xlink:href="#instagram-icon"></use> 
                          </svg>
                        </i>
                      </a>
                    </li>
                    <?php endif; ?>
                  </ul>
                </div>
              </div>
              <div class="ftr-col ftr-col-02">
                <h6 class="ftr-col-title fl-h6 hide-md"><?php _e('Navigatie', 'canoetrip');?></h6>
                <div class="ftr-menu">
                <?php 
                  $fmenuOptions = array( 
                      'theme_location' => 'cbv_fta_menu', 
                      'menu_class' => 'reset-list',
                      'container' => '',
                      'container_class' => ''
                    );
                  wp_nav_menu( $fmenuOptions );
                ?>
                </div>
                <div class="ftr-xs-btns show-md">
                  <div class="ftr-xs-btn">
                    <a class="fl-tc-btn" href="#"><?php _e('Nu boeken', 'canoetrip');?></a>
                  </div>
                  <div class="ftr-xs-btn">
                    <a class="fl-tc-btn tc-transparent-btn" href="#"><?php _e('Mijn boeking', 'canoetrip');?></a>
                  </div>
                </div>
              </div>
              <div class="ftr-col ftr-col-03">
                <h6 class="ftr-col-title fl-h6"><?php _e('Contacteer ons', 'canoetrip');?></h6>
                <div class="ftr-col-desc">
                  <?php if( !empty($ftcont['cnt_tekst']) ) echo wpautop($ftcont['cnt_tekst']); ?>
                </div>
                <div class="ftr-btns">
                  <div class="ftr-btn ftr-messanger-btn">
                    <a href="#">
                      <span><?php _e('Send us a message', 'canoetrip');?></span>
                      <i>
                        <svg class="messenger-icon" width="24" height="24" viewBox="0 0 24 24" fill="#3C6C54">
                          <use xlink:href="#messenger-icon"></use> 
                        </svg>
                      </i>
                    </a>
                  </div>
                  <?php if( !empty($email) ): ?>
                  <div class="ftr-btn ftr-mail-btn">
                    <a href="mailto:<?php echo $email; ?>">
                      <span><?php echo $email; ?></span>
                      <i>
                        <svg class="ftr-mail-icon" width="24" height="20" viewBox="0 0 24 20" fill="#3C6C54">
                          <use xlink:href="#ftr-mail-icon"></use> 
                        </svg>
                      </i>
                    </a>
                  </div>
                  <?php endif; ?>
                </div>
              </div>
              <div class="ftr-col ftr-col-04">
                <h6 class="ftr-col-title fl-h6 hide-md"><?php _e('Over Ons', 'canoetrip');?></h6>
                <div class="ftr-col-travel hide-md">
                  <p><strong>The Canoe Trip is a <a target="_blank" href="#">Travelbase</a> concept.</strong></p>
                </div>
                <div class="ftr-col-desc">
                 <?php if( !empty($ftcont['ons_tekst']) ) echo wpautop($ftcont['ons_tekst']); ?>
                </div>
                <?php if( !empty($ftcont['ons_galerij']) ): ?>
                <div class="ftr-trip-logo">
                  <ul class="reset-list">
                    <li>
                      <div class="ftr-trip-logo-item mHc">
                        <i>
                          <a target="_blank" href="#">
                            <img src="<?php echo THEME_URI; ?>/assets/images/ftr-trip-logo-01.png" alt="">
                          </a>
                        </i>
                      </div>
                    </li>
                    <li>
                      <div class="ftr-trip-logo-item mHc">
                        <i>
                          <a target="_blank" href="#">
                            <img src="<?php echo THEME_URI; ?>/assets/images/ftr-trip-logo-02.png" alt="">
                          </a>
                        </i>
                      </div>
                    </li>
                    <li>
                      <div class="ftr-trip-logo-item mHc">
                        <i>
                          <a target="_blank" href="#">
                            <img src="<?php echo THEME_URI; ?>/assets/images/ftr-trip-logo-03.png" alt="">
                          </a>
                        </i>
                      </div>
                    </li>
                  </ul>
                </div>
                <?php endif; ?>
              </div>
            </div>
            <div class="footer-mdl">
              <strong>Onze andere concepten</strong>
              <div class="ftr-concept-logo">
                <ul class="reset-list">
                  <li>
                    <div class="concept-logo-item">
                      <i>
                        <a target="_blank" href="#">
                          <img src="<?php echo THEME_URI; ?>/assets/images/concept-logo-01.png" alt="">
                        </a>
                      </i>
                    </div>
                  </li>
                  <li>
                    <div class="concept-logo-item">
                      <i>
                        <a target="_blank" href="#">
                          <img src="<?php echo THEME_URI; ?>/assets/images/concept-logo-02.png" alt="">
                        </a>
                      </i>
                    </div>
                  </li>
                  <li>
                    <div class="concept-logo-item">
                      <i>
                        <a target="_blank" href="#">
                          <img src="<?php echo THEME_URI; ?>/assets/images/concept-logo-03.png" alt="">
                        </a>
                      </i>
                    </div>
                  </li>
                  <li>
                    <div class="concept-logo-item">
                      <i>
                        <a target="_blank" href="#">
                          <img src="<?php echo THEME_URI; ?>/assets/images/concept-logo-04.png" alt="">
                        </a>
                      </i>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="footer-btm">
              <div class="ftr-copyright">
                <?php if( !empty( $copyright_text ) ) printf( '%s', $copyright_text); ?>
              </div>
              <div class="ftr-btm-menu">
                <?php 
                  $copyrightmenu = array( 
                      'theme_location' => 'cbv_copyright_menu', 
                      'menu_class' => 'reset-list',
                      'container' => '',
                      'container_class' => ''
                    );
                  wp_nav_menu( $copyrightmenu );
                ?>
              </div>
              <div class="develop-by">
                <p><?php _e('webdesign by conversal', 'canoetrip');?><a target="_blank" href="#"><?php _e('Conversal', 'canoetrip');?></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 
  </footer>  
</div>
<?php wp_footer(); ?>
</body>
</html>