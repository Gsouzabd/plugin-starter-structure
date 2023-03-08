<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitdbef254b6223c6b923c9c781ca2af41d
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

        spl_autoload_register(array('ComposerAutoloaderInitdbef254b6223c6b923c9c781ca2af41d', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitdbef254b6223c6b923c9c781ca2af41d', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitdbef254b6223c6b923c9c781ca2af41d::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
