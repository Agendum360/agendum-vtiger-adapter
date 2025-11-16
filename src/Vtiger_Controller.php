<?php

// Mock Agendum_Controller only when testing this specific adapter library
if (!class_exists('Agendum_Controller') && 
    getenv('VTIGER_ADAPTER_TESTING') === 'true' &&
    basename(dirname(__DIR__)) === 'agendum-vtiger-adapter') {
    abstract class Agendum_Controller {}
}

abstract class Vtiger_Controller extends Agendum_Controller
{
}