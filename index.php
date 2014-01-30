<?php
ini_set('session.use_cookies', 1);       // Use cookies to store session.
ini_set('session.use_only_cookies', 1);  // Force cookies for session (phpsessionID forbidden in URL)
ini_set('session.use_trans_sid', false); // Prevent php to use sessionID in URL if cookies are disabled.
session_name('sporting');
session_start();
// --- Include des fichiers de configuration
include_once('app/config/config.php');
include_once(VENDOR_PATH.'/autoload.php');
use Controller\MainController;

// --- Compression
if (CompressionEnabled) {
	ob_start('ob_gzhandler');
}

// --- Traitement
require_once(SRC_PATH.'/Controller/MainController.php');
$mainControler = MainController::getInstance()->dispatch();
