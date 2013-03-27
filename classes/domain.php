<?php

/**
 * Domain class for managing domains
 *
 * @package   WHMCS
 * @author    Joshua Priddle <jpriddle@nevercraft.net>
 * @version   v0.0.1
 * @copyright 2011 DotBlock Inc
 */
class WHMCS_Domain extends WHMCS_Api
{
	/**
	 * Sends a register command to the registrar
	 *
	 * @see http://docs.whmcs.com/API:Register_Domain
	 */
	public static function register_domain($params = array())
	{
		$params['action'] = 'domainregister';
		return self::send_request($params);
	}
	
	/**
	 * Sends a renew command to the registrar
	 *
	 * @see http://docs.whmcs.com/API:Renew_Domain
	 */
	public static function renew_domain($params = array())
	{
		$params['action'] = 'domainrenew';
		return self::send_request($params);
	}
	
	/**
	 * Sends a transfer command to the registrar
	 *
	 * @see http://docs.whmcs.com/API:Transfer_Domain
	 */
	public static function transfer_domain($params = array())
	{
		$params['action'] = 'domaintrasfer';
		return self::send_request($params);
	}
	
	/**
	 * Sends a release command to the registrar
	 *
	 * @see http://docs.whmcs.com/API:Release_Domain
	 * @see http://www.nominet.org.uk/registrars/becomeregistrar/taglist/
	 */
	public static function release_domain($params = array())
	{
		$params['action'] = 'domainrelease';
		return self::send_request($params);
	}
	
	/**
	 * Obtain the lock state of a domain name
	 *
	 * @see http://docs.whmcs.com/API:Domain_Locking_Status
	 */
	public static function get_domain_lock($params = array())
	{
		$params['action'] = 'domaingetlockingstatus';
		return self::send_request($params);
	}
	
	/**
	 * Obtain the nameservers of a domain name
	 *
	 * @see http://docs.whmcs.com/API:Domain_Nameservers
	 */
	public static function get_nameservers($params = array())
	{
		$params['action'] = 'domaingetnameservers';
		return self::send_request($params);
	}
	
	/**
	 * Obtain the whois of a domain name
	 *
	 * @see http://docs.whmcs.com/API:Get_Domain_WHOIS
	 */
	public static function get_whois($params = array())
	{
		$params['action'] = 'domaingetwhoisinfo';
		return self::send_request($params);
	}
	
	/**
	 * Obtain the EPP Code of a domain name
	 *
	 * @see http://docs.whmcs.com/API:Domain_EPP
	 */
	public static function request_epp($params = array())
	{
		$params['action'] = 'domainrequestepp';
		return self::send_request($params);
	}
	
	/**
	 * Toggle ID protect for a domain name
	 *
	 * @see http://docs.whmcs.com/API:Toggle_ID_Protect
	 */
	public static function toggle_id_protect($params = array())
	{
		$params['action'] = 'domaintoggleidprotect';
		return self::send_request($params);
	}
	
	/**
	 * Update the lock state of a domain name
	 *
	 * @see http://docs.whmcs.com/API:Domain_Update_Lock
	 */
	public static function update_lock($params = array())
	{
		$params['action'] = 'domainupdatelockingstatus';
		return self::send_request($params);
	}
	
	/**
	 * Update the nameservers of a domain name
	 *
	 * @see http://docs.whmcs.com/API:Domain_Update_Nameservers
	 */
	public static function update_nameservers($params = array())
	{
		$params['action'] = 'domainupdatenameservers';
		return self::send_request($params);
	}
	
	/**
	 * Update the contact information on a domain name
	 *
	 * @see http://docs.whmcs.com/API:Domain_Update_WHOIS
	 */
	public static function update_whois($params = array())
	{
		$params['action'] = 'domainupdatewhoisinfo';
		return self::send_request($params);
	}
	
	/**
	 * Perform a whois lookup for a domain name
	 *
	 * @see http://docs.whmcs.com/API:Domain_WHOIS
	 */
	public static function domain_whois($params = array())
	{
		$params['action'] = 'domainwhois';
		return self::send_request($params);
	}
}
