<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Components;


class PublicOrganizationData
{
    /**
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     *
     * @var ?string $slug
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('slug')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $slug = null;

    /**
     *
     * @var ?string $imageUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('image_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $imageUrl = null;

    /**
     *
     * @var ?bool $hasImage
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('has_image')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $hasImage = null;

    /**
     * @param  ?string  $id
     * @param  ?string  $name
     * @param  ?string  $slug
     * @param  ?string  $imageUrl
     * @param  ?bool  $hasImage
     * @phpstan-pure
     */
    public function __construct(?string $id = null, ?string $name = null, ?string $slug = null, ?string $imageUrl = null, ?bool $hasImage = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->slug = $slug;
        $this->imageUrl = $imageUrl;
        $this->hasImage = $hasImage;
    }
}