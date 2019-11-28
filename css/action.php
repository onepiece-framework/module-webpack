<?php
/**
 * op-module-webpack:/css/action.php
 *
 * @creation  2018-04-17
 * @version   1.0
 * @package   op-module-webpack
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
//	...
return array_merge(
	include(__DIR__.'/op/action.php'),
	include(__DIR__.'/common/action.php'),
	include(__DIR__.'/app/action.php')
);
