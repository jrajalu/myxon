<?php
/**
 * @package myxon
 * @since 1.0
 */
get_header(); ?>
<div class="wrap column pad-top pad-bottom">
  <div id="primary" class="content-area col-12-12">
    <div id="content" class="site-content pad-right" role="main">
      <ul class="widget-page-list">
        <?php 
          $args = array(
            'post_type' => 'project',
            'title_li'  => '<h1> '. __( 'Projects Details' ) .' </h1>'
          );
          wp_list_pages( $args ); 
        ?>
      </ul>
    </div>
  </div>
</div>
<?php get_footer(); ?>