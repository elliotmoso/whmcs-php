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

class Misc extends \Whmcs\Api {

    /**
     * Get activity log
     *
     * @see http://docs.whmcs.com/API:Get_Activity_Log
     */
    public static function getActivityLog($params = array()) {
        $params['action'] = 'getactivitylog';
        return self::sendRequest($params);
    }

    /**
     * Get administrator details
     *
     * @see http://docs.whmcs.com/API:Get_Admin_Details
     */
    public static function getAdminDetails() {
        return self::sendRequest(array('action' => 'getadmindetails'));
    }

    /**
     * Update administrator notes
     *
     * @see http://docs.whmcs.com/API:Update_Admin_Notes
     */
    public static function updateAdminNotes($params = array()) {
        $params['action'] = 'updateadminnotes';
        return self::sendRequest($params);
    }

    /**
     * Get allowed currencies
     *
     * @see http://docs.whmcs.com/API:Get_Currencies
     */
    public static function getCurrencies() {
        return self::sendRequest(array('action' => 'getcurrencies'));
    }

    /**
     * Get promotions
     *
     * @see http://docs.whmcs.com/API:Get_Promotions
     */
    public static function getPromotions($params = array()) {
        return WHMCS_Order::get_promotions($params);
    }

    /**
     * Get a list of the client groups
     *
     * @see http://docs.whmcs.com/API:Get_Client_Groups
     */
    public static function getClientGroups() {
        return self::sendRequest(array('action' => 'getclientgroups'));
    }

    /**
     * Get email templates
     *
     * @see http://docs.whmcs.com/API:Get_Email_Templates
     */
    public static function getEmailTemplates($params = array()) {
        $params['action'] = 'getemailtemplates';
        return self::sendRequest($params);
    }

    /**
     * Get todo items
     *
     * @see http://docs.whmcs.com/API:Get_To-Do_Items
     */
    public static function getTodoItems($params = array()) {
        $params['action'] = 'gettodoitems';
        return self::sendRequest($params);
    }

    /**
     * Get configured todo item statuses
     *
     * @see http://docs.whmcs.com/API:Get_To-Do_Items_Statuses
     */
    public static function getTodoItemStatuses() {
        return self::sendRequest(array('action' => 'gettodoitemstatuses'));
    }

    /**
     * Update a todo list item
     *
     * @see http://docs.whmcs.com/API:Update_To-Do_Item
     */
    public static function updateTodoItem($params = array()) {
        $params['action'] = 'updatetodoitem';
        return self::sendRequest($params);
    }

    /**
     * Get staff online
     *
     * @see http://docs.whmcs.com/API:Get_Staff_Online
     */
    public static function getStaffOnline() {
        return self::sendRequest(array('action' => 'getstaffonline'));
    }

    /**
     * Get stats
     *
     * @see http://docs.whmcs.com/API:Get_Stats
     */
    public static function getStats() {
        return self::sendRequest(array('action' => 'getstats'));
    }

    /**
     * Encrypt a password with the WHMCS algorithm
     *
     * @see http://docs.whmcs.com/API:Encrypt_Password
     */
    public static function encryptPassword($params = array()) {
        $params['action'] = 'encryptpassword';
        return self::sendRequest($params);
    }

    /**
     * Decrypt a string with the WHMCS algorithm
     *
     * @see http://docs.whmcs.com/API:Decrypt_Password
     */
    public static function decryptPassword($params = array()) {
        $params['action'] = 'decryptpassword';
        return self::sendRequest($params);
    }

    /**
     * Ban an IP address
     *
     * @see http://docs.whmcs.com/API:Add_Banned_IP
     */
    public static function addBannedIp($params = array()) {
        $params['action'] = 'addbannedip';
        return self::sendRequest($params);
    }

    /**
     * Create products inside WHMCS
     *
     * @see http://docs.whmcs.com/API:Add_Product
     */
    public static function addProduct($params = array()) {
        $params['action'] = 'addproduct';
        return self::sendRequest($params);
    }

    /**
     * Add an item to the activity log
     *
     * @see http://docs.whmcs.com/API:Log_Activity
     */
    public static function logActivity($params = array()) {
        $params['action'] = 'logactivity';
        return self::sendRequest($params);
    }

    /**
     * Send an email to admin users
     *
     * @see http://docs.whmcs.com/API:Send_Admin_Email
     */
    public static function sendAdminEmail($params = array()) {
        $params['action'] = 'sendadminemail';
        return self::sendRequest($params);
    }

}
