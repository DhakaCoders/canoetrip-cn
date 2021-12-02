<?php 
  $cta = get_field('cta', 'options'); 
  if( $cta ):
?>
<section class="cta-module-sec">
  <div class="cta-module-bg inline-bg" style="background-image: url('<?php echo !empty($cta['afbeelding'])? cbv_get_image_src( $cta['afbeelding'] ): ''; ?>');"></div>
  <div class="cta-module-overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="cta-module-cntlr">
          <div class="cta-module-desc">
            <?php 
              if( !empty($cta['titel']) ) printf('<h2 class="cta-module-title fl-h2">%s</h2>', $cta['titel']);
              if( !empty($cta['beschrijving']) ) echo wpautop($cta['beschrijving']);
              $contlink = $cta['knop'];
              if( is_array( $contlink ) &&  !empty( $contlink['url'] ) ){
                  printf('<div class="cta-module-btn"><a class="fl-tc-btn" href="%s" target="%s">%s</a></div>', $contlink['url'], $contlink['target'], $contlink['title']); 
              }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>