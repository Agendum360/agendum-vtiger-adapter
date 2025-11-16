<?php

// Simple test bootstrap - load mocks and then adapter classes

// Load mock interfaces and dependencies
require_once __DIR__ . '/Mocks/ServerRequestInterface.php';
require_once __DIR__ . '/Mocks/SmartyBC.php';

// Load mock Agendum classes
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

// Now load our adapter classes using the autoloader
require_once __DIR__ . '/../src/autoload.php';