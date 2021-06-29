<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2686fcdc828a172c709f7b7934b06d96
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2686fcdc828a172c709f7b7934b06d96::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2686fcdc828a172c709f7b7934b06d96::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}