<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit114cdb419b979b65722ff3261f7a53a3
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jsnlib\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jsnlib\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit114cdb419b979b65722ff3261f7a53a3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit114cdb419b979b65722ff3261f7a53a3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}