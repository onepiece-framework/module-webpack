<?php
/**
 * op-module-webpack:/js/action.php
 *
 * @created   2018-04-17
 * @version   1.0
 * @package   op-module-webpack
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

/** namespace
 *
 * @created   2019-02-28
 */
namespace OP;

//	...
return array_merge(
	include(__DIR__.'/op/action.php'),
	include(__DIR__.'/app/action.php')
);
