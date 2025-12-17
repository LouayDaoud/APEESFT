<?php
/**
 * Configuration WordPress pour APEESFT
 * 
 * Copiez ce fichier vers wp-config.php et remplissez les informations de votre base de données
 */

// ** Paramètres de la base de données ** //
define('DB_NAME', 'nom_de_votre_base_de_donnees');
define('DB_USER', 'votre_utilisateur');
define('DB_PASSWORD', 'votre_mot_de_passe');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');

// ** Clés de sécurité WordPress ** //
// Générez vos clés sur : https://api.wordpress.org/secret-key/1.1/salt/
define('AUTH_KEY',         'mettez votre clé unique ici');
define('SECURE_AUTH_KEY',  'mettez votre clé unique ici');
define('LOGGED_IN_KEY',    'mettez votre clé unique ici');
define('NONCE_KEY',        'mettez votre clé unique ici');
define('AUTH_SALT',        'mettez votre clé unique ici');
define('SECURE_AUTH_SALT', 'mettez votre clé unique ici');
define('LOGGED_IN_SALT',   'mettez votre clé unique ici');
define('NONCE_SALT',       'mettez votre clé unique ici');

// ** Préfixe de table ** //
$table_prefix = 'wp_';

// ** Langue ** //
define('WPLANG', 'fr_FR');

// ** Mode debug (désactiver en production) ** //
define('WP_DEBUG', false);

// ** URL du site ** //
define('WP_HOME', 'http://votre-domaine.com');
define('WP_SITEURL', 'http://votre-domaine.com');

/* C'est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once ABSPATH . 'wp-settings.php';

