<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Components;


/** Instance - Success */
class Instance
{
    /**
     * String representing the object's type. Objects of the same type share the same value.
     *
     * @var ?InstanceObject $object
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('object')]
    #[\Speakeasy\Serializer\Annotation\Type('\Clerk\Backend\Models\Components\InstanceObject|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?InstanceObject $object = null;

    /**
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     *
     * @var ?string $environmentType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('environment_type')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $environmentType = null;

    /**
     * $allowedOrigins
     *
     * @var ?array<string> $allowedOrigins
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('allowed_origins')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $allowedOrigins = null;

    /**
     * @param  ?InstanceObject  $object
     * @param  ?string  $id
     * @param  ?string  $environmentType
     * @param  ?array<string>  $allowedOrigins
     * @phpstan-pure
     */
    public function __construct(?InstanceObject $object = null, ?string $id = null, ?string $environmentType = null, ?array $allowedOrigins = null)
    {
        $this->object = $object;
        $this->id = $id;
        $this->environmentType = $environmentType;
        $this->allowedOrigins = $allowedOrigins;
    }
}