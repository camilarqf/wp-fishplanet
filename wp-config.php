<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wpdb_fishplanet' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'wpdb_user' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '123456' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'h%weu*~<rn4DVZN]up,o`WT2ay|$*(LP|MZNz>1W~>8}JT6U|_G4Oo*2dofNpS84' );
define( 'SECURE_AUTH_KEY',  '>^.dVO3n-1S@@@oY[XBQ,Pn<**]]z3O%s?5wWpoyQG1cUrXoKTj#m*Oz<mX;=*:#' );
define( 'LOGGED_IN_KEY',    'GYLHb{Jn-o3YFrz(-8/?Pz({{#]F`$:VQt<$@ZK#s>mSmEG-&Mfpt *KmH*IUmFB' );
define( 'NONCE_KEY',        'Jd8>}m/Na$hZ^baA7k[HZd~92MH+$W]qGAS+89qX4F(]6+!l7j;rDdOS].VgdV83' );
define( 'AUTH_SALT',        'N76OMHl-Xcz2!Ezc$/J0pkA_GtHBq>5>|az#m,nx@sik*$_1K60JAb76Lskq1pRU' );
define( 'SECURE_AUTH_SALT', '/`$/ke6ZW( eV`bj7^Yr1NcWyd</{&us`{,g_B@:sm[ I9GgYSxb6bb@hY}rvJ/k' );
define( 'LOGGED_IN_SALT',   'SP*{gveG?*)E.{(W/qi;E+ta3FYuLi&p$+{D%c{.{3nH!Q|Bun9UPT]EZ$vyF+s]' );
define( 'NONCE_SALT',       'iq0a|m<uU~(zZA*Vrc%[n:LfU=m>:5Q*w{m#Z)b;%FugSq7w8FUlTED}UKn^$PVi' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
