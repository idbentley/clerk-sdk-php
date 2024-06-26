<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Components;


class TotalCount
{
    /**
     * String representing the object's type. Objects of the same type share the same value.
     *
     *
     *
     * @var \Clerk\Backend\Models\Components\TotalCountObject $object
     */
    #[\JMS\Serializer\Annotation\SerializedName('object')]
    #[\JMS\Serializer\Annotation\Type('enum<Clerk\Backend\Models\Components\TotalCountObject>')]
    public TotalCountObject $object;

    #[\JMS\Serializer\Annotation\SerializedName('total_count')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $totalCount;

    public function __construct()
    {
        $this->object = \Clerk\Backend\Models\Components\TotalCountObject::TotalCount;
        $this->totalCount = 0;
    }
}