<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdfbbc35df9ba0b3cdbdb6d52f7d29484
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitdfbbc35df9ba0b3cdbdb6d52f7d29484::$classMap;

        }, null, ClassLoader::class);
    }
}
