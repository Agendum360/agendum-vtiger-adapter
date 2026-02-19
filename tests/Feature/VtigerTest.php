<?php

test('vtiger adapter can be instantiated without errors', function () {
    expect(fn() => new Vtiger_Session())->not->toThrow(Error::class);
    expect(fn() => new Vtiger_Response())->not->toThrow(Error::class);
    expect(fn() => new Vtiger_Loader())->not->toThrow(Error::class);
    expect(fn() => new Vtiger_Base_Model())->not->toThrow(Error::class);
    expect(fn() => new Vtiger_Viewer())->not->toThrow(Error::class);
    expect(fn() => new Vtiger_Language_Handler())->not->toThrow(Error::class);
    expect(fn() => new Vtiger_Cache())->not->toThrow(Error::class);
    expect(fn() => new Vtiger_Cache_Connector())->not->toThrow(Error::class);
    expect(fn() => new Vtiger_Cache_Connector_Memory())->not->toThrow(Error::class);
    expect(fn() => new Vtiger_JavaScript())->not->toThrow(Error::class);
});

test('vtiger adapter classes can be used polymorphically', function () {
    $session = new Vtiger_Session();
    expect($session)->toBeInstanceOf('Agendum_Session');

    $response = new Vtiger_Response();
    expect($response)->toBeInstanceOf('Agendum_Response');

    $loader = new Vtiger_Loader();
    expect($loader)->toBeInstanceOf('Agendum_Loader');
});

test('vtiger class inheritance chain is correct', function () {
    // With class_alias, Vtiger_WebUI IS Agendum_WebUI, which extends Agendum_EntryPoint
    expect(is_subclass_of('Vtiger_WebUI', 'Agendum_EntryPoint'))->toBeTrue();

    // Vtiger_Theme IS Agendum_Theme, which extends Agendum_Viewer
    expect(is_subclass_of('Vtiger_Theme', 'Agendum_Viewer'))->toBeTrue();

    // Vtiger_Cache_Connector_Memory IS Agendum_Cache_Connector_Memory, which extends Agendum_Cache_Connector
    expect(is_subclass_of('Vtiger_Cache_Connector_Memory', 'Agendum_Cache_Connector'))->toBeTrue();

    // Vtiger_View_Controller IS Agendum_View_Controller, which extends Agendum_Action_Controller
    expect(is_subclass_of('Vtiger_View_Controller', 'Agendum_Action_Controller'))->toBeTrue();
    expect(is_subclass_of('Vtiger_Action_Controller', 'Agendum_Controller'))->toBeTrue();
});