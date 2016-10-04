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
define('DB_NAME', 'redcommerce');

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
define('AUTH_KEY', '{TivME|8a0-y]]K)7$JPB#@g50<>vDwd{o--PFvS&#73]#vIUXv0IOr`Ak51TG`6');
define('SECURE_AUTH_KEY', 'i``aD6x~gX^EE.^;x{v->T6$-O8]~5HNA|;CSM1[y>= |4O]KSQ2u^1(Ss}6=NbH');
define('LOGGED_IN_KEY', 'G2- bI4hUd@Cy,OH;hCxd8cQ,7_-D~)}g^@OV{gj>}K#?y`cUd/wKyG>+1sZ0c;}');
define('NONCE_KEY', '4C``Y9Z|Aq@oX}:J^xL3;dOF;jjpE!ZQAof~Zga.p7AInMGP_ 7oz!:$YPG%R;F^');
define('AUTH_SALT', 'Xr2$#y*VcZ+(J!4BrGc%-RD|%X8wof0mQ7XoExQTczj`x::o-?+Vi@>kV)~.^!|.');
define('SECURE_AUTH_SALT', '9Ys2=_q%]?{t)9VO;vjZ^PLY{hIsDz+P}Y^,)8AE:FQ$e|dEz2Fy6E`+`1+%wWIR');
define('LOGGED_IN_SALT', 'B&&0b1fu-gLlBN{nJK1k10cQfQbmjgn}}t!g7|bB##VL]808K@T%kki;dTxv>)x?');
define('NONCE_SALT', '2fO74&=IYnmOwLpZ57$OT:60ig=)MeK[876!jv1v<Bi9Yfj`0jMhVfM.(.[LF{od');

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

