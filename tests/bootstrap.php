<?php

// Bootstrap for testing the adapter library
// Define mock Agendum classes, then load aliases to map Vtiger_* → Agendum_*

if (getenv('VTIGER_ADAPTER_TESTING') === 'true') {

    // Base classes (no parent)
    abstract class Agendum_EntryPoint {}
    abstract class Agendum_Controller {}
    class Agendum_Session {}
    class Agendum_Response {}
    class Agendum_Loader {}
    class Agendum_Base_Model {}
    class Agendum_Viewer {}
    class Agendum_Language_Handler {}
    class Agendum_Cache {}
    class Agendum_Cache_Connector {}

    // Classes with inheritance chains
    abstract class Agendum_Action_Controller extends Agendum_Controller {}
    abstract class Agendum_View_Controller extends Agendum_Action_Controller {}
    class Agendum_Theme extends Agendum_Viewer {}
    class Agendum_JavaScript extends Agendum_Viewer {}
    class Agendum_Cache_Connector_Memory extends Agendum_Cache_Connector {}
    class Agendum_WebUI extends Agendum_EntryPoint {}

    // Mock ServerRequestInterface
    if (!interface_exists('ServerRequestInterface')) {
        interface ServerRequestInterface {}
    }

    class Agendum_Request implements ServerRequestInterface {}
}

// Use include (not require_once) because composer autoloader already loaded
// aliases.php before bootstrap ran, when Agendum classes didn't exist yet.
include __DIR__ . '/../src/aliases.php';