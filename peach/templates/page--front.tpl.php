<div class="head_bar">

  <?php print render($page['head_bar']); ?>

  <div class="container_12">

    <?php if ($logo): ?>
    <div class="logo">
      <a href="<?php print $front_page; ?>"><img src="<?php print $logo; ?>" /></a>
    </div><!-- /logo -->
    <?php endif; ?>

    <?php if ($site_name): ?>
    <h1><a href="<?php print $front_page; ?>"><?php print $site_name; ?></a><sup>beta</sup></h1>
    <?php endif; ?>

    <?php if ($main_menu): ?>
    <div class="topmenu">
      <?php print theme('links__main_menu', array(
      'links' => $main_menu,
      'attributes' => array(
        'class' => array('dropdown'),
      ),
    )); ?>
    </div><!-- /topmenu -->
  	<?php endif; ?>

  </div><!-- /container_12 -->

</div><!-- /head_bar -->

<!-- slider -->
<div class="header_slider">
	<div class="container_12">

  	<div class="sText" id="textSlider">
  	<div class="slides_container">

        <div class="slide">
        	<div class="slide-image"><img src="<?php print path_to_theme(); ?>/images/slider_2_image_1.png" alt="" width="960" height="546" border="0" /></div>
            <div class="slide-text-right">
            	<div class="slide-title"><a href="#">Create <strong>beautiful photo albums</strong> for your clients.</a></div>
                <div class="slide-descr">
               	  <ul>
               	    <li>Personalized, native application</li>
               	    <li>Easy-to-use web interface</li>
               	    <li>Share albums privately or publicly</li>
               	    <li>Unique service for your studio</li>
               	  </ul>
                </div>
                <a href="#" class="button_link btn_green"><span>GET STARTED!</span></a>
                <div class="clear"></div>
              </div>
            <div class="clear"></div>
        </div>

    </div>
		</div>

    </div>
</div>
<!--/ slider -->

<div class="middle">
	<div class="container_12">

	<?php print render($page['middle_top']); ?>

  <?php print $messages; ?>
  <h1><?php print $title; ?></h1>
  <?php if ($tabs): ?>
    <div class="edit-tabs"><?php print render($tabs); ?></div>
  <?php endif; ?>
  <?php print render($page['help']); ?>

  <?php print render($page['content']); ?>

  <div class="text">

    <div class="col col_1_3 box_textstyle-1">
      	<span class="icon_right"><img src="<?php print path_to_theme(); ?>/images/icons/icon_photo_orange.gif" width="72" height="72" alt="" /></span>
      	  	<h3><span>Photo Editing</span> Use a multitude of filters</h3>
          <div class="clear"></div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
    </div>

      <div class="col col_1_3 box_textstyle-1">
      	<span class="icon_right"><img src="<?php print path_to_theme(); ?>/images/icons/icon_iniani_orange.gif" width="72" height="72" alt="" /></span>
      	<h3><span>SSL Secured</span> 256 bit file encryption</h3>
          <div class="clear"></div>
          <p>Sed ut perspiciatis unde omnis iresste natus error sit voluptatem accusantium doloremque laudantium, totam reium aperiam, eaque ipsa quaerites.</p>
    </div>

    <div class="col col_1_3 box_textstyle-1">
    		<span class="icon_right"><img src="<?php print path_to_theme(); ?>/images/icons/icon_favorite_orange.gif" width="72" height="72" alt="" /></span>
    <h3><span>Save Favorites</span> Keep your bookmarks</h3>
          <div class="clear"></div>
          <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora.</p>
    </div>

	</div><!-- /text -->

    <div class="clear"></div>

    <?php print render($page['middle_bottom']); ?>

  </div><!-- /container_12 -->
</div><!--/ middle -->

<?php if ($page['bottom1_left'] || $page['bottom1_right']): ?>
<div class="bottom_1">
	<div class="container_12">

    <div class="row">

      <div class="col col_1_3">
          <?php print render($page['bottom1_left']); ?>
        </div>

      <div class="col col_2_3">
        <?php print render($page['bottom1_right']); ?>
      </div>

    </div><!-- /row -->

    <div class="clear"></div>

  </div><!-- /container_12 -->
</div><!-- /bottom_1 -->
<?php endif; ?>

<?php if ($page['bottom2_left'] || $page['bottom2_right']): ?>
<div class="bottom_2">
	<div class="container_12">

    <div class="row">

      <div class="col col_1_3">
          <?php print render($page['bottom2_left']); ?>
        </div>

      <div class="col col_2_3">
        <?php print render($page['bottom2_right']); ?>
      </div>

    </div><!-- /row -->

    <div class="clear"></div>

  </div><!-- /container_12 -->
</div><!-- /bottom_2 -->
<?php endif; ?>

<!-- footer content -->
<div class="footer">
	<div class="container_12">
        <?php if ($page['footer_top'] || $page['footer_middle']): ?>
        <div class="row">
          <?php print render($page['footer_top']); ?>
        </div>

        <div class="divider"></div>

        <div class="row">
          <?php print render($page['footer_middle']); ?>
        </div>

        <div class="divider"></div>
        <?php endif; ?>

        <div class="row">
          <div class="col col_1_4 alpha">
            	<div class="social-box">
                <a href="#"><img src="<?php print path_to_theme(); ?>/images/social_facebook.png" width="16" height="16" alt="" /></a>
                <a href="#"><img src="<?php print path_to_theme(); ?>/images/social_twitter.png" width="16" height="16" alt="" /></a>
              </div><!-- /social-box -->
			    </div><!-- /col_1_4 -->

          <div class="col col_3_4 omega">
     	   		<div class="copyright">
          		<p><a href="http://infinitepeach.com">infinitepeach.com</a> &copy;  2012. All rights reserved</p>
            </div>
          </div>
        </div>

        <div class="clear"></div>
  </div><!-- /container_12 -->
</div><!--/ footer -->