<?php

// Mock Agendum_View_Controller only when testing this specific adapter library
if (!class_exists('Agendum_View_Controller')) {
    if (getenv('VTIGER_ADAPTER_TESTING') === 'true' &&
        basename(dirname(__DIR__)) === 'agendum-vtiger-adapter') {
        abstract class Agendum_View_Controller extends Agendum_Action_Controller {}
    } else {
        require_once 'includes/runtime/ViewController.php';
    }
}

abstract class Vtiger_View_Controller extends Agendum_View_Controller
{
}