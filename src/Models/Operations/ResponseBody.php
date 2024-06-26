<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Operations;


class ResponseBody
{
    #[\JMS\Serializer\Annotation\SerializedName('object')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $object = null;

    /**
     * External account ID
     *
     * @var ?string $externalAccountId
     */
    #[\JMS\Serializer\Annotation\SerializedName('external_account_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $externalAccountId = null;

    /**
     * The unique ID of the user in the external provider's system
     *
     * @var ?string $providerUserId
     */
    #[\JMS\Serializer\Annotation\SerializedName('provider_user_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $providerUserId = null;

    /**
     * The access token
     *
     * @var ?string $token
     */
    #[\JMS\Serializer\Annotation\SerializedName('token')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $token = null;

    /**
     * The ID of the provider
     *
     * @var ?string $provider
     */
    #[\JMS\Serializer\Annotation\SerializedName('provider')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $provider = null;

    #[\JMS\Serializer\Annotation\SerializedName('public_metadata')]
    #[\JMS\Serializer\Annotation\Type('Clerk\Backend\Models\Operations\GetOAuthAccessTokenPublicMetadata')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?GetOAuthAccessTokenPublicMetadata $publicMetadata = null;

    #[\JMS\Serializer\Annotation\SerializedName('label')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $label = null;

    /**
     * The list of scopes that the token is valid for.
     *
     * Only present for OAuth 2.0 tokens.
     *
     * @var ?array<string> $scopes
     */
    #[\JMS\Serializer\Annotation\SerializedName('scopes')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $scopes = null;

    /**
     * The token secret. Only present for OAuth 1.0 tokens.
     *
     * @var ?string $tokenSecret
     */
    #[\JMS\Serializer\Annotation\SerializedName('token_secret')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $tokenSecret = null;

    public function __construct()
    {
        $this->object = null;
        $this->externalAccountId = null;
        $this->providerUserId = null;
        $this->token = null;
        $this->provider = null;
        $this->publicMetadata = null;
        $this->label = null;
        $this->scopes = null;
        $this->tokenSecret = null;
    }
}