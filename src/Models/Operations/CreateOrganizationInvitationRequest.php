<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
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

    /**
     *
     * @var ?CreateOrganizationInvitationRequestBody $requestBody
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?CreateOrganizationInvitationRequestBody $requestBody = null;

    /**
     * @param  string  $organizationId
     * @param  ?CreateOrganizationInvitationRequestBody  $requestBody
     * @phpstan-pure
     */
    public function __construct(string $organizationId, ?CreateOrganizationInvitationRequestBody $requestBody = null)
    {
        $this->organizationId = $organizationId;
        $this->requestBody = $requestBody;
    }
}