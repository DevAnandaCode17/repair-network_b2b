<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit09f1a59500f38135974b4399794206bb
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/Twilio',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit09f1a59500f38135974b4399794206bb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit09f1a59500f38135974b4399794206bb::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
