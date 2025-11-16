<?php

if (!interface_exists('ServerRequestInterface')) {
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