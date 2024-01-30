defined('XIBO') or die(__("Sorry, you are not allowed to directly access this page.") . "<br />" . __("Please press the back button in your browser."));

global $dbhost;
global $dbuser;
global $dbpass;
global $dbname;
global $dbssl;
global $dbsslverify;

$dbhost = 'your_db_host';
$dbuser = 'your_user';
$dbpass = 'your_password';
$dbname = 'your_database';
$dbssl = 'your_ssl';
$dbsslverify = 'your_ssl_verify';

if (!defined('SECRET_KEY'))
    define('SECRET_KEY','YOUR_SECRET_KEY');;

if (file_exists('/var/www/cms/custom/settings-custom.php'))
    include_once('/var/www/cms/custom/settings-custom.php');
