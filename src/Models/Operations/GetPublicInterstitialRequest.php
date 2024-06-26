<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Operations;

use Clerk\Backend\Utils\SpeakeasyMetadata;
class GetPublicInterstitialRequest
{
    /**
     * The Frontend API key of your instance
     *
     * @var ?string $frontendApi
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=frontendApi')]
    public ?string $frontendApi = null;

    /**
     * The publishable key of your instance
     *
     * @var ?string $publishableKey
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=publishable_key')]
    public ?string $publishableKey = null;

    public function __construct()
    {
        $this->frontendApi = null;
        $this->publishableKey = null;
    }
}