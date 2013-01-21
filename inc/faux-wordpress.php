<?php
    // -------------------------------------------------------------------------
    // Faux Wordpress Settings/Functions

    //http://codex.wordpress.org/Editing_wp-config.php
    define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] );
    define('WP_HOME', 'http://example.com');
    define('WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/blog/wp-content');
    define('WP_CONTENT_URL', 'http://example/blog/wp-content');

    // -------------------------------------------------------------------------

    function get_bloginfo( $field )
    {
        if ( $field == "url" ) :
                return WP_SITEURL;
        endif;
    }

    // -------------------------------------------------------------------------

    function get_header( $section = '' )
    {
        include 'header.php';
    }

    // -------------------------------------------------------------------------
    
    function get_footer()
    {
        include 'footer.php';
    }

    // -------------------------------------------------------------------------
    
    function get_sidebar()
    {
        include 'sidebar.php';
    }

    // -------------------------------------------------------------------------
    
    function pre( $var )
    {
        echo "<pre>";
        print_r( $var );
        echo "</pre>";
    }