<?php

namespace Zeek\Modernity\Traits;

trait Singleton {
	protected static $instance;

	public static function instance() {
		if ( empty( self::$instance ) ) {
			$class          = get_called_class();
			self::$instance = new $class;
		}

		return self::$instance;
	}
}
