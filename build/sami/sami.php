<?php

require __DIR__.'/../../vendor/autoload.php';

use Sami\Sami;
use Symfony\Component\Finder\Finder;
use Sami\Version\GitVersionCollection;

$iterator = Finder::create()
	->files()
	->name('*.php')
	->exclude('stubs')
	->in($dir = __DIR__.'/jiro/src');

$versions = GitVersionCollection::create($dir)
	->add('0.1.0', 'Jiro 0.1.0')
	->add('master', 'Jiro Dev');

return new Sami($iterator, array(
	'title' => 'Jiro API',
	'versions' => $versions,
	'build_dir' => __DIR__.'/build/%version%',
	'cache_dir' => __DIR__.'/cache/%version%',
	'default_opened_level' => 2,
));
