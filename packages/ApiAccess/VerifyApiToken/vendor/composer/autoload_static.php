<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit99c9f4cab8be4e2097dde947679f67d8
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Apiaccess\\Verifyapitoken\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Apiaccess\\Verifyapitoken\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit99c9f4cab8be4e2097dde947679f67d8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit99c9f4cab8be4e2097dde947679f67d8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit99c9f4cab8be4e2097dde947679f67d8::$classMap;

        }, null, ClassLoader::class);
    }
}