<?php

// Mock Agendum_Cache_Connector_Memory only when testing this specific adapter library
if (!class_exists('Agendum_Cache_Connector_Memory')) {
    if (getenv('VTIGER_ADAPTER_TESTING') === 'true' &&
        basename(dirname(__DIR__)) === 'agendum-vtiger-adapter') {
        class Agendum_Cache_Connector_Memory extends Agendum_Cache_Connector {}
    } else {
        require_once 'includes/runtime/CacheConnectorMemory.php';
    }
}

class Vtiger_Cache_Connector_Memory extends Agendum_Cache_Connector_Memory
{
}