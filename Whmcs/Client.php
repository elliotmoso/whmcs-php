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

class Client extends \Whmcs\Api {

    /**
     * Create a new client
     *
     * @see http://docs.whmcs.com/API:Add_Client
     */
    public static function addClient($params = array()) {
        $params['action'] = 'addclient';
        return self::sendRequest($params);
    }

    /**
     * Update a client's info
     *
     * @see http://docs.whmcs.com/API:Update_Client
     */
    public static function updateClient($params = array()) {
        $params['action'] = 'updateclient';
        return self::sendRequest($params);
    }

    /**
     * Delete a client
     *
     * @see http://docs.whmcs.com/API:Delete_Client
     */
    public static function deleteClient($params = array()) {
        $params['action'] = 'deleteclient';
        return self::sendRequest($params);
    }

    /**
     * Close a client account
     *
     * @see http://docs.whmcs.com/API:Close_Client
     */
    public static function closeClient($params = array()) {
        $params['action'] = 'closeclient';
        return self::sendRequest($params);
    }

    /**
     * Add the client note
     *
     * @see http://docs.whmcs.com/API:Add_Client_Note
     */
    public static function addClientNote($params = array()) {
        $params['action'] = 'addclientnote';
        return self::sendRequest($params);
    }

    /**
     * Get multiple clients
     *
     * @see http://docs.whmcs.com/API:Get_Clients
     */
    public static function getClients($params = array()) {
        $params['action'] = 'getclients';
        return self::sendRequest($params);
    }

    /**
     * Get a client's info
     *
     * @see http://docs.whmcs.com/API:Get_Clients_Details
     */
    public static function getClientsDetails($params = array()) {
        $params['action'] = 'getclientsdetails';
        return self::sendRequest($params);
    }

    /**
     * Get a list of the client credits
     *
     * @see http://docs.whmcs.com/API:Get_Credits
     */
    public static function getCredits($params = array()) {
        $params['action'] = 'getcredits';
        return self::sendRequest($params);
    }

    /**
     * Get a list of the client emails
     *
     * @see http://docs.whmcs.com/API:Get_Emails
     */
    public static function getEmails($params = array()) {
        $params['action'] = 'getemails';
        return self::sendRequest($params);
    }

    /**
     * Get quotes
     *
     * @see http://docs.whmcs.com/API:Get_Quotes
     */
    public static function getQuotes($params = array()) {
        return \WHMCS\Quote::getQuotes($params);
    }

    /**
     * Get a hash of a client's password
     *
     * @see http://docs.whmcs.com/API:Get_Clients_Password
     */
    public static function getClientsPassword($params = array()) {
        $params['action'] = 'getclientpassword';
        return self::sendRequest($params);
    }

    /**
     * Get transactions
     *
     * @see http://docs.whmcs.com/API:Get_Transactions
     */
    public static function getTransactions($params = array()) {
        return WHMCS_Invoice::get_transactions($params);
    }

    /**
     * Add a client contact
     *
     * @see http://docs.whmcs.com/API:Add_Contact
     */
    public static function addContact($params = array()) {
        $params['action'] = 'addcontact';
        return self::sendRequest($params);
    }

    /**
     * Get client's contacts
     *
     * @see http://docs.whmcs.com/API:Get_Contacts
     */
    public static function getContacts($params = array()) {
        $params['action'] = 'getcontacts';
        return self::sendRequest($params);
    }

    /**
     * Update a client's contact
     *
     * @see http://docs.whmcs.com/API:Update_Contact
     */
    public static function updateContact($params = array()) {
        $params['action'] = 'updatecontact';
        return self::sendRequest($params);
    }

    /**
     * Delete a client's contact
     *
     * @see http://docs.whmcs.com/API:Delete_Contact
     */
    public static function deleteContact($params = array()) {
        $params['action'] = 'deletecontact';
        return self::sendRequest($params);
    }

    /**
     * Get client's products
     *
     * @see http://docs.whmcs.com/API:Get_Clients_Products
     */
    public static function getClientsProducts($params = array()) {
        $params['action'] = 'getclientsproducts';
        return self::sendRequest($params);
    }

    /**
     * Update client's product
     *
     * @see http://docs.whmcs.com/API:Update_Client_Product
     */
    public static function updateClientProduct($params = array()) {
        $params['action'] = 'updateclientproduct';
        return self::sendRequest($params);
    }

    /**
     * Update client's addon
     *
     * @see http://docs.whmcs.com/API:Update_Client_Addon
     */
    public static function updateClientAddon($params = array()) {
        $params['action'] = 'updateclientaddon';
        return self::sendRequest($params);
    }

    /**
     * Get the details of all the domains a client has
     *
     * @see http://docs.whmcs.com/API:Get_Clients_Domains
     */
    public static function getClientsDomains($params = array()) {
        $params['action'] = 'getclientsdomains';
        return self::sendRequest($params);
    }

    /**
     * Update client's domain
     *
     * @see http://docs.whmcs.com/API:Update_Client_Domain
     */
    public static function updateClientDomain($params = array()) {
        $params['action'] = 'updateclientdomain';
        return self::sendRequest($params);
    }

    /**
     * Add cancellation request for a specific product
     *
     * @see http://docs.whmcs.com/API:Add_Cancel_Request
     */
    public static function addCancelRequest($params = array()) {
        $params['action'] = 'addcancelrequest';
        return self::sendRequest($params);
    }

    /**
     * Allows you to calculate the cost for an upgrade or downgrade of a product/service, and create an order for it
     *
     * @see http://docs.whmcs.com/API:Upgrade_Product
     */
    public static function upgradeProduct($params = array()) {
        $params['action'] = 'upgradeproduct';
        return self::sendRequest($params);
    }

    /**
     * Validate client login info
     *
     * @see http://docs.whmcs.com/API:Validate_Login
     */
    public static function validateLogin($params = array()) {
        $params['action'] = 'validatelogin';
        return self::sendRequest($params);
    }

    /**
     * Send email to client
     *
     * @see http://docs.whmcs.com/API:Send_Email
     */
    public static function sendEmail($params = array()) {
        $params['action'] = 'sendemail';
        return self::sendRequest($params);
    }

}
