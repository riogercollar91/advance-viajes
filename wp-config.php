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
define('DB_NAME', 'advance-viajes');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '/sMb`H1nxKt~CPVeJjF=.969](apS{}#jWktj%`EiXtJqE2*u]$RnSs,hI1H<<dL');
define('SECURE_AUTH_KEY', 'Otv?2f7{pFU6N]0p]HV^IGsa= auggJKMr52;6`yjMvDx?c/*ca+=))3r:`1tQJR');
define('LOGGED_IN_KEY', ',MOj:;QKs`%O1[~@ff?/^,Xuz9tpXm|tZ~bK?Eo>%tzUZ3IPuS%&;2 ^;;8AEmhH');
define('NONCE_KEY', '^u`&-|_.*Lj)753` 09oXKMX.h9M[T~VvQY(+,}@{]=z=(=@m99G*9Y_^-=+=h&n');
define('AUTH_SALT', '3v1Wy^(ms&$ y-N%RQZF|7js}r!=7**G|M(hQHZw>x>_a&^*@!].|/E<|Nz51(xE');
define('SECURE_AUTH_SALT', '&Gs{*1Xc<(p$&ZLl&-9(?3[hgqf;&i3t:;1M%v,N)>5q1LH[ZB~UGXe}1+{z/uq)');
define('LOGGED_IN_SALT', 'i]_>9L!}&]}Rxgy6/6e89_f13V$mbl}-`e,7Ow0Rk@?7}7=xRW4r?rgz}wGik@<-');
define('NONCE_SALT', 'c<:/q+&gJGm=^yPqdctZv_l]31O<uilvLWq^v*luN^MV3mg&iPYng%k=d(^t3idn');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


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

