<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Components;


/** OrganizationInvitation - An organization invitation */
class OrganizationInvitation
{
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;

    /**
     * String representing the object's type. Objects of the same type share the same value.
     *
     *
     *
     * @var ?\Clerk\Backend\Models\Components\OrganizationInvitationObject $object
     */
    #[\JMS\Serializer\Annotation\SerializedName('object')]
    #[\JMS\Serializer\Annotation\Type('enum<Clerk\Backend\Models\Components\OrganizationInvitationObject>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?OrganizationInvitationObject $object = null;

    #[\JMS\Serializer\Annotation\SerializedName('email_address')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $emailAddress = null;

    #[\JMS\Serializer\Annotation\SerializedName('role')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $role = null;

    #[\JMS\Serializer\Annotation\SerializedName('organization_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $organizationId = null;

    #[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $status = null;

    #[\JMS\Serializer\Annotation\SerializedName('public_metadata')]
    #[\JMS\Serializer\Annotation\Type('Clerk\Backend\Models\Components\OrganizationInvitationPublicMetadata')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?OrganizationInvitationPublicMetadata $publicMetadata = null;

    #[\JMS\Serializer\Annotation\SerializedName('private_metadata')]
    #[\JMS\Serializer\Annotation\Type('Clerk\Backend\Models\Components\OrganizationInvitationPrivateMetadata')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?OrganizationInvitationPrivateMetadata $privateMetadata = null;

    /**
     * Unix timestamp of creation.
     *
     * @var ?int $createdAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $createdAt = null;

    /**
     * Unix timestamp of last update.
     *
     * @var ?int $updatedAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $updatedAt = null;

    public function __construct()
    {
        $this->id = null;
        $this->object = null;
        $this->emailAddress = null;
        $this->role = null;
        $this->organizationId = null;
        $this->status = null;
        $this->publicMetadata = null;
        $this->privateMetadata = null;
        $this->createdAt = null;
        $this->updatedAt = null;
    }
}