<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita227d657bec4f0c531e4e28f64307ac4
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita227d657bec4f0c531e4e28f64307ac4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita227d657bec4f0c531e4e28f64307ac4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
