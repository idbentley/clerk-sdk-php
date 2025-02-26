<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
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

    /**
     *
     * @var SetUserProfileImageRequestBody $requestBody
     */
    #[SpeakeasyMetadata('request:mediaType=multipart/form-data')]
    public SetUserProfileImageRequestBody $requestBody;

    /**
     * @param  string  $userId
     * @param  SetUserProfileImageRequestBody  $requestBody
     * @phpstan-pure
     */
    public function __construct(string $userId, SetUserProfileImageRequestBody $requestBody)
    {
        $this->userId = $userId;
        $this->requestBody = $requestBody;
    }
}