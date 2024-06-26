<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Operations;


class UpdatePhoneNumberRequestBody
{
    /**
     * The phone number will be marked as verified.
     *
     * @var ?bool $verified
     */
    #[\JMS\Serializer\Annotation\SerializedName('verified')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $verified = null;

    /**
     * Set this phone number as the primary phone number for the user.
     *
     * @var ?bool $primary
     */
    #[\JMS\Serializer\Annotation\SerializedName('primary')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $primary = null;

    /**
     * Set this phone number as reserved for multi-factor authentication.
     *
     * The phone number must also be verified.
     * If there are no other reserved second factors, the phone number will be set as the default second factor.
     *
     * @var ?bool $reservedForSecondFactor
     */
    #[\JMS\Serializer\Annotation\SerializedName('reserved_for_second_factor')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $reservedForSecondFactor = null;

    public function __construct()
    {
        $this->verified = null;
        $this->primary = null;
        $this->reservedForSecondFactor = null;
    }
}