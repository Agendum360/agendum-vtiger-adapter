<?php

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