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
define( 'DB_NAME', 'codesign_db' );

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
define( 'AUTH_KEY',         '`1 pnQQjYM8(Z$#f`d1P&0$apy/pBFM5{iECOSE$0M;<EElol{OmuG/@.s{Hmo]A' );
define( 'SECURE_AUTH_KEY',  ',^6hAmKN,C5L<aCyIE]Vl*GWwSN%;d5kY((j,5X`DiX ^Hx2iBzv7O2eXcbsX7lW' );
define( 'LOGGED_IN_KEY',    'ST1Kk_e@NSR:q=UJ7:j,l.orBX}5_yH:@F}pW_WA+ r):Gq!DQp%jUdF[trYiA1U' );
define( 'NONCE_KEY',        '[?ZF3N+k2Zlk;*HZ[[iYMoa1tS5!Oz(Y}wKSFPwqRMO7}?O;gsq!Jonv1T<.}bfz' );
define( 'AUTH_SALT',        '3J4eMP3RB5L aBrO0j^<O9>?5Dd-oTZ{_Zkq.Sf( )}OBs-exKrXt~%qEd`ML(2i' );
define( 'SECURE_AUTH_SALT', 'l3v![~Ed@>TrR<:V(m9jbJ%~N!kDAf[$(d9+Eaks}L@6OwEJ1gdg{(F(JmTwjb/<' );
define( 'LOGGED_IN_SALT',   'pRcn2bkRAz$.T>IowGf3p3wN7-qi>l/V!29ZN{~M.v*~$DTF,1w!cqo}[nO1`6-K' );
define( 'NONCE_SALT',       '+uZx2VB`dCH%ajK(uAk -ZoHqkm,(]Bd-I`(/*_SO=cEWHP5MNA.j3$v*^L*0bRl' );
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
