<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit70eb8399f86fb40964cad5938c77b072
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DataStart\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DataStart\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit70eb8399f86fb40964cad5938c77b072::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit70eb8399f86fb40964cad5938c77b072::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}