<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc3aeb25b3e04b40c7eddc5fc97f0160f
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'Underscore\\' => 11,
        ),
        'P' => 
        array (
            'Patchwork\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Underscore\\' => 
        array (
            0 => __DIR__ . '/..' . '/anahkiasen/underscore-php/src',
            1 => __DIR__ . '/..' . '/anahkiasen/underscore-php/tests',
        ),
        'Patchwork\\' => 
        array (
            0 => __DIR__ . '/..' . '/patchwork/utf8/src/Patchwork',
        ),
    );

    public static $prefixesPsr0 = array (
        'D' => 
        array (
            'Doctrine\\Common\\Inflector\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/inflector/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Normalizer' => __DIR__ . '/..' . '/patchwork/utf8/src/Normalizer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc3aeb25b3e04b40c7eddc5fc97f0160f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc3aeb25b3e04b40c7eddc5fc97f0160f::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitc3aeb25b3e04b40c7eddc5fc97f0160f::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitc3aeb25b3e04b40c7eddc5fc97f0160f::$classMap;

        }, null, ClassLoader::class);
    }
}
