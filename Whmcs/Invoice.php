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

class Invoice extends \Whmcs\Api {

    /**
     * Get invoices
     *
     * @see http://docs.whmcs.com/API:Get_Invoices
     */
    public static function getInvoices($params = array()) {
        $params['action'] = 'getinvoices';
        return self::sendRequest($params);
    }

    /**
     * Get an invoice
     *
     * @see http://docs.whmcs.com/API:Get_Invoice
     */
    public static function getInvoice($params = array()) {
        $params['action'] = 'getinvoice';
        return self::sendRequest($params);
    }

    /**
     * Create a new invoice
     *
     * @see http://docs.whmcs.com/API:Create_Invoice
     */
    public static function createInvoice($params = array()) {
        $params['action'] = 'createinvoice';
        return self::sendRequest($params);
    }

    /**
     * Update an existing invoice
     *
     * @see http://docs.whmcs.com/API:Update_Invoice
     */
    public static function updateInvoice($params = array()) {
        $params['action'] = 'updateinvoice';
        return self::sendRequest($params);
    }

    /**
     * Add an invoice payment
     *
     * @see http://docs.whmcs.com/API:Add_Invoice_Payment
     */
    public static function addInvoicePayment($params = array()) {
        $params['action'] = 'addinvoicepayment';
        return self::sendRequest($params);
    }

    /**
     * Attempt to capture payment for an invoice
     *
     * @see http://docs.whmcs.com/API:Capture_Payment
     */
    public static function capturePayment($params = array()) {
        $params['action'] = 'capturepayment';
        return self::sendRequest($params);
    }

    /**
     * Apply credit from a clients credit balance to an invoice
     *
     * @see http://docs.whmcs.com/API:Apply_Credit
     */
    public static function applyCredit($params = array()) {
        $params['action'] = 'applycredit';
        return self::sendRequest($params);
    }

    /**
     * Add a new billable item
     *
     * @see http://docs.whmcs.com/API:Add_Billable_Item
     */
    public static function addBillableItem($params = array()) {
        $params['action'] = 'addbillableitem';
        return self::sendRequest($params);
    }

    /**
     * Add a credit to client's account
     *
     * @see http://docs.whmcs.com/API:Add_Credit
     */
    public static function addCredit($params = array()) {
        $params['action'] = 'addcredit';
        return self::sendRequest($params);
    }

    /**
     * Add transaction
     *
     * @see http://docs.whmcs.com/API:Add_Transaction
     */
    public static function addTransaction($params = array()) {
        $params['action'] = 'addtransaction';
        return self::sendRequest($params);
    }

    /**
     * Get transactions
     *
     * @see http://docs.whmcs.com/API:Get_Transactions
     */
    public static function getTransactions($params = array()) {
        $params['action'] = 'gettransactions';
        return self::sendRequest($params);
    }

    /**
     * Update transaction
     *
     * @see http://docs.whmcs.com/API:Update_Transaction
     */
    public static function updateTransaction($params = array()) {
        $params['action'] = 'updatetransaction';
        return self::sendRequest($params);
    }

    /**
     * Get configured payment methods
     *
     * @see http://docs.whmcs.com/API:Get_Payment_Methods
     */
    public static function getPaymentMethods() {
        return self::sendRequest(array('action' => 'getpaymentmethods'));
    }

}
