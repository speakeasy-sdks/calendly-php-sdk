<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;


/**
 * PostScheduledEventsUuidCancellationRaw403ApplicationJSON - Caller not authorized to perform this action
 * 
 * @package calendly\calendly\Models\Operations
 * @access public
 */
class PostScheduledEventsUuidCancellationRaw403ApplicationJSON
{
	#[\JMS\Serializer\Annotation\SerializedName('message')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Operations\PostScheduledEventsUuidCancellationRaw403ApplicationJSONMessageEnum>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PostScheduledEventsUuidCancellationRaw403ApplicationJSONMessageEnum $message = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('title')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Operations\PostScheduledEventsUuidCancellationRaw403ApplicationJSONTitleEnum>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PostScheduledEventsUuidCancellationRaw403ApplicationJSONTitleEnum $title = null;
    
	public function __construct()
	{
		$this->message = null;
		$this->title = null;
	}
}
