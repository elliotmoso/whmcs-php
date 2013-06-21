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

class Module extends \Whmcs\Api {

    /**
     * Run the module create command
     *
     * @see http://docs.whmcs.com/API:Module_Create
     */
    public static function moduleCreate($params = array()) {
        $params['action'] = 'modulecreate';
        return self::sendRequest($params);
    }

    /**
     * Run the module suspend command
     *
     * @see http://docs.whmcs.com/API:Module_Suspend
     */
    public static function moduleSuspend($params = array()) {
        $params['action'] = 'modulesuspend';
        return self::sendRequest($params);
    }

    /**
     * Run the module unsuspend command
     *
     * @see http://docs.whmcs.com/API:Module_Unsuspend
     */
    public static function moduleUnsuspend($params = array()) {
        $params['action'] = 'moduleunsuspend';
        return self::sendRequest($params);
    }

    /**
     * Run the module terminate command
     *
     * @see http://docs.whmcs.com/API:Module_Terminate
     */
    public static function moduleTerminate($params = array()) {
        $params['action'] = 'moduleterminate';
        return self::sendRequest($params);
    }

    /**
     * Run the change package module command
     *
     * @see http://docs.whmcs.com/API:Module_Change_Package
     */
    public static function moduleChangePackage($params = array()) {
        $params['action'] = 'modulechangepackage';
        return self::sendRequest($params);
    }

    /**
     * Runs the change password command to the module for a service
     *
     * @see http://docs.whmcs.com/API:Module_Change_Password
     */
    public static function moduleChangePassword($params = array()) {
        $params['action'] = 'modulechangepw';
        return self::sendRequest($params);
    }

}
