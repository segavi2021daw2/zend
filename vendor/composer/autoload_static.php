<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit383c88e99b62e6512168d54468fbd266
{
    public static $files = array (
        '7e9bd612cc444b3eed788ebbe46263a0' => __DIR__ . '/..' . '/laminas/laminas-zendframework-bridge/src/autoload.php',
    );

    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Laminas\\ZendFrameworkBridge\\' => 28,
            'Laminas\\Ldap\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Laminas\\ZendFrameworkBridge\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-zendframework-bridge/src',
        ),
        'Laminas\\Ldap\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-ldap/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit383c88e99b62e6512168d54468fbd266::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit383c88e99b62e6512168d54468fbd266::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
