<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Operations;

use Clerk\Backend\Utils\SpeakeasyMetadata;
class SetUserProfileImageRequestBody
{
    #[SpeakeasyMetadata('multipartForm:file=true')]
    public ?File $file = null;

    public function __construct()
    {
        $this->file = null;
    }
}