<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9919b225ed1d2730f8f62f443c1244c7
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9919b225ed1d2730f8f62f443c1244c7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9919b225ed1d2730f8f62f443c1244c7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9919b225ed1d2730f8f62f443c1244c7::$classMap;

        }, null, ClassLoader::class);
    }
}
