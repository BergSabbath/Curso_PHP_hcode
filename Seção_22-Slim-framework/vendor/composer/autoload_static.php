<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit416bfb0d6e6e239693f0cc93b8d5bbfb
{
    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit416bfb0d6e6e239693f0cc93b8d5bbfb::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
