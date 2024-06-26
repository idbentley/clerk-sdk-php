<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Operations;


class CreateRedirectURLRequestBody
{
    /**
     * The full url value prefixed with `https://` or a custom scheme e.g. `"https://my-app.com/oauth-callback"` or `"my-app://oauth-callback"`
     *
     * @var ?string $url
     */
    #[\JMS\Serializer\Annotation\SerializedName('url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $url = null;

    public function __construct()
    {
        $this->url = null;
    }
}