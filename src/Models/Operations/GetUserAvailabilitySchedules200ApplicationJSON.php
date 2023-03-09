<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class GetUserAvailabilitySchedules200ApplicationJSON
{
    /**
     * @var array<\calendly\calendly\Models\Shared\AvailabilitySchedule>
     */
    #[\JMS\Serializer\Annotation\SerializedName('collection')]
    #[\JMS\Serializer\Annotation\Type('array<calendly\calendly\Models\Shared\AvailabilitySchedule>')]
    public array $collection;
    
	public function __construct()
	{
		$this->collection = [];
	}
}
