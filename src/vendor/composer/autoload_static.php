<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit90a5285afff5f1f563be0dbb065ca797
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Src\\' => 4,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../app',
        ),
    );

    public static $prefixesPsr0 = array (
        'J' => 
        array (
            'JasperPHP' => 
            array (
                0 => __DIR__ . '/..' . '/cossou/jasperphp/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit90a5285afff5f1f563be0dbb065ca797::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit90a5285afff5f1f563be0dbb065ca797::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit90a5285afff5f1f563be0dbb065ca797::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit90a5285afff5f1f563be0dbb065ca797::$classMap;

        }, null, ClassLoader::class);
    }
}