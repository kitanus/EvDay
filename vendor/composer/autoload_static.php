<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3fdc9c78698e05feadc6554c8b15f541
{
    public static $files = array (
        'f084d01b0a599f67676cffef638aa95b' => __DIR__ . '/..' . '/smarty/smarty/libs/bootstrap.php',
    );

    public static $prefixesPsr0 = array (
        'E' => 
        array (
            'EvDay\\' => 
            array (
                0 => __DIR__ . '/../..' . '/library',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit3fdc9c78698e05feadc6554c8b15f541::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
