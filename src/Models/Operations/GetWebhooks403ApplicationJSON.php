<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class GetWebhooks403ApplicationJSON
{
    #[\JMS\Serializer\Annotation\SerializedName('message')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Operations\GetWebhooks403ApplicationJSONMessageEnum>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?GetWebhooks403ApplicationJSONMessageEnum $message = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('title')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Operations\GetWebhooks403ApplicationJSONTitleEnum>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?GetWebhooks403ApplicationJSONTitleEnum $title = null;
    
	public function __construct()
	{
		$this->message = null;
		$this->title = null;
	}
}
