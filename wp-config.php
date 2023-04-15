<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsens installationsrutin, utan kan kopiera
 * denna fil direkt till "wp-config.php" och fylla i alla värden.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för databas
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Databasinställningar - åtkomstuppgifter för databasen får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define( 'DB_NAME', 'wordpress-tema' );

/** Databasens användarnamn */
define( 'DB_USER', 'Maria' );

/** Databasens lösenord */
define( 'DB_PASSWORD', '112233' );

/** Databasserver */
define( 'DB_HOST', 'localhost' );

/** Teckenkodning för tabellerna i databasen. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '|XP16^&LT^,g^K0S3qfAHy4)I2,!1Iae }$U2i<$Q%}fH$<V/4oN!Rgm-h2Vn#h=' );
define( 'SECURE_AUTH_KEY',  'H] FSkW|HUWjw, #4>,xf)N]m1 ~-KGxLVaV(;C`.XgtHK,0|ev~*vXQE;{;R#T(' );
define( 'LOGGED_IN_KEY',    ')~{y@L+G{o^T/|_1cH!T]ky| Q3:QiCEJPq9K?>WR/|z*b<?o!(Qh8!ckWh%LLpz' );
define( 'NONCE_KEY',        '-Hqay1NAtd5S9}lx+4SP3#,1pP9DH[yTuO/0tz32`oYss$l5`-s`:1Iny*YQ{ 43' );
define( 'AUTH_SALT',        'Jciod fO n7L{7vKjn3LfY(cupI]fi{!&szv$,l~h$/e2tiwICI]z!8=-4o5#%t<' );
define( 'SECURE_AUTH_SALT', '4[SmM3ynnc<^:8_tV%/sA<<po3HkT_C<.hV`(]Vdk(X>o_y5NW(XFyy5~!xRX+oD' );
define( 'LOGGED_IN_SALT',   'Kl)b|C=g-/N|pSn-5&kZ}%*Q!1YTcuJ+I54nrGMbf WpKkp@1:$d_q!cj.~L~K[O' );
define( 'NONCE_SALT',       'MqKe-9=>RiL<(3T>z3 IFt6e0e!k0.T_d$Vs+jn6+i&~vqKt7wSICS<m2 0f+RV3' );

/**#@-*/

/**
 * Tabellprefix för WordPress-databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Använd endast siffror, bokstäver och understreck!
 */
$table_prefix = 'wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det rekommenderas att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */ 
define('WP_DEBUG', false);
/* Lägg in eventuella anpassade värden mellan denna rad och raden med "sluta redigera här". */




/* Det var allt, sluta redigera här och börja publicera! */

/** Absolut sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');