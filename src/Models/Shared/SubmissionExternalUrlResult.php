<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


/**
 * SubmissionExternalUrlResult
 * Information about the external URL Routing Form Submission result.
 */
class SubmissionExternalUrlResult
{
    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Shared\SubmissionExternalUrlResultTypeEnum>')]
    public SubmissionExternalUrlResultTypeEnum $type;
    
    #[\JMS\Serializer\Annotation\SerializedName('value')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $value;
    
	public function __construct()
	{
		$this->type = \calendly\calendly\Models\Shared\SubmissionExternalUrlResultTypeEnum::EXTERNAL_URL;
		$this->value = "";
	}
}
