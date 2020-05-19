<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit092d34e6f85e843b309d932b8b972a5d
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit092d34e6f85e843b309d932b8b972a5d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit092d34e6f85e843b309d932b8b972a5d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
