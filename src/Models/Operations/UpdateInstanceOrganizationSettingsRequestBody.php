<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Operations;


class UpdateInstanceOrganizationSettingsRequestBody
{
    #[\JMS\Serializer\Annotation\SerializedName('enabled')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $enabled = null;

    #[\JMS\Serializer\Annotation\SerializedName('max_allowed_memberships')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $maxAllowedMemberships = null;

    #[\JMS\Serializer\Annotation\SerializedName('admin_delete_enabled')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $adminDeleteEnabled = null;

    #[\JMS\Serializer\Annotation\SerializedName('domains_enabled')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $domainsEnabled = null;

    /**
     * Specify which enrollment modes to enable for your Organization Domains.
     *
     * Supported modes are 'automatic_invitation' & 'automatic_suggestion'.
     *
     * @var ?array<string> $domainsEnrollmentModes
     */
    #[\JMS\Serializer\Annotation\SerializedName('domains_enrollment_modes')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $domainsEnrollmentModes = null;

    /**
     * Specify what the default organization role is for an organization creator.
     *
     * @var ?string $creatorRoleId
     */
    #[\JMS\Serializer\Annotation\SerializedName('creator_role_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $creatorRoleId = null;

    /**
     * Specify what the default organization role is for the organization domains.
     *
     * @var ?string $domainsDefaultRoleId
     */
    #[\JMS\Serializer\Annotation\SerializedName('domains_default_role_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $domainsDefaultRoleId = null;

    public function __construct()
    {
        $this->enabled = null;
        $this->maxAllowedMemberships = null;
        $this->adminDeleteEnabled = null;
        $this->domainsEnabled = null;
        $this->domainsEnrollmentModes = null;
        $this->creatorRoleId = null;
        $this->domainsDefaultRoleId = null;
    }
}