<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'receitasaprovadas');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ':K-dq&|Cn{`,59M+ CaJCA4yH~i*C;0r8MO@OlSXV|?L9-ASJmb`f[8ec|Dmx{^p');
define('SECURE_AUTH_KEY',  '-Jk?[@W(n)[IlQ:{0iS{V7&4oUta)5,k1Ix`kG#HSpj03v;-fmzKLS|@]lVk{jW+');
define('LOGGED_IN_KEY',    'eYcNy.)vJ+QLeFgOTzLgA*i[-IJNR~b.&, h#ccVXg%/|{M-Cn&=J]>S$m]BrQhR');
define('NONCE_KEY',        'U1}% RMEQ>ouF]QKLxfGztNEqkC]Kv<SB2{.. %+{ehv3A#)%e+e?wVaeQv2^[z ');
define('AUTH_SALT',        '>|j-XY>$G5m{>*7B-!3Z~SIX->Z(K|u_mG(Wsq95[[u{@8S R-n-6G|Wzo@D])&a');
define('SECURE_AUTH_SALT', 'zi+If{k}A?f1]9kb:OEAmFLTDK@C,_-Xr-2Gyka(BY~lWFKki1,:4_6GvRPg-0Q[');
define('LOGGED_IN_SALT',   '=~~`_{YLR+-`ST/g^SgoQ{CIf||s2wg=}A7DQvI$6CO2Of_#f{_>}B+_L9kKg@%4');
define('NONCE_SALT',       'yhI,m0DBA,4yQ1i$E-$0pwA}E~LiV0LXUAOu#_R/<[@v6)a/Q-]y X$zJccN{ovF');

/**
 * Define o limite de memória do PHP
 */
define( 'WP_MEMORY_LIMIT', '64M' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_receitas';

/**
 * Define a URL do site
 */
define('WP_HOME','http://localhost/receitasaprovadas/');
define('WP_SITEURL','http://localhost/receitasaprovadas/');

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
