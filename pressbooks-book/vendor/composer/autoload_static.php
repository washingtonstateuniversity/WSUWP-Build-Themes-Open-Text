<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitce07690ca79c5447b03f5cd00d28bf54
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PressbooksMix\\' => 14,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PressbooksMix\\' => 
        array (
            0 => __DIR__ . '/..' . '/pressbooks/mix/inc',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitce07690ca79c5447b03f5cd00d28bf54::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitce07690ca79c5447b03f5cd00d28bf54::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
