<?php

// Only load adapter classes if Agendum classes are available
// This prevents errors when running tests without the full Agendum framework

$agendumClassFiles = [
    'AppException.php',
    'Vtiger_Session.php', 
    'Vtiger_Response.php',
    'Vtiger_Loader.php',
    'Vtiger_Base_Model.php',
    'Vtiger_Viewer.php',
    'Vtiger_Language_Handler.php',
    'Vtiger_Cache.php',
    'Vtiger_Cache_Connector.php',
    'Vtiger_Cache_Connector_Memory.php',
    'Vtiger_JavaScript.php',
    'Vtiger_EntryPoint.php',
    'Vtiger_Controller.php',
    'Vtiger_Action_Controller.php',
    'Vtiger_View_Controller.php',
    'Vtiger_Theme.php',
    'Vtiger_WebUI.php',
    'Vtiger_Request.php'
];

// Check if we're in a testing environment
if (!defined('AGENDUM_TESTING')) {
    // Only load if parent Agendum classes exist
    foreach ($agendumClassFiles as $file) {
        $classPath = __DIR__ . '/' . $file;
        if (file_exists($classPath)) {
            try {
                require_once $classPath;
            } catch (Error $e) {
                // Parent class not found - skip loading this adapter
                error_log("Agendum Vtiger Adapter: Skipping $file - " . $e->getMessage());
            }
        }
    }
}