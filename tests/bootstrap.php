<?php

// Define testing environment FIRST to prevent production autoloader conflicts  
if (!defined('AGENDUM_TESTING')) {
    define('AGENDUM_TESTING', true);
}

// Load mock interfaces and dependencies first
require_once __DIR__ . '/Mocks/ServerRequestInterface.php';
require_once __DIR__ . '/Mocks/SmartyBC.php';

// Load mock Agendum classes in correct order (dependencies first)
require_once __DIR__ . '/Mocks/Agendum_EntryPoint.php';
require_once __DIR__ . '/Mocks/Agendum_Session.php';
require_once __DIR__ . '/Mocks/Agendum_Response.php';
require_once __DIR__ . '/Mocks/Agendum_Loader.php';
require_once __DIR__ . '/Mocks/Agendum_Request.php';
require_once __DIR__ . '/Mocks/Agendum_Base_Model.php';
require_once __DIR__ . '/Mocks/Agendum_Viewer.php';
require_once __DIR__ . '/Mocks/Agendum_Language_Handler.php';
require_once __DIR__ . '/Mocks/Agendum_Cache.php';
require_once __DIR__ . '/Mocks/Agendum_Cache_Connector.php';
require_once __DIR__ . '/Mocks/Agendum_Cache_Connector_Memory.php';
require_once __DIR__ . '/Mocks/Agendum_Controller.php';
require_once __DIR__ . '/Mocks/Agendum_Action_Controller.php';
require_once __DIR__ . '/Mocks/Agendum_View_Controller.php';
require_once __DIR__ . '/Mocks/Agendum_JavaScript.php';
require_once __DIR__ . '/Mocks/Agendum_Theme.php';
require_once __DIR__ . '/Mocks/Agendum_WebUI.php';

// Now include our adapter classes
require_once __DIR__ . '/../src/AppException.php';
require_once __DIR__ . '/../src/Vtiger_EntryPoint.php';
require_once __DIR__ . '/../src/Vtiger_Controller.php';
require_once __DIR__ . '/../src/Vtiger_Action_Controller.php';
require_once __DIR__ . '/../src/Vtiger_View_Controller.php';
require_once __DIR__ . '/../src/Vtiger_Session.php';
require_once __DIR__ . '/../src/Vtiger_Response.php';
require_once __DIR__ . '/../src/Vtiger_Loader.php';
require_once __DIR__ . '/../src/Vtiger_Request.php';
require_once __DIR__ . '/../src/Vtiger_Base_Model.php';
require_once __DIR__ . '/../src/Vtiger_Viewer.php';
require_once __DIR__ . '/../src/Vtiger_Language_Handler.php';
require_once __DIR__ . '/../src/Vtiger_Theme.php';
require_once __DIR__ . '/../src/Vtiger_Cache.php';
require_once __DIR__ . '/../src/Vtiger_Cache_Connector.php';
require_once __DIR__ . '/../src/Vtiger_Cache_Connector_Memory.php';
require_once __DIR__ . '/../src/Vtiger_JavaScript.php';
require_once __DIR__ . '/../src/Vtiger_WebUI.php';