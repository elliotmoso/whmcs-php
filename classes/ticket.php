<?php

/**
 * Ticket class for managing support tickets
 *
 * @package   WHMCS
 * @author    Joshua Priddle <jpriddle@nevercraft.net>
 * @version   v0.0.1
 * @copyright 2011 DotBlock Inc
 */
class WHMCS_Ticket extends WHMCS_Api
{
	/**
	 * Open a new ticket
	 *
	 * @see http://docs.whmcs.com/API:Open_Ticket
	 */
	public static function open_ticket($params = array())
	{
		$params['action'] = 'openticket';
		return self::send_request($params);
	}
	
	/**
	 * Reply to ticket
	 *
	 * @see http://docs.whmcs.com/API:Reply_Ticket
	 */
	public static function reply_ticket($params = array())
	{
		$params['action'] = 'addticketreply';
		return self::send_request($params);
	}
	
	/**
	 * Get tickets
	 *
	 * @see http://docs.whmcs.com/API:Get_Tickets
	 */
	public static function get_tickets($params = array())
	{
		$params['action'] = 'gettickets';
		return self::send_request($params);
	}
	
	/**
	 * Get a ticket
	 *
	 * @see http://docs.whmcs.com/API:Get_Ticket
	 */
	public static function get_ticket($params = array())
	{
		$params['action'] = 'getticket';
		return self::send_request($params);
	}
	
	/**
	 * Update an existing ticket
	 *
	 * @see http://docs.whmcs.com/API:Update_Ticket
	 */
	public static function update_ticket($params = array())
	{
		$params['action'] = 'updateticket';
		return self::send_request($params);
	}
	
	/**
	 * Delete an existing ticket
	 *
	 * @see http://docs.whmcs.com/API:Delete_Ticket
	 */
	public static function delete_ticket($params = array())
	{
		$params['action'] = 'deleteticket';
		return self::send_request($params);
	}
	
	/**
	 * Add a note to an existing ticket
	 *
	 * @see http://docs.whmcs.com/API:Add_Ticket_Note
	 */
	public static function add_ticket_note($params = array())
	{
		$params['action'] = 'addticketnote';
		return self::send_request($params);
	}
	
	/**
	 * Get ticket notes from a specified ticket
	 *
	 * @see http://docs.whmcs.com/API:Get_Ticket_Notes
	 */
	public static function get_ticket_notes($params = array())
	{
		$params['action'] = 'getticketnotes';
		return self::send_request($params);
	}
	
	/**
	 * Delete a ticket note from a ticket
	 *
	 * @see http://docs.whmcs.com/API:Delete_Ticket_Note
	 */
	public static function delete_ticket_note($params = array())
	{
		$params['action'] = 'deleteticketnote';
		return self::send_request($params);
	}
	
	/**
	 * Get support departments
	 *
	 * @see http://docs.whmcs.com/API:Get_Support_Departments
	 */
	public static function get_support_departments($params = array())
	{
		$params['action'] = 'getsupportdepartments';
		return self::send_request($params);
	}
	
	/**
	 * Get support statuses
	 *
	 * @see http://docs.whmcs.com/API:Get_Support_Statuses
	 */
	public static function get_support_statuses($params = array())
	{
		$params['action'] = 'getsupportstatuses';
		return self::send_request($params);
	}
	
	/**
	 * Get ticket predefined categories
	 *
	 * @see http://docs.whmcs.com/API:Get_Ticket_Predefined_Cats
	 */
	public static function get_ticket_predefined_cats()
	{
		return self::send_request(array('action' => 'getticketpredefinedcats'));
	}
	
	/**
	 * Get ticket predefined replies
	 *
	 * @see http://docs.whmcs.com/API:Get_Ticket_Predefined_Replies
	 */
	public static function get_ticket_predefined_repies($params = array())
	{
		$params['action'] = 'getticketpredefinedreplies';
		return self::send_request($params);
	}
	
	/**
	 * Add a new announcement
	 *
	 * @see http://docs.whmcs.com/API:Add_Announcement
	 */
	public static function add_announcement($params = array())
	{
		$params['action'] = 'addannouncement';
		return self::send_request($params);
	}
	
	/**
	 * Delete an announcement
	 *
	 * @see http://docs.whmcs.com/API:Delete_Announcement
	 */
	public static function delete_announcement($params = array())
	{
		$params['action'] = 'deleteannouncement';
		return self::send_request($params);
	}
	
	/**
	 * Update an announcement
	 *
	 * @see http://docs.whmcs.com/API:Update_Announcement
	 */
	public static function update_announcement($params = array())
	{
		$params['action'] = 'updateannouncement';
		return self::send_request($params);
	}
	
	/**
	 * Get a list of the announcements
	 *
	 * @see http://docs.whmcs.com/API:Get_Announcements
	 */
	public static function get_announcements($params = array())
	{
		$params['action'] = 'getannouncements';
		return self::send_request($params);
	}
}
