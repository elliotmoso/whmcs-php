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

class Order extends \Whmcs\Order {

    /**
     * Create a new order
     *
     * @see http://docs.whmcs.com/API:Add_Order
     */
    public static function addOrder($params = array()) {
        $params['action'] = 'addorder';
        return self::sendRequest($params);
    }

    /**
     * Get orders
     *
     * @see http://docs.whmcs.com/API:Get_Orders
     */
    public static function getOrders($params = array()) {
        $params['action'] = 'getorders';
        return self::sendRequest($params);
    }

    /**
     * Get products
     *
     * @see http://docs.whmcs.com/API:Get_Products
     */
    public static function getProducts($params = array()) {
        $params['action'] = 'getproducts';
        return self::sendRequest($params);
    }

    /**
     * Get promotions
     *
     * @see http://docs.whmcs.com/API:Get_Promotions
     */
    public static function getPromotions($params = array()) {
        $params['action'] = 'getpromotions';
        return self::sendRequest($params);
    }

    /**
     * Get order statuses
     *
     * @see http://docs.whmcs.com/API:Get_Order_Statuses
     */
    public static function getOrderStatuses() {
        $params['action'] = 'getorderstatuses';
        return self::sendRequest($params);
    }

    /**
     * Accept an order
     *
     * @see http://docs.whmcs.com/API:Accept_Order
     */
    public static function acceptOrder($params = array()) {
        $params['action'] = 'acceptorder';
        return self::sendRequest($params);
    }

    /**
     * Place an order in pending
     *
     * @see http://docs.whmcs.com/API:Pending_Order
     */
    public static function pendingOrder($params = array()) {
        $params['action'] = 'pendingorder';
        return self::sendRequest($params);
    }

    /**
     * Cancel an order
     *
     * @see http://docs.whmcs.com/API:Cancel_Order
     */
    public static function cancelOrder($params = array()) {
        $params['action'] = 'cancelorder';
        return self::sendRequest($params);
    }

    /**
     * Mark an order as fraud
     *
     * @see http://docs.whmcs.com/API:Fraud_Order
     */
    public static function fraudOrder($params = array()) {
        $params['action'] = 'fraudorder';
        return self::sendRequest($params);
    }

    /**
     * Delete an order
     *
     * @see http://docs.whmcs.com/API:Delete_Order
     */
    public static function deleteOrder($params = array()) {
        $params['action'] = 'deleteorder';
        return self::sendRequest($params);
    }

}
