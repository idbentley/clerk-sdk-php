<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Operations;


class VerifyDomainProxyResponse
{
    /**
     * HTTP response content type for this operation
     *
     * @var string $contentType
     */
    public string $contentType;

    /**
     * HTTP response status code for this operation
     *
     * @var int $statusCode
     */
    public int $statusCode;

    /**
     * Raw HTTP response; suitable for custom response parsing
     *
     * @var ?\Psr\Http\Message\ResponseInterface $rawResponse
     */
    public ?\Psr\Http\Message\ResponseInterface $rawResponse;

    /**
     * Health check information about a domain's proxy configuration validation attempt.
     *
     * @var ?\Clerk\Backend\Models\Components\ProxyCheck $proxyCheck
     */
    public ?\Clerk\Backend\Models\Components\ProxyCheck $proxyCheck = null;

    /**
     * Request was not successful
     *
     * @var ?\Clerk\Backend\Models\Components\ClerkErrors $clerkErrors
     */
    public ?\Clerk\Backend\Models\Components\ClerkErrors $clerkErrors = null;

    public function __construct()
    {
        $this->contentType = '';
        $this->statusCode = 0;
        $this->rawResponse = null;
        $this->proxyCheck = null;
        $this->clerkErrors = null;
    }
}