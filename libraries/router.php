<?php
/**
  * @author Punished Foxx{{ punishedfoxx@gmail.com }}
  * @version 3.0.0
  * @license Open Source
  * @copyright 2015 PunishedFoxx
 */

class Map extends Object {
	public static $path = null;

	public static function get($route, $path) {
		self::$path = $path;
		Sammy::process($route, 'GET');
	}

	public static function post($route, $path) {
		self::$path = $path;
		Sammy::process($route, 'POST');
	}

	public static function put($route, $path) {
		self::$path = $path;
		Sammy::process($route, 'PUT');
	}

	public static function delete($route, $path) {
		self::$path = $path;
		Sammy::process($route, 'DELETE');
	}

	public static function ajax($route, $path) {
		self::$path = $path;
		Sammy::process($route, 'XMLHttpRequest');
	}

	public static function pre_dispatch($uri) {
		$path = explode('/', $uri);
		$controller = $path[0];
		$action = (empty($path[1])) ? 'index' : $path[1];
		$format = 'html';

		if( preg_match('/\\.(\w+)$/', $action, $matches)) {
			$action = str_replace($matches[0], '', $action);
			$format = $matches[1];
		}

		self::$path = $controller .'#'. $action;
		self::dispatch($format);
	}

	public static function dispatch($format) {

		$path = explode('#', self::$path);
		$controller = $path[0];
		$action = $path[1];

		$class_name = ucfirst($controller) . 'Controller';

		self::load_controller('app');

		self::load_controller($controller);

		if( class_exists($class_name) ) {
			$tmp_class = new $class_name();

			if( is_callable(array($tmp_class, $action)) ) {
				$tmp_class->$action();
			} else {
				require_once('app/views/error/404.html.php');
			}
		} else {
				require_once('app/views/error/404.html.php');
		}

		$layout_path = self::get_layout($controller, $action, $format);
		if( !empty($layout_path) ) {
			$layout = file_get_contents($layout_path);

			$view_path = self::view_path($controller, $action, $format);
			if( !empty($view_path) )
				$layout = str_replace('{PAGE_CONTENT}', file_get_contents($view_path), $layout);
			else
				$layout = str_replace('{PAGE_CONTENT}', '', $layout);

			$filename = BASE_PATH . 'tmp/' . time() . 'php';

			$file = fopen($filename, 'a');
			fwrite($file, $layout);
			fclose($file);

			self::load_layout($filename);

			unlink($filename);
		}

	}

	public static function load_layout($filename) {
		foreach( self::$user_vars as $var => $value) {
				$$var = $value;
			}
			
		include $filename;
	}

	public static function view_path($controller, $action, $format) {
		$view_path = APP_PATH . 'views/' . $controller . '/' . $action . '.' . $format . '.php';
		$path = null;

		if( file_exists($view_path) )
			$path = $view_path;

		return $path;
	}

	public static function get_layout($controller, $action, $format) {

		$application_path = APP_PATH . 'views/layouts/application.' . $format . '.php';

		$path_to_use = null;

		if( file_exists($application_path) )
			$path_to_use = $application_path;

		return $path_to_use;

	}	

	public static function load_controller($name) {
		$controller_path = APP_PATH . 'controllers/' . $name . '_controller.php';
		if( file_exists($controller_path) )
			include_once $controller_path;
		else 
			require_once('app/views/error/404.html.php');
	}

	public static function load_view($controller, $action, $format) {
		$view_path = self::view_path();
		if( !empty($view_path) )
			unset($controller, $action, $format);

			foreach( self::$user_vars as $var => $value) {
				$$var = $value;
			}

			include_once $view_path;
	}

}