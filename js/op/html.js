/**
 * op-module-webpack:/js/op/html.js
 *
 * @created   2018-10-22
 * @version   1.0
 * @package   op-module-webpack
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
(function(){
	//	...
	if(!$OP.HTML ){
		$OP.HTML = {};
	};

	//	...
	$OP.HTML.Encode = function(str){
		return $OP.HTML.Decode(str) // Anti duplicate encode.
			.replace(/&/g, '&amp;')
			.replace(/</g, '&lt;' )
			.replace(/>/g, '&gt;' );
	};

	//	...
	$OP.HTML.Decode = function(str){
		return str	.replace(/&amp;/g, "&")
					.replace(/&lt;/g , '<')
					.replace(/&gt;/g , '>');
	};
})();

/*
function EncodeHTML(html) {
	return document.createElement('div').appendChild( document.createTextNode(html) ).innerHTML;
}

function DecodeHTML(html) {
	return (document.createElement('textarea').value = html).value;
}
*/
