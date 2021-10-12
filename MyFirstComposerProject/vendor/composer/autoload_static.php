<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf18a441dd3d2059841e7dbb6d0d6cf55
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf18a441dd3d2059841e7dbb6d0d6cf55::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf18a441dd3d2059841e7dbb6d0d6cf55::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
