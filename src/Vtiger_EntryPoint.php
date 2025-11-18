<?php

// Mock Agendum_EntryPoint only when testing this specific adapter library
if (!class_exists('Agendum_EntryPoint')) {
    if (getenv('VTIGER_ADAPTER_TESTING') === 'true' &&
        basename(dirname(__DIR__)) === 'agendum-vtiger-adapter') {
        abstract class Agendum_EntryPoint {}
    } else {
        require_once 'includes/runtime/EntryPoint.php';
    }
}

abstract class Vtiger_EntryPoint extends Agendum_EntryPoint
{
}
