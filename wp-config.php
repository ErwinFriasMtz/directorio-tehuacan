<?php
/**
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'directorio_tehuacan');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/** Permite trabajr con el plugin JetPack Localmente */
define('JETPACK_DEV_DEBUG', true);

/* Selecciona el archivo es_MX para traducir el tema */
define("WPLANG", "es_MX");

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
 define('AUTH_KEY',         '-)IB/I%?<mG?GGn#bEanm/dv<IG`]3MDcv}[>/ht`)U8<1JO=!nYjkWuxC8XMqi:');
 define('SECURE_AUTH_KEY',  'zi>DK!q0@o6x|v7AY,l7tx5k*&I[kb0+#v)tY!uw1uTN6Dwe?3brYb+H?x&:cx3A');
 define('LOGGED_IN_KEY',    '06iUb,6N,<{n2taJus5`(P&AA!H~ZRH4(tvyLK|t|Ly`8z-M {9$z^$kFvFW|%%3');
 define('NONCE_KEY',        '%=I-o<87y;0NuE-Z!jS~O(ME%AZg{TK42@@XaqG6!k+:0AR`-w%3gniYjxy@|*G%');
 define('AUTH_SALT',        '=W)OQ(e|FO*UDvV2M@Y{wHvR.MsR%]bJz9>95=7!O!/u^,lTgu$h9E&3e[%YeCTC');
 define('SECURE_AUTH_SALT', '!^lBEUsWV4#nY-XFB>X~d{1C>LaQc?p+ARlML!Jz><[N$n:@2]>E/f:@%Qm/l~;.');
 define('LOGGED_IN_SALT',   '_u^uGDRqXVtAC0<Vyyw+@|~K6||p?{.sOAPRi<0R@1 (1OU~)KW*s mWflQzLwLs');
 define('NONCE_SALT',       '%J2AH[7S!{e/xyHp]p|#jF<&COU1_8M<*7XxAqET|$xW|6_+223SDhv%x-BvIh5r');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'dt_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
