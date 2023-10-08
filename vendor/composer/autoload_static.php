<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit910c4189a868d9db3fa89792673c4e88
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'tobimori\\DreamForm\\' => 19,
        ),
        'K' => 
        array (
            'Kirby\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'tobimori\\DreamForm\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
        'Kirby\\' => 
        array (
            0 => __DIR__ . '/..' . '/getkirby/composer-installer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Kirby\\ComposerInstaller\\CmsInstaller' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/CmsInstaller.php',
        'Kirby\\ComposerInstaller\\Installer' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/Installer.php',
        'Kirby\\ComposerInstaller\\Plugin' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/Plugin.php',
        'Kirby\\ComposerInstaller\\PluginInstaller' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/PluginInstaller.php',
        'tobimori\\DreamForm\\Actions\\AbortAction' => __DIR__ . '/../..' . '/classes/Actions/AbortAction.php',
        'tobimori\\DreamForm\\Actions\\Action' => __DIR__ . '/../..' . '/classes/Actions/Action.php',
        'tobimori\\DreamForm\\Actions\\ConditionalAction' => __DIR__ . '/../..' . '/classes/Actions/ConditionalAction.php',
        'tobimori\\DreamForm\\Actions\\EmailAction' => __DIR__ . '/../..' . '/classes/Actions/EmailAction.php',
        'tobimori\\DreamForm\\Actions\\RedirectAction' => __DIR__ . '/../..' . '/classes/Actions/RedirectAction.php',
        'tobimori\\DreamForm\\Fields\\ButtonField' => __DIR__ . '/../..' . '/classes/Fields/ButtonField.php',
        'tobimori\\DreamForm\\Fields\\CheckboxField' => __DIR__ . '/../..' . '/classes/Fields/CheckboxField.php',
        'tobimori\\DreamForm\\Fields\\EmailField' => __DIR__ . '/../..' . '/classes/Fields/EmailField.php',
        'tobimori\\DreamForm\\Fields\\Field' => __DIR__ . '/../..' . '/classes/Fields/Field.php',
        'tobimori\\DreamForm\\Fields\\HiddenField' => __DIR__ . '/../..' . '/classes/Fields/HiddenField.php',
        'tobimori\\DreamForm\\Fields\\SelectField' => __DIR__ . '/../..' . '/classes/Fields/SelectField.php',
        'tobimori\\DreamForm\\Fields\\TextField' => __DIR__ . '/../..' . '/classes/Fields/TextField.php',
        'tobimori\\DreamForm\\Fields\\TextareaField' => __DIR__ . '/../..' . '/classes/Fields/TextareaField.php',
        'tobimori\\DreamForm\\Models\\BasePage' => __DIR__ . '/../..' . '/classes/Models/BasePage.php',
        'tobimori\\DreamForm\\Models\\FormPage' => __DIR__ . '/../..' . '/classes/Models/FormPage.php',
        'tobimori\\DreamForm\\Models\\FormsPage' => __DIR__ . '/../..' . '/classes/Models/FormsPage.php',
        'tobimori\\DreamForm\\Models\\SubmissionPage' => __DIR__ . '/../..' . '/classes/Models/SubmissionPage.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit910c4189a868d9db3fa89792673c4e88::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit910c4189a868d9db3fa89792673c4e88::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit910c4189a868d9db3fa89792673c4e88::$classMap;

        }, null, ClassLoader::class);
    }
}