<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


/**
 * SubmissionCustomMessageResult
 * Information about the custom message Routing Form Submission result.
 */
class SubmissionCustomMessageResult
{
    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Shared\SubmissionCustomMessageResultTypeEnum>')]
    public SubmissionCustomMessageResultTypeEnum $type;
    
    #[\JMS\Serializer\Annotation\SerializedName('value')]
    #[\JMS\Serializer\Annotation\Type('calendly\calendly\Models\Shared\SubmissionCustomMessageResultValue')]
    public SubmissionCustomMessageResultValue $value;
    
	public function __construct()
	{
		$this->type = \calendly\calendly\Models\Shared\SubmissionCustomMessageResultTypeEnum::CUSTOM_MESSAGE;
		$this->value = new \calendly\calendly\Models\Shared\SubmissionCustomMessageResultValue();
	}
}
