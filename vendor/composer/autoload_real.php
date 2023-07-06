<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit42a5b61cbcbf306ca8a5b4a3a71fd5dd
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit42a5b61cbcbf306ca8a5b4a3a71fd5dd', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit42a5b61cbcbf306ca8a5b4a3a71fd5dd', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit42a5b61cbcbf306ca8a5b4a3a71fd5dd::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInit42a5b61cbcbf306ca8a5b4a3a71fd5dd::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequire42a5b61cbcbf306ca8a5b4a3a71fd5dd($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequire42a5b61cbcbf306ca8a5b4a3a71fd5dd($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
