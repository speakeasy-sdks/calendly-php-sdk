<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;


/**
 * GetUserBusyTimes200ApplicationJSON - Service Response
 * 
 * @package calendly\calendly\Models\Operations
 * @access public
 */
class GetUserBusyTimes200ApplicationJSON
{
    /**
     * The set of internal and external scheduled calendar events matching the criteria
     * 
     * @var array<\calendly\calendly\Models\Shared\UserBusyTime> $collection
     */
	#[\JMS\Serializer\Annotation\SerializedName('collection')]
    #[\JMS\Serializer\Annotation\Type('array<calendly\calendly\Models\Shared\UserBusyTime>')]
    public array $collection;
    
	public function __construct()
	{
		$this->collection = [];
	}
}
