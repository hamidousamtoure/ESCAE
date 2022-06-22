<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'scae' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'hb+JFgy-!Mg?L?CXYNW1Z!rtR>{t%b2.}~.f1&>F;E3`(oZHn*p&NuQ]9/SmAuz8' );
define( 'SECURE_AUTH_KEY',  '?$ B?zHjc%[)_.;~rfR[ O(T2g$:cr^)T_:9.XOK|:9R[ql3{tHZ=x6Z.+$7QLV2' );
define( 'LOGGED_IN_KEY',    '&#F7NIg6OmOM^NxVO##QPV8ZQ~^h9ubcoicm!ys-O^^Iwx!(=!O^Sq<Q9b``v3~!' );
define( 'NONCE_KEY',        'nmhbA^N~~DKA2~}+_p&PA|:CYeiAI#q?n}<+x`<r{[$S;Mv~~n+d+]5ngWyQXZ5&' );
define( 'AUTH_SALT',        '`kaY<+O`A__t6Ey*2rR35-!C<6R-_cMVwED; h} &g`n0SJ8/zMEN:$5bDwOKKYU' );
define( 'SECURE_AUTH_SALT', 'jg9u/9L( n3n-* xXWj|!-n9vwuXam<i4X|{*+zXE:`DVq@N~b*_wlS[jmkVXE!+' );
define( 'LOGGED_IN_SALT',   'eYkI0>u1VIS]!G<j(f2G;}R>bGXe3S(BkP~I*Vc>dEkFFkZhSlab9c(BUXO<;zK[' );
define( 'NONCE_SALT',       'i=nm,)-q;[WTZ:3k^uVq,hIDpbq,;OL@UBh #cXJ``?CTjAIC8_o^%u@C&pSps+>' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
