<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9d5599c1bdddfc59cbdcb3ca94f35257
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9d5599c1bdddfc59cbdcb3ca94f35257::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9d5599c1bdddfc59cbdcb3ca94f35257::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9d5599c1bdddfc59cbdcb3ca94f35257::$classMap;

        }, null, ClassLoader::class);
    }
}
