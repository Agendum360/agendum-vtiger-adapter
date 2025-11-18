<?php

// Mock Agendum_Cache only when testing this specific adapter library
if (!class_exists('Agendum_Cache')) {
    if (getenv('VTIGER_ADAPTER_TESTING') === 'true' &&
        basename(dirname(__DIR__)) === 'agendum-vtiger-adapter') {
        class Agendum_Cache {}
    } else {
        require_once 'includes/runtime/Cache.php';
    }
}

class Vtiger_Cache extends Agendum_Cache
{
}