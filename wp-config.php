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
define( 'DB_NAME', 'Mysql' );

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
define( 'AUTH_KEY',         'i@c@4,[Zv5FBPx;04#5+!r:{M|jxNDrN%Fh MA$$#re.X$V^k]iU!;+#oE+qKR,2' );
define( 'SECURE_AUTH_KEY',  'P>y.c2H%TvK4$36D6i*1fy*Z#$Qi,bwt<LXe;j?zm|~7>Y6gK`RxZ,DG+)a;FpJP' );
define( 'LOGGED_IN_KEY',    '%>5xlG;HtrZ@@Kylj*xGUtWO>*]TX|^u]^(o.i]-4jr]a9Kq/<_3&rg=UOliyi1d' );
define( 'NONCE_KEY',        'DO~CX7g~xy9J4N+WgZ0%B#Nhnx1hKq&|$=fu$t`|g{Xv7d+J|@R]e|0Kl~AR)[7W' );
define( 'AUTH_SALT',        '9Hw^y@j6d:1{~kLYNSJ{p5T]/i!N<zs)/3n&Klq7zHr_x[T3/K=rKH2;GP4ev6z-' );
define( 'SECURE_AUTH_SALT', 'B7J.5Q9RhfEE@t>s(rZgXhl;(jEX(2rsyWi@Iw4uS^U/>LLHUD,J=?qv_|i|:pVI' );
define( 'LOGGED_IN_SALT',   '.xTw-&L>)Fwy.Z9dL%?OAt8^u&itO] C7#^xN8TAm-W@b9sTErsLp7()!IfZvWj8' );
define( 'NONCE_SALT',       'Gur.K2#rhU*XG7kOqO.f?X~k@I6tZA%+S<PE|K2kW- j4E/_K-vS]st6i/|Ri#cF' );
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
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false);
define('DOMAINE_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/html/wordpress/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
