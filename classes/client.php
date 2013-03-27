<?php

/**
 * Client class for managing clients
 *
 * @package   WHMCS
 * @author    Joshua Priddle <jpriddle@nevercraft.net>
 * @version   v0.0.1
 * @copyright 2011 DotBlock Inc
 */
class WHMCS_Client extends WHMCS_Api
{
	/**
	 * Create a new client
	 *
	 * @see http://docs.whmcs.com/API:Add_Client
	 */
	public static function add_client($params = array())
	{
		$params['action'] = 'addclient';
		return self::send_request($params);
	}
	
	/**
	 * Update a client's info
	 *
	 * @see http://docs.whmcs.com/API:Update_Client
	 */
	public static function update_client($params = array())
	{
		$params['action'] = 'updateclient';
		return self::send_request($params);
	}
	
	/**
	 * Delete a client
	 *
	 * @see http://docs.whmcs.com/API:Delete_Client
	 */
	public static function delete_client($params = array())
	{
		$params['action'] = 'deleteclient';
		return self::send_request($params);
	}
	
	/**
	 * Close a client account
	 *
	 * @see http://docs.whmcs.com/API:Close_Client
	 */
	public static function close_client($params = array())
	{
		$params['action'] = 'closeclient';
		return self::send_request($params);
	}
	
	/**
	 * Add the client note
	 *
	 * @see http://docs.whmcs.com/API:Add_Client_Note
	 */
	public static function add_client_note($params = array())
	{
		$params['action'] = 'addclientnote';
		return self::send_request($params);
	}
	
	/**
	 * Get multiple clients
	 *
	 * @see http://docs.whmcs.com/API:Get_Clients
	 */
	public static function get_clients($params = array())
	{
		$params['action'] = 'getclients';
		return self::send_request($params);
	}
	
	/**
	 * Get a client's info
	 *
	 * @see http://docs.whmcs.com/API:Get_Clients_Details
	 */
	public static function get_clients_details($params = array())
	{
		$params['action'] = 'getclientsdetails';
		return self::send_request($params);
	}
	
	/**
	 * Get a list of the client credits
	 *
	 * @see http://docs.whmcs.com/API:Get_Credits
	 */
	public static function get_credits($params = array())
	{
		$params['action'] = 'getcredits';
		return self::send_request($params);
	}
	
	/**
	 * Get a list of the client emails
	 *
	 * @see http://docs.whmcs.com/API:Get_Emails
	 */
	public static function get_emails($params = array())
	{
		$params['action'] = 'getemails';
		return self::send_request($params);
	}
	
	/**
	 * Get quotes
	 *
	 * @see http://docs.whmcs.com/API:Get_Quotes
	 */
	public static function get_quotes($params = array())
	{
		return WHMCS_Quote::get_quotes($params);
	}
	
	/**
	 * Get a hash of a client's password
	 *
	 * @see http://docs.whmcs.com/API:Get_Clients_Password
	 */
	public static function get_clients_password($params = array())
	{
		$params['action'] = 'getclientpassword';
		return self::send_request($params);
	}
	
	/**
	 * Get transactions
	 *
	 * @see http://docs.whmcs.com/API:Get_Transactions
	 */
	public static function get_transactions($params = array())
	{
		return WHMCS_Invoice::get_transactions($params);
	}
	
	/**
	 * Add a client contact
	 *
	 * @see http://docs.whmcs.com/API:Add_Contact
	 */
	public static function add_contact($params = array())
	{
		$params['action'] = 'addcontact';
		return self::send_request($params);
	}
	
	/**
	 * Get client's contacts
	 *
	 * @see http://docs.whmcs.com/API:Get_Contacts
	 */
	public static function get_contacts($params = array())
	{
		$params['action'] = 'getcontacts';
		return self::send_request($params);
	}
	
	/**
	 * Update a client's contact
	 *
	 * @see http://docs.whmcs.com/API:Update_Contact
	 */
	public static function update_contact($params = array())
	{
		$params['action'] = 'updatecontact';
		return self::send_request($params);
	}
	
	/**
	 * Delete a client's contact
	 *
	 * @see http://docs.whmcs.com/API:Delete_Contact
	 */
	public static function delete_contact($params = array())
	{
		$params['action'] = 'deletecontact';
		return self::send_request($params);
	}
	
	/**
	 * Get client's products
	 *
	 * @see http://docs.whmcs.com/API:Get_Clients_Products
	 */
	public static function get_clients_products($params = array())
	{
		$params['action'] = 'getclientsproducts';
		return self::send_request($params);
	}
	
	/**
	 * Update client's product
	 *
	 * @see http://docs.whmcs.com/API:Update_Client_Product
	 */
	public static function update_client_product($params = array())
	{
		$params['action'] = 'updateclientproduct';
		return self::send_request($params);
	}
	
	/**
	 * Update client's addon
	 *
	 * @see http://docs.whmcs.com/API:Update_Client_Addon
	 */
	public static function update_client_addon($params = array())
	{
		$params['action'] = 'updateclientaddon';
		return self::send_request($params);
	}
	
	/**
	 * Get the details of all the domains a client has
	 *
	 * @see http://docs.whmcs.com/API:Get_Clients_Domains
	 */
	public static function get_clients_domains($params = array())
	{
		$params['action'] = 'getclientsdomains';
		return self::send_request($params);
	}
	
	/**
	 * Update client's domain
	 *
	 * @see http://docs.whmcs.com/API:Update_Client_Domain
	 */
	public static function update_client_domain($params = array())
	{
		$params['action'] = 'updateclientdomain';
		return self::send_request($params);
	}
	
	/**
	 * Add cancellation request for a specific product
	 *
	 * @see http://docs.whmcs.com/API:Add_Cancel_Request
	 */
	public static function add_cancel_request($params = array())
	{
		$params['action'] = 'addcancelrequest';
		return self::send_request($params);
	}

	/**
	 * Allows you to calculate the cost for an upgrade or downgrade of a product/service, and create an order for it
	 *
	 * @see http://docs.whmcs.com/API:Upgrade_Product
	 */
	public static function upgrade_product($params = array())
	{
		$params['action'] = 'upgradeproduct';
		return self::send_request($params);
	}
	
	/**
	 * Validate client login info
	 *
	 * @see http://docs.whmcs.com/API:Validate_Login
	 */
	public static function validate_login($params = array())
	{
		$params['action'] = 'validatelogin';
		return self::send_request($params);
	}
	
	/**
	 * Send email to client
	 *
	 * @see http://docs.whmcs.com/API:Send_Email
	 */
	public static function send_email($params = array())
	{
		$params['action'] = 'sendemail';
		return self::send_request($params);
	}
}
