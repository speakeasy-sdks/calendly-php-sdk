<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


/**
 * SubmissionEventTypeResult
 * Information about the event type Routing Form Submission result.
 */
class SubmissionEventTypeResult
{
    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Shared\SubmissionEventTypeResultTypeEnum>')]
    public SubmissionEventTypeResultTypeEnum $type;
    
    #[\JMS\Serializer\Annotation\SerializedName('value')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $value;
    
	public function __construct()
	{
		$this->type = \calendly\calendly\Models\Shared\SubmissionEventTypeResultTypeEnum::EVENT_TYPE;
		$this->value = "";
	}
}
