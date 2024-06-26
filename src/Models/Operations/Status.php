<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Operations;


/** Filter sessions by the provided status */
enum Status: string
{
    case Abandoned = 'abandoned';
    case Active = 'active';
    case Ended = 'ended';
    case Expired = 'expired';
    case Removed = 'removed';
    case Replaced = 'replaced';
    case Revoked = 'revoked';
}
