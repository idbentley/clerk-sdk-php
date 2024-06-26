<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Operations;


/** PreviewTemplateRequestBody - Required parameters */
class PreviewTemplateRequestBody
{
    /**
     * The email subject.
     *
     * Applicable only to email templates.
     *
     * @var ?string $subject
     */
    #[\JMS\Serializer\Annotation\SerializedName('subject')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $subject = null;

    /**
     * The template body before variable interpolation
     *
     * @var ?string $body
     */
    #[\JMS\Serializer\Annotation\SerializedName('body')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $body = null;

    /**
     * The local part of the From email address that will be used for emails.
     *
     * For example, in the address 'hello@example.com', the local part is 'hello'.
     * Applicable only to email templates.
     *
     * @var ?string $fromEmailName
     */
    #[\JMS\Serializer\Annotation\SerializedName('from_email_name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $fromEmailName = null;

    /**
     * The local part of the Reply To email address that will be used for emails.
     *
     * For example, in the address 'hello@example.com', the local part is 'hello'.
     * Applicable only to email templates.
     *
     * @var ?string $replyToEmailName
     */
    #[\JMS\Serializer\Annotation\SerializedName('reply_to_email_name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $replyToEmailName = null;

    public function __construct()
    {
        $this->subject = null;
        $this->body = null;
        $this->fromEmailName = null;
        $this->replyToEmailName = null;
    }
}