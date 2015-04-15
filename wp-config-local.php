<?php 
// Local server settings
// Overwrites the database to save keep editing the DB
define('WP_HOME','');
define('WP_SITEURL','');
 
// Local Database
define('DB_NAME', '');

/** MySQL database username */
define('DB_USER', '');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/*

// Use these settings on the local server
if ( file_exists( dirname( __FILE__ ) . '/wp-config-local.php' ) ) {
    include( dirname( __FILE__ ) . '/wp-config-local.php' );
  
	// Otherwise use the below settings (on live server)
	} else {



	}

*/