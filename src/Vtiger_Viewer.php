<?php

// Mock dependencies only when testing this specific adapter library
if (!class_exists('SmartyBC') && 
    getenv('VTIGER_ADAPTER_TESTING') === 'true' &&
    basename(dirname(__DIR__)) === 'agendum-vtiger-adapter') {
    class SmartyBC {}
}

// Mock Agendum_Viewer only when testing this specific adapter library
if (!class_exists('Agendum_Viewer') && 
    getenv('VTIGER_ADAPTER_TESTING') === 'true' &&
    basename(dirname(__DIR__)) === 'agendum-vtiger-adapter') {
    class Agendum_Viewer extends SmartyBC {}
}

class Vtiger_Viewer extends Agendum_Viewer
{
}