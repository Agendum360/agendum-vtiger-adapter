<?php

// Mock dependencies only when testing this specific adapter library
if (!interface_exists('ServerRequestInterface') && 
    getenv('VTIGER_ADAPTER_TESTING') === 'true' &&
    basename(dirname(__DIR__)) === 'agendum-vtiger-adapter') {
    interface ServerRequestInterface {
        public function getServerParams(): array;
        public function getCookieParams(): array;
        public function withCookieParams(array $cookies);
        public function getQueryParams(): array;
        public function withQueryParams(array $query);
        public function getUploadedFiles(): array;
        public function withUploadedFiles(array $uploadedFiles);
        public function getParsedBody();
        public function withParsedBody($data);
        public function getAttributes(): array;
        public function getAttribute(string $name, $default = null);
        public function withAttribute(string $name, $value);
        public function withoutAttribute(string $name);
        public function getRequestTarget(): string;
        public function withRequestTarget($requestTarget);
        public function getMethod(): string;
        public function withMethod($method);
        public function getUri();
        public function withUri($uri, $preserveHost = false);
        public function getProtocolVersion(): string;
        public function withProtocolVersion($version);
        public function getHeaders(): array;
        public function hasHeader($name): bool;
        public function getHeader($name): array;
        public function getHeaderLine($name): string;
        public function withHeader($name, $value);
        public function withAddedHeader($name, $value);
        public function withoutHeader($name);
        public function getBody();
        public function withBody($body);
    }
}

// Mock Agendum_Request only when testing this specific adapter library
if (!class_exists('Agendum_Request') && 
    getenv('VTIGER_ADAPTER_TESTING') === 'true' &&
    basename(dirname(__DIR__)) === 'agendum-vtiger-adapter') {
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
}

class Vtiger_Request extends Agendum_Request
{
}