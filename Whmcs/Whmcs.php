<?php
/**
 * WHMCS API Wrapper PHP Library
 *
 * @author      Craig G Smith <vxdhost@gmail.com>
 * @copyright   2013 Craig G Smith
 * @link        http://www.omnihost.co.nz
 * @license     MIT LICENSE
 * @version     1.0.0
 * @package     Whmcs
 * 
 */

namespace Whmcs;

Class Whmcs {
    /*     * ******************************************************************************
     * PSR-0 Autoloader
     *
     * Do not use if you are using Composer to autoload dependencies.
     * ***************************************************************************** */

    /**
     * Whmcs PSR-0 autoloader
     */
    public static function autoload($className) {
        $thisClass = str_replace(__NAMESPACE__ . '\\', '', __CLASS__);

        $baseDir = __DIR__;

        if (substr($baseDir, -strlen($thisClass)) === $thisClass) {
            $baseDir = substr($baseDir, 0, -strlen($thisClass));
        }

        $className = ltrim($className, '\\');
        $fileName = $baseDir;
        $namespace = '';
        if ($lastNsPos = strripos($className, '\\')) {
            $namespace = substr($className, 0, $lastNsPos);
            $className = substr($className, $lastNsPos + 1);
            $fileName .= str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
        }
        $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

        if (file_exists($fileName)) {
            require $fileName;
        }
    }
    
     /**
     * Register WhmcsApi's PSR-0 autoloader
     */
    public static function registerAutoloader()
    {
        spl_autoload_register(__NAMESPACE__ . "\\Whmcs::autoload");
    }

}

