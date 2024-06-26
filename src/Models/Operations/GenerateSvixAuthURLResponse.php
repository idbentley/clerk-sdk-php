<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Operations;


class GenerateSvixAuthURLResponse
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
     * Response that contains a temporary Svix URL to access management dashboard
     *
     * @var ?\Clerk\Backend\Models\Components\SvixURL $svixURL
     */
    public ?\Clerk\Backend\Models\Components\SvixURL $svixURL = null;

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
        $this->svixURL = null;
        $this->clerkErrors = null;
    }
}