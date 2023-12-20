<?php
/**
 * SOD extension hooks
 *
 * @file
 * @ingroup Extensions
 * @license GPL-2.0+
 */
class SODHooks {
	/**
	 * Conditionally register the unit testing module for the ext.sOD module
	 * only if that module is loaded
	 *
	 * @param array $testModules The array of registered test modules
	 * @param ResourceLoader $resourceLoader The reference to the resource loader
	 * @return true
	 */
	public static function onResourceLoaderTestModules( array &$testModules, ResourceLoader &$resourceLoader ) {
		$testModules['qunit']['ext.sOD.tests'] = [
			'scripts' => [
				'tests/SOD.test.js'
			],
			'dependencies' => [
				'ext.sOD'
			],
			'localBasePath' => __DIR__,
			'remoteExtPath' => 'SOD',
		];
		return true;
	}
}
