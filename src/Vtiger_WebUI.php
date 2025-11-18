<?php

// Mock Agendum_WebUI only when testing this specific adapter library
if (!class_exists('Agendum_WebUI')) {
    if (getenv('VTIGER_ADAPTER_TESTING') === 'true' &&
        basename(dirname(__DIR__)) === 'agendum-vtiger-adapter') {
        class Agendum_WebUI extends Agendum_EntryPoint {}
    } else {
        require_once 'includes/main/WebUI.php';
    }
}

class Vtiger_WebUI extends Agendum_WebUI
{
}