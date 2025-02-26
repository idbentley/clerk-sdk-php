<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Operations;


class ResponseBody
{
    /**
     *
     * @var ?string $object
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('object')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $object = null;

    /**
     * External account ID
     *
     * @var ?string $externalAccountId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('external_account_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $externalAccountId = null;

    /**
     * The unique ID of the user in the external provider's system
     *
     * @var ?string $providerUserId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('provider_user_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $providerUserId = null;

    /**
     * The access token
     *
     * @var ?string $token
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('token')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $token = null;

    /**
     * The ID of the provider
     *
     * @var ?string $provider
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('provider')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $provider = null;

    /**
     * $publicMetadata
     *
     * @var ?array<string, mixed> $publicMetadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('public_metadata')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $publicMetadata = null;

    /**
     * The list of scopes that the token is valid for.
     *
     * Only present for OAuth 2.0 tokens.
     *
     * @var ?array<string> $scopes
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('scopes')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $scopes = null;

    /**
     * The token secret. Only present for OAuth 1.0 tokens.
     *
     * @var ?string $tokenSecret
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('token_secret')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $tokenSecret = null;

    /**
     *
     * @var ?string $label
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('label')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $label = null;

    /**
     * Unix timestamp of the access token expiration.
     *
     * @var ?int $expiresAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('expires_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $expiresAt = null;

    /**
     * @param  ?string  $object
     * @param  ?string  $externalAccountId
     * @param  ?string  $providerUserId
     * @param  ?string  $token
     * @param  ?string  $provider
     * @param  ?array<string, mixed>  $publicMetadata
     * @param  ?array<string>  $scopes
     * @param  ?string  $tokenSecret
     * @param  ?string  $label
     * @param  ?int  $expiresAt
     * @phpstan-pure
     */
    public function __construct(?string $object = null, ?string $externalAccountId = null, ?string $providerUserId = null, ?string $token = null, ?string $provider = null, ?array $publicMetadata = null, ?array $scopes = null, ?string $tokenSecret = null, ?string $label = null, ?int $expiresAt = null)
    {
        $this->object = $object;
        $this->externalAccountId = $externalAccountId;
        $this->providerUserId = $providerUserId;
        $this->token = $token;
        $this->provider = $provider;
        $this->publicMetadata = $publicMetadata;
        $this->scopes = $scopes;
        $this->tokenSecret = $tokenSecret;
        $this->label = $label;
        $this->expiresAt = $expiresAt;
    }
}