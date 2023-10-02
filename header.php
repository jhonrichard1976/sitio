<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie.css">
<![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>
        <?php
            if (function_exists('is_tag') && is_tag()) {

                echo 'Etiqueta &quot;'.single_tag_title('', false ).'&quot; - ';

            } elseif (is_archive()) {

                wp_title(''); echo ' Archivo - ';

            } elseif (is_search()) {

                echo 'Resultados de búsqueda para &quot;'.esc_html($s).'&quot; - ';

            } elseif (!(is_404()) && (is_single()) || (is_page())) {

                wp_title(''); echo ' - ';

            } elseif (is_404()) {

                echo 'No encontrado - ';

            } echo get_bloginfo('name');

            if (is_home()) {

                echo ' - ' . get_bloginfo('description');

            }
        ?>
        </title>

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/widget2018.css">
        <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/img/gob_favicon.ico"  />

        <?php get_template_part('inc/header', 'meta'); ?>

        <?php wp_head(); ?>

    </head>
    <body <?php body_class(); ?>>

        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          // reemplazar ID_DEL_APP_DE_FACEBOOK
          js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&appId=ID_DEL_APP_DE_FACEBOOK&version=v2.0";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    <div id="menu-movil">
        <div class="wrap">
            <nav id="menu-principal">
                <!-- Menu Principal - Móvil -->
                <?php $args = array(
                    'theme_location' => 'menu_principal',
                    'container' => '',
                    'menu_class' => 'menu',
                    'menu_id' => '',
                    'echo' => true,
                    'fallback_cb' => 'wp_page_menu',
                    'before' => '',
                    'after' => '',
                    'link_before' => '',
                    'link_after' => '',
                    'items_wrap' => '<ul id="menu-main-menu" class="menu-main">%3$s</ul>',
                    'depth' => 0,
                    'walker' => ''
                );

                wp_nav_menu( $args ); ?>
            </nav>
        </div>
    </div>

    <header style="background-image:url('<?php header_image(); ?>')">
        <div class="wrap">

        	<h1 id="logo-main">
                <a href="http://web.minsal.cl">
                    <img src="<?php echo (get_theme_mod( 'gobcl_logo' )) ? get_theme_mod( 'gobcl_logo' ) : 'http://placehold.it/180/0168b3&text=Isologo+(180x180)' ?>">
                </a>
            </h1>
<script type="text/javascript">
window.____aParams = {"gobabierto":"1","buscadore":"1","icons":"1"};
(function() {
//var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
//po.src = document.location.protocol + '//apis.modernizacion.cl/barra/js/barraEstado.js';
//po.src = document.location.protocol + '//apis.digital.gob.cl/barra/js/barraEstado.js';
//var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();
</script>
            <nav id="menu-principal">
            <!-- Menu Principal -->
                <?php $args = array(
                    'theme_location' => 'menu_principal',
                    'container' => '',
                    'menu_class' => 'menu',
                    'menu_id' => '',
                    'echo' => true,
                    'fallback_cb' => 'wp_page_menu',
                    'before' => '',
                    'after' => '',
                    'link_before' => '',
                    'link_after' => '',
                    'items_wrap' => '<ul id="menu-main-menu" class="menu-main">%3$s</ul>',
                    'depth' => 0,
                    'walker' => ''
                );

                wp_nav_menu( $args ); ?>
            </nav>


            <a href="#" id="menu-movil-trigger">Menú Principal</a>

        </div>
        </script>
<!--[if lt IE 9]><script src="/sites/all/themes/minsal/js/html5.js"></script><![endif]-->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-22054007-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

    </header>
