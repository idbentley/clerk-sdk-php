<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Components;


enum SignUpStatus: string
{
    case MissingRequirements = 'missing_requirements';
    case Complete = 'complete';
    case Abandoned = 'abandoned';
}
