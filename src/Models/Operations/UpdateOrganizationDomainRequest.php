<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Operations;

use Clerk\Backend\Utils\SpeakeasyMetadata;
class UpdateOrganizationDomainRequest
{
    /**
     * The ID of the organization the domain belongs to
     *
     * @var string $organizationId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=organization_id')]
    public string $organizationId;

    /**
     * The ID of the domain
     *
     * @var string $domainId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=domain_id')]
    public string $domainId;

    /**
     *
     * @var UpdateOrganizationDomainRequestBody $requestBody
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public UpdateOrganizationDomainRequestBody $requestBody;

    /**
     * @param  string  $organizationId
     * @param  string  $domainId
     * @param  UpdateOrganizationDomainRequestBody  $requestBody
     * @phpstan-pure
     */
    public function __construct(string $organizationId, string $domainId, UpdateOrganizationDomainRequestBody $requestBody)
    {
        $this->organizationId = $organizationId;
        $this->domainId = $domainId;
        $this->requestBody = $requestBody;
    }
}