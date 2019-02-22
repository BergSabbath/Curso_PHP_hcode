<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc1fc9e98ff9ee4baac5a25492344dcf2
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc1fc9e98ff9ee4baac5a25492344dcf2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc1fc9e98ff9ee4baac5a25492344dcf2::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
