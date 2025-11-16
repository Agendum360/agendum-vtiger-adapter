<?php

test('vtiger session class exists and extends agendum session', function () {
    expect(class_exists('Vtiger_Session'))->toBeTrue();
    expect(is_subclass_of('Vtiger_Session', 'Agendum_Session'))->toBeTrue();
});

test('vtiger response class exists and extends agendum response', function () {
    expect(class_exists('Vtiger_Response'))->toBeTrue();
    expect(is_subclass_of('Vtiger_Response', 'Agendum_Response'))->toBeTrue();
});

test('vtiger loader class exists and extends agendum loader', function () {
    expect(class_exists('Vtiger_Loader'))->toBeTrue();
    expect(is_subclass_of('Vtiger_Loader', 'Agendum_Loader'))->toBeTrue();
});

test('vtiger request class exists and extends agendum request', function () {
    expect(class_exists('Vtiger_Request'))->toBeTrue();
    expect(is_subclass_of('Vtiger_Request', 'Agendum_Request'))->toBeTrue();
});

test('vtiger base model class exists and extends agendum base model', function () {
    expect(class_exists('Vtiger_Base_Model'))->toBeTrue();
    expect(is_subclass_of('Vtiger_Base_Model', 'Agendum_Base_Model'))->toBeTrue();
});

test('vtiger viewer class exists and extends agendum viewer', function () {
    expect(class_exists('Vtiger_Viewer'))->toBeTrue();
    expect(is_subclass_of('Vtiger_Viewer', 'Agendum_Viewer'))->toBeTrue();
});

test('vtiger language handler class exists and extends agendum language handler', function () {
    expect(class_exists('Vtiger_Language_Handler'))->toBeTrue();
    expect(is_subclass_of('Vtiger_Language_Handler', 'Agendum_Language_Handler'))->toBeTrue();
});

test('vtiger theme class exists and extends agendum theme', function () {
    expect(class_exists('Vtiger_Theme'))->toBeTrue();
    expect(is_subclass_of('Vtiger_Theme', 'Agendum_Theme'))->toBeTrue();
});

test('vtiger cache class exists and extends agendum cache', function () {
    expect(class_exists('Vtiger_Cache'))->toBeTrue();
    expect(is_subclass_of('Vtiger_Cache', 'Agendum_Cache'))->toBeTrue();
});

test('vtiger entry point class exists and extends agendum entry point', function () {
    expect(class_exists('Vtiger_EntryPoint'))->toBeTrue();
    expect(is_subclass_of('Vtiger_EntryPoint', 'Agendum_EntryPoint'))->toBeTrue();
});

test('vtiger cache connector class exists and extends agendum cache connector', function () {
    expect(class_exists('Vtiger_Cache_Connector'))->toBeTrue();
    expect(is_subclass_of('Vtiger_Cache_Connector', 'Agendum_Cache_Connector'))->toBeTrue();
});

/*
test('vtiger cache connector memory class exists and extends agendum cache connector memory', function () {
    expect(class_exists('Vtiger_Cache_Connector_Memory'))->toBeTrue();
    expect(is_subclass_of('Vtiger_Cache_Connector_Memory', 'Agendum_Cache_Connector_Memory'))->toBeTrue();
});
*/

test('vtiger javascript class exists and extends agendum javascript', function () {
    expect(class_exists('Vtiger_JavaScript'))->toBeTrue();
    expect(is_subclass_of('Vtiger_JavaScript', 'Agendum_JavaScript'))->toBeTrue();
});

test('vtiger controller class exists and extends agendum controller', function () {
    expect(class_exists('Vtiger_Controller'))->toBeTrue();
    expect(is_subclass_of('Vtiger_Controller', 'Agendum_Controller'))->toBeTrue();
});

test('vtiger action controller class exists and extends agendum action controller', function () {
    expect(class_exists('Vtiger_Action_Controller'))->toBeTrue();
    expect(is_subclass_of('Vtiger_Action_Controller', 'Agendum_Action_Controller'))->toBeTrue();
});

test('vtiger view controller class exists and extends agendum view controller', function () {
    expect(class_exists('Vtiger_View_Controller'))->toBeTrue();
    expect(is_subclass_of('Vtiger_View_Controller', 'Agendum_View_Controller'))->toBeTrue();
});

/*
test('vtiger webui class exists and extends agendum webui', function () {
    expect(class_exists('Vtiger_WebUI'))->toBeTrue();
    expect(is_subclass_of('Vtiger_WebUI', 'Agendum_WebUI'))->toBeTrue();
});
*/

test('app exception class exists', function () {
    expect(class_exists('AppException'))->toBeTrue();
});
