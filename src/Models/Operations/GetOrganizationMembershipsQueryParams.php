<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;

use \calendly\calendly\Utils\SpeakeasyMetadata;

class GetOrganizationMembershipsQueryParams
{
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=count')]
    public ?float $count = null;
    
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=email')]
    public ?string $email = null;
    
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=organization')]
    public ?string $organization = null;
    
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=page_token')]
    public ?string $pageToken = null;
    
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=user')]
    public ?string $user = null;
    
	public function __construct()
	{
		$this->count = null;
		$this->email = null;
		$this->organization = null;
		$this->pageToken = null;
		$this->user = null;
	}
}
