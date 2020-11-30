<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitda02a2a658e40bc083c28b7720e39548
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Acme\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Acme\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Acme\\carre' => __DIR__ . '/../..' . '/src/carre.php',
        'Acme\\cercle' => __DIR__ . '/../..' . '/src/cercle.php',
        'Acme\\forme' => __DIR__ . '/../..' . '/src/forme.php',
        'Acme\\triangle' => __DIR__ . '/../..' . '/src/triangle.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitda02a2a658e40bc083c28b7720e39548::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitda02a2a658e40bc083c28b7720e39548::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitda02a2a658e40bc083c28b7720e39548::$classMap;

        }, null, ClassLoader::class);
    }
}
