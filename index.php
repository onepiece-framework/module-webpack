<?php
/**
 * op-module-webpack:/index.php
 *
 * @created   2018-04-12
 * @version   1.0
 * @package   op-module-webpack
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

/** namespace
 *
 * @created   2019-02-25
 */
namespace OP;

/* @var $app \OP\UNIT\App */
$app = Unit('App');

//	Get extension from smart url.
if(!$ext = $app->Args()[0] ?? null ){
	return;
}

//	Get layout name.
$layout = $app->Layout();

//	Generate MIME.
Load('GetMimeFromExtension');
if( $mime = GetMimeFromExtension($ext) ){

	//	Change MIME.
	Env::Mime($mime);

	//	Disable layout.
	$app->Layout(false);
}

/* @var $webpack \OP\UNIT\WebPack */
if( $webpack = Unit('WebPack') ){
	//	Output packing string.
	$webpack->Out($ext);
};

//	...
if( Env::isAdmin() ){
	//	...
	$datetime = date(_OP_DATE_TIME_);

	//	...
	switch( $ext ){
		case 'js':
			echo "console.log('WebPack was successful. {$datetime}, {$layout}');\n";
			break;
		case 'css':
			echo "/* WebPack was successful. {$datetime}, {$layout}') */\n";
			break;
		default:
	};
}
