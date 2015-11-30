<?php
/**
 * The Header for our theme.
 *
 * @package boiler
 */

?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />

<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon.png">

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<script src="<?php bloginfo('template_url'); ?>/js/lib/jquery.js" type="text/javascript"></script>
<?php wp_head(); ?>

</head>

  <?php if ( is_admin_bar_showing() ) { ?>

  <style type="text/css">

    .global-nav{
      top:32px!important;
    }
    html{
      margin-top:0!important;
    }
    body{
      padding-top: 92px;
    }
    #wpadminbar{
      position: fixed;
    }
  </style>


  <?php } ?>

<body class='blog blog_index'>
  <nav class='navbar navbar-default navbar-fixed-top global-nav'>
    <div class='container-fluid'>
      <div class='navbar-header'>
        <a class='navbar-brand' href='<?php bloginfo('url')?>'>
          <img src='<?php bloginfo('template_url'); ?>/images/logo_blog@2x.png' style='top:3px; position:relative;' width='171px'>
        </a>
        <div class='visible-xs'>
          <div class='pull-right'>
            <button aria-expanded='false' aria-label='toggle menu' class='tcon tcon-menu--xcross menu-button' data-target='#collapse-menu' data-toggle='collapse' type='button'>
              <span aria-hidden='true' class='tcon-menu__lines'></span>
              <span class='tcon-visuallyhidden'>
                toggle menu
              </span>
            </button>
          </div>
        </div>
      </div>
      <div class='hidden-xs'>
        <div class='desktop-nav'>
          <form class='navbar-form navbar-right'>
            <a class='btn btn-primary' href='http://www.evercheck.com'>
              Visit Evercheck.com
            </a>
          </form>
          <div class='navbar-right'>
            <ul class='nav navbar-nav'>
              <li class='dropdown'>
                <a class='dropdown-toggle' href='#'>
                  Topics
                </a>
                <ul class='dropdown-menu'>
<?php 
    $catargs = array(
  'show_option_all'    => '',
  'orderby'            => 'name',
  'order'              => 'ASC',
  'style'              => 'list',
  'show_count'         => 0,
  'hide_empty'         => 1,
  'use_desc_for_title' => 1,
  'child_of'           => 0,
  'feed'               => '',
  'feed_type'          => '',
  'feed_image'         => '',
  'exclude'            => '',
  'exclude_tree'       => '',
  'include'            => '',
  'hierarchical'       => 1,
  'title_li'           => __( '' ),
  'show_option_none'   => __( '' ),
  'number'             => null,
  'echo'               => 1,
  'depth'              => 0,
  'current_category'   => 0,
  'pad_counts'         => 0,
  'taxonomy'           => 'category',
  'walker'             => null
    );
    wp_list_categories( $catargs ); 
?>
                </ul>
              </li>
              <li>
                <a href='https://www.evercheck.com/account/login'>
                  Sign In
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class='visible-xs'>
      <div class='collapse navbar-collapse mobile-nav' id='collapse-menu'>
        <ul class='nav navbar-nav'>
          <li class='dropdown'>
            <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
              Topics
            </a>
            <ul class='dropdown-menu'>
              <?php wp_list_categories( $catargs ); ?>
            </ul>
          </li>
          <li>
            <a class='bold-link' href='https://www.evercheck.com/account/login'>
              Sign In
            </a>
          </li>
          <li>
            <a class='bold-link' href='https://www.evercheck.com/account'>
              To Evercheck.com
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>