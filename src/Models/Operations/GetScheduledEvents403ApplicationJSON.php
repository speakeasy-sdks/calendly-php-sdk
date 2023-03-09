<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class GetScheduledEvents403ApplicationJSON
{
    #[\JMS\Serializer\Annotation\SerializedName('message')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Operations\GetScheduledEvents403ApplicationJSONMessageEnum>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?GetScheduledEvents403ApplicationJSONMessageEnum $message = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('title')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Operations\GetScheduledEvents403ApplicationJSONTitleEnum>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?GetScheduledEvents403ApplicationJSONTitleEnum $title = null;
    
	public function __construct()
	{
		$this->message = null;
		$this->title = null;
	}
}
