<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;


/**
 * GetEventTypes200ApplicationJSON
 * Service response
 */
class GetEventTypes200ApplicationJSON
{
    /**
     * @var array<\calendly\calendly\Models\Shared\EventType>
     */
    #[\JMS\Serializer\Annotation\SerializedName('collection')]
    #[\JMS\Serializer\Annotation\Type('array<calendly\calendly\Models\Shared\EventType>')]
    public array $collection;
    
    #[\JMS\Serializer\Annotation\SerializedName('pagination')]
    #[\JMS\Serializer\Annotation\Type('calendly\calendly\Models\Shared\Pagination')]
    public \calendly\calendly\Models\Shared\Pagination $pagination;
    
	public function __construct()
	{
		$this->collection = [];
		$this->pagination = new \calendly\calendly\Models\Shared\Pagination();
	}
}
