<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;

use \calendly\calendly\Utils\SpeakeasyMetadata;

class GetEventTypesQueryParams
{
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=active')]
    public ?bool $active = null;
    
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=admin_managed')]
    public ?bool $adminManaged = null;
    
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=count')]
    public ?float $count = null;
    
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=organization')]
    public ?string $organization = null;
    
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=page_token')]
    public ?string $pageToken = null;
    
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=sort')]
    public ?string $sort = null;
    
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=user')]
    public ?string $user = null;
    
	public function __construct()
	{
		$this->active = null;
		$this->adminManaged = null;
		$this->count = null;
		$this->organization = null;
		$this->pageToken = null;
		$this->sort = null;
		$this->user = null;
	}
}
