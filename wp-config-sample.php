<?php

define('DB_NAME', 'nom_de_votre_base_de_donnees');
define('DB_USER', 'votre_utilisateur');
define('DB_PASSWORD', 'votre_mot_de_passe');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');


define('AUTH_KEY',         'mettez votre clé unique ici');
define('SECURE_AUTH_KEY',  'mettez votre clé unique ici');
define('LOGGED_IN_KEY',    'mettez votre clé unique ici');
define('NONCE_KEY',        'mettez votre clé unique ici');
define('AUTH_SALT',        'mettez votre clé unique ici');
define('SECURE_AUTH_SALT', 'mettez votre clé unique ici');
define('LOGGED_IN_SALT',   'mettez votre clé unique ici');
define('NONCE_SALT',       'mettez votre clé unique ici');


$table_prefix = 'wp_';


define('WPLANG', 'fr_FR');


define('WP_DEBUG', false);


define('WP_HOME', 'http://votre-domaine.com');
define('WP_SITEURL', 'http://votre-domaine.com');




if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';

