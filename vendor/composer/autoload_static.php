<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit90145f20f506f2ebd050bd4627e64ad9
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'models\\' => 7,
        ),
        'c' => 
        array (
            'controllers\\' => 12,
            'components\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
        'controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controllers',
        ),
        'components\\' => 
        array (
            0 => __DIR__ . '/../..' . '/components',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit90145f20f506f2ebd050bd4627e64ad9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit90145f20f506f2ebd050bd4627e64ad9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
