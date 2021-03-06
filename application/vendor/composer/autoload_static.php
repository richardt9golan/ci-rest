<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbdf61a32ee0aac8f9c5ba61e18bfd17f
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'chriskacerguis\\RestServer\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'chriskacerguis\\RestServer\\' => 
        array (
            0 => __DIR__ . '/..' . '/chriskacerguis/codeigniter-restserver/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbdf61a32ee0aac8f9c5ba61e18bfd17f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbdf61a32ee0aac8f9c5ba61e18bfd17f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbdf61a32ee0aac8f9c5ba61e18bfd17f::$classMap;

        }, null, ClassLoader::class);
    }
}
