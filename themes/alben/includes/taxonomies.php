<?php

namespace albenTheme\Taxonomies;

function start() {
	$callback = function ( $function ) {
		return __NAMESPACE__ . "\\$function";
	};

}
