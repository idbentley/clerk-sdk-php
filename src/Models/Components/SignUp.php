<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Components;


class SignUp
{
    #[\JMS\Serializer\Annotation\SerializedName('object')]
    #[\JMS\Serializer\Annotation\Type('enum<Clerk\Backend\Models\Components\SignUpObject>')]
    public SignUpObject $object;

    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $id;

    #[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('enum<Clerk\Backend\Models\Components\SignUpStatus>')]
    public SignUpStatus $status;

    /**
     * $requiredFields
     *
     * @var ?array<string> $requiredFields
     */
    #[\JMS\Serializer\Annotation\SerializedName('required_fields')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $requiredFields = null;

    /**
     * $optionalFields
     *
     * @var ?array<string> $optionalFields
     */
    #[\JMS\Serializer\Annotation\SerializedName('optional_fields')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $optionalFields = null;

    /**
     * $missingFields
     *
     * @var ?array<string> $missingFields
     */
    #[\JMS\Serializer\Annotation\SerializedName('missing_fields')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $missingFields = null;

    /**
     * $unverifiedFields
     *
     * @var ?array<string> $unverifiedFields
     */
    #[\JMS\Serializer\Annotation\SerializedName('unverified_fields')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $unverifiedFields = null;

    #[\JMS\Serializer\Annotation\SerializedName('verifications')]
    #[\JMS\Serializer\Annotation\Type('Clerk\Backend\Models\Components\Verifications')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Verifications $verifications = null;

    #[\JMS\Serializer\Annotation\SerializedName('username')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $username = null;

    #[\JMS\Serializer\Annotation\SerializedName('email_address')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $emailAddress = null;

    #[\JMS\Serializer\Annotation\SerializedName('phone_number')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $phoneNumber = null;

    #[\JMS\Serializer\Annotation\SerializedName('web3_wallet')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $web3Wallet = null;

    #[\JMS\Serializer\Annotation\SerializedName('password_enabled')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $passwordEnabled;

    #[\JMS\Serializer\Annotation\SerializedName('first_name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $firstName = null;

    #[\JMS\Serializer\Annotation\SerializedName('last_name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $lastName = null;

    #[\JMS\Serializer\Annotation\SerializedName('unsafe_metadata')]
    #[\JMS\Serializer\Annotation\Type('Clerk\Backend\Models\Components\SignUpUnsafeMetadata')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?SignUpUnsafeMetadata $unsafeMetadata = null;

    #[\JMS\Serializer\Annotation\SerializedName('public_metadata')]
    #[\JMS\Serializer\Annotation\Type('Clerk\Backend\Models\Components\SignUpPublicMetadata')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?SignUpPublicMetadata $publicMetadata = null;

    #[\JMS\Serializer\Annotation\SerializedName('custom_action')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $customAction;

    #[\JMS\Serializer\Annotation\SerializedName('external_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $externalId = null;

    #[\JMS\Serializer\Annotation\SerializedName('created_session_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $createdSessionId = null;

    #[\JMS\Serializer\Annotation\SerializedName('created_user_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $createdUserId = null;

    #[\JMS\Serializer\Annotation\SerializedName('abandon_at')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $abandonAt;

    #[\JMS\Serializer\Annotation\SerializedName('external_account')]
    #[\JMS\Serializer\Annotation\Type('Clerk\Backend\Models\Components\ExternalAccount')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ExternalAccount $externalAccount = null;

    public function __construct()
    {
        $this->object = \Clerk\Backend\Models\Components\SignUpObject::SignUpAttempt;
        $this->id = '';
        $this->status = \Clerk\Backend\Models\Components\SignUpStatus::MissingRequirements;
        $this->requiredFields = null;
        $this->optionalFields = null;
        $this->missingFields = null;
        $this->unverifiedFields = null;
        $this->verifications = null;
        $this->username = null;
        $this->emailAddress = null;
        $this->phoneNumber = null;
        $this->web3Wallet = null;
        $this->passwordEnabled = false;
        $this->firstName = null;
        $this->lastName = null;
        $this->unsafeMetadata = null;
        $this->publicMetadata = null;
        $this->customAction = false;
        $this->externalId = null;
        $this->createdSessionId = null;
        $this->createdUserId = null;
        $this->abandonAt = 0;
        $this->externalAccount = null;
    }
}