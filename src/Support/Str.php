<?php

namespace Zeek\Modernity\Support;

use Symfony\Component\String\Inflector\EnglishInflector;

class Str {
	public static function pluralize( string $singular ) : string {
		$inflector = new EnglishInflector();
		$plural    = $inflector->pluralize( $singular );

		if ( empty( $plural ) ) {
			return $singular;
		}

		return $plural[0] ?? $singular;
	}
}
