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

class Quote extends \Whmcs\Api {

    /**
     * Create a new quote
     *
     * @see http://docs.whmcs.com/API:Create_Quote
     */
    public static function createQuote($params = array()) {
        $params['action'] = 'createquote';
        return self::sendRequest($params);
    }

    /**
     * Update an existing quote
     *
     * @see http://docs.whmcs.com/API:Update_Quote
     */
    public static function updateQuote($params = array()) {
        $params['action'] = 'updatequote';
        return self::sendRequest($params);
    }

    /**
     * Delete a quote
     *
     * @see http://docs.whmcs.com/API:Delete_Quote
     */
    public static function deleteQuote($params = array()) {
        $params['action'] = 'deletequote';
        return self::sendRequest($params);
    }

    /**
     * Send a quote to client
     *
     * @see http://docs.whmcs.com/API:Send_Quote
     */
    public static function sendQuote($params = array()) {
        $params['action'] = 'sendquote';
        return self::sendRequest($params);
    }

    /**
     * Accept a quote
     *
     * @see http://docs.whmcs.com/API:Accept_Quote
     */
    public static function acceptQuote($params = array()) {
        $params['action'] = 'acceptquote';
        return self::sendRequest($params);
    }

    /**
     * Get quotes
     *
     * @see http://docs.whmcs.com/API:Get_Quotes
     */
    public static function getQuotes($params = array()) {
        $params['action'] = 'getquotes';
        return self::sendRequest($params);
    }

}
