<?php

// Mock Agendum_JavaScript only when testing this specific adapter library
if (!class_exists('Agendum_JavaScript')) {
    if (getenv('VTIGER_ADAPTER_TESTING') === 'true' &&
        basename(dirname(__DIR__)) === 'agendum-vtiger-adapter') {
        class Agendum_JavaScript extends Agendum_Viewer {}
    } else {
        require_once 'includes/runtime/JavaScript.php';
    }
}

class Vtiger_JavaScript extends Agendum_JavaScript
{
}