<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Components;


class WaitlistEntryInvitation
{
    /**
     *
     * @var WaitlistEntryInvitationObject $object
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('object')]
    #[\Speakeasy\Serializer\Annotation\Type('\Clerk\Backend\Models\Components\WaitlistEntryInvitationObject')]
    public WaitlistEntryInvitationObject $object;

    /**
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     *
     * @var string $emailAddress
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('email_address')]
    public string $emailAddress;

    /**
     *
     * @var WaitlistEntryInvitationStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Clerk\Backend\Models\Components\WaitlistEntryInvitationStatus')]
    public WaitlistEntryInvitationStatus $status;

    /**
     * Unix timestamp of creation.
     *
     *
     *
     * @var int $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    public int $createdAt;

    /**
     * Unix timestamp of last update.
     *
     *
     *
     * @var int $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_at')]
    public int $updatedAt;

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
     *
     * @var ?bool $revoked
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('revoked')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $revoked = null;

    /**
     *
     * @var ?string $url
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $url = null;

    /**
     * Unix timestamp of expiration.
     *
     *
     *
     * @var ?int $expiresAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('expires_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $expiresAt = null;

    /**
     * @param  WaitlistEntryInvitationObject  $object
     * @param  string  $id
     * @param  string  $emailAddress
     * @param  WaitlistEntryInvitationStatus  $status
     * @param  int  $createdAt
     * @param  int  $updatedAt
     * @param  ?array<string, mixed>  $publicMetadata
     * @param  ?bool  $revoked
     * @param  ?string  $url
     * @param  ?int  $expiresAt
     */
    public function __construct(WaitlistEntryInvitationObject $object, string $id, string $emailAddress, WaitlistEntryInvitationStatus $status, int $createdAt, int $updatedAt, ?array $publicMetadata = null, ?bool $revoked = null, ?string $url = null, ?int $expiresAt = null)
    {
        $this->object = $object;
        $this->id = $id;
        $this->emailAddress = $emailAddress;
        $this->status = $status;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
        $this->publicMetadata = $publicMetadata;
        $this->revoked = $revoked;
        $this->url = $url;
        $this->expiresAt = $expiresAt;
    }
}