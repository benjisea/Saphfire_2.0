<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package saphfire
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="sidebar" id="secondary" class="widget-area" role="complementary">
	<div id="about">
      <h2>About Me</h2>
      <!--<img src="img/me.jpg" style="float:left;" width="60" height="60"/>-->
      <p>A high schooler with  thoughts on new age philosophy! Here you will find my thoughts on eating fried chicken and pizza.</p>
    </div>
    
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
  
</div><!-- #secondary -->
