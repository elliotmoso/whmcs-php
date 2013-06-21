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

class Domain extends \Whmcs\Api {

    /**
     * Sends a register command to the registrar
     *
     * @see http://docs.whmcs.com/API:Register_Domain
     */
    public static function registerDomain($params = array()) {
        $params['action'] = 'domainregister';
        return self::sendRequest($params);
    }

    /**
     * Sends a renew command to the registrar
     *
     * @see http://docs.whmcs.com/API:Renew_Domain
     */
    public static function renewDomain($params = array()) {
        $params['action'] = 'domainrenew';
        return self::sendRequest($params);
    }

    /**
     * Sends a transfer command to the registrar
     *
     * @see http://docs.whmcs.com/API:Transfer_Domain
     */
    public static function transferDomain($params = array()) {
        $params['action'] = 'domaintrasfer';
        return self::sendRequest($params);
    }

    /**
     * Sends a release command to the registrar
     *
     * @see http://docs.whmcs.com/API:Release_Domain
     * @see http://www.nominet.org.uk/registrars/becomeregistrar/taglist/
     */
    public static function releaseDomain($params = array()) {
        $params['action'] = 'domainrelease';
        return self::sendRequest($params);
    }

    /**
     * Obtain the lock state of a domain name
     *
     * @see http://docs.whmcs.com/API:Domain_Locking_Status
     */
    public static function getDomainLock($params = array()) {
        $params['action'] = 'domaingetlockingstatus';
        return self::sendRequest($params);
    }

    /**
     * Obtain the nameservers of a domain name
     *
     * @see http://docs.whmcs.com/API:Domain_Nameservers
     */
    public static function getNameservers($params = array()) {
        $params['action'] = 'domaingetnameservers';
        return self::sendRequest($params);
    }

    /**
     * Obtain the whois of a domain name
     *
     * @see http://docs.whmcs.com/API:Get_Domain_WHOIS
     */
    public static function getWhois($params = array()) {
        $params['action'] = 'domaingetwhoisinfo';
        return self::sendRequest($params);
    }

    /**
     * Obtain the EPP Code of a domain name
     *
     * @see http://docs.whmcs.com/API:Domain_EPP
     */
    public static function requestEpp($params = array()) {
        $params['action'] = 'domainrequestepp';
        return self::sendRequest($params);
    }

    /**
     * Toggle ID protect for a domain name
     *
     * @see http://docs.whmcs.com/API:Toggle_ID_Protect
     */
    public static function toggleIdProtect($params = array()) {
        $params['action'] = 'domaintoggleidprotect';
        return self::sendRequest($params);
    }

    /**
     * Update the lock state of a domain name
     *
     * @see http://docs.whmcs.com/API:Domain_Update_Lock
     */
    public static function updateLock($params = array()) {
        $params['action'] = 'domainupdatelockingstatus';
        return self::sendRequest($params);
    }

    /**
     * Update the nameservers of a domain name
     *
     * @see http://docs.whmcs.com/API:Domain_Update_Nameservers
     */
    public static function updateNameservers($params = array()) {
        $params['action'] = 'domainupdatenameservers';
        return self::sendRequest($params);
    }

    /**
     * Update the contact information on a domain name
     *
     * @see http://docs.whmcs.com/API:Domain_Update_WHOIS
     */
    public static function updateWhois($params = array()) {
        $params['action'] = 'domainupdatewhoisinfo';
        return self::sendRequest($params);
    }

    /**
     * Perform a whois lookup for a domain name
     *
     * @see http://docs.whmcs.com/API:Domain_WHOIS
     */
    public static function domainWhois($params = array()) {
        $params['action'] = 'domainwhois';
        return self::sendRequest($params);
    }

}
