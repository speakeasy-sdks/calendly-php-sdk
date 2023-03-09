<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class PostScheduledEventsUuidCancellationMultipart403ApplicationJSON
{
    #[\JMS\Serializer\Annotation\SerializedName('message')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Operations\PostScheduledEventsUuidCancellationMultipart403ApplicationJSONMessageEnum>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PostScheduledEventsUuidCancellationMultipart403ApplicationJSONMessageEnum $message = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('title')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Operations\PostScheduledEventsUuidCancellationMultipart403ApplicationJSONTitleEnum>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PostScheduledEventsUuidCancellationMultipart403ApplicationJSONTitleEnum $title = null;
    
	public function __construct()
	{
		$this->message = null;
		$this->title = null;
	}
}
