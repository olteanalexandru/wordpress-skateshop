<?php


// Making footer sidebar into two columns



if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' )  || is_active_sidebar( 'footer-4' )) {?>
    <div id="footer-widget" class="row m-0 <?php if(!is_theme_preset_active()){ echo 'bg-light'; } ?>">
        <div class="container-fluid">
            <div class="row">
                
                <?php if ( is_active_sidebar( 'footer-2' )) : ?>
                    <div class="col-6 "><?php dynamic_sidebar( 'footer-2' ); ?></div>
                <?php endif; ?>
                <?php if ( is_active_sidebar( 'footer-3' )) : ?>
                    <div class="col-6 "><?php dynamic_sidebar( 'footer-3' ); ?></div>
                <?php endif; ?>
             
            </div>
        </div>
    </div>

<?php }