<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit03411529c0d856a528aaf8c03dbab185
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'RapidWeb\\BucketTesting\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'RapidWeb\\BucketTesting\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit03411529c0d856a528aaf8c03dbab185::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit03411529c0d856a528aaf8c03dbab185::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}