<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;


/**
 * GetUserBusyTimes200ApplicationJSON
 * Service Response
 */
class GetUserBusyTimes200ApplicationJSON
{
    /**
     * @var array<\calendly\calendly\Models\Shared\UserBusyTime>
     */
    #[\JMS\Serializer\Annotation\SerializedName('collection')]
    #[\JMS\Serializer\Annotation\Type('array<calendly\calendly\Models\Shared\UserBusyTime>')]
    public array $collection;
    
	public function __construct()
	{
		$this->collection = [];
	}
}
