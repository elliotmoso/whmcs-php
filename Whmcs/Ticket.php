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

class Ticket extends \Whmcs\Api {

    /**
     * Open a new ticket
     *
     * @see http://docs.whmcs.com/API:Open_Ticket
     */
    public static function openTicket($params = array()) {
        $params['action'] = 'openticket';
        return self::sendRequest($params);
    }

    /**
     * Reply to ticket
     *
     * @see http://docs.whmcs.com/API:Reply_Ticket
     */
    public static function replyTicket($params = array()) {
        $params['action'] = 'addticketreply';
        return self::sendRequest($params);
    }

    /**
     * Get tickets
     *
     * @see http://docs.whmcs.com/API:Get_Tickets
     */
    public static function getTickets($params = array()) {
        $params['action'] = 'gettickets';
        return self::sendRequest($params);
    }

    /**
     * Get a ticket
     *
     * @see http://docs.whmcs.com/API:Get_Ticket
     */
    public static function getTicket($params = array()) {
        $params['action'] = 'getticket';
        return self::sendRequest($params);
    }

    /**
     * Update an existing ticket
     *
     * @see http://docs.whmcs.com/API:Update_Ticket
     */
    public static function updateTicket($params = array()) {
        $params['action'] = 'updateticket';
        return self::sendRequest($params);
    }

    /**
     * Delete an existing ticket
     *
     * @see http://docs.whmcs.com/API:Delete_Ticket
     */
    public static function deleteTicket($params = array()) {
        $params['action'] = 'deleteticket';
        return self::sendRequest($params);
    }

    /**
     * Add a note to an existing ticket
     *
     * @see http://docs.whmcs.com/API:Add_Ticket_Note
     */
    public static function addTicketNote($params = array()) {
        $params['action'] = 'addticketnote';
        return self::sendRequest($params);
    }

    /**
     * Get ticket notes from a specified ticket
     *
     * @see http://docs.whmcs.com/API:Get_Ticket_Notes
     */
    public static function getTicketNotes($params = array()) {
        $params['action'] = 'getticketnotes';
        return self::sendRequest($params);
    }

    /**
     * Delete a ticket note from a ticket
     *
     * @see http://docs.whmcs.com/API:Delete_Ticket_Note
     */
    public static function deleteTicketNote($params = array()) {
        $params['action'] = 'deleteticketnote';
        return self::sendRequest($params);
    }

    /**
     * Get support departments
     *
     * @see http://docs.whmcs.com/API:Get_Support_Departments
     */
    public static function getSupportDepartments($params = array()) {
        $params['action'] = 'getsupportdepartments';
        return self::sendRequest($params);
    }

    /**
     * Get support statuses
     *
     * @see http://docs.whmcs.com/API:Get_Support_Statuses
     */
    public static function getSupportStatuses($params = array()) {
        $params['action'] = 'getsupportstatuses';
        return self::sendRequest($params);
    }

    /**
     * Get ticket predefined categories
     *
     * @see http://docs.whmcs.com/API:Get_Ticket_Predefined_Cats
     */
    public static function getTicketPredefinedCats() {
        return self::sendRequest(array('action' => 'getticketpredefinedcats'));
    }

    /**
     * Get ticket predefined replies
     *
     * @see http://docs.whmcs.com/API:Get_Ticket_Predefined_Replies
     */
    public static function getTicketPredefinedReplies($params = array()) {
        $params['action'] = 'getticketpredefinedreplies';
        return self::sendRequest($params);
    }

    /**
     * Add a new announcement
     *
     * @see http://docs.whmcs.com/API:Add_Announcement
     */
    public static function addAnnouncement($params = array()) {
        $params['action'] = 'addannouncement';
        return self::sendRequest($params);
    }

    /**
     * Delete an announcement
     *
     * @see http://docs.whmcs.com/API:Delete_Announcement
     */
    public static function deleteAnnouncement($params = array()) {
        $params['action'] = 'deleteannouncement';
        return self::sendRequest($params);
    }

    /**
     * Update an announcement
     *
     * @see http://docs.whmcs.com/API:Update_Announcement
     */
    public static function updateAnnouncement($params = array()) {
        $params['action'] = 'updateannouncement';
        return self::sendRequest($params);
    }

    /**
     * Get a list of the announcements
     *
     * @see http://docs.whmcs.com/API:Get_Announcements
     */
    public static function getAnnouncements($params = array()) {
        $params['action'] = 'getannouncements';
        return self::sendRequest($params);
    }

}
