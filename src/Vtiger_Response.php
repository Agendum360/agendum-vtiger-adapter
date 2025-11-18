<?php

// Mock Agendum_Response only when testing this specific adapter library
if (!class_exists('Agendum_Response')) {
    if (getenv('VTIGER_ADAPTER_TESTING') === 'true' &&
        basename(dirname(__DIR__)) === 'agendum-vtiger-adapter') {
        class Agendum_Response {}
    } else {
        require_once 'includes/http/Response.php';
    }
}

class Vtiger_Response extends Agendum_Response
{
}