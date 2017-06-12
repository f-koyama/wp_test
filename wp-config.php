<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wp_githubtest');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'root');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ';]l&|-8;M_`^< j<:Ie,(oTD7QRn[GgznF@>cX)+>6G?WtJC%nNxFSW44bYHHLtp');
define('SECURE_AUTH_KEY',  ')!?E(l_UOUQW`;Y%r:_6TgU+9U%lw7ytEl9Vn3?5C5=E;I20C 0<a1Mch-* Br,<');
define('LOGGED_IN_KEY',    '^9slx0-H1P>0|S)+sd,`0h#x}V3PMQ:tmTKS/>i4Co!mUem1wy1B(hS}|2ertkFW');
define('NONCE_KEY',        'u[Y5U(3Vhr %l$hi!cHecR5_&)%Xdm=NHc&+` ZC@,#T.l4;N[=!W1w#D<:z4.sk');
define('AUTH_SALT',        '2scI%dpAVG/:@@fe!>?t3G<0rRD^]SEdo#u@<(]~Q<A~}Y;NDnV6KF*c|F)Q~=,*');
define('SECURE_AUTH_SALT', '3;mkQ=k:69P%U}2qX]7Cwc)romdk gR(}Phb*O/WoJeG.jb*t0YehHT?1>W>acin');
define('LOGGED_IN_SALT',   '3-(@Z3b<P0bK/I-@l,-PLI[`#[/5%A{T{xM<>y+r;rRvx+6f#|3r<c<0T,sG~;Vp');
define('NONCE_SALT',       '*!6P|:Y{1E4Ad(r1LaY8k[K<jpm2T[t*(BSC-1(3r%},[4_*}ftuH ~!o_5`7 Va');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
