<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Operations;


class UpdateOrganizationMembershipMetadataRequestBody
{
    /**
     * Metadata saved on the organization membership, that is visible to both your frontend and backend.
     *
     * The new object will be merged with the existing value.
     *
     * @var ?array<string, mixed> $publicMetadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('public_metadata')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $publicMetadata = null;

    /**
     * Metadata saved on the organization membership that is only visible to your backend.
     *
     * The new object will be merged with the existing value.
     *
     * @var ?array<string, mixed> $privateMetadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('private_metadata')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $privateMetadata = null;

    /**
     * @param  ?array<string, mixed>  $publicMetadata
     * @param  ?array<string, mixed>  $privateMetadata
     * @phpstan-pure
     */
    public function __construct(?array $publicMetadata = null, ?array $privateMetadata = null)
    {
        $this->publicMetadata = $publicMetadata;
        $this->privateMetadata = $privateMetadata;
    }
}