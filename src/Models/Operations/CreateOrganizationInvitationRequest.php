<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Operations;

use Clerk\Backend\Utils\SpeakeasyMetadata;
class CreateOrganizationInvitationRequest
{
    /**
     * The ID of the organization for which to send the invitation
     *
     * @var string $organizationId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=organization_id')]
    public string $organizationId;

    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public CreateOrganizationInvitationRequestBody $requestBody;

    public function __construct()
    {
        $this->organizationId = '';
        $this->requestBody = new \Clerk\Backend\Models\Operations\CreateOrganizationInvitationRequestBody();
    }
}