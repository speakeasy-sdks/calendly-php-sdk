<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class GetScheduledEventsUuid403ApplicationJSON
{
    #[\JMS\Serializer\Annotation\SerializedName('message')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Operations\GetScheduledEventsUuid403ApplicationJSONMessageEnum>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?GetScheduledEventsUuid403ApplicationJSONMessageEnum $message = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('title')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Operations\GetScheduledEventsUuid403ApplicationJSONTitleEnum>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?GetScheduledEventsUuid403ApplicationJSONTitleEnum $title = null;
    
	public function __construct()
	{
		$this->message = null;
		$this->title = null;
	}
}
