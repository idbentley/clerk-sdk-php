<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Operations;

use Clerk\Backend\Utils\SpeakeasyMetadata;
class GetTemplateListRequest
{
    /**
     * The type of templates to list (email or SMS)
     *
     * @var TemplateType $templateType
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=template_type')]
    public TemplateType $templateType;

    /**
     * @param  TemplateType  $templateType
     * @phpstan-pure
     */
    public function __construct(TemplateType $templateType)
    {
        $this->templateType = $templateType;
    }
}