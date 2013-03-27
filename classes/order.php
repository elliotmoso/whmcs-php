<?php

/**
 * Order class for managing orders
 *
 * @package   WHMCS
 * @author    Joshua Priddle <jpriddle@nevercraft.net>
 * @version   v0.0.1
 * @copyright 2011 DotBlock Inc
 */
class WHMCS_Order extends WHMCS_Api
{
	/**
	 * Create a new order
	 *
	 * @see http://docs.whmcs.com/API:Add_Order
	 */
	public static function add_order($params = array())
	{
		$params['action'] = 'addorder';
		return self::send_request($params);
	}
	
	/**
	 * Get orders
	 *
	 * @see http://docs.whmcs.com/API:Get_Orders
	 */
	public static function get_orders($params = array())
	{
		$params['action'] = 'getorders';
		return self::send_request($params);
	}
	
	/**
	 * Get products
	 *
	 * @see http://docs.whmcs.com/API:Get_Products
	 */
	public static function get_products($params = array())
	{
		$params['action'] = 'getproducts';
		return self::send_request($params);
	}
	
	/**
	 * Get promotions
	 *
	 * @see http://docs.whmcs.com/API:Get_Promotions
	 */
	public static function get_promotions($params = array())
	{
		$params['action'] = 'getpromotions';
		return self::send_request($params);
	}
	
	/**
	 * Get order statuses
	 *
	 * @see http://docs.whmcs.com/API:Get_Order_Statuses
	 */
	public static function get_order_statuses()
	{
		$params['action'] = 'getorderstatuses';
		return self::send_request($params);
	}
	
	/**
	 * Accept an order
	 *
	 * @see http://docs.whmcs.com/API:Accept_Order
	 */
	public static function accept_order($params = array())
	{
		$params['action'] = 'acceptorder';
		return self::send_request($params);
	}
	
	/**
	 * Place an order in pending
	 *
	 * @see http://docs.whmcs.com/API:Pending_Order
	 */
	public static function pending_order($params = array())
	{
		$params['action'] = 'pendingorder';
		return self::send_request($params);
	}
	
	/**
	 * Cancel an order
	 *
	 * @see http://docs.whmcs.com/API:Cancel_Order
	 */
	public static function cancel_order($params = array())
	{
		$params['action'] = 'cancelorder';
		return self::send_request($params);
	}
	
	/**
	 * Mark an order as fraud
	 *
	 * @see http://docs.whmcs.com/API:Fraud_Order
	 */
	public static function fraud_order($params = array())
	{
		$params['action'] = 'fraudorder';
		return self::send_request($params);
	}
	
	/**
	 * Delete an order
	 *
	 * @see http://docs.whmcs.com/API:Delete_Order
	 */
	public static function delete_order($params = array())
	{
		$params['action'] = 'deleteorder';
		return self::send_request($params);
	}
}
