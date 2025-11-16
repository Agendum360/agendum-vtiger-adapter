<?php

// Agendum Vtiger Adapter - Class mapping loader
// This file provides backward compatibility by mapping old Vtiger class names to new Agendum class names

$adapterFiles = [
    'AppException.php',
    'Vtiger_EntryPoint.php',      // Load abstract classes first
    'Vtiger_Controller.php',
    'Vtiger_Action_Controller.php',
    'Vtiger_View_Controller.php',
    'Vtiger_Session.php', 
    'Vtiger_Response.php',
    'Vtiger_Loader.php',
    'Vtiger_Request.php',
    'Vtiger_Base_Model.php',
    'Vtiger_Viewer.php',
    'Vtiger_Language_Handler.php',
    'Vtiger_Theme.php',
    'Vtiger_Cache.php',
    'Vtiger_Cache_Connector.php',
    'Vtiger_Cache_Connector_Memory.php',
    'Vtiger_JavaScript.php',
    'Vtiger_WebUI.php'
];

// Load adapter classes if not in testing environment
if (!defined('AGENDUM_TESTING')) {
    foreach ($adapterFiles as $file) {
        $classPath = __DIR__ . '/' . $file;
        if (file_exists($classPath)) {
            try {
                require_once $classPath;
            } catch (Error $e) {
                // Parent Agendum class not found - this is expected in environments without Agendum
                // Log only if debug mode is enabled
                if (defined('AGENDUM_DEBUG') && AGENDUM_DEBUG) {
                    error_log("Agendum Vtiger Adapter: Could not load $file - " . $e->getMessage());
                }
            }
        }
    }
}