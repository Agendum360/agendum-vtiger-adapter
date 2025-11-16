<?php

// Mock Agendum_View_Controller only when testing this specific adapter library
if (!class_exists('Agendum_View_Controller') && 
    getenv('VTIGER_ADAPTER_TESTING') === 'true' &&
    basename(dirname(__DIR__)) === 'agendum-vtiger-adapter') {
    abstract class Agendum_View_Controller extends Agendum_Action_Controller {}
}

abstract class Vtiger_View_Controller extends Agendum_View_Controller
{
}