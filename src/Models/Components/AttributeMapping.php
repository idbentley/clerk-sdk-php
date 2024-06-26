<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Components;


class AttributeMapping
{
    #[\JMS\Serializer\Annotation\SerializedName('user_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $userId = null;

    #[\JMS\Serializer\Annotation\SerializedName('email_address')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $emailAddress = null;

    #[\JMS\Serializer\Annotation\SerializedName('first_name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $firstName = null;

    #[\JMS\Serializer\Annotation\SerializedName('last_name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $lastName = null;

    public function __construct()
    {
        $this->userId = null;
        $this->emailAddress = null;
        $this->firstName = null;
        $this->lastName = null;
    }
}