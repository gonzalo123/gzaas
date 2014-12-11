<?php
class My_Functions {

	public static function getVariableFromArrayOrNullIfIndexIsNotSet($array,$index) {

		if (isset($array[$index])) {
			return $array[$index];
		} else {
			return null;
		}
	}

	public static function getCache() {

		$frontendOptions = array(
			'lifeTime' => NULL,
			'automatic_serialization' => true
		);
		$backendOptions = array('cacheDir' => './tmp/');
		$cache = Zend_Cache::factory('Core', 'File', $frontendOptions, $backendOptions);
		return $cache;
	}

	public static function log($message, $priority = Zend_Log::INFO) {

		$logger = Zend_Registry::get('logger');
		$logger->log($message, $priority);

	}

}