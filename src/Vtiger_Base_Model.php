<?php

// Mock Agendum_Base_Model only when testing this specific adapter library
if (!class_exists('Agendum_Base_Model') && 
    getenv('VTIGER_ADAPTER_TESTING') === 'true' &&
    basename(dirname(__DIR__)) === 'agendum-vtiger-adapter') {
    class Agendum_Base_Model {}
}

class Vtiger_Base_Model extends Agendum_Base_Model
{
}