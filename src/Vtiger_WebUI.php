<?php

// Mock Agendum_WebUI only when testing this specific adapter library
if (!class_exists('Agendum_WebUI') && 
    getenv('VTIGER_ADAPTER_TESTING') === 'true' &&
    basename(dirname(__DIR__)) === 'agendum-vtiger-adapter') {
    class Agendum_WebUI extends Agendum_EntryPoint {}
}

class Vtiger_WebUI extends Agendum_WebUI
{
}