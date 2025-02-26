<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Operations;


class CreateEmailAddressRequestBody
{
    /**
     * The ID representing the user
     *
     * @var ?string $userId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('user_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $userId = null;

    /**
     * The new email address. Must adhere to the RFC 5322 specification for email address format.
     *
     * @var ?string $emailAddress
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('email_address')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $emailAddress = null;

    /**
     * When created, the email address will be marked as verified.
     *
     * @var ?bool $verified
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('verified')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $verified = null;

    /**
     * Create this email address as the primary email address for the user.
     *
     * Default: false, unless it is the first email address.
     *
     * @var ?bool $primary
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('primary')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $primary = null;

    /**
     * @param  ?string  $userId
     * @param  ?string  $emailAddress
     * @param  ?bool  $verified
     * @param  ?bool  $primary
     * @phpstan-pure
     */
    public function __construct(?string $userId = null, ?string $emailAddress = null, ?bool $verified = null, ?bool $primary = null)
    {
        $this->userId = $userId;
        $this->emailAddress = $emailAddress;
        $this->verified = $verified;
        $this->primary = $primary;
    }
}