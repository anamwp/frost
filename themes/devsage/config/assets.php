<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Default Assets Manifest
	|--------------------------------------------------------------------------
	|
	| Here you may specify the default asset manifest that should be used.
	| The "theme" manifest is recommended as the default as it cedes ultimate
	| authority of your application's assets to the theme.
	|
	*/

	'default'   => 'theme',

	/*
	|--------------------------------------------------------------------------
	| Assets Manifests
	|--------------------------------------------------------------------------
	|
	| Manifests contain lists of assets that are referenced by static keys that
	| point to dynamic locations, such as a cache-busted location. We currently
	| support two types of manifest:
	|
	| assets: key-value pairs to match assets to their revved counterparts
	|
	| bundles: a series of entrypoints for loading bundles
	|
	*/

	'manifests' => array(
		'theme' => array(
			'path'    => get_theme_file_path( 'public' ),
			'url'     => get_theme_file_uri( 'public' ),
			'assets'  => get_theme_file_path( 'public/manifest.json' ),
			'bundles' => get_theme_file_path( 'public/entrypoints.json' ),
		),
	),
);
