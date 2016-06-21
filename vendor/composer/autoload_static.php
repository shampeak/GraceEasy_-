<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4acbeb0853709cab5be3bc9a74ddf1d2
{
    public static $files = array (
        '88a9766f7d285def60c92a9664e37cee' => __DIR__ . '/../..' . '/src/Helper.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
            'Michelf\\' => 8,
        ),
        'L' => 
        array (
            'Lulu\\' => 5,
        ),
        'G' => 
        array (
            'Grace\\' => 6,
        ),
        'A' => 
        array (
            'App\\' => 4,
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
        'Michelf\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Library/Michelf',
        ),
        'Lulu\\' => 
        array (
            0 => __DIR__ . '/..' . '/lulu/db-driver/src',
        ),
        'Grace\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Parsedown' => 
            array (
                0 => __DIR__ . '/..' . '/erusev/parsedown',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4acbeb0853709cab5be3bc9a74ddf1d2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4acbeb0853709cab5be3bc9a74ddf1d2::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit4acbeb0853709cab5be3bc9a74ddf1d2::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
