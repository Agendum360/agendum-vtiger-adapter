<?php

// With class_alias, Vtiger_* IS Agendum_* (same class, not a subclass)
// So we use is_a() which returns true for aliases, unlike is_subclass_of()

test('vtiger session class exists and is aliased to agendum session', function () {
    expect(class_exists('Vtiger_Session'))->toBeTrue();
    expect(is_a('Vtiger_Session', 'Agendum_Session', true))->toBeTrue();
});

test('vtiger response class exists and is aliased to agendum response', function () {
    expect(class_exists('Vtiger_Response'))->toBeTrue();
    expect(is_a('Vtiger_Response', 'Agendum_Response', true))->toBeTrue();
});

test('vtiger loader class exists and is aliased to agendum loader', function () {
    expect(class_exists('Vtiger_Loader'))->toBeTrue();
    expect(is_a('Vtiger_Loader', 'Agendum_Loader', true))->toBeTrue();
});

test('vtiger request class exists and is aliased to agendum request', function () {
    expect(class_exists('Vtiger_Request'))->toBeTrue();
    expect(is_a('Vtiger_Request', 'Agendum_Request', true))->toBeTrue();
});

test('vtiger base model class exists and is aliased to agendum base model', function () {
    expect(class_exists('Vtiger_Base_Model'))->toBeTrue();
    expect(is_a('Vtiger_Base_Model', 'Agendum_Base_Model', true))->toBeTrue();
});

test('vtiger viewer class exists and is aliased to agendum viewer', function () {
    expect(class_exists('Vtiger_Viewer'))->toBeTrue();
    expect(is_a('Vtiger_Viewer', 'Agendum_Viewer', true))->toBeTrue();
});

test('vtiger language handler class exists and is aliased to agendum language handler', function () {
    expect(class_exists('Vtiger_Language_Handler'))->toBeTrue();
    expect(is_a('Vtiger_Language_Handler', 'Agendum_Language_Handler', true))->toBeTrue();
});

test('vtiger theme class exists and is aliased to agendum theme', function () {
    expect(class_exists('Vtiger_Theme'))->toBeTrue();
    expect(is_a('Vtiger_Theme', 'Agendum_Theme', true))->toBeTrue();
});

test('vtiger cache class exists and is aliased to agendum cache', function () {
    expect(class_exists('Vtiger_Cache'))->toBeTrue();
    expect(is_a('Vtiger_Cache', 'Agendum_Cache', true))->toBeTrue();
});

test('vtiger entry point class exists and is aliased to agendum entry point', function () {
    expect(class_exists('Vtiger_EntryPoint'))->toBeTrue();
    expect(is_a('Vtiger_EntryPoint', 'Agendum_EntryPoint', true))->toBeTrue();
});

test('vtiger cache connector class exists and is aliased to agendum cache connector', function () {
    expect(class_exists('Vtiger_Cache_Connector'))->toBeTrue();
    expect(is_a('Vtiger_Cache_Connector', 'Agendum_Cache_Connector', true))->toBeTrue();
});

test('vtiger cache connector memory class exists and is aliased to agendum cache connector memory', function () {
    expect(class_exists('Vtiger_Cache_Connector_Memory'))->toBeTrue();
    expect(is_a('Vtiger_Cache_Connector_Memory', 'Agendum_Cache_Connector_Memory', true))->toBeTrue();
});

test('vtiger javascript class exists and is aliased to agendum javascript', function () {
    expect(class_exists('Vtiger_JavaScript'))->toBeTrue();
    expect(is_a('Vtiger_JavaScript', 'Agendum_JavaScript', true))->toBeTrue();
});

test('vtiger controller class exists and is aliased to agendum controller', function () {
    expect(class_exists('Vtiger_Controller'))->toBeTrue();
    expect(is_a('Vtiger_Controller', 'Agendum_Controller', true))->toBeTrue();
});

test('vtiger action controller class exists and is aliased to agendum action controller', function () {
    expect(class_exists('Vtiger_Action_Controller'))->toBeTrue();
    expect(is_a('Vtiger_Action_Controller', 'Agendum_Action_Controller', true))->toBeTrue();
});

test('vtiger view controller class exists and is aliased to agendum view controller', function () {
    expect(class_exists('Vtiger_View_Controller'))->toBeTrue();
    expect(is_a('Vtiger_View_Controller', 'Agendum_View_Controller', true))->toBeTrue();
});

test('vtiger webui class exists and is aliased to agendum webui', function () {
    expect(class_exists('Vtiger_WebUI'))->toBeTrue();
    expect(is_a('Vtiger_WebUI', 'Agendum_WebUI', true))->toBeTrue();
});