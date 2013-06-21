# Whmcs Php Api SDK

Whmcs Php Api SDK for the [WHMCS API](http://docs.whmcs.com/API:Functions).

#Installation
##Composer Install
Install composer in your project:

    curl -s https://getcomposer.org/installer | php
    
Create a composer.json file in your project root:

    {
        "require": {
            "slim/slim": "2.*"
        }
    }
Install via composer:

    php composer.phar install
    
Add this line to your application’s index.php file:

    <?php
    require 'vendor/autoload.php';

##Manual Install
Download and extract into your project directory and require it in your application’s index.php file. You'll also need to register the autoloader.
    
    <?php
    require 'Whmcs/Whmcs.php';
    \Whmcs\Whmcs::registerAutoloader();
    
##System Requirements
* PHP >= 5.3.0
* WHMCS 5 +
* CURL
    

## Example Usage

    <?php
    

    \WHMCS\Client::init('http://example.com/includes/api.php', 'someusername', md5('somepass'));
    var_dump(\WHMCS\Client::getClientDetails(array('clientid' => '1')));


