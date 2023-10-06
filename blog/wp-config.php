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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'site-rdf' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'root' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'F@]@Wxm2$L|(mG:oQI/xhK5]frx..[1&e|M6,~Faa9)}kZMv>.@YV5jO`I9ya&94' );
define( 'SECURE_AUTH_KEY',  '%Kce>Rz|!hq T#P4*$-}`udEX5k2OkhD>&a x6CPh>}$(<S^,DT#5gVO9LE-(U)`' );
define( 'LOGGED_IN_KEY',    '&[l/q=mMRroxm3|D=#<TeRbFYBUDkeW.FSC$-7&b4S`G6/+;Af,OkpPgS5`A~=9B' );
define( 'NONCE_KEY',        'NS+]_!?d4R|g_Y{?myS<1IQ5,Eh<|#NvCY:+D*bJQkZ 79.i0,D:.i2TWS1L52U)' );
define( 'AUTH_SALT',        'x)L{|pk7-bPf7A0k}[*3P#=P!w+t&0~a21~gc]ouir_P eq|*8&HONU#N*JINo`;' );
define( 'SECURE_AUTH_SALT', ')huiTf-(P,G.ph!z2RRl}!jC&^%/a#7#Rx[~Ai-Ws6#HlntM=ay>|hrrBcC03JxL' );
define( 'LOGGED_IN_SALT',   'G(BAkCt|&5;Vx6)N10f$H1?-aAX2l6 Z9,ZC@iP5q7T:CAxe 7k?Kr|Aw,BvMn;$' );
define( 'NONCE_SALT',       ')I~eDjI@]70}Ff^#ptCh_k3OCch6*OrU~V)h neKJPg./mdbIpv0X!tpsKb2+|z%' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
