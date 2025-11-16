<?php

// Agendum Vtiger Adapter - Simple class loader
// This file loads all Vtiger adapter classes that extend Agendum classes

$files = [
    'Vtiger_EntryPoint.php',
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

// Load files with error handling
foreach ($files as $file) {
    try {
        require_once __DIR__ . '/' . $file;
    } catch (Error $e) {
        // Parent Agendum class not found - skip this adapter silently
    }
}