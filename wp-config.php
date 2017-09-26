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
define('DB_NAME', 'nike');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'sO!q~bb|y@ndA6g|>Vp@XD<Mq0wO{h,}&`LgHTawd1(b`>rcw8+zOVQSYQ|Ab=(Q');
define('SECURE_AUTH_KEY',  '%8B0Z{3mB!KR_[!*4WJpo!mf}(SQ@nHX)aI]*o[7:^g/;9^$-v=cQ>w}5~4X^mRW');
define('LOGGED_IN_KEY',    'j:[IA_%q:9:Z[ j _@#ssiBg6qFqPi,{IR/;9%_u7;>?H:oZ~05!TZ3{&<{Us~x7');
define('NONCE_KEY',        'KtH5>*I{_4u*oBj0k6bq`;G}oWo7plCqhLFM7Ll,;{[}^>N~O(VnJR`EKy+*u#_^');
define('AUTH_SALT',        'c4yk@YQ~^Hpe(<c~P{?i2/Wh@8V=D:&G1}]{>NQX|~URsADyoi}#5_VUM,L0[TK]');
define('SECURE_AUTH_SALT', ' 9hD^aU#X_1_A|`$ou:<0|t^U&<TY$;)dVek5VkC;]X{_60D``+6&7^Kc/T502qW');
define('LOGGED_IN_SALT',   'q&5=tOTG2C_8{s$|;n:x3puNmm1oui>;)%V:FlOG_[!B8KSJCoz9Eb*ub!%[oYwP');
define('NONCE_SALT',       '[;1,v_E39NU&&dsc;0@( KC_ptfkg#EtV(GXG ^E+SnPEC=|=SKb%O@*/@-9;ita');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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