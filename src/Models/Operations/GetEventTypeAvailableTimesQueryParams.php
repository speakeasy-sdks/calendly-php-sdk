<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;

use \calendly\calendly\Utils\SpeakeasyMetadata;

class GetEventTypeAvailableTimesQueryParams
{
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=end_time')]
    public ?string $endTime = null;
    
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=event_type')]
    public ?string $eventType = null;
    
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=start_time')]
    public ?string $startTime = null;
    
	public function __construct()
	{
		$this->endTime = null;
		$this->eventType = null;
		$this->startTime = null;
	}
}
