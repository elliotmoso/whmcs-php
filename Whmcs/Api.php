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

/**
 * Api
 */
class Api {

    /**
     * @var The URL to the WHMCS API
     */
    public static $api_url;

    /**
     * @var The username for the authentication to the WHMCS API
     */
    public static $api_username;

    /**
     * @var The password for the authentication to the WHMCS API
     */
    public static $api_password;

    /**
     * @var The access key to use for WHMCS API calls
     */
    public static $api_access_key;

    /**
     * Sets the WHMCS API settings
     *
     * @param string $api_url        The url to the WHMCS API
     * @param string $api_username   The username for the API to authenticate using
     * @param string $api_password   The password for the API to authenticate using
     * @param string $api_access_key The access key for the API to use
     *
     * @throws Exception
     * @return void
     */
    public static function init($api_url, $api_username, $api_password, $api_access_key = null) {
        if (empty($api_url) || empty($api_username) || empty($api_password)) {
            throw new \Whmcs\Exception('Must set WHMCS API url, username, and password settings.');
        }

        self::$api_url = $api_url;
        self::$api_username = $api_username;
        self::$api_password = $api_password;

        if (!empty($api_access_key)) {
            self::$api_access_key = $api_access_key;
        }
    }

    /**
     * Sends an API request to the WHMCS API
     *
     * @param array $params The parameters to pass to WHMCS
     * 
     * @throws Exception
     * @return mixed
     */
    public static function sendRequest($params = array()) {
        if (empty(self::$api_url) || empty(self::$api_username) || empty(self::$api_password)) {
            throw new \Whmcs\Exception('Must set WHMCS API url, username, and password settings.');
        }

        if (empty($params['action'])) {
            throw new \Whmcs\Exception('No API action set.');
        }

        $params['responsetype'] = 'json';
        $params['username'] = self::$api_username;
        $params['password'] = self::$api_password;

        if (!empty(self::$api_access_key)) {
            $params['accesskey'] = self::$api_access_key;
        }

        $connection = curl_init(self::$api_url);
        $params = http_build_query($params, null, '&');

        curl_setopt($connection, CURLOPT_TIMEOUT, 30);
        curl_setopt($connection, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($connection, CURLOPT_FAILONERROR, false);
        curl_setopt($connection, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($connection, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($connection, CURLOPT_POST, true);
        curl_setopt($connection, CURLOPT_POSTFIELDS, $params);

        // Execute the request to the API.
        $response = curl_exec($connection);
        $response_info = curl_getinfo($connection);

        if ($response === false) {
            throw new \Whmcs\Exception(curl_error($connection), curl_errno($connection));
        } elseif ($response_info['http_code'] >= 400) {
            throw new \Whmcs\Exception('Unknown error with request.', $response_info['http_code']);
        }

        curl_close($connection);

        $response = json_decode(trim($response));

        if ($response == null) {
            return null;
        }

        if (isset($response->result) && $response->result == 'error' && $response->message == 'Authentication Failed') {
            throw new \Whmcs\Exception('Unable to authenticate to WHMCS with API credentials.');
        }

        return $response;
    }

}
