<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;


/**
 * GetEventTypeAvailableTimes200ApplicationJSON
 * Service Response
 */
class GetEventTypeAvailableTimes200ApplicationJSON
{
    /**
     * @var array<\calendly\calendly\Models\Shared\EventTypeAvailableTime>
     */
    #[\JMS\Serializer\Annotation\SerializedName('collection')]
    #[\JMS\Serializer\Annotation\Type('array<calendly\calendly\Models\Shared\EventTypeAvailableTime>')]
    public array $collection;
    
	public function __construct()
	{
		$this->collection = [];
	}
}
