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
    // Test that WebUI properly inherits from EntryPoint through the adapter
    expect(is_subclass_of('Vtiger_WebUI', 'Vtiger_EntryPoint'))->toBeTrue();
    expect(is_subclass_of('Vtiger_WebUI', 'Agendum_EntryPoint'))->toBeTrue();
    
    // Test that Theme properly inherits from Viewer
    expect(is_subclass_of('Vtiger_Theme', 'Vtiger_Viewer'))->toBeTrue();
    expect(is_subclass_of('Vtiger_Theme', 'Agendum_Viewer'))->toBeTrue();
    
    // Test that Cache_Connector_Memory inherits from Cache_Connector
    expect(is_subclass_of('Vtiger_Cache_Connector_Memory', 'Vtiger_Cache_Connector'))->toBeTrue();
    expect(is_subclass_of('Vtiger_Cache_Connector_Memory', 'Agendum_Cache_Connector'))->toBeTrue();
});

test('exception class works correctly', function () {
    expect(fn() => new AppException('Test message'))->not->toThrow(Error::class);
    
    $exception = new AppException('Test message');
    expect($exception)->toBeInstanceOf('Exception');
    expect($exception->getMessage())->toBe('Test message');
});
