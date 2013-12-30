<?php

return array(

	/**
	 * Default Database Type
	 *
	 * Choose the appropriate database type to be used.
	 * The default value is 'mysql'
	 */

	'default' => 'mysql',

	/**
	 * Database Connection Details
	 *
	 */

	'connections' => array(

		'mysql' => array(
			'driver'    => 'mysql',
			'host'      => '127.0.0.1',
			'database'  => 'laravel-testing',
			'username'  => 'root',
			'password'  => 'bakerking123',
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => '',
		),

		'sqlsrv' => array(
			'driver'   => 'sqlsrv',
			'host'     => 'localhost',
			'database' => 'database',
			'username' => 'root',
			'password' => '',
			'prefix'   => '',
		),

	),

);