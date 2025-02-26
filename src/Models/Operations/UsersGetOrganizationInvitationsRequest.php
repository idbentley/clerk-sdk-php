<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Operations;

use Clerk\Backend\Utils\SpeakeasyMetadata;
class UsersGetOrganizationInvitationsRequest
{
    /**
     * The ID of the user whose organization invitations we want to retrieve
     *
     * @var string $userId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=user_id')]
    public string $userId;

    /**
     * Filter organization invitations based on their status
     *
     * @var ?QueryParamStatus $status
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=status')]
    public ?QueryParamStatus $status = null;

    /**
     * Applies a limit to the number of results returned.
     *
     * Can be used for paginating the results together with `offset`.
     *
     * @var ?int $limit
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=limit')]
    public ?int $limit = null;

    /**
     * Skip the first `offset` results when paginating.
     *
     * Needs to be an integer greater or equal to zero.
     * To be used in conjunction with `limit`.
     *
     * @var ?int $offset
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=offset')]
    public ?int $offset = null;

    /**
     * @param  string  $userId
     * @param  ?int  $limit
     * @param  ?int  $offset
     * @param  ?QueryParamStatus  $status
     * @phpstan-pure
     */
    public function __construct(string $userId, ?QueryParamStatus $status = null, ?int $limit = 10, ?int $offset = 0)
    {
        $this->userId = $userId;
        $this->status = $status;
        $this->limit = $limit;
        $this->offset = $offset;
    }
}