<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit41e3d13e2b74bc072fb54abad8b169c1
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LINE\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LINE\\' => 
        array (
            0 => __DIR__ . '/..' . '/linecorp/line-bot-sdk/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit41e3d13e2b74bc072fb54abad8b169c1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit41e3d13e2b74bc072fb54abad8b169c1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
