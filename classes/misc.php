<?php

/**
 * Misc class for miscelaneous WHMCS API functions
 *
 * @package   WHMCS
 * @author    Joshua Priddle <jpriddle@nevercraft.net>
 * @version   v0.0.1
 * @copyright 2011 DotBlock Inc
 */
class WHMCS_Misc extends WHMCS_Api
{
	/**
	 * Get activity log
	 *
	 * @see http://docs.whmcs.com/API:Get_Activity_Log
	 */
	public static function get_activity_log($params = array())
	{
		$params['action'] = 'getactivitylog';
		return self::send_request($params);
	}
	
	/**
	 * Get administrator details
	 *
	 * @see http://docs.whmcs.com/API:Get_Admin_Details
	 */
	public static function get_admin_details()
	{
		return self::send_request(array('action' => 'getadmindetails'));
	}
	
	/**
	 * Update administrator notes
	 *
	 * @see http://docs.whmcs.com/API:Update_Admin_Notes
	 */
	public static function update_admin_notes($params = array())
	{
		$params['action'] = 'updateadminnotes';
		return self::send_request($params);
	}
	
	/**
	 * Get allowed currencies
	 *
	 * @see http://docs.whmcs.com/API:Get_Currencies
	 */
	public static function get_currencies()
	{
		return self::send_request(array('action' => 'getcurrencies'));
	}
	
	/**
	 * Get promotions
	 *
	 * @see http://docs.whmcs.com/API:Get_Promotions
	 */
	public static function get_promotions($params = array())
	{
		return WHMCS_Order::get_promotions($params);
	}
	
	/**
	 * Get a list of the client groups
	 *
	 * @see http://docs.whmcs.com/API:Get_Client_Groups
	 */
	public static function get_client_groups()
	{
		return self::send_request(array('action' => 'getclientgroups'));
	}
	
	/**
	 * Get email templates
	 *
	 * @see http://docs.whmcs.com/API:Get_Email_Templates
	 */
	public static function get_email_templates($params = array())
	{
		$params['action'] = 'getemailtemplates';
		return self::send_request($params);
	}
	
	/**
	 * Get todo items
	 *
	 * @see http://docs.whmcs.com/API:Get_To-Do_Items
	 */
	public static function get_todo_items($params = array())
	{
		$params['action'] = 'gettodoitems';
		return self::send_request($params);
	}
	
	/**
	 * Get configured todo item statuses
	 *
	 * @see http://docs.whmcs.com/API:Get_To-Do_Items_Statuses
	 */
	public static function get_todo_item_statuses()
	{
		return self::send_request(array('action' => 'gettodoitemstatuses'));
	}
	
	/**
	 * Update a todo list item
	 *
	 * @see http://docs.whmcs.com/API:Update_To-Do_Item
	 */
	public static function update_todo_item($params = array())
	{
		$params['action'] = 'updatetodoitem';
		return self::send_request($params);
	}
	
	/**
	 * Get staff online
	 *
	 * @see http://docs.whmcs.com/API:Get_Staff_Online
	 */
	public static function get_staff_online()
	{
		return self::send_request(array('action' => 'getstaffonline'));
	}
	
	/**
	 * Get stats
	 *
	 * @see http://docs.whmcs.com/API:Get_Stats
	 */
	public static function get_stats()
	{
		return self::send_request(array('action' => 'getstats'));
	}
	
	/**
	 * Encrypt a password with the WHMCS algorithm
	 *
	 * @see http://docs.whmcs.com/API:Encrypt_Password
	 */
	public static function encrypt_password($params = array())
	{
		$params['action'] = 'encryptpassword';
		return self::send_request($params);
	}
	
	/**
	 * Decrypt a string with the WHMCS algorithm
	 *
	 * @see http://docs.whmcs.com/API:Decrypt_Password
	 */
	public static function decrypt_password($params = array())
	{
		$params['action'] = 'decryptpassword';
		return self::send_request($params);
	}
	
	/**
	 * Ban an IP address
	 *
	 * @see http://docs.whmcs.com/API:Add_Banned_IP
	 */
	public static function add_banned_ip($params = array())
	{
		$params['action'] = 'addbannedip';
		return self::send_request($params);
	}
	
	/**
	 * Create products inside WHMCS
	 *
	 * @see http://docs.whmcs.com/API:Add_Product
	 */
	public static function add_product($params = array())
	{
		$params['action'] = 'addproduct';
		return self::send_request($params);
	}
	
	/**
	 * Add an item to the activity log
	 *
	 * @see http://docs.whmcs.com/API:Log_Activity
	 */
	public static function log_activity($params = array())
	{
		$params['action'] = 'logactivity';
		return self::send_request($params);
	}
	
	/**
	 * Send an email to admin users
	 *
	 * @see http://docs.whmcs.com/API:Send_Admin_Email
	 */
	public static function send_admin_email($params = array())
	{
		$params['action'] = 'sendadminemail';
		return self::send_request($params);
	}
}
