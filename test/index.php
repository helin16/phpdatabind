<?php 
/**
 * this is the autoloader for the main
 * 
 * @package    core
 * @subpackage utils
 * @author     helin16
 */
abstract class UnitAutoLoader extends AutoLoader
{
	/**
	 * where to load
	 * @var array
	 */
	private static $_dirs = array();
	/**
	 * loader register
	 */
	public static function load() {
		spl_autoload_register(array(__CLASS__, 'autoload'));
		require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'PHPUnit' . DIRECTORY_SEPARATOR . 'Autoload.php';
	}
}

UnitAutoLoader::load();
?>