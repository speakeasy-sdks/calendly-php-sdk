<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class GetUserAvailabilitySchedulesUuid200ApplicationJSON
{
    #[\JMS\Serializer\Annotation\SerializedName('resource')]
    #[\JMS\Serializer\Annotation\Type('calendly\calendly\Models\Shared\AvailabilitySchedule')]
    public \calendly\calendly\Models\Shared\AvailabilitySchedule $resource;
    
	public function __construct()
	{
		$this->resource = new \calendly\calendly\Models\Shared\AvailabilitySchedule();
	}
}
