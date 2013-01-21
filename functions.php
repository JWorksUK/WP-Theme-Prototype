<?php
    // -------------------------------------------------------------------------

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    // -------------------------------------------------------------------------
    
    date_default_timezone_set('Europe/London');

    // -------------------------------------------------------------------------
    
    function get_bloginfo( $field )
    {
        if ( $field == "url" ) :
            if ( isset( $_SERVER['SERVER_ADDR'] ) && $_SERVER['SERVER_ADDR'] == '127.0.0.1' )
            {
                return "http://www.local.dev";
            }
            else
            {
                return "http://www.local.com";
            }
        endif;
    }

    function get_header( $section = '' )
    {
        include 'header.php';
    }
    
    function get_footer()
    {
        include 'footer.php';
    }
    
    function get_sidebar()
    {
        include 'sidebar.php';
    }
    
    function pre( $var )
    {
        echo "<pre>";
        print_r( $var );
        echo "</pre>";
    }
?>