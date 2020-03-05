<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wp_mediumelia' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'd7k+2liy~5<z|g42t85dJ]U@q}pJ]{-6nH0M{u@T}dKH_C#9}|=gZHddJN(P-p6`' );
define( 'SECURE_AUTH_KEY',  '<Vn4AMcLQ=V k1h5tmK@Gp_dF}+[(j{%Fo0)+MpWbIQ4x84`M;lQa0{P]wNYH&W~' );
define( 'LOGGED_IN_KEY',    'sG<bi:YOqUC( w;|Fg=rvdT01u 4I47%;=?aVgCU0dj/]Yt/@KN~Oy*aJ;2$z|l%' );
define( 'NONCE_KEY',        'vF+?=Yq!0!#GP>M}l}Rs;vbKsP&aC&qQU7pGVYAZAljZ0RK19b-_?}i#p)uk^zD ' );
define( 'AUTH_SALT',        '?Nc[SzXLkSKOAu{{vL{rVp^?4wa+N#{P:*BWt)=R<ws.$<*,i4!:zG>Raq?ruP}(' );
define( 'SECURE_AUTH_SALT', 'ra]TfH05b-FuI(CDHl87{/I!%C.09,&dsF=GOC+)+Y]`*&J=^ts|o<AJit{=o|Pl' );
define( 'LOGGED_IN_SALT',   'M!7nO2:iR(SEbb/eae=h.tJ^.}EUG{+w${_EAu]#;j|Qv,! D##rk6J0Dt=Oh@=x' );
define( 'NONCE_SALT',       '[x:s59I|JNjm4TS`9%@SRPkf1o87_(Zt8/1)jQ1#Nn/$$4/iCcwPR.:`yTpAw[EZ' );
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
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
