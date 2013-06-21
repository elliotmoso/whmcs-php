<?php

/**
 * WHMCS API Wrapper PHP Library
 *
 * @author      Craig G Smith <vxdhost@gmail.com>
 * @copyright   2013 Craig G Smith
 * @link        http://www.omnihost.co.nz
 * @license     MIT LICENSE
 * @version     1.0.2
 * @package     Whmcs
 * 
 */

namespace Whmcs;

class Client extends \Whmcs\Api {

    /**
     * This command is used to add a new client to your WHMCS system.
     * required Params:firstname, lastname, email, address1,city,state,postcode,country(two letter ISO country code),phonenumber, password2(password for the new user account)
     * Optional Params: companyname,address2,currency,clientip,language,groupid,securityqid,securityqans,notes,cctype,cardnum,expdate,startdate,issuenumber,customfields(a base64 encoded serialized array of custom field values),noemail(pass as true to surpress the client signup welcome email sending),skipvalidation(set true to not validate or check required fields)
     * All client required fields can be optional if "skipvalidation" is passed
     * @see http://docs.whmcs.com/API:Add_Client
     * @param array $params
     * @return mixed
     */
    public static function addClient($params = array()) {
        $params['action'] = 'addclient';
        return self::sendRequest($params);
    }

    /**
     * This command is used to update the details of a client in your WHMCS system. You just need to send the clientid and the attributes that you want to change. You do not need to send them all.
     * @see http://docs.whmcs.com/API:Update_Client
     * @param int $client_id
     * @param array $params firstname,lastname,companyname,email,address1,address2,city,state,postcode,country (two letter ISO country code),phonenumber,password2,credit (credit balance),axexempt (true to enable),notes,cardtype (visa, mastercard, etc...),cardnum (cc number),expdate (cc expiry date),startdate (cc start date),issuenumber (cc issue number),language (default language),customfields (a base64 encoded serialized array of custom field values),status (active or inactive),taxexempt (true/false),latefeeoveride (true/false),overideduenotices (true/false),separateinvoices (true/false),disableautocc (true/false)
     * @return Mixed
     */
    public static function updateClient($client_id, $params = array()) {
        $params['clientid'] = $client_id;
        $params['action'] = 'updateclient';
        return self::sendRequest($params);
    }

    /**
     * This command is used to delete a client from the database.
     * @see http://docs.whmcs.com/API:Delete_Client
     * @param int $client_id ID Number of the client to delete
     * @return mixed
     */
    public static function deleteClient($client_id) {
        $params['clientid'] = $client_id;
        $params['action'] = 'deleteclient';
        return self::sendRequest($params);
    }

    /**
     * This command is used to Close a client account. This will terminate all products and cancel all due invoices.
     * @see http://docs.whmcs.com/API:Close_Client
     * @param int $client_id
     * @return Mixed
     */
    public static function closeClient($client_id) {
        $params['clientid'] = $client_id;
        $params['action'] = 'closeclient';
        return self::sendRequest($params);
    }

    /**
     * This command is used to add the Client Note to a specific Client
     * @see http://docs.whmcs.com/API:Add_Client_Note
     * @param int $user_id UserID for the note
     * @param string $note The note to add
     * @return mixed
     */
    public static function addClientNote($user_id, $note) {
        $params['userid'] = $user_id;
        $params['notes'] = $note;
        $params['action'] = 'addclientnote';
        return self::sendRequest($params);
    }

    /**
     * This command is used to generate a list of clients
     * @see http://docs.whmcs.com/API:Get_Clients
     * @param string $search filter for clients with a name/email matching the term entered (false to ignore)
     * @param int $limitstart Record to start at
     * @param int $limitnum Number of records to return 
     * @return Mixed
     */
    public static function getClients($search = false, $limitstart = 0, $limitnum = 25) {
        $params['limitstart'] = $limitstart;
        $params['limitnum'] = $limitnum;
        if ($search) {
            $params['search'] = $search;
        }
        $params['action'] = 'getclients';
        return self::sendRequest($params);
    }

    /**
     * This command is used to retrieve all the data held about a client in the WHMCS System for a given ID or email address
     * Either id or email is required!
     * @see http://docs.whmcs.com/API:Get_Clients_Details
     * @param mixed $identifier either the clientId or email address
     * @param boolean $stats Get client statistics
     * @return mixed
     */
    public static function getClientsDetails($identifier, $stats = false) {

        if (!$identifier) {
            throw new \Whmcs\Exception('Either Client ID or Email address required');
        }

        if (is_numeric($identifier)) {
            $params['id'] = $identifier;
        } else {
            $params['email'] = $identifier;
        }

        $params['action'] = 'getclientsdetails';
        $params['stats'] = $stats;

        return self::sendRequest($params);
    }

    /**
     * This command is used to get the details of all the products/services a client has
     * @see http://docs.whmcs.com/API:Get_Clients_Products
     * @param array $params All are optional
     *  - clientid - the ID of the client to retrieve products for
     *  - serviceid - the ID of the service to retrieve details for
     *  - domain - the domain of the service to retrieve details for
     *  - pid - the product ID of the services to retrieve products for
     *  - username2 - the service username to retrieve details for
     *  - limitstart - where to start the records. Used for pagination
     *  - limitnum - the number of records to retrieve. Default = 999999
     * @return Mixed
     */
    public static function getClientsProducts($params = array()) {
        $params['action'] = 'getclientsproducts';
        return self::sendRequest($params);
    }

    /**
     * This command is used to retrieve the clients password in MD5 hash format. The hash uses the format "md5(salt.pw):salt" and so the salt can be obtained from the 5 characters after the colon (:) for you to be able to generate your own hash to compare.
     * This command will return the client password should MD5 passwords be disabled.
     * @see http://docs.whmcs.com/API:Get_Clients_Password
     * @param Mixed $identifier UserId or Email address
     * @return Mixed
     */
    public static function getClientsPassword($identifier) {
        if (is_numeric($identifier)) {
            $params['userid'] = $identifier;
        } else {
            $params['email'] = $identifier;
        }
        $params['action'] = 'getclientpassword';
        return self::sendRequest($params);
    }

    /**
     * This command is used to create a new contact under a client.
     * @see http://docs.whmcs.com/API:Add_Contact
     * @param int $client_id the client ID to add the contact to
     * @param array $params
     * @params:firstname,lastname,companyname,email - must be unique if creating a sub-account,address1,address2,city,state,postcode,country - two letter ISO country code,phonenumber,password2 - if creating a sub-account,permissions - can specify sub-account permissions eg manageproducts,managedomains,generalemails - set true to receive general email types,productemails - set true to receive product related emails,domainemails - set true to receive domain related emails,invoiceemails - set true to receive billing related emails,supportemails - set true to receive support ticket related emails
     * @return Mixed
     */
    public static function addContact($client_id, $params = array()) {
        $params['clientid'] = $client_id;
        $params['action'] = 'addcontact';
        return self::sendRequest($params);
    }

    /**
     * Update a client's contact
     *
     * @see http://docs.whmcs.com/API:Update_Contact
     */

    /**
     * This command is used to update a contact in the system.
     * @see http://docs.whmcs.com/API:Update_Contact
     * @param int $contact_id The ID of the contact to update
     * @param array $params
     * @params generalemails - set to true to receive general emails,productemails - set to true to receive product emails,domainemails - set to true to receive domain emails,invoiceemails - set to true to receive invoice emails,supportemails - set to true to receive support emails,firstname - change the firstname,lastname - change the lastname,companyname - change the companyname,email - change the email address,address1 - change address1,address2 - change address2,city - change city,state - change state,postcode - change postcode,country - change country,phonenumber - change phonenumber,subaccount - enable subaccount,password2 - change the password,permissions - set permissions eg manageproducts,managedomains
     * @return Mixed
     */
    public static function updateContact($contact_id, $params = array()) {
        $params['contactid'] = $contact_id;
        $params['action'] = 'updatecontact';
        return self::sendRequest($params);
    }

    /**
     * This command is used to delete a contact in the system.
     * @see http://docs.whmcs.com/API:Delete_Contact
     * @param int $contact_id The ID of the contact to delete
     * @return Mixed
     */
    public static function deleteContact($contact_id) {
        $params['contactid'] = $contact_id;
        $params['action'] = 'deletecontact';
        return self::sendRequest($params);
    }

    /**
     * This command can be used to make changes to a clients product/service. All of the attributes are optional except for serviceid so you should just pass what you want to change.
     * @see http://docs.whmcs.com/API:Update_Client_Product
     * @param int $service_id the ID of the service to be updated
     * @param array $params
     * @params pid,serverid,regdate - Format: YYYY-MM-DD,nextduedate - Format: YYYY-MM-DD,domain,firstpaymentamount,recurringamount,billingcycle,paymentmethod,status,serviceusername,servicepassword,subscriptionid,promoid,overideautosuspend - on/off,overidesuspenduntil - Format: YYYY-MM-DD,ns1,ns2,dedicatedip,assignedips,notes,autorecalc - pass true to auto set price based on product ID or billing cycle change,customfields - a base64 encoded serialized array of custom field values,configoptions - a base64 encoded serialized array of configurable options values
     * @return Mixed
     */
    public static function updateClientProduct($service_id, $params = array()) {
        $params['serviceid'] = $service_id;
        $params['action'] = 'updateclientproduct';
        return self::sendRequest($params);
    }

    /**
     * This command allows you to calculate the cost for an upgrade or downgrade of a product/service, and create an order for it.
     * @see http://docs.whmcs.com/API:Upgrade_Product
     * @param array $params
     * clientid - the client ID to be upgraded
     * serviceid - the service ID to be upgraded
     * type - either "product" or "configoptions"
     * newproductid - if upgrade type = product, the new product ID to upgrade to
     * newproductbillingcycle - monthly, quarterly, etc...
     * configoptions[x] - if upgrade type = configoptions, an array of config options
     * paymentmethod - the payment method for the order (paypal, authorize, etc...)
     * promocode - associate a promotion code with the upgrade
     * calconly - set true to just validate upgrade and get price, false to actually create order
     * ordernotes - any admin notes to add to the order (optional)
     */
    public static function upgradeProduct($params = array()) {
        $params['action'] = 'upgradeproduct';
        return self::sendRequest($params);
    }

    /**
     * This command can be used to validate an email address and password against a registered user in WHMCS. 
     * If a match is found, it will return successful with the userid and password hash which can then be used 
     * to set the $_SESSION['uid'] and $_SESSION['upw'] values respectively in the users session to auto log the 
     * user in to WHMCS.
     * 
     * @see http://docs.whmcs.com/API:Validate_Login
     * @param string $email
     * @param string $password
     * @return mixed
     */
    public static function validateLogin($email, $password) {
        $params['email'] = $email;
        $params['password2'] = $password;
        $params['action'] = 'validatelogin';
        return self::sendRequest($params);
    }

    /**
     * This command is used to send an email to a customer.
     * The id you pass depends on what you want to send. For example if you are requesting the system to send a product 
     * related email template, you need to pass the Service ID it should relate to in the id field, while if you are 
     * requesting an invoice related email template to be sent, you would pass the Invoice ID, etc...
     * Required:
     * messagename - unique name of the email template to send from WHMCS
     * id - related ID number to send message for (for a general email type a client ID, for a product email type the products Service ID, etc...)
     * Optional Attributes
     * customtype - The type of email: general, product, domain or invoice
     * customsubject - Subject for the custom email being sent
     * custommessage - Content to send as an email, this will override 'messagename' if set
     * customvars - serialized base64 encoded array of custom variables
     * @see http://docs.whmcs.com/API:Send_Email
     * @params array $params
     * @return mixed
     */
    public static function sendEmail($params = array()) {
        $params['action'] = 'sendemail';
        return self::sendRequest($params);
    }

    /**
     * This command is used to get a list of the client credits 
     * @see http://docs.whmcs.com/API:Get_Credits
     * @param int $client_id ID of the client to obtain the credit list for
     * @return mixed
     */
    public static function getCredits($client_id) {
        $params['clientid'] = $client_id;
        $params['action'] = 'getcredits';
        return self::sendRequest($params);
    }

    /**
     * Get a list of the client emails
     *
     * @see http://docs.whmcs.com/API:Get_Emails
     * @param int $client_id ID of the client to obtain the email list for
     * @param array $params
     *  - date - date to obtain emails for. Can be YYYYMMDD, YYYYMM, MMDD, DD or MM
     *  - subject - to obtain email with a specific subject
     *  - limitstart - for pagination, specify an ID to start at (default = 0)
     *  - limitnum - to restrict the number of results returned (default = 25)
     * @return mixed
     */
    public static function getEmails($client_id, $params = array()) {
        $params['clientid'] = $client_id;
        $params['action'] = 'getemails';
        return self::sendRequest($params);
    }

    /**
     * Get quotes wrapper methodology
     * @see \Whmcs\Quotes::getQuotes
     * @see http://docs.whmcs.com/API:Get_Quotes
     * @param int $user_id
     * @param array $params
     * @return type
     */
    public static function getQuotes($user_id, $params = array()) {
        $params['userid'] = $user_id;
        return \Whmcs\Quote::getQuotes($params);
    }

    /**
     * Get transactions
     * @see \Whmcs\Invoice::getTransactions
     * @see http://docs.whmcs.com/API:Get_Transactions
     * @param int $client_id
     * @param array $params
     * @return mixed
     */
    public static function getTransactions($client_id, $params = array()) {
        $params['clientid'] = $client_id;
        return \Whmcs\Invoice::getTransactions($params);
    }

    /**
     * Get client's contacts
     *  - limitstart - Record to start at (default = 0)
     *  - limitnum - Number of records to return (default = 25)
     *  - userid,firstname,lastname,companyname,email,address1,address2,city,state,postcode,country,phonenumber
     *  - subaccount - true/false
     * @see http://docs.whmcs.com/API:Get_Contacts
     * @param array $params
     * @return mixed
     */
    public static function getContacts($params = array()) {
        $params['action'] = 'getcontacts';
        return self::sendRequest($params);
    }

    /*     * * TODO * */

    /**
     * Update client's addon
     *
     * @see http://docs.whmcs.com/API:Update_Client_Addon
     */
    public static function updateClientAddon($params = array()) {
        $params['action'] = 'updateclientaddon';
        return self::sendRequest($params);
    }

    /**
     * Get the details of all the domains a client has
     *
     * @see http://docs.whmcs.com/API:Get_Clients_Domains
     */
    public static function getClientsDomains($params = array()) {
        $params['action'] = 'getclientsdomains';
        return self::sendRequest($params);
    }

    /**
     * Update client's domain
     *
     * @see http://docs.whmcs.com/API:Update_Client_Domain
     */
    public static function updateClientDomain($params = array()) {
        $params['action'] = 'updateclientdomain';
        return self::sendRequest($params);
    }

    /**
     * Add cancellation request for a specific product
     *
     * @see http://docs.whmcs.com/API:Add_Cancel_Request
     */
    public static function addCancelRequest($params = array()) {
        $params['action'] = 'addcancelrequest';
        return self::sendRequest($params);
    }

}
