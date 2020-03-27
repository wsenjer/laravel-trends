<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit045e7131de09b6524456ec9be9b761e3
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hacklabs\\Trends\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hacklabs\\Trends\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit045e7131de09b6524456ec9be9b761e3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit045e7131de09b6524456ec9be9b761e3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
