<?php 
namespace App;

/**
* 
*/
class Autoloader {

	/**
	* Save the autoloader
	*/
	
	static function register()
	{
		spl_autoload_register(array(__CLASS__, 'autoload'));
	}

	/**
	* Include the file which correspond to the class
	* @param $class stringis the class name to load
	*/

	static function autoload($class)
	{
		if (strpos($class, __NAMESPACE__ . '\\') === 0 )
		{
			$class = str_replace(__NAMESPACE__ . '\\', '', $class);
			$class = str_replace('\\', '/', $class);
			require __DIR__ . '/' . $class . '.php';
		}
	}
}
?>