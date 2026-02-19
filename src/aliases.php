<?php

// Agendum Vtiger Compatibility Layer
// Maps Agendum_* classes to Vtiger_* names via class_alias
// Legacy modules can continue using Vtiger_* class names seamlessly

$aliases = [
    'Agendum_EntryPoint' => 'Vtiger_EntryPoint',
    'Agendum_Controller' => 'Vtiger_Controller',
    'Agendum_Action_Controller' => 'Vtiger_Action_Controller',
    'Agendum_View_Controller' => 'Vtiger_View_Controller',
    'Agendum_Session' => 'Vtiger_Session',
    'Agendum_Response' => 'Vtiger_Response',
    'Agendum_Loader' => 'Vtiger_Loader',
    'Agendum_Request' => 'Vtiger_Request',
    'Agendum_Base_Model' => 'Vtiger_Base_Model',
    'Agendum_Viewer' => 'Vtiger_Viewer',
    'Agendum_Language_Handler' => 'Vtiger_Language_Handler',
    'Agendum_Theme' => 'Vtiger_Theme',
    'Agendum_Cache' => 'Vtiger_Cache',
    'Agendum_Cache_Connector' => 'Vtiger_Cache_Connector',
    'Agendum_Cache_Connector_Memory' => 'Vtiger_Cache_Connector_Memory',
    'Agendum_JavaScript' => 'Vtiger_JavaScript',
    'Agendum_WebUI' => 'Vtiger_WebUI',
];

foreach ($aliases as $agendumClass => $vtigerClass) {
    if (!class_exists($vtigerClass) && class_exists($agendumClass)) {
        class_alias($agendumClass, $vtigerClass);
    }
}