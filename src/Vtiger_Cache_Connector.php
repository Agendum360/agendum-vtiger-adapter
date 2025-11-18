<?php

// Mock Agendum_Cache_Connector only when testing this specific adapter library
if (!class_exists('Agendum_Cache_Connector')) {
    if (getenv('VTIGER_ADAPTER_TESTING') === 'true' &&
        basename(dirname(__DIR__)) === 'agendum-vtiger-adapter') {
        class Agendum_Cache_Connector {}
    } else {
        require_once 'includes/runtime/CacheConnector.php';
    }
}

class Vtiger_Cache_Connector extends Agendum_Cache_Connector
{
}