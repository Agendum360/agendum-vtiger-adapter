<?php

// Mock Agendum classes for testing
class Agendum_Session {}
class Agendum_WebUI extends Agendum_EntryPoint {}
class Agendum_Response {}
class Agendum_Loader {}
class Agendum_Request implements ServerRequestInterface {
    public function getServerParams(): array { return []; }
    public function getCookieParams(): array { return []; }
    public function withCookieParams(array $cookies) { return $this; }
    public function getQueryParams(): array { return []; }
    public function withQueryParams(array $query) { return $this; }
    public function getUploadedFiles(): array { return []; }
    public function withUploadedFiles(array $uploadedFiles) { return $this; }
    public function getParsedBody() { return null; }
    public function withParsedBody($data) { return $this; }
    public function getAttributes(): array { return []; }
    public function getAttribute(string $name, $default = null) { return $default; }
    public function withAttribute(string $name, $value) { return $this; }
    public function withoutAttribute(string $name) { return $this; }
    public function getRequestTarget(): string { return ''; }
    public function withRequestTarget($requestTarget) { return $this; }
    public function getMethod(): string { return ''; }
    public function withMethod($method) { return $this; }
    public function getUri() { return null; }
    public function withUri($uri, $preserveHost = false) { return $this; }
    public function getProtocolVersion(): string { return '1.1'; }
    public function withProtocolVersion($version) { return $this; }
    public function getHeaders(): array { return []; }
    public function hasHeader($name): bool { return false; }
    public function getHeader($name): array { return []; }
    public function getHeaderLine($name): string { return ''; }
    public function withHeader($name, $value) { return $this; }
    public function withAddedHeader($name, $value) { return $this; }
    public function withoutHeader($name) { return $this; }
    public function getBody() { return null; }
    public function withBody($body) { return $this; }
}
class Agendum_Base_Model {}
class Agendum_Viewer extends SmartyBC {}
class Agendum_Language_Handler {}
class Agendum_Theme extends Agendum_Viewer {}
class Agendum_Cache {}
abstract class Agendum_EntryPoint {}
class Agendum_Cache_Connector {}
class Agendum_Cache_Connector_Memory extends Agendum_Cache_Connector {}
class Agendum_JavaScript extends Agendum_Viewer {}
abstract class Agendum_Controller {}
abstract class Agendum_Action_Controller extends Agendum_Controller {}
abstract class Agendum_View_Controller extends Agendum_Action_Controller {}

// Mock interfaces and classes needed for testing
if (!interface_exists('ServerRequestInterface')) {
    interface ServerRequestInterface {}
}
if (!class_exists('SmartyBC')) {
    class SmartyBC {}
}

// Now include our adapter classes
require_once __DIR__ . '/../src/AppException.php';
require_once __DIR__ . '/../src/Vtiger_Action_Controller.php';
require_once __DIR__ . '/../src/Vtiger_Base_Model.php';
require_once __DIR__ . '/../src/Vtiger_Cache.php';
require_once __DIR__ . '/../src/Vtiger_Cache_Connector.php';
require_once __DIR__ . '/../src/Vtiger_Cache_Connector_Memory.php';
require_once __DIR__ . '/../src/Vtiger_Controller.php';
require_once __DIR__ . '/../src/Vtiger_EntryPoint.php';
require_once __DIR__ . '/../src/Vtiger_JavaScript.php';
require_once __DIR__ . '/../src/Vtiger_Language_Handler.php';
require_once __DIR__ . '/../src/Vtiger_Loader.php';
require_once __DIR__ . '/../src/Vtiger_Request.php';
require_once __DIR__ . '/../src/Vtiger_Response.php';
require_once __DIR__ . '/../src/Vtiger_Session.php';
require_once __DIR__ . '/../src/Vtiger_Theme.php';
require_once __DIR__ . '/../src/Vtiger_View_Controller.php';
require_once __DIR__ . '/../src/Vtiger_Viewer.php';
require_once __DIR__ . '/../src/Vtiger_WebUI.php';