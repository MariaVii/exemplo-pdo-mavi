<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit3a9a61a7fb252b0b5a9506f32e82c366
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

        spl_autoload_register(array('ComposerAutoloaderInit3a9a61a7fb252b0b5a9506f32e82c366', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit3a9a61a7fb252b0b5a9506f32e82c366', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit3a9a61a7fb252b0b5a9506f32e82c366::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}