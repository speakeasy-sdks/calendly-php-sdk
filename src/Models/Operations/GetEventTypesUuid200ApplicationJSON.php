<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class GetEventTypesUuid200ApplicationJSON
{
    #[\JMS\Serializer\Annotation\SerializedName('resource')]
    #[\JMS\Serializer\Annotation\Type('calendly\calendly\Models\Shared\EventType')]
    public \calendly\calendly\Models\Shared\EventType $resource;
    
	public function __construct()
	{
		$this->resource = new \calendly\calendly\Models\Shared\EventType();
	}
}
