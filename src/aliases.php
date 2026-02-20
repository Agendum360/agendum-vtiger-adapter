<?php

// Agendum Vtiger Compatibility Layer
// Maps Agendum_* classes to Vtiger_* names via class_alias
// Legacy modules can continue using Vtiger_* class names seamlessly

$aliases = [
    'Agendum_EntryPoint'            => ['Vtiger_EntryPoint',            'includes/runtime/EntryPoint.php'],
    'Agendum_Controller'            => ['Vtiger_Controller',            'includes/runtime/Controller.php'],
    'Agendum_Action_Controller'     => ['Vtiger_Action_Controller',     'includes/runtime/Controller.php'],
    'Agendum_View_Controller'       => ['Vtiger_View_Controller',       'includes/runtime/ViewController.php'],
    'Agendum_Session'               => ['Vtiger_Session',               'includes/http/Session.php'],
    'Agendum_Response'              => ['Vtiger_Response',              'includes/http/Response.php'],
    'Agendum_Loader'                => ['Vtiger_Loader',                'includes/Loader.php'],
    'Agendum_Request'               => ['Vtiger_Request',               'includes/http/Request.php'],
    'Agendum_Base_Model'            => ['Vtiger_Base_Model',            'includes/runtime/BaseModel.php'],
    'Agendum_Viewer'                => ['Vtiger_Viewer',                'includes/runtime/Viewer.php'],
    'Agendum_Language_Handler'      => ['Vtiger_Language_Handler',      'includes/runtime/LanguageHandler.php'],
    'Agendum_Theme'                 => ['Vtiger_Theme',                 'includes/runtime/Theme.php'],
    'Agendum_Cache'                 => ['Vtiger_Cache',                 'includes/runtime/Cache.php'],
    'Agendum_Cache_Connector'       => ['Vtiger_Cache_Connector',       'includes/runtime/CacheConnector.php'],
    'Agendum_Cache_Connector_Memory'=> ['Vtiger_Cache_Connector_Memory','includes/runtime/CacheConnectorMemory.php'],
    'Agendum_JavaScript'            => ['Vtiger_JavaScript',            'includes/runtime/JavaScript.php'],
    'Agendum_WebUI'                 => ['Vtiger_WebUI',                 'includes/main/WebUI.php'],
    'Agendum_Utils'                 => ['Vtiger_Utils',                 'psr0/Vtiger/Utils.php'],
];

foreach ($aliases as $agendumClass => [$vtigerClass, $file]) {
    if (!class_exists($agendumClass, false)) {
        @include_once $file;
    }
    if (!class_exists($vtigerClass, false) && class_exists($agendumClass, false)) {
        class_alias($agendumClass, $vtigerClass);
    }
}
