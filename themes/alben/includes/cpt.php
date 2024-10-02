<?php

namespace albenTheme\CPT;

function start() {
	$callback = function ( $function ) {
		return __NAMESPACE__ . "\\$function";
	};

}

