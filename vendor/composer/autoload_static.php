<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6bb8dfdbc6b53924e6fbab4be6a68ee0
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6bb8dfdbc6b53924e6fbab4be6a68ee0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6bb8dfdbc6b53924e6fbab4be6a68ee0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}