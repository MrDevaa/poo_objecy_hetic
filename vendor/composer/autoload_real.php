<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitb70601c5b691a9618c11ef562ca73697
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

        spl_autoload_register(array('ComposerAutoloaderInitb70601c5b691a9618c11ef562ca73697', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitb70601c5b691a9618c11ef562ca73697', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitb70601c5b691a9618c11ef562ca73697::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
