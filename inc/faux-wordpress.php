<?php
    // -------------------------------------------------------------------------
    // Faux Wordpress Settings/Functions

    //http://codex.wordpress.org/Editing_wp-config.php
    define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST']);
    define('WP_SITENAME', '[!SITE NAME!]');
    define('WP_HOME', 'http://themeprototype.dev');
    define('WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/blog/wp-content');
    define('WP_CONTENT_URL', 'http://example/blog/wp-content');

    // -------------------------------------------------------------------------

    function bloginfo( $field = "name" )
    {
        echo get_bloginfo( $field );
    }

    // -------------------------------------------------------------------------

    function get_bloginfo( $field = "name" )
    {
        if ( $field == "url" ) :
            return WP_SITEURL;
        elseif ( $field == "template_url" ) :
            return WP_SITEURL;
        elseif ( $field == "name" ) :
            return WP_SITENAME;
        endif;
    }

    // -------------------------------------------------------------------------

    function get_header()
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

    /**
     * Retrieve the home url for a given site.
     *
     * Returns the 'home' option with the appropriate protocol, 'https' if
     * is_ssl() and 'http' otherwise. If $scheme is 'http' or 'https', is_ssl() is
     * overridden.
     *
     * @param  string $path   (optional) Path relative to the home url.
     * @return string Home url link with optional path appended.
    */
    function home_url( $path = '' )
    {
        $url = WP_SITEURL;

        if ( ! empty( $path ) && is_string( $path ) && strpos( $path, '..' ) === false )
            $url .= '/' . ltrim( $path, '/' );

        return $url;
    }