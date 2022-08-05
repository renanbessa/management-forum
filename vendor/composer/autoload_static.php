<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3025002e135d9e6cffd7a7284f549dc3
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3025002e135d9e6cffd7a7284f549dc3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3025002e135d9e6cffd7a7284f549dc3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3025002e135d9e6cffd7a7284f549dc3::$classMap;

        }, null, ClassLoader::class);
    }
}
