<?php 
/**
 * this is the autoloader for the main
 * 
 * @package    core
 * @subpackage utils
 * @author     helin16
 */
abstract class AutoLoader 
{
	/**
	 * where to load
	 * @var array
	 */
	private static $_dirs = array();
	/**
	 * loader
	 * 
	 * @param string $name The name of the class to load
	 * 
	 * @return bool
	 */
	public static function autoload($name) {
		foreach (self::$_dirs as $dir) {
			if (file_exists($file = $dir . DIRECTORY_SEPARATOR . $name)) {
				require_once $file;
				return true;
			}
		}
		return false;
	}
	/**
	 * loader register
	 */
	public static function load() {
		spl_autoload_register(array(__CLASS__, 'autoload'));
	}
}

AutoLoader::load();
?>