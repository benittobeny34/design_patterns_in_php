<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc7832a350c78d908d08975be398b793a
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc7832a350c78d908d08975be398b793a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc7832a350c78d908d08975be398b793a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}