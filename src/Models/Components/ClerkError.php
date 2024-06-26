<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Components;


class ClerkError
{
    #[\JMS\Serializer\Annotation\SerializedName('message')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $message;

    #[\JMS\Serializer\Annotation\SerializedName('long_message')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $longMessage;

    #[\JMS\Serializer\Annotation\SerializedName('code')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $code;

    #[\JMS\Serializer\Annotation\SerializedName('meta')]
    #[\JMS\Serializer\Annotation\Type('Clerk\Backend\Models\Components\Meta')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Meta $meta = null;

    #[\JMS\Serializer\Annotation\SerializedName('clerk_trace_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $clerkTraceId = null;

    public function __construct()
    {
        $this->message = '';
        $this->longMessage = '';
        $this->code = '';
        $this->meta = null;
        $this->clerkTraceId = null;
    }
}