<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit424535a20e0d05a18e5d92770c18a097
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Ankit\\WCSSC\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ankit\\WCSSC\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Includes',
        ),
    );

    public static $classMap = array (
        'Ankit\\WCSSC\\API\\API_Manager' => __DIR__ . '/../..' . '/Includes/API/API_Manager.php',
        'Ankit\\WCSSC\\API\\Controllers\\SavedCarts_Controller' => __DIR__ . '/../..' . '/Includes/API/Controllers/SavedCarts_Controller.php',
        'Ankit\\WCSSC\\API\\Endpoints\\EmailCart' => __DIR__ . '/../..' . '/Includes/API/Endpoints/EmailCart.php',
        'Ankit\\WCSSC\\API\\Endpoints\\GetLink' => __DIR__ . '/../..' . '/Includes/API/Endpoints/GetLink.php',
        'Ankit\\WCSSC\\API\\Endpoints\\SaveCart' => __DIR__ . '/../..' . '/Includes/API/Endpoints/SaveCart.php',
        'Ankit\\WCSSC\\Admin\\Admin' => __DIR__ . '/../..' . '/Includes/Admin/Admin.php',
        'Ankit\\WCSSC\\Admin\\Sections\\Email' => __DIR__ . '/../..' . '/Includes/Admin/Sections/Email.php',
        'Ankit\\WCSSC\\Admin\\Sections\\General' => __DIR__ . '/../..' . '/Includes/Admin/Sections/General.php',
        'Ankit\\WCSSC\\Admin\\Sections\\SaveCart' => __DIR__ . '/../..' . '/Includes/Admin/Sections/SaveCart.php',
        'Ankit\\WCSSC\\Admin\\Settings' => __DIR__ . '/../..' . '/Includes/Admin/Settings.php',
        'Ankit\\WCSSC\\Frontend\\Cart' => __DIR__ . '/../..' . '/Includes/Frontend/Cart.php',
        'Ankit\\WCSSC\\Frontend\\Enqueue' => __DIR__ . '/../..' . '/Includes/Frontend/Enqueue.php',
        'Ankit\\WCSSC\\Frontend\\Frontend' => __DIR__ . '/../..' . '/Includes/Frontend/Frontend.php',
        'Ankit\\WCSSC\\Frontend\\Rewrite' => __DIR__ . '/../..' . '/Includes/Frontend/Rewrite.php',
        'Ankit\\WCSSC\\Interfaces\\Endpoint' => __DIR__ . '/../..' . '/Includes/Interfaces/Endpoint.php',
        'Ankit\\WCSSC\\Interfaces\\SettingsSubSection' => __DIR__ . '/../..' . '/Includes/Interfaces/SettingsSubSection.php',
        'Ankit\\WCSSC\\SaveShareCart' => __DIR__ . '/../..' . '/Includes/SaveShareCart.php',
        'Ankit\\WCSSC\\Settings' => __DIR__ . '/../..' . '/Includes/Settings.php',
        'Ankit\\WCSSC\\Utility\\Utility' => __DIR__ . '/../..' . '/Includes/Utility/Utility.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit424535a20e0d05a18e5d92770c18a097::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit424535a20e0d05a18e5d92770c18a097::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit424535a20e0d05a18e5d92770c18a097::$classMap;

        }, null, ClassLoader::class);
    }
}
