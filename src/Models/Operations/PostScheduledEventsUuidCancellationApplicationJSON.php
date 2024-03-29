<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;


/**
 * PostScheduledEventsUuidCancellationApplicationJSON - Optional cancellation reason.
 * 
 * @package calendly\calendly\Models\Operations
 * @access public
 */
class PostScheduledEventsUuidCancellationApplicationJSON
{
    /**
     * Reason for cancellation
     * 
     * @var ?string $reason
     */
	#[\JMS\Serializer\Annotation\SerializedName('reason')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $reason = null;
    
	public function __construct()
	{
		$this->reason = null;
	}
}
