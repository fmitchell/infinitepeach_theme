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

<div class="header_thin">
	<div class="container_12">

	 <?php print render($page['header_thin']); ?>

    <div class="head_title <?php print $title_attributes;?>">
      <?php print render($title_prefix); ?>
    	<h1><?php print $title; ?></h1>
      <div class="sub_title">
        <?php print render($title_suffix); ?>
      </div>
    </div>

    </div><!-- /container_12 -->
</div><!-- /header_thin -->

<div class="middle">
	<div class="container_12">

	<?php print render($page['middle_top']); ?>

    <div class="grid_12 content">
      <?php print $messages; ?>
      <?php if ($tabs): ?>
        <div class="edit-tabs"><?php print render($tabs); ?></div>
      <?php endif; ?>
      <?php print render($page['help']); ?>

      <?php print render($page['content']); ?>

    </div><!--/ grid_12 content -->

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

<?php if ($page['footer_top'] || $page['footer_middle']): ?>
<!-- footer content -->
<div class="footer">
	<div class="container_12">

        <div class="row">
          <?php print render($page['footer_top']); ?>
        </div>

        <div class="divider"></div>

        <div class="row">
          <?php print render($page['footer_middle']); ?>
        </div>

        <div class="divider"></div>

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
<?php endif; ?>