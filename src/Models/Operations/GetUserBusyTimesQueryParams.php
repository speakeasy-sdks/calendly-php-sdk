<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;

use \calendly\calendly\Utils\SpeakeasyMetadata;

class GetUserBusyTimesQueryParams
{
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=end_time')]
    public string $endTime;
    
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=start_time')]
    public string $startTime;
    
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=user')]
    public string $user;
    
	public function __construct()
	{
		$this->endTime = "";
		$this->startTime = "";
		$this->user = "";
	}
}
