<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;

use \calendly\calendly\Utils\SpeakeasyMetadata;

class GetScheduledEventsQueryParams
{
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=count')]
    public ?float $count = null;
    
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=invitee_email')]
    public ?string $inviteeEmail = null;
    
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=max_start_time')]
    public ?string $maxStartTime = null;
    
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=min_start_time')]
    public ?string $minStartTime = null;
    
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=organization')]
    public ?string $organization = null;
    
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=page_token')]
    public ?string $pageToken = null;
    
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=sort')]
    public ?string $sort = null;
    
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=status')]
    public ?GetScheduledEventsStatusEnum $status = null;
    
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=user')]
    public ?string $user = null;
    
	public function __construct()
	{
		$this->count = null;
		$this->inviteeEmail = null;
		$this->maxStartTime = null;
		$this->minStartTime = null;
		$this->organization = null;
		$this->pageToken = null;
		$this->sort = null;
		$this->status = null;
		$this->user = null;
	}
}
