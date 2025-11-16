<?php

// Mock Agendum_Loader only when testing this specific adapter library
if (!class_exists('Agendum_Loader') && 
    getenv('VTIGER_ADAPTER_TESTING') === 'true' &&
    basename(dirname(__DIR__)) === 'agendum-vtiger-adapter') {
    class Agendum_Loader {}
}

class Vtiger_Loader extends Agendum_Loader
{
}