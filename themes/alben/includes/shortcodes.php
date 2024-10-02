<?php

namespace albenTheme\Shortcodes;

function start() {
	$callback = function ( $function ) {
		return __NAMESPACE__ . "\\$function";
	};

}
