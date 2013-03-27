<?php

/**
 * Quote class for managing quotes
 *
 * @package   WHMCS
 * @author    Joshua Priddle <jpriddle@nevercraft.net>
 * @version   v0.0.1
 * @copyright 2011 DotBlock Inc
 */
class WHMCS_Quote extends WHMCS_Api
{
	/**
	 * Create a new quote
	 *
	 * @see http://docs.whmcs.com/API:Create_Quote
	 */
	public static function create_quote($params = array())
	{
		$params['action'] = 'createquote';
		return self::send_request($params);
	}
	
	/**
	 * Update an existing quote
	 *
	 * @see http://docs.whmcs.com/API:Update_Quote
	 */
	public static function update_quote($params = array())
	{
		$params['action'] = 'updatequote';
		return self::send_request($params);
	}
	
	/**
	 * Delete a quote
	 *
	 * @see http://docs.whmcs.com/API:Delete_Quote
	 */
	public static function delete_quote($params = array())
	{
		$params['action'] = 'deletequote';
		return self::send_request($params);
	}
	
	/**
	 * Send a quote to client
	 *
	 * @see http://docs.whmcs.com/API:Send_Quote
	 */
	public static function send_quote($params = array())
	{
		$params['action'] = 'sendquote';
		return self::send_request($params);
	}
	
	/**
	 * Accept a quote
	 *
	 * @see http://docs.whmcs.com/API:Accept_Quote
	 */
	public static function accept_quote($params = array())
	{
		$params['action'] = 'acceptquote';
		return self::send_request($params);
	}
	
	/**
	 * Get quotes
	 *
	 * @see http://docs.whmcs.com/API:Get_Quotes
	 */
	public static function get_quotes($params = array())
	{
		$params['action'] = 'getquotes';
		return self::send_request($params);
	}
}
