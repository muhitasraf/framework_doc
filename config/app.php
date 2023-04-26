<?php
// Define database credential 
const DB_HOST = 'localhost';
const DB_NAME = 'sage_doc';
const DB_USER = 'root';
const DB_PASS = '';
const DB_CHAR = 'utf8';

// Define all necesssary directory name
define('APP_NAME', 'PHP MVC FRAMEWORK');
define('APP_ROOT', dirname(dirname(__FILE__)));
define('HOST_NAME',$_SERVER['HTTP_HOST']);
define('PROJECT_FOLDER',str_replace('public','',dirname($_SERVER['SCRIPT_NAME'])));
define('URL','//'.HOST_NAME.PROJECT_FOLDER);
define('PUBLIC_URL',URL.'public'.DIRECTORY_SEPARATOR);
define('ASSET_PATH',PUBLIC_URL.'assets'.DIRECTORY_SEPARATOR);

date_default_timezone_set('Asia/Dhaka');

// Start session if not previously started
if(!isset($_SESSION)){session_start();}

// Start Error log engine
ini_set('log_errors', TRUE);
ini_set('error_log', APP_ROOT.'/storage/logs/'.'log-'.date('d-m-Y').'.log');
error_get_last();
