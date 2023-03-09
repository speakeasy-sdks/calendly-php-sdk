<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;

use \calendly\calendly\Utils\SpeakeasyMetadata;

class ActivityLogQueryParams
{
    /**
     * @var ?array<string>
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=action')]
    public ?array $action = null;
    
    /**
     * @var ?array<string>
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=actor')]
    public ?array $actor = null;
    
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=count')]
    public ?int $count = null;
    
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=max_occurred_at,dateTimeFormat=Y-m-d\TH:i:s.up')]
    public ?\DateTime $maxOccurredAt = null;
    
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=min_occurred_at,dateTimeFormat=Y-m-d\TH:i:s.up')]
    public ?\DateTime $minOccurredAt = null;
    
    /**
     * @var ?array<string>
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=namespace')]
    public ?array $namespace = null;
    
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=organization')]
    public string $organization;
    
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=page_token')]
    public ?string $pageToken = null;
    
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=search_term')]
    public ?string $searchTerm = null;
    
    /**
     * @var ?array<\calendly\calendly\Models\Operations\ActivityLogSortEnum>
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=sort')]
    public ?array $sort = null;
    
	public function __construct()
	{
		$this->action = null;
		$this->actor = null;
		$this->count = null;
		$this->maxOccurredAt = null;
		$this->minOccurredAt = null;
		$this->namespace = null;
		$this->organization = "";
		$this->pageToken = null;
		$this->searchTerm = null;
		$this->sort = null;
	}
}
