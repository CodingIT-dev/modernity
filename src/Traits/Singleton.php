<?php

namespace Zeek\Modernity\Traits;

/**
 * Trait Singleton
 * @package    Zeek\Modernity\Traits
 *
 * @deprecated Use the Singleton Class instead
 */
trait Singleton {
	protected static $instance;

	/**
	 * @return mixed
	 *
	 * @deprecated Use the Singleton Class instead
	 */
	public static function instance() {
		if ( empty( self::$instance ) ) {
			$class          = get_called_class();
			self::$instance = new $class;
		}

		return self::$instance;
	}
}
