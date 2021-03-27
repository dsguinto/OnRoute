<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5fbcb115a41b4c2db44c25020117a66f
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'ONROUTE\\models\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ONROUTE\\models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5fbcb115a41b4c2db44c25020117a66f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5fbcb115a41b4c2db44c25020117a66f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5fbcb115a41b4c2db44c25020117a66f::$classMap;

        }, null, ClassLoader::class);
    }
}
