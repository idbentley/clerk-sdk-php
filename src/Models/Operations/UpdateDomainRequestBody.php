<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Operations;


class UpdateDomainRequestBody
{
    /**
     * The new domain name. For development instances, can contain the port,
     *
     * i.e `myhostname:3000`. For production instances, must be a valid FQDN,
     * i.e `mysite.com`. Cannot contain protocol scheme.
     *
     * @var ?string $name
     */
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $name = null;

    /**
     * The full URL of the proxy that will forward requests to Clerk's Frontend API.
     *
     * Can only be updated for production instances.
     *
     * @var ?string $proxyUrl
     */
    #[\JMS\Serializer\Annotation\SerializedName('proxy_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $proxyUrl = null;

    public function __construct()
    {
        $this->name = null;
        $this->proxyUrl = null;
    }
}