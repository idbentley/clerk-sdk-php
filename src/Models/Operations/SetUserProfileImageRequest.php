<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Operations;

use Clerk\Backend\Utils\SpeakeasyMetadata;
class SetUserProfileImageRequest
{
    /**
     * The ID of the user to update the profile image for
     *
     * @var string $userId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=user_id')]
    public string $userId;

    #[SpeakeasyMetadata('request:mediaType=multipart/form-data')]
    public SetUserProfileImageRequestBody $requestBody;

    public function __construct()
    {
        $this->userId = '';
        $this->requestBody = new \Clerk\Backend\Models\Operations\SetUserProfileImageRequestBody();
    }
}