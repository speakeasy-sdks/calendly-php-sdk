<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;


/**
 * ActivityLog200ApplicationJSON
 * Activity log response
 */
class ActivityLog200ApplicationJSON
{
    /**
     * @var array<\calendly\calendly\Models\Shared\Entry>
     */
    #[\JMS\Serializer\Annotation\SerializedName('collection')]
    #[\JMS\Serializer\Annotation\Type('array<calendly\calendly\Models\Shared\Entry>')]
    public array $collection;
    
    #[\JMS\Serializer\Annotation\SerializedName('exceeds_max_total_count')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $exceedsMaxTotalCount;
    
    #[\JMS\Serializer\Annotation\SerializedName('last_event_time')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $lastEventTime = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('pagination')]
    #[\JMS\Serializer\Annotation\Type('calendly\calendly\Models\Shared\Pagination')]
    public \calendly\calendly\Models\Shared\Pagination $pagination;
    
    #[\JMS\Serializer\Annotation\SerializedName('total_count')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $totalCount;
    
	public function __construct()
	{
		$this->collection = [];
		$this->exceedsMaxTotalCount = false;
		$this->lastEventTime = null;
		$this->pagination = new \calendly\calendly\Models\Shared\Pagination();
		$this->totalCount = 0;
	}
}
