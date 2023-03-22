<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


/**
 * SubmissionEventTypeResult - Information about the event type Routing Form Submission result.
 * 
 * @package calendly\calendly\Models\Shared
 * @access public
 */
class SubmissionEventTypeResult
{
    /**
     * Indicates that the routing form submission resulted in a redirect to an event type booking page.
     * 
     * @var \calendly\calendly\Models\Shared\SubmissionEventTypeResultTypeEnum $type
     */
	#[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Shared\SubmissionEventTypeResultTypeEnum>')]
    public SubmissionEventTypeResultTypeEnum $type;
    
    /**
     * A reference to the event type resource.
     * 
     * @var string $value
     */
	#[\JMS\Serializer\Annotation\SerializedName('value')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $value;
    
	public function __construct()
	{
		$this->type = \calendly\calendly\Models\Shared\SubmissionEventTypeResultTypeEnum::EVENT_TYPE;
		$this->value = "";
	}
}
