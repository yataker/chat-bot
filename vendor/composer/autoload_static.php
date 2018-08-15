<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6130482d03671aa18ea3a6b6ec5339fc
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit6130482d03671aa18ea3a6b6ec5339fc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6130482d03671aa18ea3a6b6ec5339fc::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
