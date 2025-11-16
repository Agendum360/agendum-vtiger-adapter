<?php

// Mock Agendum_Session only when testing this specific adapter library
if (!class_exists('Agendum_Session') && 
    getenv('VTIGER_ADAPTER_TESTING') === 'true' &&
    basename(dirname(__DIR__)) === 'agendum-vtiger-adapter') {
    class Agendum_Session {}
}

class Vtiger_Session extends Agendum_Session
{
}