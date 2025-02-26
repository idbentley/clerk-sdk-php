<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Components;


class WaitlistEntry
{
    /**
     *
     * @var WaitlistEntryObject $object
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('object')]
    #[\Speakeasy\Serializer\Annotation\Type('\Clerk\Backend\Models\Components\WaitlistEntryObject')]
    public WaitlistEntryObject $object;

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
     * @var WaitlistEntryStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Clerk\Backend\Models\Components\WaitlistEntryStatus')]
    public WaitlistEntryStatus $status;

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
     * Indicates if the waitlist entry is locked. Locked entries are being processed in a batch action and are unavailable for other actions.
     *
     *
     *
     * @var ?bool $isLocked
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('is_locked')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $isLocked = null;

    /**
     *
     * @var ?WaitlistEntryInvitation $invitation
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('invitation')]
    #[\Speakeasy\Serializer\Annotation\Type('\Clerk\Backend\Models\Components\WaitlistEntryInvitation|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?WaitlistEntryInvitation $invitation = null;

    /**
     * @param  WaitlistEntryObject  $object
     * @param  string  $id
     * @param  string  $emailAddress
     * @param  WaitlistEntryStatus  $status
     * @param  int  $createdAt
     * @param  int  $updatedAt
     * @param  ?bool  $isLocked
     * @param  ?WaitlistEntryInvitation  $invitation
     * @phpstan-pure
     */
    public function __construct(WaitlistEntryObject $object, string $id, string $emailAddress, WaitlistEntryStatus $status, int $createdAt, int $updatedAt, ?bool $isLocked = null, ?WaitlistEntryInvitation $invitation = null)
    {
        $this->object = $object;
        $this->id = $id;
        $this->emailAddress = $emailAddress;
        $this->status = $status;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
        $this->isLocked = $isLocked;
        $this->invitation = $invitation;
    }
}