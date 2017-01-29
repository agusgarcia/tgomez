<?php
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
define('DB_NAME', 'tgomez');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '|72i^`iZnvIK36}ab#YPyM,I8Fvh>bI=,;Je{%~A,r|$/ebyT?S/j9Lf0V& 9-#_');
define('SECURE_AUTH_KEY',  '@^yi<<ri@3u28cL>ee@02qi]8iF7U-HVf*#Y^0xk%fs$~41:U7vRrsifl|!P{SJf');
define('LOGGED_IN_KEY',    '/j+l9WqCa^3&;%5N?IEAG*_6F1ww#n7b#mLbsInEa?(9KA5jYLg,(YZC)kn= EsI');
define('NONCE_KEY',        '*Q(Td<<<A63kO{</3%3N*>pWRs_r~14PlJ-})5%M{wXiKrK;0KV8Q)$pJypa?7nD');
define('AUTH_SALT',        ':,~;OLkBd}F%`v?v3#l@df}t.HN 0f-OY@)gv9rYV}[? (__.#t:CC;awsy5* _}');
define('SECURE_AUTH_SALT', '`{P!#kmFxTCMpGMeX&abl;85}M{VsQZns@u {69-hz>2-18z(mbmA)D&=llE(|PF');
define('LOGGED_IN_SALT',   'z_4vtK5|I)6^!73wDtuVq!/n3h+- B@CEMuagEmL)05ZFfuT9mQq=iCXEFrAs>eB');
define('NONCE_SALT',       'ar}dECmGLCphC+bxLH-N<X?GK>g-$_##b`)xI)1?}eokRV?%FGKwkEs]^~&m~Yym');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_tgomez_';

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


/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');