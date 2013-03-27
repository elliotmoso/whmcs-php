<?php

/**
 * Invoice class for managing invoices
 *
 * @package   WHMCS
 * @author    Joshua Priddle <jpriddle@nevercraft.net>
 * @version   v0.0.1
 * @copyright 2011 DotBlock Inc
 */
class WHMCS_Invoice extends WHMCS_Api
{
	/**
	 * Get invoices
	 *
	 * @see http://docs.whmcs.com/API:Get_Invoices
	 */
	public static function get_invoices($params = array())
	{
		$params['action'] = 'getinvoices';
		return self::send_request($params);
	}
	
	/**
	 * Get an invoice
	 *
	 * @see http://docs.whmcs.com/API:Get_Invoice
	 */
	public static function get_invoice($params = array())
	{
		$params['action'] = 'getinvoice';
		return self::send_request($params);
	}
	
	/**
	 * Create a new invoice
	 *
	 * @see http://docs.whmcs.com/API:Create_Invoice
	 */
	public static function create_invoice($params = array())
	{
		$params['action'] = 'createinvoice';
		return self::send_request($params);
	}
	
	/**
	 * Update an existing invoice
	 *
	 * @see http://docs.whmcs.com/API:Update_Invoice
	 */
	public static function update_invoice($params = array())
	{
		$params['action'] = 'updateinvoice';
		return self::send_request($params);
	}
	
	/**
	 * Add an invoice payment
	 *
	 * @see http://docs.whmcs.com/API:Add_Invoice_Payment
	 */
	public static function add_invoice_payment($params = array())
	{
		$params['action'] = 'addinvoicepayment';
		return self::send_request($params);
	}
	
	/**
	 * Attempt to capture payment for an invoice
	 *
	 * @see http://docs.whmcs.com/API:Capture_Payment
	 */
	public static function capture_payment($params = array())
	{
		$params['action'] = 'capturepayment';
		return self::send_request($params);
	}
	
	/**
	 * Apply credit from a clients credit balance to an invoice
	 *
	 * @see http://docs.whmcs.com/API:Apply_Credit
	 */
	public static function apply_credit($params = array())
	{
		$params['action'] = 'applycredit';
		return self::send_request($params);
	}
	
	/**
	 * Add a new billable item
	 *
	 * @see http://docs.whmcs.com/API:Add_Billable_Item
	 */
	public static function add_billable_item($params = array())
	{
		$params['action'] = 'addbillableitem';
		return self::send_request($params);
	}
	
	/**
	 * Add a credit to client's account
	 *
	 * @see http://docs.whmcs.com/API:Add_Credit
	 */
	public static function add_credit($params = array())
	{
		$params['action'] = 'addcredit';
		return self::send_request($params);
	}
	
	/**
	 * Add transaction
	 *
	 * @see http://docs.whmcs.com/API:Add_Transaction
	 */
	public static function add_transaction($params = array())
	{
		$params['action'] = 'addtransaction';
		return self::send_request($params);
	}
	
	/**
	 * Get transactions
	 *
	 * @see http://docs.whmcs.com/API:Get_Transactions
	 */
	public static function get_transactions($params = array())
	{
		$params['action'] = 'gettransactions';
		return self::send_request($params);
	}
	
	/**
	 * Update transaction
	 *
	 * @see http://docs.whmcs.com/API:Update_Transaction
	 */
	public static function update_transaction($params = array())
	{
		$params['action'] = 'updatetransaction';
		return self::send_request($params);
	}
	
	/**
	 * Get configured payment methods
	 *
	 * @see http://docs.whmcs.com/API:Get_Payment_Methods
	 */
	public static function get_payment_methods()
	{
		return self::send_request(array('action' => 'getpaymentmethods'));
	}
}
