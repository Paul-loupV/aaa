<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'parcours' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'parcours' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'parcours' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'HE,aZwC#8]jHW$hTj!6$iI9qZTc/WLya2@Vj?^s`e%UUyZ{DjEM~|;P1JWC?ZMu(' );
define( 'SECURE_AUTH_KEY',  'N&jFKhPW$8/5G9[2R1%wi$$,0 O-)_L=5Xb8qmQS`LNt5CjNrwYf}+gvF37PxI8_' );
define( 'LOGGED_IN_KEY',    '1BjA^D#{^Q5]->ev4roa)R5*u-]p3iRePYii;+[ Zyc:<}87h*e%&O6B)4*[cbhW' );
define( 'NONCE_KEY',        'a~c(>J8az/gh SGjw,lrUve-c,w~=>d?{^H!8rYWIp{D[?nIAnKflnX7C<O]92nx' );
define( 'AUTH_SALT',        'H U`bjcV+(qr0,%I<f<mW$|dt|=&DLLT+g2bwL$MZ%Znd6/T%kg rV6[37#k$<Nq' );
define( 'SECURE_AUTH_SALT', 'M3/P_:JKLID[TV,HvC7v/MRZ2T`$=Fan;,;vDaz$x.B?|6rZ/u(Qst@8^ca!|@;0' );
define( 'LOGGED_IN_SALT',   '$b>Dw#>j3&*#RA/)dHD8%)6+{zYdb_z$0hN728(,/Dx=06w3x?<~=hcMu}M1vE?#' );
define( 'NONCE_SALT',       '`4C*^vfv-Kn!Qg8Gk+Q/{JY)tcI_xg^KL|d8#7o2zrkVbMSYCq(=H{EVl}iENe o' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
