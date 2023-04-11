<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8c7b5930943297f4c3e6eac09e64afb0
{
    public static $files = array (
        '877aa62ef7bb84390b9ed4124d954939' => __DIR__ . '/..' . '/lucatume/di52/aliases.php',
    );

    public static $prefixLengthsPsr4 = array (
        'l' => 
        array (
            'lucatume\\DI52\\' => 14,
        ),
        'S' => 
        array (
            'StellarWP\\Telemetry\\Views_Dir\\' => 30,
            'StellarWP\\Telemetry\\Assets_Dir\\' => 31,
            'StellarWP\\Telemetry\\' => 20,
            'StellarWP\\DB\\' => 13,
            'StellarWP\\ContainerContract\\' => 28,
        ),
        'P' => 
        array (
            'Psr\\Container\\' => 14,
        ),
        'L' => 
        array (
            'LearnDash\\Core\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'lucatume\\DI52\\' => 
        array (
            0 => __DIR__ . '/..' . '/lucatume/di52/src',
        ),
        'StellarWP\\Telemetry\\Views_Dir\\' => 
        array (
            0 => __DIR__ . '/..' . '/stellarwp/telemetry/src/views',
        ),
        'StellarWP\\Telemetry\\Assets_Dir\\' => 
        array (
            0 => __DIR__ . '/..' . '/stellarwp/telemetry/src/resources',
        ),
        'StellarWP\\Telemetry\\' => 
        array (
            0 => __DIR__ . '/..' . '/stellarwp/telemetry/src/Telemetry',
        ),
        'StellarWP\\DB\\' => 
        array (
            0 => __DIR__ . '/..' . '/stellarwp/db/src/DB',
        ),
        'StellarWP\\ContainerContract\\' => 
        array (
            0 => __DIR__ . '/..' . '/stellarwp/container-contract/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'LearnDash\\Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'LearnDash\\Core\\Container' => __DIR__ . '/../..' . '/src/Core/Container.php',
        'Psr\\Container\\ContainerExceptionInterface' => __DIR__ . '/..' . '/psr/container/src/ContainerExceptionInterface.php',
        'Psr\\Container\\ContainerInterface' => __DIR__ . '/..' . '/psr/container/src/ContainerInterface.php',
        'Psr\\Container\\NotFoundExceptionInterface' => __DIR__ . '/..' . '/psr/container/src/NotFoundExceptionInterface.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8c7b5930943297f4c3e6eac09e64afb0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8c7b5930943297f4c3e6eac09e64afb0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8c7b5930943297f4c3e6eac09e64afb0::$classMap;

        }, null, ClassLoader::class);
    }
}