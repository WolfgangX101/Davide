<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file definisce le seguenti configurazioni: impostazioni MySQL,
 * Prefisso Tabella, Chiavi Segrete, Lingua di WordPress e ABSPATH.
 * E' possibile trovare ultetriori informazioni visitando la pagina: del
 * Codex {@link http://codex.wordpress.org/Editing_wp-config.php
 * Editing wp-config.php}. E' possibile ottenere le impostazioni per
 * MySQL dal proprio fornitore di hosting.
 *
 * Questo file viene utilizzato, durante l'installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via
 * web,è anche possibile copiare questo file in "wp-config.php" e
 * rimepire i valori corretti.
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - E? possibile ottenere questoe informazioni
// ** dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define('DB_NAME', 'ecomm_davide');

/** Nome utente del database MySQL */
define('DB_USER', 'root');

/** Password del database MySQL */
define('DB_PASSWORD', 'root');

/** Hostname MySQL  */
define('DB_HOST', 'localhost');

/** Charset del Database da utilizare nella creazione delle tabelle. */
define('DB_CHARSET', 'utf8');

/** Il tipo di Collazione del Database. Da non modificare se non si ha
idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * E' possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * E' possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'RP^CVmS =R}/PFo#,7&UDs;87NftH&*ZAeV|OR*pczN~>pc(IXc),lwSqvt#~V&q');
define('SECURE_AUTH_KEY',  'nW^YXpeA^^+~2-HASSKC+eOX~(` o#(nE!|V>D-X0$h,89JhGBax0^R-J9vJBp+ ');
define('LOGGED_IN_KEY',    'l5zf/U^Jm+r^FU<1ASc%SvsML9.|~xzuRo[X&>{5{U>[B8MHslV^NP%i-t9},_C3');
define('NONCE_KEY',        ']gp#vg:N)c,q-F.$|{Y/8h0sPizG4`J+KquT)yqQa,|rD]vUp-Iz`z-$2w6BJ+|[');
define('AUTH_SALT',        'z43uDnmxZ|*nbeW!gYY+]NflBha;mhax,gM ,MU|<{%*FfNeD8Hk.^$IMv0Ug0w>');
define('SECURE_AUTH_SALT', '|G+K$W2R>(x5(zP0Q[:sd4ausTw:gjv*OWS/ANRaY>Za?m#J@[1+%nVmk+cV`f#^');
define('LOGGED_IN_SALT',   '6Pp*W)w;prBuw>t ?3 xp-#P.y]SO=v`C-g_suSKjQR^#?ySP.I8D3w->8B,oF*q');
define('NONCE_SALT',       '@ u$*~q[1]}-ro>CHa)Y3NsV)?y++aDy`+iK:]/rI=XeQuM $.-tqZ:|sZM>1;7i');

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress .
 *
 * E' possibile avere installazioni multiple su di un unico database if you give each a unique
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix  = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * E' fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all'interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta lle variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
