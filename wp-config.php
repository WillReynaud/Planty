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
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ']%F0l%~G#Sc[PO@!Yp&Wp5G!-N{OiVhh8X XAw:W2}]qG*~7%9%_8$2+Mc Pp!UQ' );
define( 'SECURE_AUTH_KEY',  '`.d7/$z#`=7zb#TC13*~9DYin^Yi~`S/^rs@sV)HI,_~d-^o|#&1aC>}h$R4JO![' );
define( 'LOGGED_IN_KEY',    ':7EV>SFmUm/K(WfGq+vxE#y7L*JMrtJa/NcEoi;&%D(8(`M~khKW-{Ml=&0|1?7-' );
define( 'NONCE_KEY',        'Be?bfb2%@|eJZQg!i=|swd<!(XlNM7-wI,!P$S[bGX0ymJq|exD2aLNIMJ|:Fp#g' );
define( 'AUTH_SALT',        'O`)O~dwHBFj4fxp{f;JTPmT~+ed%>*UB2Pl|p#&Xkr8/9UnS@Rh:MU0v$|LwPh9f' );
define( 'SECURE_AUTH_SALT', 'c!q/k}|:)jh{,Gl5|-a.V(3.=J+`4hC~6dX)L21wk66uCAGEt6e5[.&T$y3S9w|5' );
define( 'LOGGED_IN_SALT',   '[{ePT3D2D$M)HKc]>BCGDvG#(wO&NfGJNhA*OApeu+A`Rg)N8.Nj<W|7|mqWOaRW' );
define( 'NONCE_SALT',       '=Zn}kWgN=%s%?;N D~3XxR*,7*yT)DY#9i9(^?tVxt#!b.RBf7@k2wgs sFH!M;>' );
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
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', true);

// Contact form
define( 'WPCF7_AUTOP', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');