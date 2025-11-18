<?php

// Mock Agendum_Theme only when testing this specific adapter library
if (!class_exists('Agendum_Theme')) {
    if (getenv('VTIGER_ADAPTER_TESTING') === 'true' &&
        basename(dirname(__DIR__)) === 'agendum-vtiger-adapter') {
        class Agendum_Theme extends Agendum_Viewer {}
    } else {
        require_once 'includes/runtime/Theme.php';
    }
}

class Vtiger_Theme extends Agendum_Theme
{
}