<?php

// Mock Agendum_Language_Handler only when testing this specific adapter library
if (!class_exists('Agendum_Language_Handler') && 
    getenv('VTIGER_ADAPTER_TESTING') === 'true' &&
    basename(dirname(__DIR__)) === 'agendum-vtiger-adapter') {
    class Agendum_Language_Handler {}
}

class Vtiger_Language_Handler extends Agendum_Language_Handler
{
}