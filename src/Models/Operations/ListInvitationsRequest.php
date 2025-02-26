<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Operations;

use Clerk\Backend\Utils\SpeakeasyMetadata;
class ListInvitationsRequest
{
    /**
     * Filter invitations based on their status
     *
     * @var ?ListInvitationsQueryParamStatus $status
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=status')]
    public ?ListInvitationsQueryParamStatus $status = null;

    /**
     * Filter invitations based on their `email_address` or `id`
     *
     * @var ?string $query
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=query')]
    public ?string $query = null;

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
     * @param  ?int  $limit
     * @param  ?int  $offset
     * @param  ?ListInvitationsQueryParamStatus  $status
     * @param  ?string  $query
     * @phpstan-pure
     */
    public function __construct(?ListInvitationsQueryParamStatus $status = null, ?string $query = null, ?int $limit = 10, ?int $offset = 0)
    {
        $this->status = $status;
        $this->query = $query;
        $this->limit = $limit;
        $this->offset = $offset;
    }
}