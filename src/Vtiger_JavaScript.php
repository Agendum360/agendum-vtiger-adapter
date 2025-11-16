<?php

// Mock Agendum_JavaScript only when testing this specific adapter library
if (!class_exists('Agendum_JavaScript') && 
    getenv('VTIGER_ADAPTER_TESTING') === 'true' &&
    basename(dirname(__DIR__)) === 'agendum-vtiger-adapter') {
    class Agendum_JavaScript extends Agendum_Viewer {}
}

class Vtiger_JavaScript extends Agendum_JavaScript
{
}