<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf613caa3086b27b942fb5bd3745d1459
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Grpc\\' => 5,
            'Google\\Protobuf\\' => 16,
            'GPBMetadata\\Google\\Protobuf\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Grpc\\' => 
        array (
            0 => __DIR__ . '/..' . '/grpc/grpc/src/lib',
        ),
        'Google\\Protobuf\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf',
        ),
        'GPBMetadata\\Google\\Protobuf\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/protobuf/src/GPBMetadata/Google/Protobuf',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf613caa3086b27b942fb5bd3745d1459::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf613caa3086b27b942fb5bd3745d1459::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}