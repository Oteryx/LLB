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
define( 'DB_NAME', 'lelabofou' );

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
define( 'AUTH_KEY',         '}VlG_k(MK_5cy53EDSAa,I|%FV8}3TvPQlDvE_{yuCpOR:-=>tbV*4,]2yEnYLy-' );
define( 'SECURE_AUTH_KEY',  'QFhtV#zoD_Ag.(NYL[ugFAb|fs&VlGL-,~EVcKlw$O5c]8`1xSb;t&Xb(Q=avrD]' );
define( 'LOGGED_IN_KEY',    '<.Nwmuz&ev^?G~Z5J9[ZeW&)~+S Wmx_w/9R<pqE^V+;IPvBF7*2`2B=rPys$DB{' );
define( 'NONCE_KEY',        'f=pfXd9Rb.|SGy=N2KxNphrc]Xfex`[0+wUfh|rd3I7Qr%$;M9W/Z3VKRgT &YL1' );
define( 'AUTH_SALT',        'L}zo^nxs3;;:yF5i_ /4aoUjXbIKc?jdZ?@G~DN/)ZEDdNzN=^uAhm+sfUnu(yNq' );
define( 'SECURE_AUTH_SALT', '1sRnt~y`KW4qa#g,7+<b$B|78^f>%/LX{yY_|ZoL0<+U~n8KxNx|uD]TIkSqH6{2' );
define( 'LOGGED_IN_SALT',   '4(l.^}`U:a1#=D7t*_KbiJ8/a]#@,gwPkApg{842J,Tdjtay& |c~M1&=<zG!,SH' );
define( 'NONCE_SALT',       'x:p-@X`20@;1JTdm.{UhIB.%5EJa4JWO:64T]O%++2Bo6Q{S1ll;Pd2/+ :k.[Y2' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
