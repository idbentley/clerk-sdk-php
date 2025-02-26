<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Operations;


class CreateOrganizationMembershipRequestBody
{
    /**
     * The ID of the user that will be added as a member in the organization.
     *
     * The user needs to exist in the same instance as the organization and must not be a member of the given organization already.
     *
     * @var string $userId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('user_id')]
    public string $userId;

    /**
     * The role that the new member will have in the organization.
     *
     * @var string $role
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('role')]
    public string $role;

    /**
     * @param  string  $userId
     * @param  string  $role
     * @phpstan-pure
     */
    public function __construct(string $userId, string $role)
    {
        $this->userId = $userId;
        $this->role = $role;
    }
}