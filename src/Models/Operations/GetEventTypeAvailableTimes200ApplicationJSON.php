<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;


/**
 * GetEventTypeAvailableTimes200ApplicationJSON - Service Response
 * 
 * @package calendly\calendly\Models\Operations
 * @access public
 */
class GetEventTypeAvailableTimes200ApplicationJSON
{
    /**
     * The set of available times for the event type matching the criteria
     * 
     * @var array<\calendly\calendly\Models\Shared\EventTypeAvailableTime> $collection
     */
	#[\JMS\Serializer\Annotation\SerializedName('collection')]
    #[\JMS\Serializer\Annotation\Type('array<calendly\calendly\Models\Shared\EventTypeAvailableTime>')]
    public array $collection;
    
	public function __construct()
	{
		$this->collection = [];
	}
}
