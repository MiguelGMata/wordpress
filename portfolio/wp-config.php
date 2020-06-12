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
define( 'DB_NAME', 'portfolio' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '2395' );

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
define( 'AUTH_KEY',         'On<:l!aXA2Dv!3nO$TS9dyXFLWepfqI&NJJ{d->R#i*tE/Vg-6kFCl=SQeD8OtI=' );
define( 'SECURE_AUTH_KEY',  '0LF.BKMRW}>cXex9<}&U5y*va^~;(z y<i0 iMrz:N[oB%Hrf^%L@~z[iIu.9G;;' );
define( 'LOGGED_IN_KEY',    'Cp=1;Hc1K##IrBIbKlW5aN`v0Xg@k~hBR4}vs+^0:<8qCT##RBT@SiR&!l)YG]m3' );
define( 'NONCE_KEY',        '@tF-d08_dBHUHVXK9^%SGsTq3|2:8Q4.He+?qxm46/`}@-+ ?@*3WXoq*~o}d9QQ' );
define( 'AUTH_SALT',        'eO@b994@Q_h,coba7SXK![]Pplg<nBx-`zy_c?OQ1BKZZFW[RSV`-p2[{>kg?Db.' );
define( 'SECURE_AUTH_SALT', 'C#gN80ZI+,@8J^fb1h(iKaEO{Wr`#aal]Q hr()Htn-Kz!wc8 .EhX.TY?:Tu1=y' );
define( 'LOGGED_IN_SALT',   ']hJz/lM-wZM16lVBnw@`jt{R%8As@:@G6Z7:xrh=ITi3O,)NVz$Plky&f.$<}xkt' );
define( 'NONCE_SALT',       '@n`WFT_Cy3x7jqq^ _9m.2?]34JC-Y.zH^8w0IQJgrQj1~>[R{yd.MI&$d(v`k5k' );
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

