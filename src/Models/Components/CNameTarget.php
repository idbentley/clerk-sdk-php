<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Components;


class CNameTarget
{
    #[\JMS\Serializer\Annotation\SerializedName('host')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $host;

    #[\JMS\Serializer\Annotation\SerializedName('value')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $value;

    /**
     * Denotes whether this CNAME target is required to be set in order for the domain to be considered deployed.
     *
     *
     *
     * @var bool $required
     */
    #[\JMS\Serializer\Annotation\SerializedName('required')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $required;

    public function __construct()
    {
        $this->host = '';
        $this->value = '';
        $this->required = false;
    }
}