<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit74c25556ca38663f4f5ecc16cfd5443a
{
    public static $prefixesPsr0 = array (
        'C' => 
        array (
            'Commando' => 
            array (
                0 => __DIR__ . '/..' . '/nategood/commando/src',
            ),
            'Colors' => 
            array (
                0 => __DIR__ . '/..' . '/kevinlebrun/colors.php/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit74c25556ca38663f4f5ecc16cfd5443a::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
