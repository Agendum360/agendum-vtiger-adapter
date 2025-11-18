<?php

// Mock dependencies only when testing this specific adapter library
if (!class_exists('SmartyBC')) {
    if (getenv('VTIGER_ADAPTER_TESTING') === 'true' &&
        basename(dirname(__DIR__)) === 'agendum-vtiger-adapter') {
        class SmartyBC {}
    } else {
        require_once 'vendor/smarty/smarty/libs/SmartyBC.class.php';
    }
}

// Mock Agendum_Viewer only when testing this specific adapter library
if (!class_exists('Agendum_Viewer')) {
    if (getenv('VTIGER_ADAPTER_TESTING') === 'true' &&
        basename(dirname(__DIR__)) === 'agendum-vtiger-adapter') {
        class Agendum_Viewer extends SmartyBC {}
    } else {
        require_once 'includes/runtime/Viewer.php';
    }
}

class Vtiger_Viewer extends Agendum_Viewer
{
}