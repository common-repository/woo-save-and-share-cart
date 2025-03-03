<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit424535a20e0d05a18e5d92770c18a097
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit424535a20e0d05a18e5d92770c18a097', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit424535a20e0d05a18e5d92770c18a097', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit424535a20e0d05a18e5d92770c18a097::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
