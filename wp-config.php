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
define('DB_NAME', 'emedia');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'U3v3BKG+S) L^H}KUO`~uJ$TC-o@nj)rKzj*ZMX_b=j.pH/mw>G9id1h )pba|Gv');
define('SECURE_AUTH_KEY',  'QlIEU%vbJ~4[~@p#YRps#9MP(fh/_},X#06cW*)#ij0Oc`0KHQ[Y`S(QDnx*{ds/');
define('LOGGED_IN_KEY',    '^4{`+USbOIHWwh_h;@{3u&,f!oj<yg*2HO( q3Q:C6l#aDnx?2mlIBdhr/yEO-5U');
define('NONCE_KEY',        'E5Mcw-`)=eT=~^[S1u,z6qEU.O=^WQF@GTf?fp,{y2R+I*H`7_Fv{5pAj:hs:)TE');
define('AUTH_SALT',        '> !.MW8_l]PLb^{Ls^*s]taA}E}OhXWHb8-xWAd.*Kux[rMovnIYsYsMpD6(mv-~');
define('SECURE_AUTH_SALT', 'nT@pxQ19%Ch|8:QC&Q.HjDy!gz+x#=6#}^FB?Sw PI2sTEsM-qqPs`;csENK]%sq');
define('LOGGED_IN_SALT',   '{RD +z.<+z}L1>x5 e]o+lLqP~yH.^~e(!DjBO=5k`uqhs?_q^8.m/<ZO7u<NK7q');
define('NONCE_SALT',       'IQ~c*a<`OJKHYq}]QP9*ny?gc>$%y+]D7GaP<5ujw[c(Pii<,Dqz5D!]cDJ[Q^UI');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_emedia';

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
